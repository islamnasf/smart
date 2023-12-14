<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الفيديو</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 10px;
        }

        .tabs {
            display: flex;
            justify-content: space-around;
        }

        .tab {
            width: 50%;
            text-align: center;
            height: 38px;
            justify-content: center;
            align-items: center;
            display: flex;
            font-weight: bold;
            border-radius: 10px;
            border-width: 0px;
            background-color: #38236a;
            color: #fff;
        }

        .content {
            display: none;
            align-self: center
        }

        .content.active {
            display: block;
        }

        #align-form {
            margin-top: 20px;
        }

        .form-group p a {
            color: white;
        }

        #checkbx {
            background-color: black;
        }

        #darker img {
            margin-right: 15px;
            position: static;
        }

        .form-group input,
        .form-group textarea {
            background-color: black;
            border: 1px solid rgba(16, 46, 46, 1);
            border-radius: 12px;
        }

        form {
            width: 100%;
            margin: 6px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="border-radius: 5px">
        <a class="navbar-brand" href="#">Video Page</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <div style="display: flex;align-items: center;justify-content: space-between;flex-direction: row">
        <div style="display:flex;flex-direction: column;justify-content: space-around;align-items: center;width: 50%;">
            <h1 style="font-size: 22px;font-weight: bold;margin: 20px"> {{ $video->name }} </h1>
            <iframe style="margin: 5px;"src="https://player.vimeo.com/video/346184592?h=4bcbfba00b&color=ffffff&title=0&byline=0&portrait=0" width="80%"
                height="450" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen></iframe>
            <div
                style="width: 90%;
            background-color: rgb(230, 230, 230);
            border-radius: 10px;
            margin: 10px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            ">
                <div class="tabs">
                    <button class="tab" onclick="showTab('section1')">تعليقات الدرس</button>
                    <button class="tab" onclick="showTab('section2')">اضافة تعليق</button>
                </div>

                <div id="section1" class="content active">
                    @if (!is_null($comment) && count($comment) > 0)
                        <ul>
                            @foreach ($comment as $item)
                                <li>
                                    <h2 style="font-size: 17px;font-weight: bold;margin: 20px"> {{ $item->comment }}
                                    </h2>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <h2 style="font-size: 17px;
                font-weight: bold;
                margin: 20px">
                            لم يتم إضافة اى تعليقات أو روابط على هذا الدرس</h2>
                    @endif
                </div>

                <div id="section2" class="content">
                    <form id="algin-form" method="POST" action="{{ route('postVideoComment', $video->id) }}">
                        @csrf
                        <div class="form-group">
                            <h4 style="text-align: center;margin: 5px; color: gray;">إضافة تعليق جديد</h4>
                            <label style="margin: 5px; color: gray;" for="message">تعليقك</label>
                            <textarea required name="comment" id=""msg cols="30" rows="5" class="form-control"
                                style="background-color: rgb(255, 255, 255);"></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit"
                                class="btn bg-slate-900 btn-block btn-lg btn-primary waves-effect waves-light">اضافة
                                تعليق</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div
            style="
            width: 45%;
            background-color: rgb(192, 192, 192);
            border-radius: 8px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;">
            <h1 style="font-size: 22px;font-weight: bold;margin: 20px;color: #fff">باقي حلقات الدرس</h1>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
        function showTab(tabId) {
            // Hide all content sections
            const contentSections = document.querySelectorAll('.content');
            contentSections.forEach(section => section.classList.remove('active'));

            // Show the selected content section
            const selectedSection = document.getElementById(tabId);
            if (selectedSection) {
                selectedSection.classList.add('active');
            }
        }
    </script>
</body>

</html>
