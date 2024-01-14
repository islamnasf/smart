<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/ass/img/icon.png">
    <link rel="stylesheet" href="assets/ass/css/all.min.css">
    <link rel="stylesheet" href="assets/ass/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/ass/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/ass/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="assets/ass/css/style.css">
    <title>منصة تعلمية شاملة | SMART STUDEN</title>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg shadow-sm ">
            <div class="container">
              <a class="navbar-brand fw-bold" href="index.html"><img src="assets/ass/img/logo.png" height="56" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav fw-bold  fs-6 gap-3 mx-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html">الرئيسية</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/stages.html">المواد</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/stages_notes.html">المذكرات</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      الباقات
                    </a>
                    
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
    <section id="hero">
        <div class="container h-100">
            <div class="contant  d-flex  justify-content-center align-items-center">
                <div class="text">
                    <h2 class="fs-1 fw-bold">منصة تعليمية شاملة</h2>
                    <p class="fs-5">منصة تعليمية متكاملة بمدرسين محترفين ومحتوى متميز يغطي جميع المراحل الدراسية. تقدم مذكرات وكورسات على الإنترنت، مما يوفر تجربة تعلم شاملة وممتعة للطلاب.</p>
                    <a href="/stages.html"><button class="btn-20"><span>استكشف المواد</span></button></a>
                </div>
                <div class="icon-hero">
                    <img src="assets/ass/img/img-hero.png" width="620" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="services">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-12 mb-4 justify-content-center text-center align-items-center">
                    <div class="card bg-dark">
                        <img src="assets/ass/img/online-course.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title btn-20 text-center"><span>الكورسات المسجلة</span></h5>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4 col-sm-12 mb-4">
                    <div class="card bg-dark">
                        <img src="assets/ass/img/notepad.jpg" class="card-img-top " alt="...">
                        <div class="card-body">
                          <h5 class="card-title btn-20 text-center"><span>المذكرات المطبوعة</span></h5>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4 col-sm-12 mb-4">
                    <div class="card bg-dark">
                        <img src="assets/ass/img/presentation.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title btn-20 text-center"><span>كورسات حضوري</span></h5>
                        </div>
                      </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-12 mb-4">
                    <div class="card bg-dark">
                        <img src="assets/ass/img/tutorial.jpg" width="150" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title btn-20 text-center"><span>كورسات أونلاين</span></h5>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4 col-sm-12 mb-4">
                    <div class="card bg-dark">
                        <img src="assets/ass/img/professor.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title btn-20 text-center"><span>مدرس خصوصي</span></h5>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4 col-sm-12 mb-4">
                    <div class="card bg-dark">
                        <img src="assets/ass/img/data.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title btn-20 text-center"><span>اختبارات وبنوك</span></h5>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
    <section id="packages">
        <div class="container py-5">
            <h4 class="text-center fw-bold fs-3 title">أفضل الباقات</h4>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-12 mb-4">
                    <div class="card text-center">
                        <img src="assets/ass/img/img-card1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title fw-bold ">الباقة الفضية</h5>
                          <a href="#" class="btn fw-bold btn-dark text-light">شاهد المزيد</a>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4 col-sm-12 mb-4">
                    <div class="card text-center">
                        <img src="assets/ass/img/img-card2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title fw-bold">الباقة الذهبية</h5>
                          <a href="#" class="btn fw-bold btn-dark text-light">شاهد المزيد</a>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4 col-sm-12 mb-4">
                    <div class="card text-center">
                        <img src="assets/ass/img/img-card3.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title fw-bold">الباقة الماسية</h5>
                          <a href="#" class="btn fw-bold btn-dark text-light">شاهد المزيد</a>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section id="courses">
        <div class="container  py-5">
            <h4 class="text-center title fw-bold">أفضل المواد</h4>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <img src="assets/ass/img/img-card.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <img src="assets/ass/img/img-card.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <img src="assets/ass/img/img-card.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section> -->
    <section id="Teachers">
        <div class="container  py-5">
            <h4 class="text-center title fw-bold">المدرسين</h4>
            <div class="owl-carousel owl-theme">
                <div class="item d-flex justify-content-center align-items-center gap-4 ">
                        <img class="img-teach" src="assets/ass/img/icon-teach.png" alt="">
                        <div class="teach-text">
                            <h4>أ / اسلام ناصف</h4>
                            <ul class="d-flex g">
                                <li>
                                    <img class="img-star" src="assets/ass/img/star.png"  alt="">
                                </li>
                                <li>
                                    <img class="img-star" src="assets/ass/img/star.png"  alt="">
                                </li>
                                <li>
                                    <img class="img-star" src="assets/ass/img/star.png"  alt="">
                                </li>
                                <li>
                                    <img class="img-star" src="assets/ass/img/star.png"  alt="">
                                </li>
                                <li>
                                    <img class="img-star" src="assets/ass/img/star.png"  alt="">
                                </li>
                            </ul>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis aperiam eius</p>
                        </div>
                </div>
                <div class="item d-flex justify-content-center align-items-center gap-4">
                        <img class="img-teach" src="assets/ass/img/icon-teach.png" alt="">
                        <div class="teach-text">
                            <h4>أ / اسلام ناصف</h4>
                            <ul class="d-flex g">
                                <li>
                                    <img class="img-star" src="assets/ass/img/star.png"  alt="">
                                </li>
                                <li>
                                    <img class="img-star" src="assets/ass/img/star.png"  alt="">
                                </li>
                                <li>
                                    <img class="img-star" src="assets/ass/img/star.png"  alt="">
                                </li>
                                <li>
                                    <img class="img-star" src="assets/ass/img/star.png"  alt="">
                                </li>
                                <li>
                                    <img class="img-star" src="assets/ass/img/star.png"  alt="">
                                </li>
                            </ul>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis aperiam eius</p>
                        </div>
                </div>
                <div class="item d-flex justify-content-center align-items-center gap-4">
                        <img class="img-teach" src="assets/ass/img/icon-teach.png" alt="">
                        <div class="teach-text">
                            <h4>أ / اسلام ناصف</h4>
                            <ul class="d-flex g">
                                <li>
                                    <img class="img-star" src="assets/ass/img/star.png"  alt="">
                                </li>
                                <li>
                                    <img class="img-star" src="assets/ass/img/star.png"  alt="">
                                </li>
                                <li>
                                    <img class="img-star" src="assets/ass/img/star.png"  alt="">
                                </li>
                                <li>
                                    <img class="img-star" src="assets/ass/img/star.png"  alt="">
                                </li>
                                <li>
                                    <img class="img-star" src="assets/ass/img/star.png"  alt="">
                                </li>
                            </ul>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis aperiam eius</p>
                        </div>
                </div>
                <div class="item d-flex justify-content-center align-items-center gap-4">
                        <img class="img-teach" src="assets/ass/img/icon-teach.png" alt="">
                        <div class="teach-text">
                            <h4>أ / اسلام ناصف</h4>
                            <ul class="d-flex g">
                                <li>
                                    <img class="img-star" src="assets/ass/img/star.png"  alt="">
                                </li>
                                <li>
                                    <img class="img-star" src="assets/ass/img/star.png"  alt="">
                                </li>
                                <li>
                                    <img class="img-star" src="assets/ass/img/star.png"  alt="">
                                </li>
                                <li>
                                    <img class="img-star" src="assets/ass/img/star.png"  alt="">
                                </li>
                                <li>
                                    <img class="img-star" src="assets/ass/img/star.png"  alt="">
                                </li>
                            </ul>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis aperiam eius</p>
                        </div>
                </div>
                <div class="item d-flex justify-content-center align-items-center gap-4">
                        <img class="img-teach" src="assets/ass/img/icon-teach.png" alt="">
                        <div class="teach-text">
                            <h4>أ / اسلام ناصف</h4>
                            <ul class="d-flex g">
                                <li>
                                    <img class="img-star" src="assets/ass/img/star.png"  alt="">
                                </li>
                                <li>
                                    <img class="img-star" src="assets/ass/img/star.png"  alt="">
                                </li>
                                <li>
                                    <img class="img-star" src="assets/ass/img/star.png"  alt="">
                                </li>
                                <li>
                                    <img class="img-star" src="assets/ass/img/star.png"  alt="">
                                </li>
                                <li>
                                    <img class="img-star" src="assets/ass/img/star.png"  alt="">
                                </li>
                            </ul>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis aperiam eius</p>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <sectioin id="studen" class="bg-dark">
        <div class="container  py-5">
            <h4 class="text-center title fw-bold">اراء الطلاب</h4>
            <div class="owl-carousel owl-theme">
                <div class="item d-flex justify-content-center align-items-center gap-4 ">
                        <img class="img-teach" src="assets/ass/img/img-stu.png" alt="">
                        <div class="teach-text">
                            <h4>طالب / اسلام ناصف</h4>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis aperiam eius</p>
                        </div>
                </div>
                <div class="item d-flex justify-content-center align-items-center gap-4">
                        <img class="img-teach" src="assets/ass/img/img-gril.png" alt="">
                        <div class="teach-text">
                            <h4>طالب / اسلام ناصف</h4>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis aperiam eius</p>
                        </div>
                </div>
                <div class="item d-flex justify-content-center align-items-center gap-4">
                        <img class="img-teach" src="assets/ass/img/img-stu.png" alt="">
                        <div class="teach-text">
                            <h4>طالب / اسلام ناصف</h4>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis aperiam eius</p>
                        </div>
                </div>
                <div class="item d-flex justify-content-center align-items-center gap-4">
                        <img class="img-teach" src="assets/ass/img/img-gril.png" alt="">
                        <div class="teach-text">
                            <h4>طالب / اسلام ناصف</h4>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis aperiam eius</p>
                        </div>
                </div>
                <div class="item d-flex justify-content-center align-items-center gap-4">
                        <img class="img-teach" src="assets/ass/img/img-stu.png" alt="">
                        <div class="teach-text">
                            <h4>طالب / اسلام ناصف</h4>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis aperiam eius</p>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-dark text-light">
        <div class="container py-5 text-center">
            <div class="row">
                <div class="col-lg-6 col-sm-12 mb-3 text-center">
                    <img src="assets/ass/img/logo-white.png" width="300" alt="">
                    <div class="icon-sc mt-4">
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
                <div class="col-lg-6 col-sm-12 justify-content-center">
                    <div class="input-group  mb-5">
                        <input type="text" class="form-control" placeholder="Enter email" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-success fw-bold border-rad" type="button" id="button-addon2">Subscribe</button>
                    </div>
                    
                    <div class="app text-center">
                        <a target="_blank" href="https://play.google.com/store/apps/details?id=com.smart.smartstudent"><img src="assets/ass/img/google.png" width="200" alt=""></a>
                        <a href=""><img src="assets/ass/img/apple.png" width="200" alt=""></a>
                    </div>
                </div>
            </div>
            
            <p class="text-center pt-5 text-d">جميع الحقوق محفوظة ل منصة Srmat Studen </p>
            <a class="link-warning text-decoration-none fw-bold text-center" href="https://coding-site.com" target="_blank" rel="noopener noreferrer"><span class="text-light fw-bold">made by</span>  <span class="text-danger"> &hearts;</span> coding-site.com</a>
        </div>
    </footer>





    <script src="assets/ass/js/all.min.js"></script>
    <script src="assets/ass/js/query-3.7.0.min.js"></script>
    <script src="assets/ass/js/owl.carousel.min.js"></script>
    <script type="module" src="assets/ass/js/bootstrap.min.js"></script>
    <script type="module" src="assets/ass/js/script.js"></script>
</body>
</html>
