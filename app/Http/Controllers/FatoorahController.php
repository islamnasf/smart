<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CartItem;
use App\Models\Course;
use App\Models\Order;
use App\Models\OrderPayment;
use App\Models\Package;
use App\Models\UserCourse;
use App\Models\UserPackage;
use App\Services\FatoorahServices;
use GuzzleHttp\Client;

class FatoorahController extends Controller
{
    public function checkout(Request $request)
    {
        $callbackURL = route('myfatoorah.callback');

        $cart = CartItem::where("user_id", Auth::user()->id)->get();
        $sumPrice = $cart->sum("price");

        if ($sumPrice !== 0) {
            foreach ($cart as $item) {
                // Use updateOrCreate to create or update the order
                Order::updateOrCreate(
                    ['cart_items_id' => $item->id],
                    [
                        'total_price' => $sumPrice,
                        'status' => 'false',
                    ]
                );
            }

            // Inject the Guzzle Client into FatoorahServices constructor
            $fatoorahServices = new FatoorahServices(new Client());

            $data = [
                "CustomerName" => Auth::user()->name,
                "NotificationOption" => "LNK", // Make sure this value is correct
                "Invoicevalue" => $sumPrice,
                "CalLBackUrl" => route('callback'),
                "Errorurl" => $callbackURL,
                'MobileCountryCode' => '+965',
                'CustomerMobile' => Auth::user()->phone,
                'Language' => 'ar',
                "DisplayCurrencyIna" => 'KWT',
            ];

            $response = $fatoorahServices->sendPayment($data);

            if (isset($response['IsSuccess']) && $response['IsSuccess'] == true) {
                OrderPayment::create([
                    'InvoiceId'  => $response['Data']['InvoiceId'],
                    'InvoiceURL' => $response['Data']['InvoiceURL'],
                    'customer_id' => Auth::user()->id,
                    'price' => $sumPrice,
                ]);

                return redirect($response['Data']['InvoiceURL']);
            }
        }

        toastr()->error('غير موجود حالياً');
        return redirect()->route('dashboard');
    }

    public function callback(Request $request)
    {
        $fatoorahServices = new FatoorahServices(new Client());
        $apiKey = 'rLtt6JWvbUHDDhsZnfpAhpYk4dxYDQkbcPTyGaKp2TYqQgG7FGZ5Th_WD53Oq8Ebz6A53njUoo1w3pjU1D4vs_ZMqFiz_j0urb_BH9Oq9VZoKFoJEDAbRZepGcQanImyYrry7Kt6MnMdgfG5jn4HngWoRdKduNNyP4kzcp3mRv7x00ahkm9LAK7ZRieg7k1PDAnBIOG3EyVSJ5kK4WLMvYr7sCwHbHcu4A5WwelxYK0GMJy37bNAarSJDFQsJ2ZvJjvMDmfWwDVFEVe_5tOomfVNt6bOg9mexbGjMrnHBnKnZR1vQbBtQieDlQepzTZMuQrSuKn-t5XZM7V6fCW7oP-uXGX-sMOajeX65JOf6XVpk29DP6ro8WTAflCDANC193yof8-f5_EYY-3hXhJj7RBXmizDpneEQDSaSz5sFk0sV5qPcARJ9zGG73vuGFyenjPPmtDtXtpx35A-BVcOSBYVIWe9kndG3nclfefjKEuZ3m4jL9Gg1h2JBvmXSMYiZtp9MR5I6pvbvylU_PP5xJFSjVTIz7IQSjcVGO41npnwIxRXNRxFOdIUHn0tjQ-7LwvEcTXyPsHXcMD8WtgBh-wxR8aKX7WPSsT1O8d8reb2aR7K3rkV3K82K_0OgawImEpwSvp9MNKynEAJQS6ZHe_J_l77652xwPNxMRTMASk1ZsJL'; // استبدله بمفتاح API الخاص بك
        $postFields = [
            'Key'     => $request->paymentId,
            'KeyType' => 'paymentId'
        ];
        
        $response = $fatoorahServices->callAPI("https://apitest.myfatoorah.com/v2/getPaymentStatus", $apiKey, $postFields);
        $response = json_decode($response);
        
        if (!isset($response->Data->InvoiceId)) {
            return response()->json(["error" => 'error', 'status' => false], 404);
        }
        
        $payment = OrderPayment::where(['InvoiceId' => $response->Data->InvoiceId])->first();
        
        if ($response->IsSuccess == true && $response->Data->InvoiceStatus == "Paid" && $payment->price == $response->Data->InvoiceValue) {
            $payment->InvoiceStatus = "Paid";
            $payment->IsSuccess = true;
            $payment->TransactionDate = $response->Data->CreatedDate;
            $payment->save();
        
            $cart = CartItem::where("user_id", Auth::user()->id)->get();
            $sumPrice = $cart->sum("price");
    
            if ($sumPrice !== 0) {
                foreach ($cart as $item) {
                    // Use updateOrCreate to create or update the order
                    Order::updateOrCreate(
                        ['cart_items_id' => $item->id],
                        [
                            'total_price' => $sumPrice,
                            'status' => 'true',
                        ]
                    );
    
                    $course = Course::find($item->course_id);
                    $package = Package::find($item->package_id);
    
                    if ($item->course_id != null && $item->price == $course->monthly_subscription_price) {
                        UserCourse::create([
                            "user_id" => $item->user_id,
                            "course_id" => $item->course_id,
                            "price" => $item->price,
                            "student_name" => Auth::user()->name,
                            "subscrip_type" => "اشتراك شهري"
                        ]);
                    } elseif ($item->course_id != null && $item->price == $course->term_price) {
                        UserCourse::create([
                            "user_id" => $item->user_id,
                            "course_id" => $item->course_id,
                            "price" => $item->price,
                            "student_name" => Auth::user()->name,
                            "subscrip_type" => "اشتراك ترم"
                        ]);
                    } elseif ($item->package_id != null) {
                        $userpackage = UserPackage::create([
                            "user_id" => $item->user_id,
                            "package_id" => $item->package_id,
                            "price" => $item->price,
                            "student_name" => Auth::user()->name,
                            "subscrip_type" => $package->package_type
                        ]);
    
                        $packages = Package::where('id', $userpackage->package_id)->first();
                        $count = $package->course->count();
    
                        foreach ($packages->course as $package) {
                            UserCourse::create([
                                "user_id" => $item->user_id,
                                "course_id" => $package->id,
                                "price" => $item->price / $count,
                                "student_name" => Auth::user()->name,
                                "subscrip_type" => $packages->package_type
                            ]);
                        }
                    }
                }
                CartItem::where("user_id", Auth::user()->id)->delete();
                toastr()->success(' نجح الدفع ');
                return redirect()->route('dashboard');
            }
        }
        
        toastr()->error(' مشكلة في الدفع ');
        return redirect()->route('dashboard');
    }
}
