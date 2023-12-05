<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    @include('layouts.head')
</head>

<body>

    <div class="wrapper">

        <!--=================================
 preloader -->

        <div id="pre-loader">
            <img src="assets/images/pre-loader/loader-01.svg" alt="">
        </div>

        <!--=================================
 preloader -->

        @include('layouts.main-header')

        @include('layouts.main-sidebar')

        <!--=================================
 Main content -->
        <!-- main-content -->
        <div class="content-wrapper">


            <div class="row">
                <img src="assets/images/education.jpg"
                    style="width:95%;  display: block; margin:30px; object-fit: contain; border-radius: 10px;" alt="">
            </div>
            <!-- widgets -->
            @if(auth()->user()->user_type=='admin')

            <!-- widgets -->

            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span  >
                                    <a href="{{route('getStudent')}}">
                                        <i class=" fa fa-graduation-cap highlight-icon" aria-hidden="true" style="color:#175166; font-size:70px; padding-top:15px;padding-bottom:15px"></i>
                                      </a>
                                        <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                    </span>
                                </div>
                                <div class="float-right text-center">
                                <a href="{{route('getStudent')}}">
                                    <p class="card-text text-dark" style="font-size: 27px; padding-top:15px ;">الطلبة
                                </a>  
                                </p>
                                    <h4>{{$studentCount}}</h4>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span >
                                        <a href="{{route('getTeacher')}}">
                                            <i class=" fa fa-id-card highlight-icon" aria-hidden="true"
                                                style="color:#175166; font-size:70px; padding-top:15px;padding-bottom:15px  "></i>
                                        </a>
                                        <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                    </span>
                                </div>
                                <div class="float-right text-center">
                                    <a href="{{route('getTeacher')}}"> <p class="card-text text-dark" style="font-size: 27px; padding-top:15px ;">المعلمين</p> </a>
                                    <h4>{{$teacherCount}}</h4>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span >
                                        <i class=" fa fa-stop-circle highlight-icon" aria-hidden="true"
                                            style="color:#175166; font-size:70px; padding-top:15px;padding-bottom:15px "></i>
                                        <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                    </span>
                                </div>
                                <div class="float-right text-center">
                                    <a href='{{route("course")}}'>
                                        <p class="card-text text-dark" style="font-size: 27px; padding-top:15px ;">الكورسات</p>
                                    </a>
                                    <h4>0</h4>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span >
                                    <a href="{{route('getExam')}}">
                                        <i class=" fa fa-check-square-o  highlight-icon" aria-hidden="true"
                                            style="color:#175166; font-size:70px; padding-top:15px; padding-bottom:15px  "></i>
                                    </a>
                                            <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                    </span>
                                </div>
                                <div class="float-right text-center">
                                <a href="{{route('getExam')}}">
                                    <p class="card-text text-dark" style="font-size: 27px; padding-top:15px ;">
                                        الاختبارات</p>
                                </a>
                                    <h4>{{$examCount}}</h4>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- widgets -->
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span >
                                    <a href="{{route('getBook')}}">

                                        <i class=" fa fa-book  highlight-icon" aria-hidden="true"
                                            style="color:#175166; font-size:70px; padding-top:15px ; padding-bottom:15px "></i>
</a>
                                            <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                    </span>
                                </div>
                                <div class="float-right text-center">
                                <a href="{{route('getBook')}}">
                                    <p class="card-text text-dark" style="font-size: 27px; padding-top:25px ;">المذكرات
                                    </p>
                                    <a href="{{route('getBook')}}">

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span >

                                        <i class=" fa fa-envelope highlight-icon" aria-hidden="true"
                                            style="color:#175166; font-size:70px; padding-top:15px ; padding-bottom:15px "></i>
                                        <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                    </span>
                                </div>
                                <div class="float-right text-center">
                                    <a href="{{route('getContact')}}">
                                        <p class="card-text text-dark" style="font-size: 27px; padding-top:25px ;">اسئلة
                                            الادارة </p>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span >
                                        <i class="fa fa-pencil-square-o highlight-icon" aria-hidden="true"
                                            style="color:#175166; font-size:70px; padding-top:15px; padding-bottom:15px "></i>
                                        <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                    </span>
                                </div>
                                <div class="float-right text-center">
                                    <p class="card-text text-dark" style="font-size: 27px; padding-top:25px ;">إعداد
                                        المنصة</p>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span >
                                    <a href="{{route('getProfile')}}">
                                        <i class=" fa fa-cogs  highlight-icon" aria-hidden="true"
                                            style="color:#175166; font-size:70px; padding-top:15px; padding-bottom:15px "></i>
                                        <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                    </a>
                                    </span>
                                </div>
                                <div class="float-right text-center">
                                <a href="{{route('getProfile')}}">
                                    <p class="card-text text-dark" style="font-size: 27px; padding-top:25px ;"> إعداد
                                        الحساب</p>
                                </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if(auth()->user()->user_type=='teacher')
    <!-- widgets -->
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                <div class="clearfix">
                    <div class="float-left">
                        <span >
                        <a href="#">
                            <i class="fa fa-file-video-o highlight-icon" aria-hidden="true" style="color:#175166; font-size:60px; padding-top:15px;padding-bottom:15px"></i>
                          </a>
                            <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                        </span>
                    </div>
                    <div class="float-right text-center">
                    <a href="#">
                        <p class="card-text text-dark" style="font-size: 20px; padding-top:25px ;">الكورسات المسجلة
                    </a>  
                    </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <div class="clearfix">
                    <div class="float-left">
                        <span >
                            <a href="{{route('getTeacher')}}">
                                <i class=" fa fa-money highlight-icon" aria-hidden="true"
                                    style="color:#175166; font-size:60px; padding-top:15px;padding-bottom:15px  "></i>
                            </a>
                            <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                        </span>
                    </div>
                    <div class="float-right text-center">
                        <a href="#"> <p class="card-text text-dark" style="font-size: 20px; padding-top:25px ;">الدفعات المحصلة </p> </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <div class="clearfix">
                    <div class="float-left">
                        <span >
                            <i class=" fa fa-retweet highlight-icon" aria-hidden="true"
                                style="color:#175166; font-size:60px; padding-top:15px;padding-bottom:15px "></i>
                            <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                        </span>
                    </div>
                    <div class="float-right text-center">
                        <a href='#'>
                            <p class="card-text text-dark" style="font-size: 20px; padding-top:25px ;">اشتركات الطلبة</p>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <div class="clearfix">
                    <div class="float-left">
                        <span >
                        <a href="{{route('getProfile')}}">
                            <i class=" fa fa-lock  highlight-icon" aria-hidden="true"
                                style="color:#175166; font-size:60px; padding-top:15px; padding-bottom:15px  "></i>
                        </a>
                                <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                        </span>
                    </div>
                    <div class="float-right text-center">
                    <a href="{{route('getProfile')}}">
                    <p class="card-text text-dark" style="font-size: 20px; padding-top:25px ;">
                        ملفك الشخصي</p>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- widgets -->


@endif

@if(auth()->user()->user_type=='user')

      student
 


@endif

            <!--=================================
 wrapper -->

            <!--=================================
 footer -->

            @include('layouts.footer')
        </div><!-- main content wrapper end-->
    </div>
    </div>
    </div>

    <!--=================================
 footer -->

    @include('layouts.footer-scripts')

</body>

</html>