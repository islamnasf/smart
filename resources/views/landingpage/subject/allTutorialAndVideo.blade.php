@section('title')
    مواد |  smart student
@endsection

@section('active1')
    active
@endsection

@include('landingpage.layouts.head')

<section id="ten">
    <div class="container bg-light d-flex justify-content-start align-items-end h-100">
        <h2 class="fw-bold fs-1 text-dark">مادة {{$courseDetails->subject_name}}</h2>
    </div>

    @if($courseDetails->tutorial->isEmpty())
        <h1 class="text-center py-5 mb-5">الفيديو غير موجود </h1>
    @else
        @foreach($courseDetails->tutorial as $index => $tutorial)
            @if($tutorial->video->isEmpty() && $tutorial->video[0]->link->isEmpty())
                <h1 class="text-center py-5 mb-5">الفيديو غير متاح</h1>
            @endif
        @endforeach
    @endif
</section>

<section id="videos">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <div class="accordion" id="accordionExample">

                    @foreach($courseDetails->tutorial as $index => $tutorial)
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne{{$index}}" aria-expanded="true" aria-controls="collapseOne">
                                    {{$tutorial->name}}
                                </button>
                            </h2>
                            <div id="collapseOne{{$index}}" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                @foreach($tutorial->video as $video)
                                    <div class="accordion-body d-flex justify-content-between @if($video->type != 'free')  bg-dark text-light @endif">
                                        <h5>{{$video->name}}</h5>
                                        <i class="fa-solid @if($video->type==='free') fa-eye @else fa-lock  @endif"></i>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="col-lg-6 col-sm-12 text-center">
                @foreach($courseDetails->tutorial as $index => $tutorial)
                    @if($index == 0) <!-- التحقق مما إذا كانت هذه هي الدورة التعليمية الأولى -->
                        <iframe src="{{$tutorial->video[0]->link}}" width="540" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                        <a class="btn btn-success" download href="{{route('fileDownload', $tutorial->video[0]->pdf)}}">مذكرة الدرس <i class="fa-solid fa-download"></i></a>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</section>

@include('landingpage.layouts.footer')
