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
            background-color: #175166;
            border: 1px solid #175166;
            display: flex;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 250px;
            border-radius: 8px;
            position: relative;
            height:150px ;
            margin: 10px  ;

        }
        .custom-div h2{
            margin:30px 50% 5px 5px; 
            color:#f4f4f4 ;
            font-size: 35px;
        }
        .custom-div p{
            color:#f4f4f4 ;
            margin-right: 60px;
            font-size: 25px;

        }
        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: transparent;
            color: #fff;
            border: none;
            padding: 5px 12px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 20px;
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
    .imgclose:hover {
        opacity: .9;
    }
    .donepay:hover{
        background-color: #444;
        box-shadow: 1px 1px 1px 2px black ;
        opacity: .8;
        


    }
    </style>
    <div>
        <h2 style="text-align: center; margin: 10px; background-color: #444; padding: 10px; color: #fff; border-radius: 5px;">  اجمالي المشتريات </h2>
    </div>
<div class="body">

    @foreach($cart as $cart)
    <div class="custom-div">
<form action="{{route('studentCartDelete',$cart->id)}}" method="post">
    @csrf
        <button class="close-btn"  onclick="closeDiv(this)"><img src="https://cdn-icons-png.flaticon.com/128/458/458594.png" width="28px" class="imgclose"></button>
        </form>
        <div style="flex-direction: column;">
        <h2>{{$cart->course->subject_name}}</h2>
        <p> سعر : {{$cart->price}} د.ك</p>
        </div>
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
        <h2 style="text-align: center; background-color:#ddd; padding: 8px;"> الاجمالي : {{$sumPrice}} د.ك</h2>
    </div>

    <div>
    <label style="display: block;">
        <input  style="text-align: right; background-color:#f4f4f4; padding: 8px;" type="radio" name="payment" value="one">
        الدفع بواسطة : KNET
    </label>
    <label style="display: block;">
        <input style="text-align: right; background-color:#f4f4f4; padding: 8px; " type="radio" name="payment" value="two">
        الدفع بواسطة : Bookeey PG
    </label>
    </div>
    <div>
       <button type="submit" style="width: 100%;  border: 0px; text-align: center; background-color:#085166; padding: 6px; color: #fff; font-size: 28px; margin: 3px; opacity: 1;" class="donepay">اتمام عملية الدفع</button>
    </div>
<!-- row closed -->
@endsection
@section('js')

@endsection
