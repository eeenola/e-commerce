<?php
@include 'config.php';

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniture Shop</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="furniture.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
 
    <header class="header">
        <a href="#" class="logo"><i class="fas fa-house-user"></i>ENOLA Furniture</a>
        <nav class="navbar">
            <a href="#home" style="color: pink;" class="active">Home</a>
            <a href="#products">Products</a>
            <a href="#about">About</a>
            <a href="#arrivals">Arrivals</a>
            <a href="#blogs">Blogs</a>
            <a href="#contact">Contact Us</a> 
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="search-box" class="fas fa-search"></div>
            <a href="addtocart.html" class="fas fa-shopping-cart"></a>
            <a href="payment.html" class="fas fa-money-check-alt"></a>
            
            <a href="login_form.php" class="far fa-user-circle"> </a>
            <a href="admin/index.php"> </a>
        </div>
        <form action="" class="search-form">
            <input type="search" placeholder="Search here..." id="input-box">
            <label for="input-box" class="fas fa-search"></label>
        </form>
    </header>

    <section class="home" id="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box" style="background: url(images/Background.jpg);">
                    <div class="content">
                        <h3>One sits more comfortably on a colour that one likes.</h3>
                        <p>Special Discount</p>
                        <div class="button">
                            <a href="sign up.html" target="_blank" class="btn">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box" style="background: url(images/background4.jpg);">
                    <div class="content">
                        <h3>Up to 30% Off</h3>
                        <p>On All Customers</p>
                        <div class="button">
                            <a href="sign up.html" target="_blank" class="btn">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box" style="background: url(images/background5.jpg);">
                    <div class="content">
                        <h3>Limited Offer</h3>
                        <p>Only for Short Time</p>
                        <div class="button">
                            <a href="sign up.html" target="_blank" class="btn">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box" style="background: url(images/background6.jpg);">
                    <div class="content">
                        <div class="button">
                            <a href="sign up.html" target="_blank" class="btn">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box" style="background: url(images/background3.jpg);">
                    <div class="content">
                        <div class="button">
                            <a href="sign up.html" target="_blank" class="btn">Shop Now</a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <section class="products" id="products">
        <h1 class="heading">Our <span>Products</span></h1>
        <div class=" swiper products-slider" data-aos="zoom-in">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="addtocart.html" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-eye"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                    <div class="image">
                        <img src="images/Antique temple.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Latest products</h3>
                        <div class="price"> $48.99 <span>$95.99</span></div>
                        <button class="buynow"><a href="#contact">Buy Now</a></button>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="addtocart.html" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-eye"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                    <div class="image">
                        <img src="images/bed.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Latest products</h3>
                        <div class="price"> $32.99 <span>$95.99</span></div>
                        <button class="buynow"><a href="#contact">Buy Now</a></button>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="addtocart.html" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-eye"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                    <div class="image">
                        <img src="images/book shelf.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Latest products</h3>
                        <div class="price"> $66.99 <span>$95.99</span></div>
                        <button class="buynow"><a href="#contact">Buy Now</a></button>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="addtocart.html" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-eye"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                    <div class="image">
                        <img src="images/chair.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Latest products</h3>
                        <div class="price"> $29.99 <span>$95.99</span></div>
                        <button class="buynow"><a href="#contact">Buy Now</a></button>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="addtocart.html" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-eye"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                    <div class="image">
                        <img src="images/coffee table.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Latest products</h3>
                        <div class="price"> $79.99 <span>$95.99</span></div>
                        <button class="buynow"><a href="#contact">Buy Now</a></button>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="addtocart.html" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-eye"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                    <div class="image">
                        <img src="images/hanging chair.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Latest products</h3>
                        <div class="price"> $89.99 <span>$95.99</span></div>
                        <button class="buynow"><a href="#contact">Buy Now</a></button>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="addtocart.html" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-eye"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                    <div class="image">
                        <img src="images/sofa.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Latest products</h3>
                        <div class="price"> $59.99 <span>$95.99</span></div>
                        <button class="buynow"><a href="#contact">Buy Now</a></button>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="addtocart.html" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-eye"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                    <div class="image">
                        <img src="images/table.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Latest products</h3>
                        <div class="price"> $49.99 <span>$95.99</span></div>
                        <button class="buynow"><a href="#contact">Buy Now</a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="content" data-aos="fade-right">
            <h3>About <span style="color: #fff;">Us</span></h3>
            <p>Simplicity carried to an extreme becomes elegance. Design is not just what it looks like and feels like. Design is how it works.
                Every great design begins with an even better story.Perfection is achieved not when there is nothing more to add, but when there is nothing more to take away.
                Your home should be a story of who you are, and be a collection of what you love.
                The question of what you want to own is actually the question of how you want to live your life.</p>
            <a href="#" class="btn">Read More</a>
        </div>
    </section>

    <section class="arrivals" id="arrivals">
        <h1 class="heading">New <span>Arrivals</span></h1>
        <div class="box-container">
            <div class="box" data-aos="fade-right">
                <div class="icons">
                    <a href="addtocart.html" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="#" class="fas fa-share"></a>
                </div>
                <div class="image">
                    <img src="images/bed2.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>Latest products</h3>
                    <div class="price"> $45.99 <span>$95.99</span></div>
                </div>
            </div>
            <div class="box" data-aos="fade-down">
                <div class="icons">
                    <a href="addtocart.html" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="#" class="fas fa-share"></a>
                </div>
                <div class="image">
                    <img src="images/Book shelf 2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Latest products</h3>
                    <div class="price"> $35.99 <span>$95.99</span></div>
                </div>
            </div>
            <div class="box" data-aos="fade-left">
                <div class="icons">
                    <a href="addtocart.html" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="#" class="fas fa-share"></a>
                </div>
                <div class="image">
                    <img src="images/food deliver.jfif" alt="">
                </div>
                <div class="content">
                    <h3>Latest products</h3>
                    <div class="price"> $50.99 <span>$95.99</span></div>
                </div>
            </div>
            <div class="box" data-aos="fade-right">
                <div class="icons">
                    <a href="addtocart.html" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="#" class="fas fa-share"></a>
                </div>
                <div class="image">
                    <img src="images/sofa1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Latest products</h3>
                    <div class="price"> $69.99 <span>$95.99</span></div>
                </div>
            </div>
            <div class="box" data-aos="fade-down">
                <div class="icons">
                    <a href="addtocart.html" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="#" class="fas fa-share"></a>
                </div>
                <div class="image">
                    <img src="images/sofa2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Latest products</h3>
                    <div class="price"> $79.99 <span>$95.99</span></div>
                </div>
            </div>
            <div class="box" data-aos="fade-left">
                <div class="icons">
                    <a href="addtocart.html" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="#" class="fas fa-share"></a>
                </div>
                <div class="image">
                    <img src="images/sofa3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Latest products</h3>
                    <div class="price"> $59.99 <span>$95.99</span></div>
                </div>
            </div>
            <div class="box" data-aos="fade-left">
                <div class="icons">
                    <a href="addtocart.html" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="#" class="fas fa-share"></a>
                </div>
                <div class="image">
                    <img src="images/table1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Latest products</h3>
                    <div class="price"> $49.99 <span>$95.99</span></div>
                </div>
            </div>
            <div class="box" data-aos="fade-left">
                <div class="icons">
                    <a href="addtocart.html" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="#" class="fas fa-share"></a>
                </div>
                <div class="image">
                    <img src="images/table.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Latest products</h3>
                    <div class="price"> $39.99 <span>$95.99</span></div>
                </div>
            </div>
            
        </div>
    </section>

    <section class="contact" id="contact">
        <h1 class="heading">Contact <span>Us</span></h1>
        <div class="row">
            <form action="">
                <h3 data-aos="zoom-in">Place Your Order's !</h3>
                <input data-aos="zoom-in" type="text" placeholder="Your name" class="box">
                <input data-aos="zoom-in" type="email" placeholder="Your email" class="box">
                <input data-aos="zoom-in" type="Number" placeholder="Your number" class="box">
                <textarea data-aos="zoom-in" placeholder="your address" class="box" cols="30" rows="10"></textarea>
                <input data-aos="zoom-in" type="submit" value="Order Now !" class="btn">
            </form>

        </div>
    </section>

    <section class="blogs" id="blogs">
        <h1 class="heading">our <span>blogs</span></h1>
        <dic class="box-container">
            <div class="box" data-aos="fade-right">
                <div class="image">
                    <img src="images/library.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Believe in the Magic of Interior.</h3>
                    <p>Your home should be a story of who you are, and be a collection of what you love.</p>
                    <a href="#" class="btn">read more</a>
                    <div class="icons">
                        <a href="#"><i class="fas fa-calendar"></i>4th Jan,2021</a>
                        <a href="#"><i class="fas fa-user"></i>by admin</a>
                    </div>
                </div>
            </div>
            <div class="box" data-aos="fade-down">
                <div class="image">
                    <img src="images/living room.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Believe in the Magic of Wood.</h3>
                    <p>We need objects to remind us of the commitments we’ve made. All designed objects are propaganda for a way of life.</p>
                    <a href="#" class="btn">Read More</a>
                    <div class="icons">
                        <a href="#"><i class="fas fa-calendar"></i> 14th Jan,2022</a>
                        <a href="#"><i class="fas fa-user"></i>by admin</a>
                    </div>
                </div>
            </div>
            <div class="box" data-aos="fade-left">
                <div class="image">
                    <img src="images/hotel1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Believe in the Magic of Furniture.</h3>
                    <p>Design creates culture. Culture shapes values. Values determine the future. </p>
                    <a href="#" class="btn">Read More</a>
                    <div class="icons">
                        <a href="#"><i class="fas fa-calendar"></i>24th Jan,2019</a>
                        <a href="#"><i class="fas fa-user"></i>by admin</a>
                    </div>
                </div>
            </div>
        </dic>
    </section>

    <section class="footer" id="footer">
        <div class="box-container">
            <div class="box" data-aos="fade-right">
                <h3>Our Branches</h3>
                <a href="#"><i class="fas fa-map-marker-alt"></i>Pokhara</a>
                <a href="#"><i class="fas fa-map-marker-alt"></i>Kathmandu</a>
                <a href="#"><i class="fas fa-map-marker-alt"></i>Chitwan</a>
                <a href="#"><i class="fas fa-map-marker-alt"></i>Butwal</a>
                <a href="#"><i class="fas fa-map-marker-alt"></i>Biratnagar</a>
            </div>
            <div class="box" data-aos="fade-down">
                <h3>Quick links</h3>
                <a href="#"><i class="fas fa-arrow-right"></i>Home</a>
                <a href="#"><i class="fas fa-arrow-right"></i>Products</a>
                <a href="#"><i class="fas fa-arrow-right"></i>About</a>
                <a href="#"><i class="fas fa-arrow-right"></i>Arrivals</a>
                <a href="#"><i class="fas fa-arrow-right"></i>Contact</a>
                <a href="#"><i class="fas fa-arrow-right"></i>Blogs</a>

            </div>
            <div class="box" data-aos="fade-up">
                <h3>Contact us</h3>
                <a href="#"><i class="fas fa-phone"></i>+977 9861589980</a>
                <a href="#"><i class="fas fa-phone"></i>+01 5140017</a>
                <a href="#"><i class="fas fa-envelope"></i>cixyapoudel123@gmail.com</a>
                <a href="#"><i class="fas fa-map-marker-alt"></i>Nagarjun-6, Sitapaila, Kathmandu,Nepal</a>
            </div>
            <div class="box" data-aos="fade-left">
                <h3>Contact us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
                <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
                <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i>Linkedin</a>
                <a href="#"><i class="fab fa-pinterest"></i>Pinterest</a>
            </div>
        </div>
        <div class="credit">Created by <span>Shikshya</span>| All Rights Reserved</div>

    </section>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="furniture.js"></script>
    <script src="addtocart.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>