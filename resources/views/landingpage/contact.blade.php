<!Doctype html>
<html>

<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet"  href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet"   href="http://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"  >
</head>

<body>

    <section class="contact">
        <div class="content">
            <h1 style="color: white; font-size: 40px;">تواصل معنا</h1>
            <h3 style="color: white;">اذا واجهت اي مشاكل يمكن التواصل مع ادارة الموقع</h3>
        </div>
        <div class="container">
            <div class="contactInfo">

                <div class="box">
                    <div style="color: #eee ; font-size: 65px;"> * </div>
                    <div class="text">
                        <h2 style="color:blanchedalmond; font-size: 30px;  margin: 0px auto; margin-right: 15px;">رقم الهاتف</h2>
                        <h4 style="color: white;">507-475-6094</h4>
                    </div>
                </div>

                <div class="box">
                <div style="color: #eee ; font-size: 65px;"> * </div>
                    <div class="text">
                    <h2 style="color:blanchedalmond ; font-size: 30px; margin-right: 15px ;">الايميل </h2>
                        <h4 style="color: white;">education@gmail.com</h4>
                        <p></p>
                    </div>
                </div>
            </div>



            <div class="contactForm">
                <form action="{{ route('postContact' )}}" method="post">
                    @csrf
                    <h2>ارسل رسالتك</h2>
                    <div class="inputBox">
                        <input type="text" name="name" required="required">
                        <span>الاسم</span>
                    </div>
                    <div class="inputBox">
                        <input type="phone" name="phone" required="required">
                        <span>رقم الهاتف</span>
                    </div>
                    <div class="inputBox">
                        <textarea required="required" name="message"></textarea>
                        <span>موضوع الرسالة...</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="ارسال ">
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
<script src=" https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.0/js/fontawesome.min.js "></script>
</html>