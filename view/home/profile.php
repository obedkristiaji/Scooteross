<?php
$halamanSekarangNav = 'theTeam';
$halamanSekarangButton = '';
?>
<div class="flex-container" style="background-color:#5F4B8B">
    <div class="flex-header">
        <h1 style="color:white">Meet the Team</h1>
        <div>
            <button class="loginHalamanUtama" onclick="window.location = `./index`">Home</button>
            <button class="loginHalamanUtama" onclick="window.location = `./about-us`">About Us</button>
        </div>
    </div>


    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="view/img/obed.JPG" style="width:1000px; vertical-align: middle;">
            <div class="text">Obed Kristiaji</div>
        </div>

        <div class="mySlides fade">
            <img src="view/img/kezia.jpg" style="width:1000px; vertical-align: middle;">
            <div class="text">Florenthia Kezia</div>
        </div>

        <div class="mySlides fade">
            <img src="view/img/rama.jpg" style="width:1000px; vertical-align: middle;">
            <div class="text">Rama Fauzi</div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
</div>

<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
</script>