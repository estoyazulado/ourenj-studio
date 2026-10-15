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
            <h2>Ourenj Studio</h2>
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
                <img id="gallery-left" src="images/gallery1.jpg" alt="Gallery image">
            </div>

            <div class="gallery-card center-card">
                <img id="gallery-center" src="images/gallery2.jpg" alt="Gallery image">
            </div>

            <div class="gallery-card side-card">
                <img id="gallery-right" src="images/gallery3.jpg" alt="Gallery image">
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

            <h3>Sarah</h3>

            <div class="review-stars">
                ★★★★★
            </div>

            <p>
                So clean, great greet from nail tech and
                beautiful nails as a result. Will come here often
                because of friendly service!
            </p>

        </div>


        <div class="review-card review-main">

            <i class="bx bxs-user-circle review-icon"></i>

            <h3>Pavitra</h3>

            <div class="review-stars">
                ★★★★★
            </div>

            <p>
                I’ve had such a wonderful experience at this salon!
                The staff is super kind and skilled, and they make you 
                feel comfortable right away. The results are always beautiful, 
                and I’m never disappointed. This is my go to beauty salon and I recommend it to everyone!
            </p>

        </div>


        <div class="review-card review-side">

            <i class="bx bxs-user-circle review-icon"></i>

            <h3>Safia</h3>

            <div class="review-stars">
                ★★★★★
            </div>

            <p>
                Recommended! The staff is very friendly and very good
                workmanship. Worth the price. Will come again!
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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.7027686602273!2d101.7665596!3d2.9017081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdc9c6e4ede543%3A0x1df550b66139e08b!2sCerrado%20%40%20Southville%20City!5e0!3m2!1sen!2smy!4v1791419745354!5m2!1sen!2smy" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
            </div>

            <p>
                <i class="bx bx-phone"></i>
                +60 12-345 6789
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

                <a href="https://www.threads.com/@ourenjstudio"
                   aria-label="Threads">
                    <i class="bxl bx-threads"></i>
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