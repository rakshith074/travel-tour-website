<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- swipper css link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

    <!-- font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- custom css file link-->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <!--header section starts-->
    <section class="header">
        <a href="home.php" class="logo">travel</a>

        <nav class="navbar">
            <a href="home.php">HOME</a>
            <a href="about.php">ABOUT</a>
            <a href="package.php">PACKAGE</a>
            <a href="book.php">BOOK</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

<!-- header section ends  -->


<!-- home section  starts  -->
<section class="home"> 
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background: url(/images/home/bg-slide01.jpg) no-repeat;">
                <div class="content">
                    <span>explore,discover, travel</span>
                    <h3>Travel around the world</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background: url(/images/home/bg-slide02.jpg) no-repeat;">
                <div class="content">
                    <span>explore,discover, travel</span>
                    <h3>Discover the new places</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background: url(/images/home/bg-slide03.jpg) no-repeat;">
                <div class="content">
                    <span>explore,discover, travel</span>
                    <h3>make your tour worthwhile</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    </div>
</section>
<!-- home section ends  -->

<!-- services section starts  -->

<section class="services">
    <h1 class="heading-title"> our services</h1>
    <div class="box-container">
    <div class="box">
        <img src="/images/home/service-icon01.jpg" 
        alt="" style="height:120px;width:120px;">
        <h3> adventure</h3>
    </div>

    <div class="box">
        <img src="/images/home/service-icon02.jpg" 
        alt="" style="height:120px;width:120px;">
        <h3> tour guide</h3>
    </div>

    <div class="box">
        <img src="/images/home/service-icon03.png" alt="" style="height:120px;width:120px;">
        <h3> trekking</h3>
    </div>

    <div class="box">
        <img src="/images/home/service-icon04.jpg" 
        alt="" style="height:120px;width:120px;">
        <h3> camp fire</h3>
    </div>

    <div class="box">
        <img src="/images/home/service-icon05.png" alt="" 
        style="height:120px;width:120px;">
        <h3> off road</h3>
    </div>

    <div class="box">
        <img src="/images/home/service-icon06.png" alt="" style="height:120px;width:120px;">
        <h3> camping</h3>
    </div>
</div>

</section>

<!-- service section ends  -->

<!-- home about section starts  -->

<section class="home-about">
    <div class="image">
        <img src="/images/home/service-aboutus.jpeg" alt="">

    </div>
    <div class="content">
        <h3>about us</h3>
    <p>"Welcome to our adventure hub, where every journey is an unforgettable tale waiting to be told. With a passion for exploration and a commitment to excellence, 
    we curate extraordinary travel experiences that ignite the spirit of wanderlust in every traveler. Join us on a voyage of discovery, 
    where each destination unveils its secrets and leaves a lasting imprint on your soul."</p>
    <a href="about.php" class="btn">read more</a>
    </div>
</section>

<!-- home about section ends  -->

<!-- home package section starts  -->

<section class="home-packages">
    <h1 class="heading-title">our packages</h1>
    <div class="box-container">
        <div class="box">
                <div class="image">
                    <img src="/images/home/home-package01.jpg" alt="" style="width:748;height:499;">
                </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p> elopre new adventures and tour travel along us</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="/images/home/home-package02.jpg" 
                alt="" style="width:748;height:499;">
            </div>
        <div class="content">
            <h3>adventure & tour</h3>
            <p> elopre new adventures and tour travel along us</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="/images/home/home-package03.jpeg" alt="">
        </div>
    <div class="content">
        <h3>adventure & tour</h3>
        <p> elopre new adventures and tour travel along us</p>
        <a href="book.php" class="btn">book now</a>
    </div>
</div>

    </div>

    <div class="load-more"><a href="package.php" class="btn">Load more</a></div>
</section>
<!-- home package section ends  -->

<!-- home  offer section starts  -->

<section class="home-offer">
    <div class="content">
        <h3>upto 50% off</h3>
        <p>get upto 50% off on your first booking and enjoy the experience of world with us</p>
        <a href="book.php" class="btn">book now</a>
    </div>
</section>

<!-- home  offer section ends  -->







<!-- footer section starts  -->
<section class="footer">
    <div class="box-container">
        <div class="box">
           <h3>Quick Links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
                <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
        </div>

        <div class="box">
            <h3>Extra Links</h3>
                 <a href="#"><i class="fas fa-angle-right"></i>Ask Questions</a> 
                 <a href="#"><i class="fas fa-angle-right"></i>About us</a> 
                 <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a> 
                 <a href="#"><i class="fas fa-angle-right"></i>Terms of use</a> 
        </div>

        <div class="box">
            <h3>Contact info</h3>
                <a href="#"><i class="fas fa-phone"></i>+123-456-7890</a> 
                <a href="#"><i class="fas fa-phone"></i>+112-456-7890</a> 
                <a href="#"><i class="fas fa-envelope"></i>tour@gmail.com</a> 
                <a href="#"><i class="fas fa-map"></i>Bangalore, India-560001</a> 
        </div>

        <div class="box">
            <h3>Follow us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a>
                <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
                <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i>Linkedin</a>
        </div>
    </div>
    <div class="credit"> created by <span> Rakshith H D </span>| all right reserved!</div>
</section>
<!-- footer section ends  -->
<!--swiper js link-->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custome js link-->
<script src="script.js"></script>


</body>
</html>