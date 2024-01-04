<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/ass/css/all.min.css">
    <link rel="stylesheet" href="assets/ass/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/ass/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/ass/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="assets/ass/css/style.css">
    <title>Document</title>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg shadow-sm ">
            <div class="container">
              <a class="navbar-brand fw-bold" href="#"><img src="assets/ass/img/logo.png" height="56" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav fw-bold  fs-6 gap-3 mx-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">الرئيسية</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">المواد</a>
                  </li>
                  <li class="nav-item">
                            <a class="nav-link" href="#">المذكرات</a>
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
                    <h2 class="fs-1 fw-bold">منصة تعليمية بالكويت</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, ad voluptate. Mollitia labore suscipit vitae recusandae delectus voluptas nobis, praesentium autem, quia quos libero quasi fugiat aliquam eius voluptate voluptatibus.</p>
                    <button class="btn-20"><span>استكشف المواد</span></button>
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
                    <div class="card">
                        <img src="assets/ass/img/online-course.png" class="card-img-top p-5" alt="...">
                        <div class="card-body">
                          <h5 class="card-title btn-20 text-center"><span>الكورسات المسجلة</span></h5>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4 col-sm-12 mb-4">
                    <div class="card">
                        <img src="assets/ass/img/notepad.png" class="card-img-top p-5" alt="...">
                        <div class="card-body">
                          <h5 class="card-title btn-20 text-center"><span>المذكرات المطبوعة</span></h5>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4 col-sm-12 mb-4">
                    <div class="card">
                        <img src="assets/ass/img/presentation.png" class="card-img-top p-5" alt="...">
                        <div class="card-body">
                          <h5 class="card-title btn-20 text-center"><span>كورسات حضوري</span></h5>
                        </div>
                      </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-12 mb-4">
                    <div class="card">
                        <img src="assets/ass/img/tutorial.png" width="150" class="card-img-top p-5" alt="...">
                        <div class="card-body">
                          <h5 class="card-title btn-20 text-center"><span>كورسات أونلاين</span></h5>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4 col-sm-12 mb-4">
                    <div class="card">
                        <img src="assets/ass/img/professor.png" class="card-img-top p-5" alt="...">
                        <div class="card-body">
                          <h5 class="card-title btn-20 text-center"><span>مدرس خصوصي</span></h5>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4 col-sm-12 mb-4">
                    <div class="card">
                        <img src="assets/ass/img/data.png" class="card-img-top p-5" alt="...">
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
                    <div class="card">
                        <img src="assets/ass/img/img-card2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn fw-bold btn-dark text-light">Go somewhere</a>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4 col-sm-12 mb-4">
                    <div class="card">
                        <img src="assets/ass/img/img-card2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn fw-bold btn-dark text-light">Go somewhere</a>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4 col-sm-12 mb-4">
                    <div class="card">
                        <img src="assets/ass/img/img-card2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn fw-bold btn-dark text-light">Go somewhere</a>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
    <section id="courses">
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
    </section>
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
    <sectioin id="studen">
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
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 col-sm-12 text-center">
                    <img src="assets/ass/img/logo-white.png" width="300" alt="">
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
        </div>
    </footer>





    <script src="assets/ass/js/query-3.7.0.min.js"></script>
        <script src="assets/ass/js/owl.carousel.min.js"></script>
        <script src="assets/ass/js/all.min.js"></script>
        <script type="module" src="assets/ass/js/bootstrap.min.js"></script>
        <script type="module" src="assets/ass/js/script.js"></script>
</body>
</html>