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
            height: 50vh;
        }

        .custom-div {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 50%;
            border-radius: 8px;
            position: relative;
            height:120px ;
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
    </style>
<div class="body">
    <div class="custom-div">
        <button class="close-btn" onclick="closeDiv(this)">حذف</button>
        <p>محتوى العنصر div يمكنك وضع أي شيء هنا.</p>
    </div>
    <div class="custom-div">
        <button class="close-btn" onclick="closeDiv(this)">حذف</button>
        <p>محتوى العنصر  يمكنك أي  هنا.</p>
    </div>
    <div class="custom-div">
        <button class="close-btn" onclick="closeDiv(this)">حذف</button>
        <p>محتوى العنصر 0000000 يمكنك أي  هنا.</p>
    </div>

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
<!-- row closed -->
@endsection
@section('js')

@endsection
