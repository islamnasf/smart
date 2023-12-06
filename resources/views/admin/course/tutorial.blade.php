@extends('layouts.master')
@section('css')

@section('title')
    Teacher
@stop
@endsection
@section('page-header')
<div class="row">
    <!-- breadcrumb -->
    <img src="{{ url('assets/images/teacher.jpg') }}"
        style="width:92%; height:180px;  display: block; margin:15px auto; margin-top:0px; object-fit: fill; border-radius: 5px;"
        alt="">
</div>

<div class="page-title">
    <div class="row">
        <div class="col-sm-12"
            style="color:#dc3545 ; margin:10px auto; background-color: #dc3545; padding-top: 10px; padding-bottom: 10px;  border-radius:7px; display: flex; justify-content: space-around;">
            <h2 class="mb-0" style="color:#fff ; ">الدروس</h2>
            <button type="button" class="btn btn-info float-left float-sm-right " data-toggle="modal"
                data-target="#exampleModal"
                style="font-size: 18px; font-family:Amiri;
            line-height: 1.2;"><img
                    src="https://cdn-icons-png.flaticon.com/128/2542/2542533.png" width="26px"> -
                اضافة درس جديد
            </button>
        </div>
    </div>

</div>


<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->

<!--  Add Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">اضافة درس</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <form action="{{ route('postTutorial', Route::current()->Parameter('userId'))}}" method="post">
                    @csrf
                    <input type="text" name="name" class="form-control" placeholder="اسم المادة ">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                <button type="submit" class="btn btn-primary">اضافة المعلم </button>
            </div>
            </form>
        </div>
    </div>
</div>

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
                                <th>عنوان الحلقة</th>
                                <th>العمليات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teacher as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>
                                        <a class="nav-link top-nav" data-toggle="dropdown" href="#" role="button"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-sliders" style="font-size: 20px;"></i>
                                        </a>
                                        <div
                                            class="dropdown-menu dropdown-menu-right dropdown-big dropdown-notifications">
                                            <div style="padding:2px; padding-right: 20px; font-size: 15px;">
                                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                    data-target="#edit{{ $user->id }}">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                تعديل البيانات
                                            </div>
                                        </div>
                                        <!--  edit Modal -->
                                        <div class="modal fade" id="edit{{ $user->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">تعديل البيانات
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('updateTeacher', $user->id) }}"
                                                            method="post">
                                                            @csrf
                                                            <label style="font-size: 15px; font-weight: bold;"> اسم
                                                                المعلم </label>
                                                            <input type="text" name="name" class="form-control"
                                                                value="{{ $user->name }}">
                                                            </br>
                                                            <label style="font-size: 15px; font-weight: bold;"> رقم
                                                                الهاتف </label>
                                                            <input type="text" name="phone" class="form-control"
                                                                value="{{ $user->phone }}">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">اغلاق</button>
                                                        <button type="submit" class="btn btn-primary"> تعديل
                                                        </button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        @csrf
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
