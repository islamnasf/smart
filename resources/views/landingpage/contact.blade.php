<!Doctype html>
<html>

<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css"
        integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
</head>

<body>

    <section class="contact">
        <div class="content">
            <h2>تواصل معنا</h2>
            <p>اذا واجهت اي مشاكل يمكن التواصل مع ادارة الموقع</p>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>العنوان</h3>
                        <p>4671 Sugar Camp Road,<br>Owatonna,Minnesota,<br>55060</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>رقم الهاتف</h3>
                        <p>507-475-6094</p>
                    </div>
                </div>

                <div class="box">
                    <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>الايميل</h3>
                        <p>wrub7d78i0e@temporary-mail.net</p>
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
                        <input type="submit" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>