<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/ass/img/icon.png">
    <link rel="stylesheet" href="/assets/ass/css/all.min.css">
    <link rel="stylesheet" href="/assets/ass/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/ass/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/assets/ass/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="/assets/ass/css/style.css">
    <title> @yield('title') </title>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg shadow-sm ">
            <div class="container">
              <a class="navbar-brand fw-bold" href="index.html"><img src="/assets/ass/img/logo.png" height="56" alt=""></a>
              <div class="shoping">
                <img class="ms-4" src="/assets/ass/img/shopping.svg" width="50" alt="">
                <span class="text-danger fs-5 fw-bold">20</span>
              </div>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav fw-bold  fs-6 gap-3 mx-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html">الرئيسية</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('getLandingSubjectsStage')}}">المواد</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('getNotesStage')}}">المذكرات</a>
                  </li>
                 
                  <li class="nav-item">
                    <a class="nav-link " aria-disabled="true">المدرسين</a>
                  </li>
                </ul>

                @if (Auth::check())
                <a class="btn-20" href="{{ route('getProfile') }}"
                    style="text-decoration: none;"></button><span>{{ Auth()->user()->name }}</span></a>
            @else
                <a class="btn-20" href="{{ route('login') }}" ><span>تسجيل الدخول</span></a>
            @endif  
              </div>
            </div>
          </nav>
    </header>