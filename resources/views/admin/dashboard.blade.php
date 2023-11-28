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
            <img src="assets/images/education.jpg"  style="width:100%;  display: block; margin:30px; object-fit: contain; border-radius: 10px;"   alt="">
            </div>
              <!-- widgets -->
            <!-- widgets -->

            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body" >
                            <div class="clearfix" >
                                <div class="float-left" >
                                    <span class="text-danger">
                                    <i class=" fa fa-graduation-cap highlight-icon"  aria-hidden="true" style="color:#175166; font-size:70px; padding-top:15px;padding-bottom:15px  "></i>
                                        <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                    </span>
                                </div>
                                <div class="float-right text-center">
                                    <p class="card-text text-dark" style="font-size: 27px; padding-top:15px ;">الطلبة</p>
                                    <h4>0</h4>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body" >
                            <div class="clearfix" >
                                <div class="float-left" >
                                    <span class="text-danger">
                                
                                    <i class=" fa fa-id-card highlight-icon"  aria-hidden="true" style="color:#175166; font-size:70px; padding-top:15px;padding-bottom:15px  "></i>
                                        <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                    </span>
                                </div>
                                <div class="float-right text-center">
                                    <a href="{{url('/teacher')}}"> <p class="card-text text-dark" style="font-size: 27px; padding-top:15px ;">المعلمين</p> </a>
                                    <h4>0</h4>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
             
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body" >
                            <div class="clearfix" >
                                <div class="float-left" >
                                    <span class="text-danger">
                                    <i class=" fa fa-stop-circle highlight-icon"  aria-hidden="true" style="color:#175166; font-size:70px; padding-top:15px;padding-bottom:15px "></i>
                                        <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                    </span>
                                </div>
                                <div class="float-right text-center">
                                    <p class="card-text text-dark" style="font-size: 27px; padding-top:15px ;">الكورسات</p>
                                    <h4>0</h4>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body" >
                            <div class="clearfix" >
                                <div class="float-left">
                                    <span class="text-danger">
                                    <i class=" fa fa-check-square-o  highlight-icon"  aria-hidden="true" style="color:#175166; font-size:70px; padding-top:15px; padding-bottom:15px  "></i>
                                        <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                    </span>
                                </div>
                                <div class="float-right text-center">
                                    <p class="card-text text-dark" style="font-size: 27px; padding-top:15px ;">الاختبارات</p>
                                    <h4>0</h4>
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
                        <div class="card-body" >
                            <div class="clearfix" >
                                <div class="float-left" >
                                    <span class="text-danger">
                                    <i class=" fa fa-book  highlight-icon"  aria-hidden="true" style="color:#175166; font-size:70px; padding-top:15px ; padding-bottom:15px "></i>
                                        <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                    </span>
                                </div>
                                <div class="float-right text-center">
                                    <p class="card-text text-dark" style="font-size: 27px; padding-top:25px ;">المذكرات</p>
                                    
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body" >
                            <div class="clearfix" >
                                <div class="float-left" >
                                    <span class="text-danger">
                                
                                    <i class=" fa fa-envelope highlight-icon"  aria-hidden="true" style="color:#175166; font-size:70px; padding-top:15px ; padding-bottom:15px "></i>
                                        <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                    </span>
                                </div>
                                <div class="float-right text-center">
                                    <p class="card-text text-dark" style="font-size: 27px; padding-top:25px ;">اسئلة الادارة </p>
                                    
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
             
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body" >
                            <div class="clearfix" >
                                <div class="float-left" >
                                    <span class="text-danger">
                                    <i class="fa fa-pencil-square-o highlight-icon"  aria-hidden="true" style="color:#175166; font-size:70px; padding-top:15px; padding-bottom:15px "></i>
                                        <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                    </span>
                                </div>
                                <div class="float-right text-center">
                                    <p class="card-text text-dark" style="font-size: 27px; padding-top:25px ;">إعداد المنصة</p>
                                    
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body" >
                            <div class="clearfix" >
                                <div class="float-left">
                                    <span class="text-danger">
                                    <i class=" fa fa-cogs  highlight-icon"  aria-hidden="true" style="color:#175166; font-size:70px; padding-top:15px; padding-bottom:15px "></i>
                                        <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                    </span>
                                </div>
                                <div class="float-right text-center">
                                    <p class="card-text text-dark" style="font-size: 27px; padding-top:25px ;"> إعداد الحساب</p>
                                    
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
