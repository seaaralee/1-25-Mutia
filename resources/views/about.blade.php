<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title> About </title>
</head>
<body>
    <center>
    <h1> About Page </h1>
    <h2> {{ $name }} </h2>
    <p> {{ $description }} </p>
    <img src="images/{{ $image }}" alt="{{ $name }}">
    </center>

    <!-- <img src="images/kazuha.jpg" alt="kazuha">
    <h3> Kaedehara Kazuha </h3>
    <p> Genshin Impact Character, Anemo </p> -->
</body>
</html>