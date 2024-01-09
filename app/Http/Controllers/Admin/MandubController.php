<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\MandubBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MandubController extends Controller
{
    public function index()
    {
        $mandubs = user::where('user_type', 'mandub')->get();
        $count = user::where('user_type', 'mandub')->count();
        return view('/admin/book/mandub', compact('mandubs', 'count'));
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => ['required', 'max:255'],
            'phone' => ['required', 'unique:' . User::class, 'digits:8'],
            'password' => ['required'],
        ];
        $customMessages = [
            'name.required' => 'يجب ادخال الاسم   ',
            'phone.required' => 'يجب ادخال رقم الهاتف    ',
            'password.required' => 'يجب ادخال كلمة السر      ',
            'phone.unique' => 'هذا الفون موجود مسبقا',
            'phone.digits' => 'رقم الهاتف  يجب ان يكون 8 ارقام فقط   ',
        ];
        $request->validate($rules, $customMessages);
        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'password' => $request->password,
            'user_password' => $request->password,
        ]);
        if ($user) {
            $user->update([
                'user_type' => 'mandub',
            ]);
        }
        toastr()->success('تم حفظ البيانات بنجاح');
        return back();
    }

    public function update(Request $request, int $mandub)
    {
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'digits:8'],
            'password' => ['required'],
        ];
        $customMessages = [
            'name.required' => 'يجب ادخال الاسم   ',
            'phone.required' => 'يجب ادخال رقم الهاتف    ',
            'password.required' => 'يجب ادخال كلمة السر      ',
            'phone.unique' => 'هذا الفون موجود مسبقا',
            'phone.digits' => 'رقم الهاتف  يجب ان يكون 8 ارقام فقط   ',
        ];

        $request->validate($rules, $customMessages);
        User::findOrFail($mandub)->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'password' => $request->password,
            'user_password' => $request->password,
        ]);
        toastr()->success('تم حفظ البيانات بنجاح');
        return back();
    }
    public function mandubStorage(int $mandub)
    {
        $mandub = user::where('id', $mandub)->first();
        $books = Book::all();

        return view('/admin/book/mandubStorage', compact('mandub', 'books'));
    }
    public function showBooksClass(string $name, $mandub)
    {
        if ($name == 'four') {
            $books = book::with('target')->where('classroom', 'الصف الرابع')->get();
        } elseif ($name == 'five') {
            $books = book::with('target')->where('classroom', 'الصف الخامس')->get();
        } elseif ($name == 'seven') {
            $books = book::with('target')->where('classroom', 'الصف السابع')->get();
        }
        if ($name == 'six') {
            $books = book::with('target')->where('classroom', 'الصف السادس')->get();
        } elseif ($name == 'seven') {
            $books = book::with('target')->where('classroom', 'الصف السابع')->get();
        } elseif ($name == 'eight') {
            $books = book::with('target')->where('classroom', 'الصف الثامن')->get();
        } elseif ($name == 'nine') {
            $books = book::with('target')->where('classroom', 'الصف التاسع')->get();
        } elseif ($name == 'ten') {
            $books = book::with('target')->where('classroom', 'الصف العاشر')->get();
        } elseif ($name == 'eleven') {
            $books = book::with('target')->where('classroom', 'الصف الحادي عشر')->get();
        } elseif ($name == 'twelve') {
            $books = book::with('target')->where('classroom', 'الصف الثاني عشر')->get();
        }
        $mandub = user::where('id', $mandub)->first();
        return view('/admin/book/mandubStorage', compact('mandub', 'books'));
    }
    public function addMinimum(Request $request, int $mandub, int $book)
    {
        if (!is_numeric($mandub) || !is_numeric($book)) {
            return back()->with('error', 'Invalid values for mandub or book.');
        }
        $requestData = request()->all();
        if (empty($requestData['minimum'])) {
            return back()->with('error', 'Minimum value is required.');
        }
        MandubBook::updateOrCreate(
            ['book_id' => $book, 'mandub_id' => $mandub],
            ['minimum' => $requestData['minimum']]
        );
        return back()->with('success', 'تمت العملية بنجاح.');
    }
    public function addMandubQuantity(Request $request, int $mandubId, int $bookId)
    {
        $book = Book::findOrFail($bookId);
        $mandub = User::findOrFail($mandubId);
        $oldQuantity = $book->quantity;

        $mandub_book = MandubBook::where('book_id', $bookId)
            ->where('mandub_id', $mandubId)
            ->first();

        $book->update([
            'quantity' => $oldQuantity - $request->station
        ]);

        if (!$mandub_book) {
            MandubBook::create([
                'book_id' => $bookId,
                'mandub_id' => $mandubId,
                'distributor_active' => 0,
                'mandub_active' => 0
            ]);
        } else {
            $mandub_book->update([
                'station' => $mandub_book->station + $request->station,
                'distributor_active' => 0,
                'mandub_active' => 0
            ]);
        }

        return back()->with('success', 'تمت العملية بنجاح.');
    }
    //
    public function updateDistributorActive(int $bookId, int $mandubId)
    {
        $book = Book::findOrFail($bookId);
        $mandub = User::findOrFail($mandubId);
        $mandub_book = MandubBook::where('book_id', $bookId)
            ->where('mandub_id', $mandubId)
            ->first();
        $mandub_book->update([
            'distributor_active' => 1,
        ]);
        return back()->with('success', 'تمت العملية بنجاح.');
    }
    public function updateMandubActive(int $bookId, int $mandubId)
    {
        $book = Book::findOrFail($bookId);
        $mandub = User::findOrFail($mandubId);
        $mandub_book = MandubBook::where('book_id', $bookId)
            ->where('mandub_id', $mandubId)
            ->first();

        $mandub_book->update([
            'distributor_active' => 1,
            'mandub_active' => 1,
            'mandub_quantity' => $mandub_book->mandub_quantity + $mandub_book->station,
            'station' => 0,

        ]);
        return back()->with('success', 'تمت العملية بنجاح.');
    }
    //postStation
    public function createStation(request $request, int $mandubId)
    {
        $mandub = User::findOrFail($mandubId);
           
        $selectedBooks = $request->input('selected_subjects');
        if (!$selectedBooks) {
            toastr()->error('لا يوجد مذكرات');
            return back();
        }
        $station = $request->input('station');

        foreach ($selectedBooks as $bookId) {
            $mandubBook = $mandub->mandubBooks()->where('book_id', $bookId)->first();
                
                $stationValue = ($station ?? 0) + ($mandub->mandubBooks->first()->pivot->station ?? 0);
                MandubBook::updateOrCreate(
                    ['book_id' => $bookId, 'mandub_id' => $mandubId],
                    [
                        'station' => $stationValue,
                        'distributor_active' => 0,
                        'mandub_active' => 0,
                    ]
                );
            
        }
    
        toastr()->success('تم حفظ البيانات بنجاح');
        return back();
    }
    
}
