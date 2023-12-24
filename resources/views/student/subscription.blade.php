@extends('layouts.master')
@section('css')
@section('title')
    الطلبة
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@endsection
@section('content')

<div style="display: flex; flex-direction: column;height: 100vh;">
    <div class="row">
        <img src="{{ url('assets/images/education.jpg') }}"
            style="width:95%;  display: block; margin:30px; object-fit: contain; border-radius: 10px;" alt="">
    </div>
    <h1 style="text-align: center;font-family: 'Courier New', Courier, monospace;font-weight: bolder">قائمة إشتراكاتك
    </h1>
    <div style="display: flex;justify-content: space-evenly;width: 65%;align-self: center;flex-wrap: wrap;">
        @foreach ($user as $item)
            <div class="container mt-5">
                <a href="{{ route('showTutorial', $item->id) }}" class="card" style="width: 18rem;">
                    <div class="card-body" style="display: flex;flex-direction: column;justify-content: space-around">
                        <h5 style="text-align: center" class="card-title">{{ $item->subject_name }}</h5>
                        <p style="margin: 10px;text-align: center" class="card-text">{{ $item->techer->name }}</p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>

@endsection
@section('js')

@endsection
