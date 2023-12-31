@extends('layouts.master')
@section('css')
@section('title')
    التقارير
@stop
@endsection
@section('page-header')

<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->


<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">حسابات الكورسات المسجلة</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>

<div class="container mt-4">
    <!-- Report Table -->
    <div class="card mt-4">
        <div class="card-header">
            <h5 class="card-title">التقارير</h5>
        </div>
        <div class="card-body">
            <!-- Your report table goes here -->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">إجمالى مبيعات المواد</th>
                        <th scope="col">إجمالى أرباح المنصة من المواد</th>
                        <th scope="col">إجمالى أرباح المعلمين من الباقات</th>
                        <th scope="col">إجمالى أرباح المعلمين من المواد</th>
                        <th scope="col">إجمالى مبيعات الباقات </th>
                        <th scope="col">إجمالى أرباح المنصة من الباقات</th>
                        <!-- Add more columns as needed -->
                    </tr>
                </thead>
                <tbody>
                    <!-- Sample data -->
                    <tr>
                        <td>$5000</td>
                        <td>$5000</td>
                        <td>$5000</td>
                        <td>$5000</td>
                        <td>$5000</td>
                        <td>$5000</td>
                    </tr>
                    <!-- Add more rows with data -->
                </tbody>
            </table>
            <h3 class="navbar-brand">إجمالى مبيعات المنصة خلال الترم : 4418 د.ك</h3>
        </div>
    </div>
</div>
<script>
    
</script>

<!-- row closed -->
@endsection
@section('js')

@endsection
