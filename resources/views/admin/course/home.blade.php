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
                <img src="{{ url('assets/images/teacher.jpg') }}"
                    style="width:90%;  display: block; margin:30px; object-fit: contain; border-radius: 10px;"
                    alt="">
            </div>
            <!-- widgets -->
            <!-- widgets -->


            <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                <span class="text-danger">
                                    <i class=" fa fa-stop-circle highlight-icon" aria-hidden="true"
                                        style="color:#175166; font-size:70px; padding-top:15px;padding-bottom:15px "></i>
                                    <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                </span>
                            </div>
                            <div class="float-right text-center">
                                <a href=''>
                                    <p class="card-text text-dark" style="font-size: 27px; padding-top:15px ;">الكورسات
                                    </p>
                                </a>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="text-danger">
                                        <a href="{{ route('addCourse') }}">
                                            <i class=" fa fa-plus-circle highlight-icon" aria-hidden="true"
                                                style="color:#175166; font-size:70px;"></i>
                                        </a>
                                        <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                    </span>
                                </div>
                                <div class="float-right text-center">
                                    <a href="{{ route('addCourse') }}">
                                        <p class="card-text text-dark "
                                            style="font-size: 22px;  font-weight: bolder ;padding: 5px;">
                                            اضافة كورس
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
                            <div class="clearfix" style="padding: 20px;">
                                <div class="float-left">
                                    <span class="text-danger">
                                        <a href="{{ route('addCourse') }}">
                                            <i class=" fa fa-video-camera highlight-icon" aria-hidden="true"
                                                style="color:#175166; font-size:70px;"></i>
                                        </a>
                                        <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                    </span>
                                </div>
                                <div class="float-right text-center">
                                    <a href="{{ route('addCourse') }}">
                                        <p class="card-text text-dark "
                                            style="font-size: 22px;  font-weight: bolder ;padding: 5px;">
                                            الكورسات المفعلة</p>
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
                                    <span class="text-danger">
                                        <i class=" fa fa-archive highlight-icon" aria-hidden="true"
                                            style="color:#175166; font-size:70px;"></i>
                                        <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                    </span>
                                </div>
                                <div class="float-right text-center">
                                    <a href='{{ route('course') }}'>
                                        <p class="card-text text-dark "
                                            style="font-size: 22px;  font-weight: bolder ;padding: 5px;">
                                            أرشيف الكورس</p>
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
                                    <span class="text-danger">
                                        <i class=" fa fa-subscript  highlight-icon" aria-hidden="true"
                                            style="color:#175166; font-size:70px;"></i>
                                        <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                    </span>
                                </div>
                                <div class="float-right text-center">
                                    <p class="card-text text-dark "
                                        style="font-size: 22px;  font-weight: bolder ;padding: 5px;">
                                        الباقات</p>
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
                                    <span class="text-danger">
                                        <i class=" fa fa-book  highlight-icon" aria-hidden="true"
                                            style="color:#175166; font-size:70px;"></i>
                                        <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                    </span>
                                </div>
                                <div class="float-right text-center">
                                    <p class="card-text text-dark"
                                        style="font-size: 22px;  font-weight: bolder ;padding: 5px;">اشتراكات
                                        الطلبة
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
                                    <span class="text-danger">

                                        <i class=" fa fa-flag highlight-icon" aria-hidden="true"
                                            style="color:#175166; font-size:70px;"></i>
                                        <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                    </span>
                                </div>
                                <div class="float-right text-center">
                                    <a href="{{ route('getContact') }}">
                                        <p class="card-text text-dark"
                                            style="font-size: 22px;  font-weight: bolder ;padding: 5px;">
                                            التقرير كامل</p>
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
                                    <span class="text-danger">
                                        <i class="fa fa-users highlight-icon" aria-hidden="true"
                                            style="color:#175166; font-size:70px;"></i>
                                        <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                    </span>
                                </div>
                                <div class="float-right text-center">
                                    <p class="card-text text-dark"
                                        style="font-size: 22px;  font-weight: bolder ;padding: 5px;">
                                        الاشتراكات المنتهية</p>

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
                                    <span class="text-danger">
                                        <i class=" fa fa-cogs  highlight-icon" aria-hidden="true"
                                            style="color:#175166; font-size:70px;"></i>
                                        <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                    </span>
                                </div>
                                <div class="float-right text-center">
                                    <p class="card-text text-dark"
                                        style="font-size: 22px;  font-weight: bolder ;padding: 5px;">ارشيف
                                        الباقات</p>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

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
