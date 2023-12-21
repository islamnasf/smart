@section('title')
    الصفحة الرئيسية
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

    <style>
        .subjectCard {
            width: 300px;
            display: flex;
            justify-content: space-between;
            flex-direction: column;
            align-items: center;
            background-color: #175166;
            border-radius: 5px;
            margin: 1px;
            position: relative;
            overflow: hidden;
            transition: .5s;
        }

        .subjectCard:hover {
            transition: .5s;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .buttonhover {
            background-color: transparent;
            border: 0px;
            width: 100%;
        }

        .buttonhover:hover {
            background-color: #175166;

            border-radius: 3px;

        }

        .buttonhover:hover h6 {
            color: #fff;
        }

        .headone:hover {
            background-color: #175166;
            opacity: .9;

        }
    </style>

</head>

<body>

    <div class="wrapper">

        <div id="pre-loader">
            <img src="{{ asset('assets/images/pre-loader/loader-01.svg') }}" alt="">
        </div>

        @include('layouts.main-header')

        @include('layouts.main-sidebar')

        <!--=================================
 Main content -->
        <!-- main-content -->
        <div class="content-wrapper">
            <div class="row">
                <img src="{{ asset('assets/images/education.jpg') }}"
                    style="width:95%;  display: block; margin:30px; object-fit: contain; border-radius: 10px;"
                    alt="">
            </div>
            <!-- widgets -->
            @if (auth()->user()->user_type == 'admin')
                <!-- widgets -->

                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                        <div class="card card-statistics h-100">
                            <div class="card-body">
                                <div class="clearfix">
                                    <div class="float-left">
                                        <span>
                                            <a href="{{ route('getStudent') }}">
                                                <i class=" fa fa-graduation-cap highlight-icon" aria-hidden="true"
                                                    style="color:#175166; font-size:70px; padding-top:15px;padding-bottom:15px"></i>
                                            </a>
                                            <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                        </span>
                                    </div>
                                    <div class="float-right text-center">
                                        <a href="{{ route('getStudent') }}">
                                            <p class="card-text text-dark" style="font-size: 27px; padding-top:15px ;">
                                                الطلبة
                                        </a>
                                        </p>
                                        <h4>{{ $studentCount }}</h4>
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
                                        <span>
                                            <a href="{{ route('getTeacher') }}">
                                                <i class=" fa fa-id-card highlight-icon" aria-hidden="true"
                                                    style="color:#175166; font-size:70px; padding-top:15px;padding-bottom:15px  "></i>
                                            </a>
                                            <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                        </span>
                                    </div>
                                    <div class="float-right text-center">
                                        <a href="{{ route('getTeacher') }}">
                                            <p class="card-text text-dark" style="font-size: 27px; padding-top:15px ;">
                                                المعلمين</p>
                                        </a>
                                        <h4>{{ $teacherCount }}</h4>
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
                                        <span>
                                            <i class=" fa fa-stop-circle highlight-icon" aria-hidden="true"
                                                style="color:#175166; font-size:70px; padding-top:15px;padding-bottom:15px "></i>
                                            <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                        </span>
                                    </div>
                                    <div class="float-right text-center">
                                        <a href="{{ route('course') }}">
                                            <p class="card-text text-dark" style="font-size: 27px; padding-top:15px ;">
                                                الكورسات</p>
                                        </a>
                                        <h4>{{ $courses }}</h4>
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
                                        <span>
                                            <a href="{{ route('getExam') }}">
                                                <i class=" fa fa-check-square-o  highlight-icon" aria-hidden="true"
                                                    style="color:#175166; font-size:70px; padding-top:15px; padding-bottom:15px  "></i>
                                            </a>
                                            <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                        </span>
                                    </div>
                                    <div class="float-right text-center">
                                        <a href="{{ route('getExam') }}">
                                            <p class="card-text text-dark" style="font-size: 27px; padding-top:15px ;">
                                                الاختبارات</p>
                                        </a>
                                        <h4>{{ $examCount }}</h4>
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
                                        <span>
                                            <img src="https://cdn-icons-png.flaticon.com/128/5832/5832416.png"
                                                width="65px" style="padding-top:15px;padding-bottom:25px">
                                            <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                        </span>
                                    </div>
                                    <div class="float-right text-center">
                                        <a href="{{ route('getBook') }}">
                                            <p class="card-text text-dark" style="font-size: 27px; padding-top:25px ;">
                                                المذكرات
                                            </p>
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
                                        <span>
                                            <img src="https://cdn-icons-png.flaticon.com/128/189/189665.png"
                                                width="65px" style="padding-top:15px;padding-bottom:25px">
                                            <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                        </span>
                                    </div>
                                    <div class="float-right text-center">
                                        <a href="{{ route('getContact') }}">
                                            <p class="card-text text-dark"
                                                style="font-size: 27px; padding-top:25px ;">اسئلة
                                                الادارة </p>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <a href="{{ route('sitesettingsShow') }}" class="col-xl-3 col-lg-6 col-md-6 mb-30">
                        <div class="card card-statistics h-100">
                            <div class="card-body">
                                <div class="clearfix">
                                    <div class="float-left">
                                        <span>
                                            <img src="https://cdn-icons-png.flaticon.com/128/7947/7947783.png"
                                                width="65px" style="padding-top:15px;padding-bottom:25px">
                                            <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                        </span>
                                    </div>
                                    <div class="float-right text-center">
                                        <p class="card-text text-dark" style="font-size: 27px; padding-top:25px ;">
                                            إعداد
                                            المنصة</p>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </a>
                    <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                        <div class="card card-statistics h-100">
                            <div class="card-body">
                                <div class="clearfix">
                                    <div class="float-left">
                                        <span>
                                            <a href="{{ route('getProfile') }}">
                                                <img src="https://cdn-icons-png.flaticon.com/128/3649/3649387.png"
                                                    width="65px" style="padding-top:15px;padding-bottom:25px">
                                                <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                            </a>
                                        </span>
                                    </div>
                                    <div class="float-right text-center">
                                        <a href="{{ route('getProfile') }}">
                                            <p class="card-text text-dark"
                                                style="font-size: 27px; padding-top:25px ;"> إعداد
                                                الحساب</p>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @if (auth()->user()->user_type == 'teacher')
                <!-- widgets -->
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                        <div class="card card-statistics h-100">
                            <div class="card-body">
                                <div class="clearfix">
                                    <div class="float-left">
                                        <span>
                                            <a href="{{ route('teacherCourse') }}">
                                                <img src="https://cdn-icons-png.flaticon.com/128/5000/5000269.png"
                                                    width="65px" style="padding-top:15px;padding-bottom:25px">
                                            </a>
                                            <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                        </span>
                                    </div>
                                    <div class="float-right text-center">
                                        <a href="{{ route('teacherCourse') }}">
                                            <p class="card-text text-dark"
                                                style="font-size: 20px; padding-top:25px ;">الكورسات المسجلة
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
                                        <span>
                                            <a href="#">
                                                <img src="https://cdn-icons-png.flaticon.com/128/12740/12740855.png"
                                                    width="65px" style="padding-top:15px;padding-bottom:25px">
                                            </a>
                                            <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                        </span>
                                    </div>
                                    <div class="float-right text-center">
                                        <a href="#">
                                            <p class="card-text text-dark"
                                                style="font-size: 20px; padding-top:25px ;">الدفعات المحصلة </p>
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
                                        <span>
                                            <img src="https://cdn-icons-png.flaticon.com/128/3476/3476376.png"
                                                width="65px" style="padding-top:15px;padding-bottom:25px">
                                            <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                        </span>
                                    </div>
                                    <div class="float-right text-center">
                                        <a href='#'>
                                            <p class="card-text text-dark"
                                                style="font-size: 20px; padding-top:25px ;">اشتركات الطلبة</p>
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
                                        <span>
                                            <a href="#">
                                                <img src="https://cdn-icons-png.flaticon.com/128/3678/3678289.png"
                                                    width="65px" style="padding-top:15px;padding-bottom:25px">
                                            </a>
                                            <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                        </span>
                                    </div>
                                    <div class="float-right text-center">
                                        <a href="#">
                                            <p class="card-text text-dark"
                                                style="font-size: 20px; padding-top:25px ;">
                                                ارباح المذكرات</p>
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
                                        <span>
                                            <a href="{{ route('getProfile') }}">
                                                <img src="https://cdn-icons-png.flaticon.com/128/3135/3135715.png"
                                                    width="65px" style="padding-top:15px;padding-bottom:25px">
                                            </a>
                                            <!-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> -->
                                        </span>
                                    </div>
                                    <div class="float-right text-center">
                                        <a href="{{ route('getProfile') }}">
                                            <p class="card-text text-dark"
                                                style="font-size: 20px; padding-top:25px ;">
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

            @if (auth()->user()->user_type == 'user')
                @if ($countCart >= 1)
                    <div>
                        <a href="{{ route('studentcart') }}" class="headone">
                            <h3
                                style="text-align: center; background-color: #175166 ;  width: 100%; padding:8px ; color: #fff; border-radius: 5px;">
                                استكمال سلة المشتريات</h3>
                        </a>
                    </div>
                @endif
                <div
                    style="display: flex; flex-direction: row; justify-content: space-around; flex-wrap: wrap;margin: 30px">
                    @foreach ($userSubject as $subject)
                        <a href="{{ route('showTutorial', $subject->id) }}" class="subjectCard">
                            <h4 style="color: aliceblue; margin: 15px; text-align: center">
                                {{ $subject->subject_name }}</h4>
                            <h6 style="color: aliceblue; margin: 15px; text-align: center">
                                أ/{{ $subject->techer->name }}</h6>
                            <div
                                style="width: 100%; background-color: aliceblue; text-align: center; padding: 15px; border-radius: 0 0 5px 5px;">
                                @php
                                    $isUserSub = false;
                                    foreach ($subs as $sub) {
                                        if ($sub->id == $subject->id) {
                                            $isUserSub = true;
                                            break;
                                        }
                                    }

                                    $isCourseInCart = false;
                                    foreach ($cart as $cartItem) {
                                        if ($cartItem->course_id == $subject->id) {
                                            $isCourseInCart = true;
                                            break;
                                        }
                                    }

                                @endphp
                                @if ($isUserSub == true)
                                    <h4>انت مشترك في هذا الكورس</h4>
                                @elseif($isCourseInCart == true)
                                    <h4> الكورس فى سلة المشتريات </h4>
                                @else
                                    <form
                                        action="{{ route('studentCartCreate', [$subject->id, $subject->monthly_subscription_price]) }}"
                                        method="post">
                                        @csrf
                                        <button class="buttonhover" type="submit">
                                            <h6 style="font-weight: bolder; font-size: 18px"> اشتراك شهري
                                                {{ $subject->monthly_subscription_price }} د.ك</h6>
                                        </button>
                                    </form>
                                    <form
                                        action="{{ route('studentCartCreate', [$subject->id, $subject->term_price]) }}"
                                        method="post">
                                        @csrf
                                        <button class="buttonhover" type="submit">
                                            <h6 style="font-weight: bolder; font-size: 18px"> اشتراك ترم كامل
                                                {{ $subject->term_price }} د.ك</h6>
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </a>
                    @endforeach
                </div>
            @endif
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
