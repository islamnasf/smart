@extends('layouts.master')
@section('css')

@section('title')
Teacher
@stop
@endsection
@section('page-header')
<div class="row">
  <div>
    <h2 style="position: absolute; left:10%; top:15%; color:#dc3545"> اجمالي عدد المعلمين (0)</h2>
  </div>
  <!-- breadcrumb -->
  <img src="assets/images/teacher.jpg"
    style="width:92%; height:180px;  display: block; margin:15px auto; margin-top:0px; object-fit: fill; border-radius: 5px;"
    alt="">
</div>

<div class="page-title">
  <div class="row">
    <div class="col-sm-6">
      <h4 class="mb-0"> المعلمين</h4>
    </div>

    <div class="col-sm-6">
      <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
        <li class="breadcrumb-item">
          <div>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" style="font-size: 18px; font-family:Amiri;
            line-height: 1.2;"><i class="fa fa-user"></i> -
              اضافة معلم جديد
            </button>
          </div>
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
        <h5 class="modal-title" id="exampleModalLabel">اضافة معلم</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">

        <form action="{{url('teacher')}}" method="post">
          @csrf
          <input type="text" name="name" class="form-control" placeholder="اسم المعلم ">
          @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          </br>

          <input type="text" name="phone" class="form-control" placeholder=" رقم هاتف المعلم">

          @error('phone')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          </br>
          <input type="text" name="password" class="form-control" placeholder="الرقم السري">
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
                <th>اسم المرحلة </th>
                <th>تفاصيل</th>
                <th>عمليات</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>000</td>
                <td>000</td>
                <td>
                  <!-- Button trigger modal update -->


                  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit">
                    <i class="fa fa-edit"></i>
                  </button>
                  <!--  edit Modal -->
                  <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">تعديل المرحلة</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>

                        <div class="modal-body">

                          <form action="#" method="post">
                            @csrf
                            <input type="text" name="name" class="form-control" value="" placeholder="اسم المرحلة">
                            </br>
                            <input type="text" name="notes" class="form-control" value="" placeholder="التفاصيل">
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
                  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete">
                    <i class="fa fa-trash"></i>
                  </button>
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
                  <!-- Button trigger modal show -->
                  <!-- <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#show">
                          <i class="fa fa-eye"></i>
                          </button>
                 -->

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