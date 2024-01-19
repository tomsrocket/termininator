<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TERMIN INATOR</title>
    <link rel="stylesheet" href="index.css">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
  </head>
  <body>

    <div class="context">
        <h1>Termininator</h1>
        <center>
                <img class="minator" src="<?php
                    $PATH = 'images/logo/';
                    $files = glob(realpath($PATH) . '/*.*');
                    $file = array_rand($files);
                    echo $PATH . basename($files[$file]);
                ?>" />
        </center>
    </div>


    <div class="area bg<?= rand(1,8) ?>" >
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div >



    <div class="wrapper">
        <div class="container">
          Hier wird bald so ne Terminseite entstehen, vielleicht.
        </div>
    </div>





    <!--script src="index.js"></script -->
  </body>
</html>
