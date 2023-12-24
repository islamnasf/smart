@extends('layouts.master')
@section('css')

@section('title')
     الترم الاول
@stop
@endsection
<style>
    .rawone{
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #175166;
            width: 100%;

        }

        .containerone {
            display: flex;
            height: 200px;
            width: 100%;
            border: 2px solid #333;
            border-radius: 10px;
            overflow: hidden;
        }

        .itemone1 {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #575252; /* لون الخلفية */
            color: #fff; /* لون النص */
        }
        .itemone2 {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #7d7e7e ; /* لون الخلفية */
            color: #fff; /* لون النص */
        }
        .itemone3 {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #afb0b0; /* لون الخلفية */
            color: #fff; /* لون النص */
        }
        @media (max-width: 600px) {
            .containerone {
                flex-direction: column;
                height: auto;
            }

            .itemone {
                flex: none;
                height: 100px; /* قم بتحديد الارتفاع المناسب للعناصر عند تغيير التوجيه إلى عمودي */
            }
        }
    </style>
@section('page-header')
<div class="rowone">
    <div class="containerone">
        <div class="itemone1">ديف 1</div>
        <div class="itemone2">ديف 2</div>
        <div class="itemone3">ديف 3</div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->

<!--  Add Modal -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered p-0" style="text-align:center">
                        <thead>
                            <tr>
                                <th>اسم المادة </th>
                                <th>الصف</th>
                                <th>اسم المعلم</th>
                                <th>الاشتراك الشهري</th>
                                <th>سعر الترم</th>
                                <th>العمليات</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td><a
                                            href="#"></a>
                                    </td>
                                    <td></td>
                                    <td><a
                                            href="#"></a>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <!-- Button trigger modal update -->
                                        <a href="#"
                                            class="btn btn-info btn-sm">
                                            <i class="fa fa-pencil-square"></i>
                                        </a>
                                        <!-- Button trigger modal delete -->
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                            data-target="#delete">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                        <div class="modal fade" id="delete" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">حذف الكورس</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="#"
                                                        method="post">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <h4> هل انت متاكد من حذف هذه المادة ؟</h4>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">اغلاق</button>
                                                            <button type="submit" class="btn btn-primary"> حذف
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            
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
