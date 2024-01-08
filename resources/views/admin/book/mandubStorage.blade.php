@extends('layouts.master')
@section('css')
@section('title')
مخزن المندوب
@stop
@endsection
@section('page-header')


<div class="page-title">
    <div class="row">
        <div class="col-sm-12" style="color:#dc3545 ; margin:10px auto; background-color: #dc3545; padding-top: 10px; padding-bottom: 10px;  border-radius:7px; display: flex; justify-content: space-around;">
            <h2 class="mb-0" style="color:#fff ; "> <i class="fa fa-home"></i> مخزن المندوب </h2>

        </div>
    </div>

</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="field-1" class="control-label">إسم المندوب</label>
            <input type="text" value="{{$mandub->name}} " class="form-control" disabled="">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="field-1" class="control-label">رقم الهاتف</label>
            <input type="text" value="{{$mandub->phone}}" class="form-control" disabled="">
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="field-1" class="control-label">الرقم السري</label>
            <input type="text" value="{{$mandub->user_password}}" class="form-control" disabled="">
        </div>
    </div>


</div>


<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered p-0" style="text-align:center">
                        <thead>
                            <tr>
                                <th>المذكرة </th>
                                <th>الصف </th>
                                <th> ك المخزن </th>
                                <th> ك المندوب </th>
                                <th>الحد الادني</th>
                                <th> العمليات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($books as $book)
                            <tr>
                                <td>{{$book->name}}</td>
                                <td>{{$book->classroom}}</td>
                                <td>{{$book->quantity}}</td>
                                <td>
                                    @php

                                    $mandubBook = $book->mandubBooks->where('pivot.mandub_id', $mandub->id)->first();
                                    $mandubQuantity = optional($book->mandubBooks->where('pivot.mandub_id', $mandub->id)->first())->pivot->mandub_quantity ?? 0;
                                    $backgroundClass = $mandubQuantity < 2 ? 'bg-danger' : 'bg-success' ; @endphp <span class="{{ $backgroundClass }}" style="padding: 8px; border-radius: 3px; color: #fff;">
                                        {{ $mandubQuantity }} مذكرة
                                        </span> <br>
                                </td>
                                <td>
                                    @php
                                    $mandubBook = $book->mandubBooks->where('pivot.mandub_id', $mandub->id)->first();
                                    @endphp

                                    {{ $mandubBook ? $mandubBook->pivot->minimum : 2 }}
                                    <br>
                                </td>
                                <td>
                                    <!-- Button trigger modal update -->
                                    <a class="nav-link top-nav" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-sliders" style="font-size: 20px;"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-center dropdown-big dropdown-notifications">
                                        <div style="padding:2px; padding-right: 20px; font-size: 15px;">
                                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#confirt{{$book->id}}">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            تحويل من المخزن الرئيسي
                                        </div>
                                        <div style="padding:2px; padding-right: 20px; font-size: 15px;">
                                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editquantity{{$book->id}}">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            اضافة كمية
                                        </div>
                                        <div style="padding:2px; padding-right: 20px; font-size: 15px;">
                                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editminimum{{$book->id}}">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            تعديل الحد الادني
                                        </div>

                                    </div>
                                    <!--edit Modal-->

                                    <div class="modal fade" id="confirt{{$book->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"> تحويل من المخزن الرئيسي </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">
                                                    <div class="mb-2">
                                                        <div class="alert alert-success" role="alert" style="font-size: 16px;">
                                                            يرجى إدخال الكمية المراد تحويلها الي المندوب
                                                            <i class="fa fa-exclamation mr-3"></i>
                                                        </div>
                                                    </div>
                                                    <form action="{{route('postMandubQuantity',[$mandub->id,$book->id])}}" method="post">
                                                        @csrf
                                                        <label style="font-size: 15px; font-weight: bold;"> الكمية المراد تحويلها </label>
                                                        <input type="number" name="mandubquantity" class="form-control" required>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                                                    <button type="submit" class="btn btn-primary"> حفظ </button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- edit  -->
                                    <div class="modal fade" id="editquantity{{$book->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"> اضافة كمية </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">
                                                    <div class="mb-2">
                                                        <div class="alert alert-success" role="alert" style="font-size: 16px;">
                                                            يرجى إدخال الكمية المراد إضافتها على المخزون
                                                            <i class="fa fa-exclamation mr-3"></i>
                                                        </div>
                                                    </div>
                                                    <form action="{{route('addQuantity',$book->id)}}" method="post">
                                                        @csrf
                                                        <label style="font-size: 15px; font-weight: bold;"> الكمية الجديدة المضافة </label>
                                                        <input type="number" name="quantity" class="form-control" required>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                                                    <button type="submit" class="btn btn-primary"> اضافة </button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- edit  -->
                                    <div class="modal fade" id="editminimum{{$book->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"> اضافة كمية </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">
                                                    <div class="mb-2">
                                                        <div class="alert alert-success" role="alert" style="font-size: 16px;">
                                                            يرجى إدخال الحد الادني للمندوب
                                                            <i class="fa fa-exclamation mr-3"></i>
                                                        </div>
                                                    </div>
                                                    <form action="{{route('addMinimum',[$mandub->id,$book->id])}}" method="post">
                                                        @csrf
                                                        <label style="font-size: 15px; font-weight: bold;"> الحد الادني للمندوب </label>
                                                        <input type="number" name="minimum" class="form-control" required value="2">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                                                    <button type="submit" class="btn btn-primary"> اضافة </button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Button trigger modal delete -->
                                    <!-- <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete">
                  <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">حذف المرحلة</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="#" method="post">
                          @csrf
                          <div class="modal-body">
                            هل انت متاكد من حذف هذه المرحلة ؟
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                            <button type="submit" class="btn btn-primary"> حذف </button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                 Button trigger modal show -->
                                    <!-- <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#show">
                          <i class="fa fa-eye"></i>
                          </button>
                 -->

                                </td>

                            </tr>

                            @endforeach


                            </tfoot>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- row closed -->
@endsection
@section('js')

@endsection