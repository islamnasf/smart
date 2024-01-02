@extends('layouts.master')
@section('css')
@section('title')
المخزن الرئيسي
@stop
@endsection
@section('page-header')


<div class="page-title">
    <div class="row">
        <div class="col-sm-12" style="color:#dc3545 ; margin:10px auto; background-color: #dc3545; padding-top: 10px; padding-bottom: 10px;  border-radius:7px; display: flex; justify-content: space-around;">

            <h1 class="mb-0" style="color:#fff ; "> <span class="text-danger">
                    <i class=" fa fa-home highlight-icon" aria-hidden="true" style="color:#fff; font-size:45px;  "></i>
                </span>المخزن الرئيسي </h1>

        </div>
    </div>

</div>


<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<!--  Add Modal -->

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
                                <th> المذكرة </th>
                                <th> الصف </th>
                                <th>المعلم </th>
                                <th>سعر البيع </th>
                                <th>الكمية</th>
                                <th> العمليات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($books as $book)
                            <tr>
                                <td>{{$book->name}}</td>
                                <td>{{$book->classroom}}</td>
                                <td>{{$book->techer->name}}</td>
                                <td>{{$book->book_price}}</td>
                                <td>{{$book->quantity}}</td>

                                <td>
                                    <!-- Button trigger modal update -->
                                    <a class="nav-link top-nav" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-sliders" style="font-size: 20px;"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-big dropdown-notifications">
                                        <div style="padding:2px; padding-right: 20px; font-size: 15px;">
                                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit{{$book->id}}">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            اضافة كمية
                                        </div>
                                    </div>
                                    <!-- edit  -->
                                    <div class="modal fade" id="edit{{$book->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                        <i class="fa fa-exclamation mr-3" ></i>
                                                    </div>
                                                </div>
                                                    <form action="{{route('addQuantity',$book->id)}}" method="post">
                                                        @csrf
                                                        <label style="font-size: 15px; font-weight: bold;">  الكمية الجديدة المضافة </label>
                                                        <input type="number" name="quantity" class="form-control" required>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                                                    <button type="submit" class="btn btn-primary"> اضافة  </button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

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