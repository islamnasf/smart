@extends('layouts.master')
@section('css')

@section('title')
    سلة المشتريات
@stop
@endsection
@section('page-header')
<style>
        /* أسلوب التنسيق */
        .body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
           max-height: 80vh;
            margin: 0px auto;
        }

        .custom-div {
            background-color: #ccc;
            border: 1px solid #ccc;
            display: flex;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 250px;
            border-radius: 8px;
            position: relative;
            height:150px ;
            margin: 10px  ;
        }
        .custom-div p{
            margin: 25px ;
            color:#1e2028 ;
            font-size: 25px;

        }
        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #e74c3c;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
        }
        @media screen and (max-width: 600px) {
            .body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            height: 50vh;
            margin: 0px auto;
        }
            .custom-div {
                width: 280px;
                margin: 10px auto;
        }
    }
    </style>
    <div>
        <h2>  اجمالي المشتريات </h2>
    </div>
<div class="body">

    @foreach($cart as $cart)
    <div class="custom-div">
<form action="{{route('studentCartDelete',$cart->id)}}" method="post">
    @csrf
        <button class="close-btn" onclick="closeDiv(this)">حذف</button>
        </form>
        <p>{{$cart->course->subject_name}}</p>
        <p>{{$cart->price}}</p>
    </div>
    @endforeach

    <script>
        function closeDiv(button) {
            // الحصول على العنصر الأب (custom-div) للزر الذي تم النقر عليه
            var divElement = button.closest('.custom-div');
            
            // إخفاء العنصر
            if (divElement) {
                divElement.style.display = 'none';
            }
        }
    </script>
</div>

<div>
        <h2> الاجمالي : {{$sumPrice}} </h2>
    </div>
<!-- row closed -->
@endsection
@section('js')

@endsection
