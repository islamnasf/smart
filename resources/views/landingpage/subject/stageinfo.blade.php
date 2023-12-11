<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Smart Student Live Clone</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #3498db;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        nav {
            background-color: #333;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            overflow: hidden;
        }

        nav li {
            float: left;
        }

        nav a {
            display: block;
            color: #fff;
            text-decoration: none;
            padding: 15px 20px;
        }

        nav a:hover {
            background-color: #555;
        }

        main {
            padding: 20px;
        }

        .hero {
            text-align: center;
            background-color: #f1c40f;
            padding: 50px;
            color: #333;
        }

        .cta-button {
            display: inline-block;
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            margin-top: 20px;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <header>
        <h1>Smart Student Live</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Courses</a></li>
            <li><a href="#">Features</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
    <main>
        <section class="hero">
            <h2>Welcome to Smart Student Live</h2>
            <p>Learn and grow with our online courses.</p>
            <a href="#" class="cta-button">Get Started</a>
        </section>
        <!-- Other sections/content here -->
    </main>
    <footer>
        <p>&copy; 2023 Smart Student Live. All rights reserved.</p>
    </footer>
    <script src="script.js"></script>
</body>

</html>
