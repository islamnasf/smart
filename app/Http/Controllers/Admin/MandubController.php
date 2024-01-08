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
    public function index(){
        $mandubs=user::where('user_type','mandub')->get();
        $count=user::where('user_type','mandub')->count();
        return view('/admin/book/mandub', compact('mandubs','count'));
        }

    public function store(Request $request)
    {
        $rules=[
            'name' => ['required', 'max:255'],
            'phone' => ['required', 'unique:'.User::class ,'digits:8'],
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
            'password' =>$request->password,
            'user_password' =>$request->password,
        ]);
        if($user){
            $user->update([
                'user_type' =>'mandub',
            ]);
        }
        toastr()->success('تم حفظ البيانات بنجاح');
        return back();
    }

    public function update(Request $request ,int $mandub)
    {
        $rules=[
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required','digits:8'],
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
            'password' =>$request->password,
            'user_password' =>$request->password,
        ]);
        toastr()->success('تم حفظ البيانات بنجاح');
        return back();
    }
    public function mandubStorage( int $mandub){
        $mandub=user::where('id',$mandub)->first();
        $books=Book::all();

    

        return view('/admin/book/mandubStorage', compact('mandub','books'));
    }
  
    public function addMinimum(Request $request, int $mandub, int $book)
    {
        // تحقق من قيم المتغيرات
        if (!is_numeric($mandub) || !is_numeric($book)) {
            return back()->with('error', 'Invalid values for mandub or book.');
        }
    
        // استخدام request()->all() لتحقق من البيانات المرسلة
        $requestData = request()->all();
    
        // تأكد من أن minimum ليست فارغة
        if (empty($requestData['minimum'])) {
            return back()->with('error', 'Minimum value is required.');
        }
    
        // استخدام updateOrCreate
        MandubBook::updateOrCreate(
            ['book_id' => $book, 'mandub_id' => $mandub],
            ['minimum' => $requestData['minimum']]
        );
    
        return back()->with('success', 'تمت العملية بنجاح.');
    }
    public function addMandubQuantity(Request $request, int $mandubId, int $bookId)
    {
        // البحث عن الكتاب باستخدام المعرف
        $book = Book::findOrFail($bookId);
    
        // البحث عن المندوب باستخدام المعرف
        $mandub = User::findOrFail($mandubId);
    
        // الحصول على الكمية القديمة في جدول العلاقة
        $mandubBook = MandubBook::where('book_id', $bookId)
            ->where('mandub_id', $mandubId)
            ->first();
    
        // تحديث الكمية في جدول العلاقة بين الكتب والمندوبين
        if (!$mandubBook) {
            MandubBook::create([
                'book_id' => $bookId,
                'mandub_id' => $mandubId,
                'mandub_quantity' => $request->mandubquantity
            ]);
        } else {
            $mandubBook->update([
                'mandub_quantity' => $mandubBook->mandub_quantity + $request->mandubquantity
            ]);
        }
    
        // تحديث كمية الكتاب
        $book->update([
            'quantity' => $book->quantity - $request->mandubquantity
        ]);
    
        return back()->with('success', 'تمت العملية بنجاح.');
    }
    
}

