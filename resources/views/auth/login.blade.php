<style>
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
</body>
