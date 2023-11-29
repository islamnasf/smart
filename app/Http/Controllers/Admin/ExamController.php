<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index(){
        $exam=Exam::get();
        return view('/admin/exam', compact('exam'));
        }

         public function store(Request $request){
     
            $exam=Exam::create([
             'subject'=>$request->subject,
              'grade'=>$request->grade,
            ]) ;
            if($exam){
            toastr()->success('تم حفظ البيانات بنجاح');
            return back(); 
            }else{
             toastr()->error('يوجد مشكل حاليا , حاول مره اخري ');
             return back();
            }
         }
         public function update(GradeRequest $request,int $gr)
         {
            $grade=Grade::findOrFail($gr)->update([
             'name'=>$request->name,
              'notes'=>$request->notes
            ]) ;
            if($grade){
            toastr()->success('تم تحديث البيانات بنجاح');
            return back(); 
        }else{
            toastr()->error('يوجد مشكل حاليا , حاول مره اخري ');
            return back();
           }
         }
     
        
         public function delete(Request $request ,int $gr){
     
             Grade::findOrFail($gr)->delete();
            
             toastr()->success('تم حذف البيانات ');
            return back();
     
         } 
}
