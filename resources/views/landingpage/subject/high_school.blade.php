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
    <title>Document</title>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg shadow-sm ">
            <div class="container">
              <a class="navbar-brand fw-bold" href="#"><img src="/assets/ass/img/logo.png" height="56" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav fw-bold  fs-6 gap-3 mx-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">الرئيسية</a>
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
    <section id="top-hero">
        <h2 class="text-center mx-auto text-light fs-2 fw-bold">كل اللى تحتاجه للتفوق بمكان واحد</h2>
    </section>
    <section id="bottom-hero">
        <div class="container py-5">
            <h3 class="text-center pb-2 title">المرحلة الثانوية</h3>
            <div class="row text-center">
                <div class="col-lg-4 col-md-6 col-sm-12 pb-5">
                    <div class="box">
                        <a href="#" class="text-light">
                            <img src="/assets/ass/img/10.png" class="mb-3" width="250" alt="">
                            <h5 class="one">الصف العاشر</h5>
                        </a>
                    </div>
                    
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 pb-5">
                    <a href="#" class="text-light">
                        <img src="/assets/ass/img/11.png" class="mb-3" width="250" alt="">
                        <h5 class="two">الصف الحادي عشر</h5>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 pb-5">
                    <a href="#" class="text-light">
                        <img src="/assets/ass/img/12.png" class="mb-3" width="250" alt="">
                        <h5 class="there">الصف الثاني عشر</h5>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-dark text-light">
        <div class="container py-5 text-center">
            <div class="row">
                <div class="col-lg-6 col-sm-12 text-center">
                    <img src="/assets/ass/img/logo-white.png" width="300" alt="">
                    <p class="fw-bold pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, tempora.</p>
                </div>
                <div class="col-lg-6 col-sm-12 justify-content-center">
                    <div class="input-group  mb-5">
                        <input type="text" class="form-control" placeholder="Enter email" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-success fw-bold border-rad" type="button" id="button-addon2">Subscribe</button>
                    </div>
                    <div class="icon-sc">
                        <ul class="d-flex gap-3 justify-content-center align-items-center">
                            <li><i class="fa-brands fa-xl fa-facebook-f"></i></li>
                            <li><i class="fa-brands fa-xl fa-x-twitter"></i></li>
                            <li><i class="fa-brands fa-xl fa-instagram"></i></li>
                            <li><i class="fa-brands fa-xl fa-snapchat"></i></li>
                            <li><i class="fa-brands fa-xl fa-tiktok"></i></li>
                            <li><i class="fa-brands fa-xl fa-youtube"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="app text-center">
                <a href=""><img src="/assets/ass/img/google.png" width="200" alt=""></a>
                <a href=""><img src="/assets/ass/img/apple.png" width="200" alt=""></a>
            </div>
            <p class="text-center pt-5 text-d">جميع الحقوق محفوظة ل منصة Srmat Studen </p>
            <a class="link-warning text-decoration-none fw-bold text-center" href="https://coding-site.com" target="_blank" rel="noopener noreferrer"><span class="text-light fw-bold">made by</span>  <span class="text-danger"> &hearts;</span> coding-site.com</a>
        </div>
    </footer>
    <script src="/assets/ass/js/all.min.js"></script>
    <script src="/assets/ass/js/query-3.7.0.min.js"></script>
    <script src="/assets/ass/js/owl.carousel.min.js"></script>
    <script type="module" src="/assets/ass/js/bootstrap.min.js"></script>
    <script type="module" src="/assets/ass/js/script.js"></script>
</body>
</html>