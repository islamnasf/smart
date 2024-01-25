<?php

namespace App\Http\Controllers;

use App\Services\FatoorahServices;
use Illuminate\Http\Request;

class FatoorahController
{
    public function checkout($name, $price)
    {

        $fatoorahServices = new FatoorahServices();
        $data = [
            "CustomerName" => 'customer_name',
            "Notificationoption" => "LNK",
            "Invoicevalue" => $price, // total_price
            "CustomerEmail" => 'customer_email',
            "CalLBackUrl" => 'https://domain.com/callback',
            "Errorurl" => 'https://domain.com/error',
            "Languagn" => 'ar',
            "DisplayCurrencyIna" => 'SAR'
        ];
        $response = $fatoorahServices->sendPayment($data);

        if (isset($response['IsSuccess']))
            if ($response['IsSuccess'] == true) {
                $InvoiceId = $response['Data']['InvoiceId']; // save this id with your order table 
                $InvoiceURL = $response['Data']['InvoiceURL'];
            }
        return redirect($response['Data']['InvoiceURL']); // redirect for this link to view payment page
    }


    public function callback(Request $request)
    {
        $fatoorahServices = new FatoorahServices();

        $apiKey = 'S1rlYUlVdknlOmAeaJDWKwYWd0CzvYDNnVyTd_Zw3oBdD1KUiyrHlY_l9t00blRlcir3zoStVTbqeOYbz_bKpYYNRuUq2aSsBEl0G-e94mRr7mPi7udq1mbpL7ZQ0n4UFM-yITm_9a3vyJ-E2-fLOFeCvUlRjjqpUOdmSjoblx1CxUqtQjqJPuXsjEn07k4CQLYa8jCi0LXWkxasy8yXNQTsTZervKr_HM4KxQAuuk8CQp3HVleBJpOiA-fptzSBTzvXQL3x3QfTJXCWI43olPYOtLfW7BkctBoZ2g2vgN1_4lumYczlE2ZIlzVQvKnyj1HSnDa3SqrN25691nNj59ufoNiZEHPlJmFMm2sIeg1I17bbNtA1vYiSHLnZMs6jpGUaVCpMWKMzMDOAx8ZmIZL1yjrmNjvBODU4LMAOrIqoEBv84F8bI_oOZT6JYRk3raEej8T7PInLeAmOGW1nhu10eYikgg2VZBgxoSmvVpYYLPzJkCdtMA3ZOdDtplrwgNMoqhSoRJn9Ey1s4JBOsxwDA0MCHmEk89GNtFjOZ5-5t87vvSVG9BPG8DFd9ao_AZUtyU-OeEectWFZiWfnroY3Inae7yOYiil1lnQNh35wjTQJUL9ZzoMYNofjNTGn2gPC49na7-jtV8Fhk7Er4R5KAh9nF3Gxrp5wzmhU6o__nDQJ_9iWTFpbzUZ3raz3ssAXyQ';
        $postFields = [
            'Key' => $request->paymentId,
            'KeyType' => 'paymentId'
        ];
        $response = $fatoorahServices->callAPI("https://apitest.myfatoorah.com/v2/getPaymentStatus", $apiKey, $postFields);
        $response = json_decode($response);
        if (!isset($response->Data->InvoiceId))
            return response()->json(["error" => 'error', 'status' => false], 404);
        $InvoiceId = $response->Data->InvoiceId; // get your order by payment_id
        if ($response->IsSuccess == true) {
            if ($response->Data->InvoiceStatus == "Paid") //||$response->Data->InvoiceStatus=='Pending'
                if ($your_order_total_price == $response->Data->InvoiceValue) {

                    /**
                     * 
                     * The payment has been completed successfully. You can change the status of the order
                     * 
                     */

                }
        }

        return response()->json(["error" => 'error', 'status' => false], 404);
    }
}
