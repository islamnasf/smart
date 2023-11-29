@extends('layouts.master')
@section('css')

@section('title')
student
@stop
@endsection
@section('page-header')
<div class="row">
  <div>
    <h2 style="position: absolute; left:10%; top:13%; color:#dc3545"> اجمالي عدد الطلبة ({{$studentCount}})</h2>
  </div>
  <!-- breadcrumb -->
  <img src="{{url('assets/images/teacher.jpg')}}"
    style="width:92%; height:180px;  display: block; margin:15px auto; margin-top:0px; object-fit: fill; border-radius: 5px;"
    alt="">
</div>


<div class="page-title">
  <div class="row">
    <div class="col-sm-12" style="color:#dc3545 ;text-align:center; background-color: #dc3545; margin-bottom: 10px; border-radius:7px;" >
    <h2 class="mb-0" style="color:#fff ;text-align:center; padding-top: 10px; padding-bottom: 10px; " > الطلبة </h2>
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
                <th>اسم الطالب  </th>
                <th>الصف  </th>
                <th>رقم التلفون </th>
                <th>الرقم السري</th>
                <th>حالة الاشتراك  </th>
                <th> عدد التجديد  </th>
                <th> العمليات</th>
              </tr>
            </thead>
            <tbody>
              @foreach($students as $student)

              <tr>
                <td>{{$student->name}}</td>
                <td>{{$student->group}}</td>
                <td>{{$student->phone}}</td>
                <td>{{$student->user_password}}</td>
                <td>0</td>
                <td>0</td>
                <td>
                  <!-- Button trigger modal update -->
                  <a class="nav-link top-nav" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="fa fa-sliders" style="font-size: 20px;"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-big dropdown-notifications">
                    <div style="padding:2px; padding-right: 20px; font-size: 15px;">
                      <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                        data-target="#edit{{$student->id}}">
                        <i class="fa fa-edit"></i>
                      </button>
                      تعديل البيانات
                    </div>
                    <!-- <div style="padding:2px; padding-right: 20px; font-size: 15px;">
                                  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit{{$student->id}}">
                            <i class="fa fa-edit"></i>
                          </button> 
                          تعديل البيانات 
                    </div> -->



                    <!-- <a href="#" class="dropdown-item">New invoice received <small
                                class="float-right text-muted time">22 mins</small> </a> -->
                  </div>



                  <!--  edit Modal -->
                  <div class="modal fade" id="edit{{$student->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">تعديل البيانات</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="{{route('updateStudent',$student->id)}}" method="post">
                            @csrf
                            <input type="text" name="name" class="form-control" value="{{$student->name}}">
                            </br>
                            <input type="text" name="password" class="form-control" value="{{ $student->user_password}}">
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                          <button type="submit" class="btn btn-primary"> تعديل </button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- Button trigger modal delete -->
                  <!-- <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete">
<i class="fa fa-trash"></i>
</button> -->
                  <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">حذف </h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="#" method="post">
                          @csrf
                          <div class="modal-body">
                            هل انت متاكد من حذف هذه  ؟
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                            <button type="submit" class="btn btn-primary"> حذف </button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- Button trigger modal show -->
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