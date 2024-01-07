<!-- <style>
    body {
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        min-height: 100vh;
        font-family: 'Jost', sans-serif;
        background: url('assets/images/back.jpg') no-repeat center / cover;
        direction: rtl;
    }

    .main {
        width: 400px;
        max-width: 1090px;
        height: 535px;
        background: red;
        overflow: hidden;
        background: url("1.jpg") no-repeat center / cover;
        border-radius: 10px;
        box-shadow: 5px 20px 50px #000;
        margin-top: 5%;
    }

    #chk {
        display: none;
    }

    #signup {
        position: relative;
        width: 100%;
        height: 100%;
    }

    label {
        color: #fff;
        font-size: 2em;
        justify-content: center;
        display: flex;
        margin: 50px;
        margin-top: 40px;
        font-weight: bold;
        cursor: pointer;
        transition: .5s ease-in;
    }

    select,
    input {
        width: 60%;
        height: 38px;
        background: #e0dede;
        justify-content: center;
        display: flex;
        margin: 10px auto;
        padding: 3px;
        border: solid #ffffff 3px;
        outline: none;
    }

    select {
        width: 60%;
        height: 45px;
        background: #e0dede;
        justify-content: center;
        display: flex;
        margin: 0px auto;
        padding: 2px;
        border: solid #ffffff 3px;
        outline: none;
    }

    button {
        width: 50%;
        height: 35px;
        margin: 90px;
        justify-content: center;
        color: #fff;
        background: #573b8a;
        font-size: 1em;
        font-weight: bold;
        margin-top: 10px;
        outline: null;
        border: none;
        border-radius: 5px;
        transition: .2s ease-in;
        cursor: pointer;
    }

    button:hover {
        background: #6d44b8;
    }

    .login {
        height: 525px;
        background: #eee;
        border-radius: 60% / 10%;
        transform: translateY(45px);
        transition: .8s ease-in-out;
    }

    .login label {
        color: #0893c5;
        transform: scale(.7);
    }

    #chk:checked~.login {
        transform: translateY(-320px);
    }

    #chk:checked~.login label {
        padding-top: 25px;

        transform: scale(1);
    }

    #chk:checked~.signup label {
        transform: scale(.7);
    }
</style>

<body>
    <div class="main">
        <x-input-error :messages="$errors->get('phone')" style="font-size:15px; color:red; margin:0px auto " />
        <x-input-error :messages="$errors->get('password')" style="font-size:15px; color:red; margin:0px auto" />
        <input type="checkbox" id="chk" aria-hidden="true">
        <div class="signup">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <label for="chk" aria-hidden="true">تسجيل الدخول</label>

                <input type="text" name="phone" placeholder=" رقم الهاتف " required="">


                <input type="password" name="password" placeholder="كلمة السر" required
                    autocomplete="current-password" />
                <button>تسجيل دخول</button>
            </form>


        </div>
        <div class="login">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <label for="chk" aria-hidden="true">إنشاء عضوية جديدة </label>
                <input type="text" name="name" placeholder="اسم الطالب " required="">

                <select name="gender" required>
                    <option value="male">ذكر</option>
                    <option value="female">انثي</option>
                </select>
                <select id="category" name="grade">
                    <option value="ابتدائي">ابتدائي</option>
                    <option value="متوسط">متوسط</option>
                    <option value="ثانوي">ثانوي</option>
                </select>
                <select id="item" name="group"></select>
                <script>
                    // Sample data for items based on categories
                    const items = {
                        ابتدائي: ['الصف الرابع', 'الصف الخامس'],
                        متوسط: ['الصف السادس', 'الصف السابع', 'الصف الثامن', 'الصف التاسع'],
                        ثانوي: ['الصف العاشر ', 'الصف الحادي عشر ', 'الصف الثاني عشر ']
                    };

                    // Function to update the items based on the selected category
                    function updateItems() {
                        const categorySelect = document.getElementById('category');
                        const itemSelect = document.getElementById('item');
                        const selectedCategory = categorySelect.value;

                        // Clear existing options
                        itemSelect.innerHTML = '';

                        // Add new options based on the selected category
                        items[selectedCategory].forEach(item => {
                            const option = document.createElement('option');
                            option.value = item;
                            option.text = item;
                            itemSelect.add(option);
                        });
                    }
                    // Attach the updateItems function to the change event of the category select
                    document.getElementById('category').addEventListener('change', updateItems);

                    // Initial call to populate the items based on the default selected category
                    updateItems();
                </script>
                <input type="text" name="phone" placeholder="رقم الهاتف " required="">
                <input type="password" name="password" placeholder="كلمة السر" required="">
                <button>إنشاء حساب</button>
            </form>

        </div>

    </div>
</body> -->
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/ass/css/all.min.css" />
    <link rel="stylesheet" href="assets/ass/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/ass/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/ass/css/bootstrap.rtl.min.css" />
    <link rel="stylesheet" href="assets/ass/css/style.css" />
    <title>Document</title>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg shadow-sm ">
            <div class="container">
                <a class="navbar-brand fw-bold" href="#"><img src="assets/ass/img/logo.png" height="56" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav fw-bold  fs-6 gap-3 mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">الرئيسية</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">المواد</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">المذكرات</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                الباقات
                            </a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-disabled="true">المدرسين</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <button class="btn-20"><span>تسجيل دخول</span></button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <section id="login">
        <div class="container">
            <div class="row py-5 justify-content-center align-items-center">
                <div class="col-lg-7 col-sm-12">
                    <div class="img-login w-100 d-flex align-items-center justify-content-center">
                        <lottie-player src="assets/ass/img/Animation - 1703408643562.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></lottie-player>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-12">
                    <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link  active" id="tab-login" data-bs-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true">تسجيل دخول</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="tab-register" data-bs-toggle="pill" href="#pills-register" role="tab" aria-controls="pills-register" aria-selected="false">عضوية جديدة</a>
                        </li>
                    </ul>
                    <x-input-error :messages="$errors->get('phone')" style="font-size:15px; color:red; margin:0px auto " />
        <x-input-error :messages="$errors->get('password')" style="font-size:15px; color:red; margin:0px auto" />
                    <!-- Pills content -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <!-- <div class="text-center mb-3">
                                  <p>Sign in with:</p>
                                  <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-facebook-f"></i>
                                  </button>
                          
                                  <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-google"></i>
                                  </button>
                          
                                  <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-twitter"></i>
                                  </button>
                          
                                  <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-github"></i>
                                  </button>
                                </div> -->

                                <!-- <p class="text-center">تسجيل دخول</p> -->
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="loginName">رقم الهاتف</label>
                                    <input type="text" id="loginName" name="phone" class="form-control"  required/>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="loginPassword" >كلمة المرور </label>
                                    <input type="password" id="loginPassword" name="password" class="form-control" autocomplete="current-password" required />
                                </div>

                                <!-- 2 column grid layout -->
                                <!-- <div class="row mb-4">
                                  <div class="col-md-6 d-flex justify-content-center">
                                    <div class="form-check mb-3 mb-md-0">
                                      <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                                      <label class="form-check-label" for="loginCheck"> Remember me </label>
                                    </div>
                                  </div>
                          
                                  <div class="col-md-6 d-flex justify-content-center">
                                    <a href="#!">Forgot password?</a>
                                  </div>
                                </div> -->

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block mb-4"> تسجيل الدخول </button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf





                               
                                <!-- <div class="text-center mb-3">
                                    <p>Sign up with:</p>
                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-facebook-f"></i>
                                    </button>

                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-google"></i>
                                    </button>

                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-twitter"></i>
                                    </button>

                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-github"></i>
                                    </button>
                                </div> -->

                                <!-- <p class="text-center">or:</p> -->

                                <!-- Name input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="registerName"> اسم الطالب </label>
                                    <input type="text" id="registerName" name="name" class="form-control" required />
                                </div>
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                <label class="form-label" >رقم الهاتف</label>
                                    <input type="text" name="phone" required=""  class="form-control" required />
                                </div>
                               
                                <div class="form-outline mb-4">
                                    <select class="form-select" id="category" name="grade" aria-label="Default select example">
                                    <option value="ابتدائي">ابتدائي</option>
                                        <option value="متوسط">متوسط</option>
                                        <option value="ثانوي">ثانوي</option>
                                    </select>
                                </div>
                                <div class="form-outline mb-4">
                                    <select class="form-select" id="item" name="group" aria-label="Default select example">
                                        
                                    </select>
                                </div>
                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                <label class="form-label" for="registerPassword">كلمة المرور</label>
                                    <input type="password" name="password" required="" id="registerPassword" class="form-control" required />
                                </div>

                                <!-- Repeat Password input -->
                                <!-- <div class="form-outline mb-4">
                                    <input type="password" id="registerRepeatPassword" class="form-control" />
                                    <label class="form-label" for="registerRepeatPassword">Repeat password</label>
                                </div> -->

                                <!-- Checkbox -->
                                <!-- <div class="form-check d-flex justify-content-center mb-4">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked aria-describedby="registerCheckHelpText" />
                                    <label class="form-check-label" for="registerCheck">
                                        I have read and agree to the terms
                                    </label>
                                </div> -->

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block mb-3">انشاء</button>
                            </form>
                        </div>
                    </div>
                    <!-- Pills content -->
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-dark text-light">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 col-sm-12 text-center">
                    <img src="assets/ass/img/logo-white.png" width="300" alt="">
                    <p class="fw-bold pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, tempora.</p>
                </div>
                <div class="col-lg-6 col-sm-12 justify-content-center">
                    <div class="input-group  mb-5">
                        <input type="text" class="form-control" placeholder="Enter email" aria-label="Recipient's username" aria-describedby="button-addon2" required>
                        <button class="btn btn-success fw-bold border-rad" type="button" id="button-addon2">Subscribe</button>
                    </div>
                    <div class="icon-sc">
                        <ul class="d-flex gap-3 justify-content-center align-items-center">
                            <li><i class="fa-brands fa-xl fa-facebook-f"></i></li>
                            <li><i class="fa-brands fa-xl fa-x-twitter"></i></li>
                            <li><i class="fa-brands fa-xl fa-instagram"></i></li>
                            <li><i class="fa-brands fa-xl fa-snapchat"></i></li>
                            <li><i class="fa-brands fa-xl fa-tiktok"></i></li>
                            <li><i class="fa-brands fa-xl fa-youtube"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script>

    // Sample data for items based on categories
const items = {
    ابتدائي: ['الصف الرابع', 'الصف الخامس'],
    متوسط: ['الصف السادس', 'الصف السابع', 'الصف الثامن', 'الصف التاسع'],
    ثانوي: ['الصف العاشر ', 'الصف الحادي عشر ', 'الصف الثاني عشر ']
};

// Function to update the items based on the selected category
function updateItems() {
    const categorySelect = document.getElementById('category');
    const itemSelect = document.getElementById('item');
    const selectedCategory = categorySelect.value;

    // Clear existing options
    itemSelect.innerHTML = '';

    // Add new options based on the selected category
    items[selectedCategory].forEach(item => {
        const option = document.createElement('option');
        option.value = item;
        option.text = item;
        itemSelect.add(option);
    });
}
// Attach the updateItems function to the change event of the category select
document.getElementById('category').addEventListener('change', updateItems);

// Initial call to populate the items based on the default selected category
updateItems();
</script>
    <script src="assets/ass/js/all.min.js"></script>
    <script src="assets/ass/js/query-3.7.0.min.js"></script>
    <script src="assets/ass/js/owl.carousel.min.js"></script>
    <script type="module" src="assets/ass/js/bootstrap.min.js"></script>
    <script type="module" src="assets/ass/js/script.js"></script>
</body>

</html>