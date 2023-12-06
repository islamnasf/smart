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
                <img src="{{ url('assets/images/education.jpg') }}"
                    style="width:95%;  display: block; margin:30px; object-fit: contain; border-radius: 10px;"
                    alt="">
            </div>

            <!-- widgets -->
            <!-- widgets -->
            <div class="row">
                <a class="col-xl-3 col-lg-6 col-md-6 mb-30" href="#">

                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="text-danger">
                                        <i class=" fa fa-list-alt highlight-icon" aria-hidden="true"
                                            style="color:#175166; font-size:60px; padding-top:15px;padding-bottom:15px "></i>
                                        <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                    </span>
                                </div>
                                <div class="float-center text-center">

                                    <p class="card-text text-dark" style="font-size: 23px; padding-top:25px ;">
                                         الطلبيات الجديدة</p>


                                </div>
                            </div>

                        </div>
                    </div>
                </a>


                <a class="col-xl-3 col-lg-6 col-md-6 mb-30" href="#">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="text-danger">
                                        <i class=" fa fa fa-clock-o highlight-icon" aria-hidden="true"
                                            style="color:#175166; font-size:60px; padding-top:15px;padding-bottom:25px "></i>
                                        <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                    </span>
                                </div>
                                <div class="float-center text-center">

                                    <p class="card-text text-dark" style="font-size: 23px; padding-top:25px ;">
                                        الطلبيات الحالية   </p>


                                </div>
                            </div>

                        </div>
                    </div>
                </a>


                <a class="col-xl-3 col-lg-6 col-md-6 mb-30" href="#">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="text-danger">
                                        <i class=" fa fa-briefcase highlight-icon" aria-hidden="true"
                                            style="color:#175166; font-size:60px; padding-top:15px;padding-bottom:15px "></i>
                                        <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                    </span>
                                </div>
                                <div class="float-center text-center">

                                    <p class="card-text text-dark" style="font-size: 23px; padding-top:25px ;">
                                        الطلبيات المكتملة  </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </a>

                <a class="col-xl-3 col-lg-6 col-md-6 mb-30" href="#">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="text-danger">
                                        <i class=" fa fa-credit-card highlight-icon" aria-hidden="true"
                                            style="color:#175166; font-size:60px; padding-top:15px;padding-bottom:15px "></i>
                                        <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                    </span>
                                </div>
                                <div class="float-center text-center">

                                    <p class="card-text text-dark" style="font-size: 23px; padding-top:25px ;">
                                        الطلبيات المحصلة </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </a>

            </div>
            <!-- widgets -->

            <div class="row">

                <a href="#" class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="text-danger">
                                        <i class=" fa fa-plus-square highlight-icon" aria-hidden="true"
                                            style="color:#175166; font-size:60px; padding-top:15px;padding-bottom:15px "></i>
                                        <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                    </span>
                                </div>
                                <div class="float-center text-center">

                                    <p class="card-text text-dark" style="font-size: 23px; padding-top:25px ;">
                                        اضافة مذكرة   </p>

                                </div>
                            </div>

                        </div>
                    </div>
                </a>

                <a href="#" class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="text-danger">
                                        <i class=" fa fa fa-check-square-o highlight-icon" aria-hidden="true"
                                            style="color:#175166; font-size:60px; padding-top:15px;padding-bottom:15px "></i>
                                        <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                    </span>
                                </div>
                                <div class="float-center text-center">
                                    <p class="card-text text-dark" style="font-size: 23px; padding-top:25px ;">
                                         المذكرات المفعلة</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </a>

                <a href="#" class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="text-danger">
                                        <i class="fa fa-archive highlight-icon" aria-hidden="true"
                                            style="color:#175166; font-size:60px; padding-top:15px;padding-bottom:15px "></i>
                                        <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                    </span>
                                </div>
                                <div class="float-center text-center">
                                    <p class="card-text text-dark" style="font-size: 23px; padding-top:25px ;">
                                        ارشيف المذكرات  </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                
                <a href="#" class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="text-danger">
                                        <i class="fa fa-check-circle highlight-icon" aria-hidden="true"
                                            style="color:#175166; font-size:60px; padding-top:15px;padding-bottom:15px "></i>
                                        <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                    </span>
                                </div>
                                <div class="float-center text-center">
                                    <p class="card-text text-dark" style="font-size: 23px; padding-top:25px ;">
                                        الباقات المفعلة    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                
                <a href="#" class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="text-danger">
                                        <i class="fa fa-file-archive-o highlight-icon" aria-hidden="true"
                                            style="color:#175166; font-size:60px; padding-top:15px;padding-bottom:15px "></i>
                                        <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                    </span>
                                </div>
                                <div class="float-center text-center">
                                    <p class="card-text text-dark" style="font-size: 23px; padding-top:25px ;">
                                        ارشيف الباقات  </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                 <a href="#" class="col-xl-3 col-lg-6 col-md-6 mb-30">
                   <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="text-danger">
                                        <i class=" fa fa-home highlight-icon" aria-hidden="true"
                                            style="color:#175166; font-size:60px; padding-top:15px;padding-bottom:15px "></i>
                                    </span>
                                </div>
                                <div class="float-center text-center">
                                    <p class="card-text text-dark" style="font-size: 23px; padding-top:25px ;">
                                        المخزن الرئيسي </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="col-xl-3 col-lg-6 col-md-6 mb-30">
                   <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="text-danger">
                                        <i class=" fa fa-users highlight-icon" aria-hidden="true"
                                            style="color:#175166; font-size:60px; padding-top:15px;padding-bottom:15px "></i>
                                    </span>
                                </div>
                                <div class="float-center text-center">
                                    <p class="card-text text-dark" style="font-size: 23px; padding-top:25px ;">
                                         المناديب </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="col-xl-3 col-lg-6 col-md-6 mb-30">
                   <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="text-danger">
                                        <i class=" fa fa-globe highlight-icon" aria-hidden="true"
                                            style="color:#175166; font-size:60px; padding-top:15px;padding-bottom:15px "></i>
                                    </span>
                                </div>
                                <div class="float-center text-center">
                                    <p class="card-text text-dark" style="font-size: 23px; padding-top:25px ;">
                                         المحافظات </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="col-xl-3 col-lg-6 col-md-6 mb-30">
                   <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="text-danger">
                                        <i class=" fa fa-bars highlight-icon" aria-hidden="true"
                                            style="color:#175166; font-size:60px; padding-top:15px;padding-bottom:15px "></i>
                                    </span>
                                </div>
                                <div class="float-center text-center">
                                    <p class="card-text text-dark" style="font-size: 23px; padding-top:25px ;">
                                         تقرير المعلمين </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

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
