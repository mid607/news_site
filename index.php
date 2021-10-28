<!DOCTYPE html>
<?php

require('News\DATABASE CONECT\DBCONECTION.php');

?>


<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tecknology news">
    <meta name="theme-color" content="black">
    <meta neme="keywords" content="technology news,games,xbox,ps,pc">
    <link rel="stylesheet" href="dist/css/sass_file.css">


    <title>Document</title>
</head>

<body>
    <?php 
    include_once('News/phpFunction/navbar.php'); 
    ?>


    <div class="clearFix"></div>


    <section class="sliders">
        <div class="slider-container">

            <span class="prev" id="prev"> <span class="left_arrow">

                </span></span>
            <div class="slider-controls" id="slider-controls">

                <div class="images">
                    <div id="slider-number" class="slider-number"></div>

                    <img src="background/atari.avif" alt="" class="">
                    <img src="background/cartoon - Copy.avif" alt="">
                    <img src="background/dream.avif" alt="">
                    <img src="background/phone - Copy.avif" alt="">
                    <img src="background/retro-games-.avif" alt="">
                </div>

                <div class="slider-indcators">
                    <div class="ind" id="ind"> </div>
                </div>
            </div>
            <span class="next" id="next">
                <span class="right_arrow">

                </span>
        </div>

    </section>

    <section class="mainSection">


        <main>
            <div class="article_card">

                <img src="" alt="" srcset="">

                <h3></h3>
                <p></p>
            </div>
        </main>
    </section>
    <footer class="end-page">
        <div class="frame">
            <a href="#" class="btn">
                <i class="fab fa-facebook-f" style="color: #3b5998;"></i>
            </a>
            <a href="#" class="btn">
                <i class="fab fa-twitter" style="color: #00acee;"></i>
            </a>
            <a href="#" class="btn">
                <i class="fab fa-dribbble" style="color: #ea4c89;"></i>
            </a>
            <a href="#" class="btn">
                <i class="fab fa-linkedin-in" style="color:#0e76a8;"></i>
            </a>
            <a href="#" class="btn">
                <i class="fab fa-get-pocket" style="color:#ee4056;"></i>
            </a>
            <a href="#" class="btn">
                <i class="far fa-envelope"></i>
            </a>
        </div>
    </footer>
</body>
<script src="dist/js/mian.js"></script>

</html>