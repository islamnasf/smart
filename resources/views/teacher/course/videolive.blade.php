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
            background-color: #b682fe;
            color: #fff;
        }

        .content {
            display: none;
            align-self: center
        }

        .content.active {
            display: block;
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
            <iframe style="margin: 5px;" src="https://player.vimeo.com/video/888788890?h=7a4bafb6a6" width="75%"
                height="350" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen></iframe>
            <div
                style="width: 90%;
            background-color: rgb(192, 192, 192);
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
                    <h2
                        style="font-size: 17px;
                    font-weight: bold;
                    margin: 20px">
                        لم يتم إضافة اى تعليقات أو روابط على هذا الدرس</h2>
                    @foreach ($video as $comments)
                        <h2 style="font-size: 17px;
                font-weight: bold;
                margin: 20px">
                            {{ $comments->comment }}</h2>
                    @endforeach
                </div>

                <div id="section2" class="content">
                    <h2>Section 2 Content</h2>
                    <p>This is the content of Section 2.</p>
                </div>


            </div>
        </div>

        <div
            style="
            width: 45%;
            height: 50px;
            background-color: rgb(192, 192, 192);
            border-radius: 8px;
            flex-direction: row;
            align-items: center;
            justify-content: space-around;">
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
