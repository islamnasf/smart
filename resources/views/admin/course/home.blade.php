@section('title')
    الكورسات
@stop
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
                <a class="col-xl-3 col-lg-6 col-md-6 mb-30" href="{{ route('addCourse') }}">

                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span>
                                        <i class=" fa fa-caret-square-o-left highlight-icon" aria-hidden="true"
                                            style="color:#175166; font-size:60px; padding-top:15px;padding-bottom:15px "></i>
                                        <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                    </span>
                                </div>
                                <div class="float-center text-center">

                                    <p class="card-text text-dark" style="font-size: 23px; padding-top:25px ;">
                                        اضافة كورس</p>


                                </div>
                            </div>

                        </div>
                    </div>
                </a>


                <a class="col-xl-3 col-lg-6 col-md-6 mb-30" href="{{ route('showTermone') }}">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span>
                                        <img src="https://cdn-icons-png.flaticon.com/128/9180/9180579.png"
                                            width="65px" style="padding-top:15px;padding-bottom:25px">
                                    </span>
                                </div>
                                <div class="float-center text-center">

                                    <p class="card-text text-dark" style="font-size: 23px; padding-top:25px ;">
                                        ترم أول </p>


                                </div>
                            </div>

                        </div>
                    </div>
                </a>


                <a class="col-xl-3 col-lg-6 col-md-6 mb-30" href="{{ route('showTermtow') }}">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span>
                                        <img src="https://cdn-icons-png.flaticon.com/128/3601/3601634.png"
                                            width="65px" style="padding-top:15px;padding-bottom:25px">
                                    </span>
                                </div>
                                <div class="float-center text-center">

                                    <p class="card-text text-dark" style="font-size: 23px; padding-top:25px ;">
                                        ترم ثاني </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </a>

                <a class="col-xl-3 col-lg-6 col-md-6 mb-30" href="{{ route('showPackage') }}">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span>
                                        <img src="https://cdn-icons-png.flaticon.com/128/2979/2979590.png"
                                            width="65px" style="padding-top:15px;padding-bottom:25px">
                                        <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                    </span>
                                </div>
                                <div class="float-center text-center">

                                    <p class="card-text text-dark" style="font-size: 23px; padding-top:25px ;">
                                        الباقات</p>


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
                                    <span>
                                        <i class=" fa fa-sign-in highlight-icon" aria-hidden="true"
                                            style="color:#175166; font-size:60px; padding-top:15px;padding-bottom:15px "></i>
                                        <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                    </span>
                                </div>
                                <div class="float-center text-center">

                                    <p class="card-text text-dark" style="font-size: 23px; padding-top:25px ;">
                                        اشتركات الطلبة </p>

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
                                    <span>
                                        <i class=" fa fa-braille highlight-icon" aria-hidden="true"
                                            style="color:#175166; font-size:60px; padding-top:15px;padding-bottom:15px "></i>
                                        <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                    </span>
                                </div>
                                <div class="float-center text-center">
                                    <p class="card-text text-dark" style="font-size: 23px; padding-top:25px ;">
                                        التقرير الشامل</p>
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
                                    <span>
                                        <i class="fa fa-list-alt highlight-icon" aria-hidden="true"
                                            style="color:#175166; font-size:60px; padding-top:15px;padding-bottom:15px "></i>
                                        <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                    </span>
                                </div>
                                <div class="float-center text-center">
                                    <p class="card-text text-dark" style="font-size: 23px; padding-top:25px ;">
                                        الاشتركات المنتهية </p>
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
                                    <span>
                                        <i class="fa fa-th-list highlight-icon" aria-hidden="true"
                                            style="color:#175166; font-size:60px; padding-top:15px;padding-bottom:15px "></i>
                                        <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                    </span>
                                </div>
                                <div class="float-center text-center">
                                    <p class="card-text text-dark" style="font-size: 23px; padding-top:25px ;">
                                        ارشيف الباقات</p>
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
