@section('title')
مواد | Smart Student
@endsection
@section('active1')
active
@endsection
@include('landingpage.layouts.head')
<section id="ten">
    <div class="container bg-light d-flex justify-content-start align-items-end h-100">
        <h2 class="fw-bold fs-1 text-dark">المواد</h2>
    </div>
    @if($courses->count() > 0)

</section>
<section>
    <div class="container py-5">
        <h4 class="text-center title fw-bold pt-5">مواد الصف</h4>
        <div class="owl-carousel owl-theme pb-5 text-center">
            @foreach($courses as $course)
            <div class="item">
                <div class="card bg-light text-dark ">
                    <div class="contant-2 mt-3 ms-3 d-flex gap-5 justify-content-center align-items-center">
                        <h5 class="fw-bold">{{$course->subject_name}}</h5>
                        <img src="/assets/ass/img/books1.png" width="150" alt="">
                    </div>
                    <div class="shoping d-flex">
                        <a class="btn btn-warning mt-2 mx-auto text-dark fw-bold " href="{{route('login')}}" style="letter-spacing: .7px;"> إشتراك شهر {{$course->monthly_subscription_price}} د.ك</a>
                    </div>
                    <div class="shoping d-flex">
                        <a class="btn btn-warning my-1 mx-auto text-dark fw-bold " href="{{route('login')}}" style="letter-spacing: 1.1px;"> إشتراك ترم {{$course->term_price}} د.ك</a>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
        <div class="row ">
            @foreach($course_Packages as $package)
            <div class="col-lg-7 col-sm-12 mx-auto">
                <div class="card mb-3 w-100 bg-light text-dark">
                    <div class="contant-card d-flex align-items-center ">
                        <div class="contant-1 ps-4">
                            <h5 class="fw-bold  pt-2"> {{$package->name}} <span class="text-danger">(الذهبية)</span></h5>
                            <span class="text-dark d-block">(تشمل {{$package->course()->count();}}مواد)</span>
                            @foreach($package->course as $course)
                            <span class="text-dark">{{$course->subject_name}}</span>
                            @if (!$loop->last)
                            <span> - </span>
                            @endif
                            @endforeach
                        </div>
                        <div class="img-card1 ms-auto pe-4 py-4">
                            <img src="/assets/ass/img/img-card2.png" width="150" alt="">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center mx-auto gap-5 ">
                        <h6 class="fw-bold  pt-2"> سعر الباقة <span class="text-danger">({{$package->price}} د.ك)</span><del class="ms-2 d-block text-center">{{$package->price*2}} د.ك</del></h6>
                        <a class="btn btn-warning my-4 mx-auto text-dark fw-bold" href="{{route('login')}}">إشتراك</a>
                    </div>
                </div>
            </div>
            @endforeach
            <h4 class="fw-bold my-4 text-center">اقترحات</h4>
            @foreach($book_Packages as $package)
            <div class="col-lg-6 col-sm-12 mx-auto ">
                <div class="card mb-3 w-100 bg-light text-dark">
                    <div class="contant-card d-flex align-items-center ">
                        <div class="contant-1 ps-4">
                            <h5 class="fw-bold  pt-2"> {{$package->name}} <span class="text-danger">(الفضية)</span></h5>
                            <span class="text-dark d-block">(تشمل {{$package->book()->count();}} مذكرات)</span>
                            @foreach($package->book as $book)
                            <span class="text-dark">{{$book->name}}</span>
                            @if (!$loop->last)
                            <span> - </span>
                            @endif
                            @endforeach
                        </div>
                        <div class="img-card1 ms-auto pe-4 py-4">
                            <img src="/assets/ass/img/img-card1.png" width="150" alt="">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center mx-auto gap-5 ">
                        <h6 class="fw-bold  pt-2"> سعر الباقة <span class="text-danger">({{$package->price}} د.ك)</span><del class="ms-2 d-block text-center">{{$package->price*2}} د.ك</del></h6>
                        <a class="btn btn-warning my-4 mx-auto text-dark fw-bold" href="#">إضافة إلي السلة<i class="fa-solid fa-basket-shopping"></i></a>
                    </div>
                </div>
            </div>

            @endforeach

            @if ($bookPackage || $coursePackage)
            <div class="col-lg-6 col-sm-12 mx-auto">
                <div class="card mb-3 w-100 bg-light text-dark">
                    <div class="contant-card d-flex align-items-center ">
                        <div class="contant-1 ps-4">
                            <h5 class="fw-bold  pt-2"> الباقة <span class="text-danger">(الماسية)</span></h5>
                            <span class="text-dark d-block">(تشمل {{$bookPackage->book()->count();}} مذكرات & تشمل {{$coursePackage->course()->count();}}مواد)</span>
                            <div><strong> المذكرات : </strong>
                                @foreach($bookPackage->book as $book)
                                <span class="text-dark"> {{$book->name}}</span>
                                @if (!$loop->last)
                                <span> - </span>
                                @endif
                                @endforeach
                            </div>
                            <div> <strong>المواد : </strong>
                                @foreach($coursePackage->course as $course)
                                <span class="text-dark"> {{$course->subject_name}}</span>
                                @if (!$loop->last)
                                <span> - </span>
                                @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="img-card1 ms-auto pe-4 py-4">
                            <img src="/assets/ass/img/img-card3.png" width="150" alt="">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center mx-auto gap-5 ">
                        <h6 class="fw-bold  pt-2"> سعر الباقة <span class="text-danger">({{$bookPackage->price+$coursePackage->price}} د.ك)</span><del class="ms-2 d-block text-center">{{$bookPackage->price*2+$coursePackage->price*2 }} د.ك</del></span></h6>
                        <a class="btn btn-warning my-4 mx-auto text-dark fw-bold" href="{{route('login')}}">إشتراك</a>
                    </div>
                </div>
            </div>
            @endif

        </div>
</section>
@else
<div class="container text-center">
    <p class="text-dark fs-3">لا يوجد كورسات متاحة لهذا الصف </p>
</div>
@endif
@include('landingpage.layouts.footer')