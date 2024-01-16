@extends('layouts.master')
@section('css')
@section('title')
تفاصيل الطلب
@stop
@endsection
@section('page-header')

<div class="row my-5 bg-light">
    <div class="col-12">
        <div class="card-box ">

            <div class="page-title">
                <div class="row">
                    <div class="col-sm-12" style="color:#dc3545 ;text-align:center; background-color: #dc3545; margin-bottom: 10px; border-radius:7px;">
                        <h2 class="mb-0" style="color:#fff ;text-align:center; padding-top: 10px; padding-bottom: 10px;">  طلب شراء مذكرات
                            <img src="https://cdn-icons-png.flaticon.com/128/11391/11391420.png" width="50px">
                        </h2>
                    </div>
                </div>

            </div>
            <div class="row bg-light">
                <div class="col-md-6">
                    <h5 role="link" aria-disabled="true" class="list-group-item border-0 font-weight-bold" style="color:#175166!important;"><i class="fe-user font-18 align-middle mr-2"></i>إسم المشترى : محمد احمد </h5>
                </div>
                <div class="col-md-6">
                    <h5 role="link" aria-disabled="true" class="list-group-item border-0 text-danger font-weight-bold"><i class="fe-phone-forwarded font-18 align-middle mr-2"></i>رقم الهاتف : 50650568 </h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h5 role="link" aria-disabled="true" class="list-group-item border-0 font-weight-bold" style="color:#175166!important;"><i class="mdi mdi-folder-text-outline font-18 align-middle mr-2"></i>المحافظة :
                        حولي </h5>
                </div>
                <div class="col-md-6">
                    <h5 role="link" aria-disabled="true" class="list-group-item border-0 font-weight-bold" style="color:#175166!important;"> المندوب :
                        لم يتم التعين
                    </h5>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <h5 role="link" aria-disabled="true" class="list-group-item border-0 font-weight-bold" style="color:#175166!important;"><i class="la la-map-marker font-18 align-middle mr-2"></i>العنوان بالتفصيل : مشرف قطعة 1 شارع 5 منزل 20</h5>
                </div>
                <div class="col-md-6">
                    <h5 role="link" aria-disabled="true" class="list-group-item border-0 font-weight-bold" style="color:#175166!important;"><i class="mdi mdi-timer font-18 align-middle mr-2"></i>وقت العملية : 2024 -01- 08 16:18:27 </h5>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table mt-4 table-centered">
                            <tbody>
                                <tr style="text-align: center;" class="style_print">
                                    <th class="style_print" style="background-color:#175166; color:#fff;">المذكرة</th>
                                    <th class="style_print" style="background-color:#00222e; color:#fff;">الصف</th>
                                    <th class="style_print" style="background-color:#175166; color:#fff;">سعر المذكرة</th>
                                    <th class="style_print" style="background-color:#00222e; color:#fff;">الكميه </th>
                                    <th class="style_print" style="background-color:#175166; color:#fff;">الإجمالى </th>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr style="text-align: center; font-size: 18px;">
                                    <td><i class="mdi mdi-folder-text-outline  align-middle mr-2"></i><span class="ml-2">باقة الصف السادس </span></td>
                                    <td><span class="ml-2">الصف السادس</span></td>
                                    <td><span class="ml-2">15</span></td>
                                    <td><span class="ml-2">1</span></td>
                                    <td><span class="ml-2">15</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div> <!-- end table-responsive -->
                </div> <!-- end col -->
            </div>
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-12" style="color:#dc3545 ;text-align:center; background-color: #dc3545; margin-bottom: 10px; border-radius:7px;">
                        <h2 class="mb-0" style="color:#fff ;text-align:center; padding-top: 10px; padding-bottom: 10px; "> تفاصيل الفاتورة
                        </h2>
                    </div>
                </div>    
                </div>          
      
                  <div class="row">
                <div class="col-md-4">
                    <h5 role="link" aria-disabled="true" class="list-group-item border-0 font-weight-bold" style="color:#175166!important;">تكلفة التوصيل : 2 د.ك</h5>
                </div>
                <div class="col-md-4">
                    <h5 role="link" aria-disabled="true" class="list-group-item border-0 font-weight-bold" style="color:#175166!important;">إجمالى المشتريات : 15 د.ك</h5>
                </div>
                <div class="col-md-4">
                    <h5 role="link" aria-disabled="true" class="list-group-item border-0 font-weight-bold" style="color:#175166!important;">إجمالى الفاتورة : 17 د.ك</h5>
                </div>
            </div>
        </div>
    </div>
</div>






<!-- row closed -->
@endsection
@section('js')

@endsection