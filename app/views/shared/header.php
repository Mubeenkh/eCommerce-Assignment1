<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $data ?></title>
    <!-- <title>Site Landing</title> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>
        body {
/*            background: lightgray;*/
            font-family: "Helvetica Neue", sans-serif;

            display: flex;
            padding: 10px;
            top: 5px;
        }

        .content {
            /* border: 1px solid black; */
            
        }

        /*.sidebar ul li {
            padding: 2px;
            
        }

        .container h1 {
           margin: 5px;
            
        }*/

        .container div{
/*            display: grid;*/
/*            margin: 5px;*/
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
                <li><a href="/Main/index">Landing page</a></li>
                <li><a href="/Main/about_us">About Us</a></li>
                <li><a href="/Contact/index">Contact Us</a></li>
                <li><a href="/Contact/read">See the message we get</a></li>
            </ul>

        </div>

        <div class="container">