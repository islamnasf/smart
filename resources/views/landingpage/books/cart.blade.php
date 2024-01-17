@section('title')
المشتريات | Smart Student
@endsection
@include('landingpage.layouts.head')
<section id="ten">
  <div class="container bg-light d-flex justify-content-start align-items-end h-100">
    <h2 class="fw-bold fs-1 text-dark">عربة التسوق</h2>
  </div>
</section>
@php
$sessionId = session()->getId();
$bookInCartCount = \App\Models\BookCart::where('session_id', $sessionId)->count();
@endphp
@if($bookInCartCount > 0)
<section>
  <div class="container">
    <div class="row py-5 bg-light">
      <div class="col-lg-7">
        <div class="card border-warning fw-bold py-3">
          <h4 class="mt-3 px-4">عربة التسوق</h4>
          <hr class="border-warning fw-bold">
          @foreach($items as $item)
          @if($item->book_id)
          @php
          $book = \App\Models\Book::where('id', $item->book_id)->first();
          @endphp
          <div class="total row px-4 mb-5">
            <div class="col-lg-2">
              <a href="{{route('deleteCartBooksItem',$item->id)}}"><i class="fa-solid fa-trash text-danger"></i></a>
            </div>
            <div class="col-lg-2 text-center">
              <img src="/assets/ass/img/books.png" width="100" alt="">
            </div>
            <div class="col-lg-5">
              <div class="contant-cart">
                <h4 class="ms-5">{{$book->name}}</h4>
                <span class="fw-bold fs-5 text-dark ms-5"> {{$book->book_price}} د.ك</span>
              </div>
            </div>
            <div class="col-lg-3">
              <h5 class="text-center">الكمية</h5>
              <div class="btn_min_max">
                <span class="input-number-decrement quantity" data-id="2406">–</span>
                <input disabled="" type="number" id="count" data-price="2489.91" data-id="2406" name="count" class="quantity2406 form-control text-center input-number" value="1" min="1" step="1">
                <span class="input-number-increment quantity" data-id="2406">+</span>
              </div>
            </div>
          </div>
          @endif


          @if($item->package_id)
          @php
          $package = \App\Models\AnotherPackage::where('id', $item->package_id)->first();
          @endphp
          <div class="total row px-4 mb-5">
            <div class="col-lg-2">
            <a href="{{route('deleteCartBooksItem',$item->id)}}"><i class="fa-solid fa-trash text-danger"></i></a>
            </div>
            <div class="col-lg-2 text-center">
              <img src="/assets/ass/img/img-card1.png" width="100" alt="">
            </div>
            <div class="col-lg-5">
              <div class="contant-cart">
                <h4 class="ms-5">{{$package->name}}</h4>
                <h6 class="ms-5">{{$package->book()->count();}} مذكرات</h6>
                <span class="fw-bold fs-5 text-dark ms-2">{{$package->price}} د.ك</span> -
                <span class="fw-bold fs-5 text-danger ms-1 "><del>{{$package->price*2}} د.ك</del></span>
              </div>
            </div>
            <div class="col-lg-3">
              <h5 class="text-center">الكمية</h5>
              <div class="btn_min_max">
                <span class="input-number-decrement quantity" data-id="2406">–</span>
                <input disabled="" type="number" id="count" data-price="2489.91" data-id="2406" name="count" class="quantity2406 form-control text-center input-number" value="1" min="1" step="1">
                <span class="input-number-increment quantity" data-id="2406">+</span>
              </div>
            </div>
          </div>
          @endif
          @endforeach
          @php
          $total = 0;
          $discount = 0;
          @endphp
          @foreach($items as $item)
          @if($item->book_id)
          @php
          $book = \App\Models\Book::where('id', $item->book_id)->first();
          $total += $book->book_price;
          @endphp
          @endif
          @if($item->package_id)
          @php
          $package = \App\Models\AnotherPackage::where('id', $item->package_id)->first();
          $total += $package->price;
          $discount += $package->price;
          @endphp
          @endif
          @endforeach
        </div>
      </div>
      <div class="col-lg-5">
        <div class="card border-warning fw-bold border-3">
          <h4 class="mt-3 px-4">ملخص الطلبية</h4>
          <hr class="border-warning fw-bold">
          <div class="total d-flex justify-content-between px-4">
            <h5 class="fw-bold">الاجمالي</h5>
            <span class="fw-bold"> {{ $total+$discount }} د.ك </span>
          </div>
          <div class="total d-flex justify-content-between px-4">
            <h5 class="px-4 pt-3">الخصم</h5>
            <span class="px-4 pt-3">  - {{ $discount }} د.ك </span>
          </div>
          <hr class="border-warning fw-bold">
          <div class="total d-flex justify-content-between px-4">
            <h5 class="fw-bold">المجموع الكلي</h5>
            <span class="text-dark-200 fw-bold"> {{ $total }} د.ك </span>
          </div>
          <a class="btn btn-danger fw-bold my-3 mx-auto" href="#">اتمام عملية الشراء</a>
        </div>
      </div>
    </div>
  </div>
</section>
@else
<h1 class="text-center py-5"> لا يوجد مشتريات حاليا </h1>
@endif
@include('landingpage.layouts.footer')