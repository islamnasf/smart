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
          $file = $request->file('previous_test');
          $pdf1 = $file->store('public/pdf');
          //
          $file = $request->file('book_test');
          $pdf2 = $file->store('public/pdf');
          //
          $file = $request->file('solved_test');
          $pdf3 = $file->store('public/pdf');
          //
          $file = $request->file('unsolved_test');
          $pdf4 = $file->store('public/pdf');

            $exam=Exam::create([
             'subject'=>$request->subject,
              'grade'=>$request->grade,
              'group'=>$request->group,
              'season'=>$request->season,
              'previous_test'=>$pdf1,
              'book_test'=>$pdf2,
              'solved_test'=>$pdf3,
              'unsolved_test'=>$pdf4,
            ]) ;
            if($exam){
            toastr()->success('تم حفظ البيانات بنجاح');
            return back(); 
            }else{
             toastr()->error('يوجد مشكل حاليا , حاول مره اخري ');
             return back();
            }
         }
        //  public function update(GradeRequest $request,int $gr)
        //  {
        //     $grade=Grade::findOrFail($gr)->update([
        //      'name'=>$request->name,
        //       'notes'=>$request->notes
        //     ]) ;
        //     if($grade){
        //     toastr()->success('تم تحديث البيانات بنجاح');
        //     return back(); 
        // }else{
        //     toastr()->error('يوجد مشكل حاليا , حاول مره اخري ');
        //     return back();
        //    }
        //  }
     
        
        //  public function delete(Request $request ,int $gr){
     
        //      Grade::findOrFail($gr)->delete();
            
        //      toastr()->success('تم حذف البيانات ');
        //     return back();
     
        //  } 
}
