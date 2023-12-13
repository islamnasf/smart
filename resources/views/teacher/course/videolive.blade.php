<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الفيديو</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
            <div style="width: 90%;height: 100px;background-color: rgb(192, 192, 192);border-radius: 10px;margin: 10px">
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

</body>

</html>
