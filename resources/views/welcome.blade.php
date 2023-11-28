<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ URL::asset('css/headers.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/slide.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/footer.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
        integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <title>Home</title>
</head>

<body>

    <div class="main">
        <div class="headMain">
            <div class="itemHeader">
                <i class="bi bi-envelope" style="font-size: 2rem; color: rgb(64, 226, 255);"></i>
                <div style="margin: 10px;">
                    <h4>البريد الالكتروني</h4>
                    <a href="#" class="contact">any@any.com</a>
                </div>
            </div>
            <div class="itemHeader">
                <div style="margin: 10px;">
                    <h1>Education</h1>
                </div>
            </div>
            <div class="itemHeader">
                <i class="bi bi-telephone-fill" style="font-size: 2rem; color: rgb(64, 226, 255);"></i>
                <div style="margin: 10px;">
                    <h4>البريد الالكتروني</h4>
                    <a href="#" class="contact">any@any.com</a>
                </div>
            </div>
        </div>

        <div class="header-bar">
            <a href="{{route('contactus')}}">اسئل الادارة</a>
            <a href="{{route('login')}}">تسجيل الدخول</a>
            <a href="#">بنك الاسئلة</a>
            <a href="#">المذكرات</a>
            <a href="#">استكشف المواد</a>
            <a href="{{route('home')}}">الرئيسية</a>
        </div>

        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8c3R1ZGVudHN8ZW58MHx8MHx8fDA%3D"
                    style="width:100%;height: 500px; object-fit: contain; background-color: #505050;border-radius: 10px;">
                <div class="text">Caption Text</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8c3R1ZGVudHN8ZW58MHx8MHx8fDA%3D"
                    style="width:100%;height: 500px; object-fit: contain; background-color: #505050;border-radius: 10px;">
                <div class="text">Caption Two</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="https://images.unsplash.com/photo-1682687220777-2c60708d6889?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwzMXx8fGVufDB8fHx8fA%3D%3D"
                    style="width:100%;height: 500px; object-fit: contain; background-color: #505050;border-radius: 10px;">
                <div class="text">Caption Three</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>


        <footer class="footer">
            <div class="contact-info">
                <h3>Contact Us</h3>
                <p>123 Main Street, City</p>
                <p>Email: info@example.com</p>
                <p>Phone: 123-456-7890</p>
            </div>

            <div class="social-media">
                <a href="#" target="_blank"><i class="bi bi-facebook"
                        style="font-size: 2rem; color: rgb(0, 26, 255);"></i></a>
                <a href="#" target="_blank"><i class="bi bi-instagram"
                        style="font-size: 2rem; color: rgb(193, 36, 255);"></i></a>
                <a href="#" target="_blank"><i class="bi bi-whatsapp"
                        style="font-size: 2rem; color: rgb(50, 255, 60);"></i></a>
            </div>
        </footer>


        <script>
            let slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("dot");
                if (n > slides.length) { slideIndex = 1 }
                if (n < 1) { slideIndex = slides.length }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
            }
        </script>

</body>

</html>