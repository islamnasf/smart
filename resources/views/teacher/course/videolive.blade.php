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
        .videostyle{
        width: 600px;
            height: 350px;
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
        .container1{
            display: flex;

            margin: 0% 10% 0% 10%;
        }
        .anothercontainer{
            width: 50%;
            background-color: rgb(192, 192, 192);
            border-radius: 8px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
        }
        /* 000 */
.tutorial {
      font-family: Arial, sans-serif;
      margin: 0 ;
      display: flex;
      justify-content: center;
      align-items: center;
     margin: 10px;
     margin-top: 100px;

    }
    .accordion {
      width: 500px;
      padding: 20px;
      background-color: #1e2028;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
    }
    .item {
      cursor: pointer;
      padding: 13px;
      background-color: #2980b9;
      color: #fff;
      border-radius: 4px;
      margin-bottom: 5px;
      transition: background-color 0.3s;
      font-size: 20px;
      font-weight: 800;
    }
    .item:hover {
      background-color: #0893c5;
    }
    .content {
      display: none;
      padding: 12px;
      border: 1px solid #ddd;
      border-radius: 2px;
      background-color: #ddd;
    }
    .insidecontent{
        border-bottom: 3px solid #2980b9;
        padding: 8px;
        margin: 4px;
        font-size: 16px;
        border-radius: 5px;
      font-weight: 800;
      transition: .3s;
    }
    .insidecontent:hover{
       background-color: #1e2028;
       color: #ddd;
       border-bottom: 3px solid #1e2028;
       transition: .3s;
    }
    .content.active {
      display: block;
    }
        @media screen and (max-width: 900px) {
         
         .videostyle{
             width: 500px;
             height: 250px;
         }
         .container1{
            display: block;
            align-items: center;
        }
        .anothercontainer{
            width: 80%;
            background-color: rgb(192, 192, 192);
            border-radius: 8px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
            margin: 0px auto;
        }
         }
         @media screen and (max-width: 600px) {
         
         .videostyle{
             width: 360px;
             height: 180px;
         }
         .container1{
            display: block;
            align-items: center;
        }
        .anothercontainer{
            width: 80%;
            background-color: rgb(192, 192, 192);
            border-radius: 8px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
            margin: 0px auto;
        }
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

    <div  class="container1">
        <div class="insidecontainer1">
            <h1 style="font-size: 22px;font-weight: bold;margin: 20px"> {{ $video->name }} </h1>
            <iframe style="margin: 5px;"src="{!! $video->link !!}" class="videostyle"   frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen></iframe>
            <div class="insidecontainer2">
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
        <div > 
            <!-- 0000 -->
<div class="tutorial">
<div class="accordion">
<h4 style="color: #ffffff ; text-align: center; ">قائمة دروس مادة {{$courses->subject_name}}</h4>

    @foreach($tutorials as $tutorial)
    <!-- <div class="item" onclick="toggleContent('content1')"> الوحدة التعليمية الاولي : التكاثر ف الانسان</div> -->
 <div class="item" onclick="toggleContent('{{ $tutorial['id'] }}')"> {{$tutorial->name}}</div> 
    <div class="content" id="{{ $tutorial['id'] }}">
    @foreach ($tutorial->video as $video)
        @if($video -> type == 'free' )
    <div  class="insidecontent" ><a href="#" width="100%"  style="text-decoration: none; color:#2980b9"><img src="https://cdn-icons-png.flaticon.com/128/2377/2377746.png" style="margin-top:5px ;" width="20px">  {{$video->name}} </a></div>
        @else
    <div  class="insidecontent"><img src="https://cdn-icons-png.flaticon.com/128/10464/10464776.png" style="margin-top:5px ;" width="20px">   {{$video->name}}</div>
        @endif
    @endforeach
    </div>
    @endforeach

  </div>

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script>
    function toggleContent(contentId) {
      $("#" + contentId).toggleClass("active").siblings(".content").removeClass("active");
    }
  </script>
<!-- 000 -->
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
