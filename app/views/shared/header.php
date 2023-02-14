<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $data ?></title>
    <!-- <title>Site Landing</title> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <style>
        body {
/*            background: lightgray;*/
            font-family: "Helvetica Neue", sans-serif;

            display: flex;
            padding: 10px;
            top: 5px;
        }
           
        .about-content div{
            gap:5px;
            margin-bottom: 10px;
        }
        

    </style>
</head>

<body>
    <!-- <div class="content"> -->
        <div class="sidebar">

            <ul>
                <!-- if i dont add "/" in front of the href path, it will keep adding to the url -->
                <li><a href="/Main/index">Landing page</a></li>
                <li><a href="/Main/about_us">About Us</a></li>
                <li><a href="/Contact/index">Contact Us</a></li>
                <li><a href="/Contact/read">See the message we get</a></li>
            </ul>

        </div>

        <div class="container">