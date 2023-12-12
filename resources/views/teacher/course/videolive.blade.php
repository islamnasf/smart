@extends('layouts.master')
@section('css')

@section('title')
    الفيديو
@stop
@endsection
@section('page-header')

<!-- breadcrumb -->
@endsection
@section('content')


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Video Page</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Bootstrap Video Container -->
<div class="container mt-5">
    <div class="embed-responsive embed-responsive-16by9">
        <!-- Replace the source URL with your own video URL -->
        <iframe src="https://player.vimeo.com/video/888788890?h=7a4bafb6a6" width="200" height="100"
            frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
        <p><a href="https://vimeo.com/888788890">RUN AMOK</a> from <a href="https://vimeo.com/shachar">Langlev Mager
                Media</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
    </div>
</div>


<!-- row closed -->
@endsection
@section('js')

@endsection
