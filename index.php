<?php

// Source - https://stackoverflow.com/a/50899944
// Posted by Jack, modified by community. See post 'Timeline' for change history
// Retrieved 2026-09-26, License - CC BY-SA 4.0
session_start();
$show_success = false;
$success_message = "";

if(isset($_SESSION['success']) && !empty($_SESSION['success'])){
    $show_success = true;
    $success_message = $_SESSION['success'];
    unset($_SESSION['success']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ourenj Studio</title>
    <link rel="stylesheet" href="style.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Pinyon+Script&family=Teachers:wght@400..800&display=swap" rel="stylesheet">

</head>

    <header>
        <a href="index.php" class="logo">
        OURENJ<span>STUDIO</span>
        </a>

        <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="ourstory.html">Our Story</a>
        <a href="gallery.html">Gallery</a>
        <a href="services.html">Services</a>
        <a href="booking.html" class="booknow-btn">Book Now!</a>
    </nav>

        <div class="menu-profile-icons">
            <i class="bx bx-menu" id="menu-icon"></i>
            <a href="profile.php" alt="">
                <i class="bx bx-user-circle" id="user-profile"></i>
            </a>
        </div>

    </header>

    <body>
    <!-- Content on page -->
    <section class="home" id="banner">
        <div class="home-banner">

            <img src="images/ourenj-home.jpg">
            <h2 class="banner-logo">
            OURENJ<span>STUDIO</span></h2>
            <h3>Beauty, made personal.</h3>
            <div class="banner-buttons">
                <a href="booking.html" class="book-home-btn">Book Now!</a>
                <a href="services.html" class="services-home-btn">Services</a>
            </div>
        </div>
    </section>

    <section class="home" id="desc">
        <div class="home-desc">

        <iframe width="560" height="315" src="https://www.youtube.com/embed/oqbeOUidTQk?si=rhudMMk9cUwyNpN1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>            
        <div class="desc-text">

        <h3>Beauty Starts Here</h3>

        <p>
        At Ourenj Studio, we believe that self-care is more than just looking good. 
        Our studio provides a comfortable and relaxing space where you can enjoy 
        professional nail and lash services tailored to your personal style.
        </p>

    </div>

</div>

    </section>
    <section class="home" id="desc2">
    <div class="home-desc2">

        <h3>Why Choose Us?</h3>
    
        <div class="desc2-container">
            <div class="desc2-box">

                <img src="images/icon-calendar.png">
                <h4>Easy Booking</h4>
                <p>Multiple dates and time slots to choose from.</p>

            </div>

            <div class="desc2-box">

                <img src="images/icon-expert.png">
                <h4>Professional Service</h4>
                <p>We are trained and registered with Suruhanjaya Syarikat Malaysia (JR0149981-K).</p>

            </div>

            <div class="desc2-box">

                <img src="images/icon-service.png">
                <h4>High Ratings</h4>
                <p>Our customers come out satisfied and happy!</p>

            </div>

        </div>

    </div>

</section>

<section class="home-gallery-section" id="home-gallery">

    <h2>Gallery</h2>

    <div class="gallery-carousel">

        <button class="gallery-arrow gallery-prev" 
                type="button" 
                aria-label="Previous image">
            &#8592;
        </button>


<div class="gallery-carousel-images">

    <div class="gallery-card side-card">
        <img id="gallery-left"
             src="images/gallery1.jpg">


        <p class="gallery-caption" id="gallery-left-caption">

        </p>
    </div>

    <div class="gallery-card center-card">
        <img id="gallery-center"
             src="images/gallery2.jpg">

        <p class="gallery-caption" id="gallery-center-caption">

        </p>
    </div>

    <div class="gallery-card side-card">
        <img id="gallery-right"
             src="images/gallery3.jpg">

        <p class="gallery-caption" id="gallery-right-caption">

        </p>
    </div>

</div>



        <button class="gallery-arrow gallery-next" 
                type="button" 
                aria-label="Next image">
            &#8594;
        </button>

    </div>
 
    <br>

<section class="reviews-section" id="reviews">

    <div class="reviews-line"></div>

    <h2>Reviews</h2>

    <div class="reviews-container">

        <!-- Sarah -->
        <div class="review-card review-side">

            <i class="bx bxs-user-circle review-icon"></i>

            <h3>Amani</h3>

            <div class="review-stars">
                ★★★★★
            </div>

            <p>
ive been doing my nails with farah for 1year++ dah and im always satisfied with her work. her work is very clean and detailed. work station dia pon very clean. would definitely recommend to come to her!! (i pernah buat lash lift jugak and tahan lama gilaa)
            </p>

        </div>


        <div class="review-card review-main">

            <i class="bx bxs-user-circle review-icon"></i>

            <h3>Wardah</h3>

            <div class="review-stars">
                ★★★★★
            </div>

            <p>
               had such a great experience here removing my nails extension and lash lifts🤍 everything was done so gently and comfortably that i literally fell asleep during the session😭😭 farah was so soft spoken and careful and the result turned out so beautiful. definitely one of the most relaxing appointments i’ve ever had!!
            </p>

        </div>


        <div class="review-card review-side">

            <i class="bx bxs-user-circle review-icon"></i>

            <h3>Saqinah</h3>

            <div class="review-stars">
                ★★★★★
            </div>

            <p>
Absolutely loved my experience doing my nails here! Farah is such a meticulous and dedicated nail tech, always delivering good results based on my inspos. 3 hours went by fast when you have a fun company while pampering yourself
            </p>

        </div>

    </div>

</section> 

<script src="script.js"></script>

</body>

<!-- FOOTER -->

<footer class="footer">

    <div class="footer-main">

        <!-- OUR STUDIO -->
        <div class="footer-column footer-office">

            <h3>Our Studio</h3>

            <div class="footer-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.6984297084377!2d101.7662352!3d2.9029387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdc98624e07065%3A0xdf638442217b174a!2sOurenj%20Studio!5e0!3m2!1sen!2smy!4v1792935473327!5m2!1sen!2smy" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
            </div>

            <p>
                <i class="bx bx-phone"></i>
                +6017-579 5492
            </p>

            <p>
                <i class="bx bx-map"></i>
                Dengkil, Selangor
            </p>

        </div>


        <!-- SAY HELLO -->
        <div class="footer-column footer-hello">

            <h3>Say Hello</h3>

            <p class="footer-description">
                Interested in our beauty services or have
                a question? We'd love to hear from you.
            </p>

            <a href="mailto:ourenjstudio@gmail.com"
               class="footer-email">
                ourenjstudio@gmail.com
            </a>

            <a href="booking.html"
               class="footer-book-btn">
                Book Now!
            </a>

        </div>


        <!-- SOCIAL MEDIA -->
        <div class="footer-column footer-social">

            <h3>Follow Us</h3>

            <p>
                Keep up with our latest nails, lashes,
                brows and studio updates.
            </p>

            <div class="social-icons">

                <a href="https://www.instagram.com/ourenjstudio/"
                   aria-label="Instagram">
                    <i class="bx bxl-instagram"></i>
                </a>

                <a href="https://www.tiktok.com/@ourenjstudio"
                   aria-label="TikTok">
                    <i class="bx bxl-tiktok"></i>
                </a>

                <a href="https://api.whatsapp.com/send?phone=60175795492"
                   aria-label="WhatsApp">
                    <i class="bx bxl-whatsapp"></i>
                </a>


            </div>

            <p class="footer-social-text">
                @ourenjstudio
            </p>

        </div>

    </div>


    <!-- BOTTOM BAR -->

    <div class="footer-bottom">

        <div class="footer-bottom-links">

            <a href="index.php">HOME</a>

            <a href="ourstory.html">
                OUR STORY
            </a>

            <a href="gallery.html">
                GALLERY
            </a>

            <a href="services.html">
                SERVICES
            </a>

            <a href="booking.html">
                BOOKING
            </a>

        </div>


        <p>
            © 2026 Ourenj Studio. All Rights Reserved.
        </p>

    </div>

</footer>

</html>