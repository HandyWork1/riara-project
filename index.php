<?php

session_start();

// Check if the user is logged in
if (!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] != true) {
    header("location: login.php");
    exit;
}

?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Khal's Restaurant || Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

        <!-- Normalize CSS -->
        <link rel="stylesheet" href="css/normalize.css">

        <!-- Main CSS -->
        <link rel="stylesheet" href="css/main.css">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.min.css">

        <!-- Font-awesome CSS-->
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!-- Owl Caousel CSS -->
        <link rel="stylesheet" href="vendor/OwlCarousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendor/OwlCarousel/owl.theme.default.min.css">

        <!-- Main Menu CSS -->
        <link rel="stylesheet" href="css/meanmenu.min.css">

        <!-- nivo slider CSS -->
        <link rel="stylesheet" href="vendor/slider/css/nivo-slider.css" type="text/css" />
        <link rel="stylesheet" href="vendor/slider/css/preview.css" type="text/css" media="screen" />

        <!-- Datetime Picker Style CSS -->
        <link rel="stylesheet" href="css/jquery.datetimepicker.css">



        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/style.css">

        <!-- Modernizr Js -->
        <script src="js/modernizr-2.8.3.min.js"></script>

    </head>
    <body>
        <div class="wrapper">
            <!-- Header Area Start-->
            <header>
                <div class="header2-area">
                    <div class="header-top-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="header-top-left">
                                        <ul>
                                            <li><i class="fa fa-phone" aria-hidden="true"></i><a href="Tel:+254708772232"> + 254 708 772232 </a></li>
                                            <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#">khalilbrainiarc1@gmail.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="header-top-right jtv-user-info">
                                        <ul>
                                          <li class="dropdown"> <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><span><i class="fa fa-user" aria-hidden="true"></i> My Account </span> <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                              <li><a href="logout.php">Log out</a></li>
                                            </ul>
                                          </li>
                                          <li><a href="register.php"  data-target="register.php"><i class="fa fa-user" aria-hidden="true"></i> Sign Up</a></li>
                                          <li><a href="login.php"  data-target="login.php"><i class="fa fa-user" aria-hidden="true"></i> Login</a></li>
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-bottom-area" id="sticker">
                        <div class="container">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <div class="logo-area">
                                            <a href="index.php"><img class="img-responsive" src="img/logo-color.png" alt="logo"></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <div class="main-menu-area">
                                            <nav>
                                                <ul>
                                                    <li><a href="#">All Pages <i class="fa fa-angle-down"></i></a>
                                                      <ul>
                                                          <li><a href="index.php">Home</a></li>
                                                          <li><a href="about1.html">About Us</a></li>
                                                          <li><a href="our-recipes.html">Recipes</a></li>
                                                          <li><a href="restaurant.php">Restaurant Menu</a></li>
                                                          <li><a href="reservation.html">Reservation</a></li>
                                                          <li><a href="cart.html">Cart</a></li>
                                                          <li><a href="checkout.php">Checkout</a></li>
                                                          <li><a href="contact-form.html">Contact</a></li>
                                                      </ul>
                                                    </li>
                                                    <li><a href="#">Home</a></li>
                                                    <li><a href="#dishes">Restaurant</a></li>
                                                    <li><a href="#bakery">Bakery</a></li>
                                                    <li><a href="#reservation">Reservation</a></li>
                                                    <li><a href="contact-form.html">Contact</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <ul class="header-cart-area">
                                        <li class="header-search">
                                            <form>
                                                <input type="text" class="search-form" placeholder="Search...." required>
                                                <a href="#" class="search-button" id="search-button"><i class="fa fa-search" aria-hidden="true"></i></a>
                                            </form>
                                        </li>
                                        <li>
                                            <div class="cart-area">
                                                <a href="#"><i aria-hidden="true" class="fa fa-shopping-cart"></i><span></span></a>
                                                <ul>
                                                    <li>
                                                        <ul class="checkout">
                                                            <li><a href="cart.html" class="default-btn">View Cart</a></li>
                                                            <li><a href="checkout.php" class="default-btn">Checkout</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area Start -->
                  <div class="mobile-menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mobile-menu">
                                    <nav id="dropdown">
                                        <ul>
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="#">All Pages</a>
                                                <ul>
                                                    <li><a href="index.php">Home</a></li>
                                                    <li><a href="about1.html">About Us</a></li>
                                                    <li><a href="our-recipes.html">Our Recipes</a></li>
                                                    <li><a href="restaurant.php">Restaurant Menu</a></li>
                                                    <li><a href="reservation.html">Reservation</a></li>
                                                    <li><a href="cart.html">Cart</a></li>
                                                    <li><a href="checkout.php">Checkout</a></li>
                                                    <li><a href="contact-form.html">Contact</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#dishes">Restaurant</a></li>
                                            <li><a href="#bakery">Bakery</a></li>
                                            <li><a href="#reservation">Reservation</a></li>
                                            <li><a href="contact-form.html">Contact</a></li>
                                            <li><a href="#">My Account</a>
                                                <ul>
                                                    <li><a href="register.php"  data-target="register.php"><i class="fa fa-user" aria-hidden="true"></i> Sign Up</a></li>
                                                    <li><a href="login.php"  data-target="login.php"><i class="fa fa-user" aria-hidden="true"></i> Login</a></li>
                                                    <li><a href="logout.php">Log Out</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area End -->
            </header>
            <!-- Header Area End-->

            <!-- Slider Area Start-->
            <div class="slider1-area">
                <div class="bend niceties preview-1">
                    <div id="ensign-nivoslider-3" class="slides">
                        <img src="img/slider/slide1-2.jpg" alt="slider" title="#slider-direction-1"/>
                        <img src="img/slider/slide2.jpg" alt="slider" title="#slider-direction-2"/>
                        <img src="img/slider/slide3.jpg" alt="slider" title="#slider-direction-3"/>
                    </div>
                    <div id="slider-direction-1" class="t-cn slider-direction">
                        <div class="slider-content s-tb slide-1">
                            <div class="title-container s-tb-c">
                                <h1 class="title1"><span>Khal's Restaurant</span></h1>
                                <p>Welcome to the best restaurant in the city, where you can enjoy your free time with some fantastic cuisines.</p>
                                <div class="slider-btn-area">
                                    <a href="restaurant.php" class="ghost-btn">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="slider-direction-2" class="t-cn slider-direction">
                        <div class="slider-content s-tb slide-2">
                             <div class="title-container s-tb-c">
                                <h1 class="title1"><span>Khal's Restaurant</span></h1>
                                <p>We have lots to offer from an amazing view to spectacular food to really enjoy life in that very moment and amazing customer service. You just can't go wrong with Us.</p>
                                <div class="slider-btn-area">
                                    <a href="restaurant.php" class="ghost-btn">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="slider-direction-3" class="t-cn slider-direction">
                        <div class="slider-content s-tb slide-3">
                             <div class="title-container s-tb-c">
                                <h1 class="title1"><span>Khal's Restaurant</span></h1>
                                <p>Make us your home as we will make you family and not just another customer, we value you too much to let you walk out without enjoying every second of your time with us.</p>
                                <div class="slider-btn-area">
                                    <a href="restaurant.php" class="ghost-btn">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider Area End-->

            <!-- About 1 Area Start-->
            <div class="about1-area section-space">
                <img class="img-responsive section-back" src="img/section-back-1.png" alt="Sestion Back">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInRight">
                            <div class="about1-area-top">
                                <h2>Khal's <span> Restaurant</span></h2>
                                <h2>World Of Fantastic Food</h2>
                            </div>
                           <p> We are a dedicated restaurant to serve you delcious food in a serene environment to enjoy your meal. For those who would prefer the comfort of their own homes are welcome too, we do not discriminate. Make us your home and we will make you family. </p>
                           <h3 class="title-bar-big-left">Welcome to our family</h3>
                           <a href="about1.html" class="ghost-color-btn">Read More<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About 1 Area End-->

            <!-- Special Dish Area 1 Start-->
            <div class="special-dish-area1" id="dishes">
                <div class="container">
                    <h2 class="title">Our Dishes Menu</h2>
                    <span class="subtitle-color">ENJOY THE MENU</span>
                    <div class="row">
                        <div class="rc-carousel"
                            data-loop="true"
                            data-items="4"
                            data-margin="15"
                            data-autoplay="true"
                            data-autoplay-timeout="10000"
                            data-smart-speed="2000"
                            data-dots="false"
                            data-nav="true"
                            data-nav-speed="false"
                            data-r-x-small="1"
                            data-r-x-small-nav="false"
                            data-r-x-small-dots="true"
                            data-r-x-medium="1"
                            data-r-x-medium-nav="false"
                            data-r-x-medium-dots="true"
                            data-r-small="3"
                            data-r-small-nav="true"
                            data-r-small-dots="false"
                            data-r-medium="4"
                            data-r-medium-nav="true"
                            data-r-medium-dots="false">
                            <div class="special-dish-box">
                                <span>500Ksh</span>
                                <a href="#"><img class="img-responsive" src="img/dish/1.png" alt="dish"></a>
                                <h3 class="title-small title-bar-small-center"><a href="#">Chicken Biryani</a></h3>
                                <p>A full plate of steamy rice with an enchanting aroma and 1/2 a chicken dipped in a special sauce.</p>
                                <a href="restaurant.php" class="ghost-semi-color-btn">View</a>
                            </div>
                            <div class="special-dish-box">
                                <span>450Ksh</span>
                                <a href="#"><img class="img-responsive" src="img/dish/1.png" alt="dish"></a>
                                <h3 class="title-small title-bar-small-center"><a href="#">Laham Mandi</a></h3>
                                <p>An arabian dish prepared in the traditional Arab style of rice with goat meat.</p>
                                <a href="restaurant.php" class="ghost-semi-color-btn">View</a>
                            </div>
                            <div class="special-dish-box">
                                <span>550Ksh</span>
                                <a href="#"><img class="img-responsive" src="img/dish/1.png" alt="dish"></a>
                                <h3 class="title-small title-bar-small-center"><a href="#">Dajaj Mandi</a></h3>
                                <p>An exquisite arabian dish to die for with special sauce and ingredients to make the perfect taste of rice with chicken.</p>
                                <a href="restaurant.php" class="ghost-semi-color-btn">View</a>
                            </div>
                            <div class="special-dish-box">
                                <span>450Ksh</span>
                                <a href="#"><img class="img-responsive" src="img/dish/1.png" alt="dish"></a>
                                <h3 class="title-small title-bar-small-center"><a href="#">Samak Mandi</a></h3>
                                <p>A variation of the dajaj mandi but this time served with fish instead of the chicken.</p>
                                <a href="restaurant.php" class="ghost-semi-color-btn">View</a>
                            </div>
                            <div class="special-dish-box">
                                <span>500Ksh</span>
                                <a href="#"><img class="img-responsive" src="img/dish/1.png" alt="dish"></a>
                                <h3 class="title-small title-bar-small-center"><a href="#">Kabsa Rice</a></h3>
                                <p>An Arabian dish prepared in the most delicate way to preserve the flavours of the rice and goat meat that melts on your tongue.</p>
                                <a href="restaurant.php" class="ghost-semi-color-btn">View</a>
                            </div>
                            <div class="special-dish-box">
                                <span>300Ksh</span>
                                <a href="#"><img class="img-responsive" src="img/dish/1.png" alt="dish"></a>
                                <h3 class="title-small title-bar-small-center"><a href="#">Spaghetti & Meatballs</a></h3>
                                <p>An Italian delicacy known to most and doesn't need any introduction. Had for a light meal.</p>
                                <a href="restaurant.php" class="ghost-semi-color-btn">View</a>
                            </div>
                            <div class="special-dish-box">
                                <span>400Ksh</span>
                                <a href="#"><img class="img-responsive" src="img/dish/1.png" alt="dish"></a>
                                <h3 class="title-small title-bar-small-center"><a href="#">Beef Biryani</a></h3>
                                <p>A popular Coastal dish, a must try for tourists, a proper rice and beef lunch to fill your stomach up.</p>
                                <a href="restaurant.php" class="ghost-semi-color-btn">View</a>
                            </div>
                            <div class="special-dish-box">
                                <span>150Ksh</span>
                                <a href="#"><img class="img-responsive" src="img/dish/1.png" alt="dish"></a>
                                <h3 class="title-small title-bar-small-center"><a href="#">Shourba</a></h3>
                                <p>An Arabian prepared soup with boiled meat, amazing for your health. Usually had as an entree for the main meal.</p>
                                <a href="restaurant.php" class="ghost-semi-color-btn">View</a>
                            </div>
                            <div class="special-dish-box">
                                <span>300Ksh</span>
                                <a href="#"><img class="img-responsive" src="img/dish/1.png" alt="dish"></a>
                                <h3 class="title-small title-bar-small-center"><a href="#">Moroccan Chicken Skillet</a></h3>
                                <p>It's a Moroccan delicacy where the chicken is prepared with Moroccan spices and dipped in flour.</p>
                                <a href="restaurant.php" class="ghost-semi-color-btn">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Special Dish Area 1 End-->
            
            <!-- Special Dish Area Start-->
            <div class="special-dish-area" id="bakery">
                <div class="container">
                    <h2 class="title">Our Bakery Menu</h2>
                    <span class="subtitle-color">ENJOY THE MENU</span>
                    <div class="row">
                        <div class="rc-carousel"
                            data-loop="true"
                            data-items="4"
                            data-margin="15"
                            data-autoplay="true"
                            data-autoplay-timeout="10000"
                            data-smart-speed="2000"
                            data-dots="false"
                            data-nav="true"
                            data-nav-speed="false"
                            data-r-x-small="1"
                            data-r-x-small-nav="false"
                            data-r-x-small-dots="true"
                            data-r-x-medium="1"
                            data-r-x-medium-nav="false"
                            data-r-x-medium-dots="true"
                            data-r-small="3"
                            data-r-small-nav="true"
                            data-r-small-dots="false"
                            data-r-medium="4"
                            data-r-medium-nav="true"
                            data-r-medium-dots="false">
                            <div class="special-dish-box">
                                <span>2500Ksh</span>
                                <a href="#"><img class="img-responsive" src="dishes/blackforest1.jpg" alt="dish"></a>
                                <h3 class="title-small title-bar-small-center"><a href="#">Black Forest</a></h3>
                                <p>A chocolate sponge cake with a rich cherry filling based on the German dessert. It consists of several layers of chocolate sponge cake sandwiched with whipped cream and cherries.</p>
                                <a href="restaurant.php" class="ghost-semi-color-btn">View</a>
                            </div>
                            <div class="special-dish-box">
                                <span>1500Ksh</span>
                                <a href="#"><img class="img-responsive" src="dishes/carrotcake1.jpg" alt="dish"></a>
                                <h3 class="title-small title-bar-small-center"><a href="#">Carrot cake</a></h3>
                                <p>It's a cake that contains carrots mixed into the batter and coated with a fine white cream cheese frosting to supplement to the taste.</p>
                                <a href="restaurant.php" class="ghost-semi-color-btn">View</a>
                            </div>
                            <div class="special-dish-box">
                                <span>1800Ksh</span>
                                <a href="#"><img class="img-responsive" src="dishes/choccake1.jpg" alt="dish"></a>
                                <h3 class="title-small title-bar-small-center"><a href="#">Chocolate cake</a></h3>
                                <p>It's a cake flavored with melted chocolate and cocoa powder, an amazing treat for your taste buds especially for those with a sweet tooth.</p>
                                <a href="restaurant.php" class="ghost-semi-color-btn">View</a>
                            </div>
                            <div class="special-dish-box">
                                <span>1200Ksh</span>
                                <a href="#"><img class="img-responsive" src="dishes/redvelvet1.jpg" alt="dish"></a>
                                <h3 class="title-small title-bar-small-center"><a href="#">Red Velvet cake</a></h3>
                                <p>It's a crimson coloured chocolate layer cake, layered with white cream cheese and ermine icing and a combination of buttermilk and vinegar.</p>
                                <a href="restaurant.php" class="ghost-semi-color-btn">View</a>
                            </div>
                            <div class="special-dish-box">
                                <span>2000Ksh</span>
                                <a href="#"><img class="img-responsive" src="dishes/fudgecake1.jpg" alt="dish"></a>
                                <h3 class="title-small title-bar-small-center"><a href="#">Fudge cake</a></h3>
                                <p>It's a cake made with both melted chocolate and cocoa, and topped with chocolate ganache, this one is sure to satisfy your chocolate cravings!.</p>
                                <a href="restaurant.php" class="ghost-semi-color-btn">View</a>
                            </div>
                            <div class="special-dish-box">
                                <span>300Ksh</span>
                                <a href="#"><img class="img-responsive" src="dishes/blueberry1.jpg" alt="dish"></a>
                                <h3 class="title-small title-bar-small-center"><a href="#">Blueberry Muffin</a></h3>
                                <p>This muffin is extra large and yummy with the sugary-cinnamon crumb topping with a wonderful extra-generously-sized deli style muffin.</p>
                                <a href="restaurant.php" class="ghost-semi-color-btn">View</a>
                            </div>
                            <div class="special-dish-box">
                                <span>1800Ksh</span>
                                <a href="#"><img class="img-responsive" src="dishes/germanchocolatecake1.jpg" alt="dish"></a>
                                <h3 class="title-small title-bar-small-center"><a href="#">German Chocolate Cake</a></h3>
                                <p>It's a cake with its signature coconut-pecan filling and topping and chocolate frosting which makes it delicious.</p>
                                <a href="restaurant.php" class="ghost-semi-color-btn">View</a>
                            </div>
                            <div class="special-dish-box">
                                <span>1500Ksh</span>
                                <a href="#"><img class="img-responsive" src="dishes/hummingbird1.jpg" alt="dish"></a>
                                <h3 class="title-small title-bar-small-center"><a href="#">Hummingbird Cake</a></h3>
                                <p>It is a banana-pineapple spice cake served with cream cheese frosting, a favourite in southern U.S.</p>
                                <a href="restaurant.php" class="ghost-semi-color-btn">View</a>
                            </div>
                            <div class="special-dish-box">
                                <span>1000Ksh</span>
                                <a href="#"><img class="img-responsive" src="dishes/opera1.jpg" alt="dish"></a>
                                <h3 class="title-small title-bar-small-center"><a href="#">Opera cake</a></h3>
                                <p>It is a French cake made with layers of almond sponge cake soaked in coffee syrup, layered with ganache and coffee French buttercream, and covered in a chocolate glaze.</p>
                                <a href="restaurant.php" class="ghost-semi-color-btn">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Special Dish Area End-->


            <!-- Table Reservation 1 Area Start-->
            <div class="table-reservation1-area" id="reservation">
                <div class="container">
                    <h2 class="title">Book Your Table</h2>
                    <h3>Opening Hours 8:00 AM - 10:00 PM every weekday except Fridays.</h3>
                    <div class="row">
                      <div class="reservation-form">
                            <form id="reservation-form" method="POST" action="reservation-form.php">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                     <div class="reservation-input-box">
                                        <input type="text" class="form-control" placeholder="Name" name="name" id="form-name" data-error="Subject field is required" required />
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="reservation-input-box">
                                        <input type="email" class="form-control" placeholder="E-mail" name="email" id="form-subject" data-error="Subject field is required" required/>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                   <div class="reservation-input-box">
                                        <input type="tel" class="form-control" placeholder="Phone" name="phone" id="form-phone" data-error="Subject field is required" required/>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                   <div class="reservation-input-box">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        <input type="text" class="form-control rt-date" placeholder="Date" name="date" id="form-date" data-error="Subject field is required" required/>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                   <div class="reservation-input-box">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <input type="text" class="form-control rt-time" placeholder="Time" name="time" id="form-time" data-error="Subject field is required" required/>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="reservation-input-box">
                                        <textarea type="text" class="form-control" placeholder="Message" name="message" id="form-message" data-error="Message field is required" required></textarea>
                                    </div>
                                </div>
                                 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="reservation-input-box">
                                        <button type="submit" class="book-now-btn">Book A Table</button>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class='form-response'></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table Reservation 1 Area End-->

            <!-- Client Reviews Area Start-->
            <div class="client-reviews-area">
                <div class="container-fluid">
                    <div class="row products-container">
                        <div class="col-lg-6 col-md-6 col-sm-7 col-xs-12">
                            <div class="client-reviews-left">
                                <img class="img-responsive" src="img/client/left-back.jpg" alt="client">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-5 col-xs-12">
                            <div class="client-reviews-right">
                                <h2>Client Reviews</h2>
                                <p>What Clients Say</p>
                                <div class="rc-carousel"
                                    data-loop="true"
                                    data-items="3"
                                    data-margin="30"
                                    data-autoplay="false"
                                    data-autoplay-timeout="10000"
                                    data-smart-speed="2000"
                                    data-dots="false"
                                    data-nav="false"
                                    data-nav-speed="false"
                                    data-r-x-small="1"
                                    data-r-x-small-nav="false"
                                    data-r-x-small-dots="true"
                                    data-r-x-medium="1"
                                    data-r-x-medium-nav="false"
                                    data-r-x-medium-dots="true"
                                    data-r-small="1"
                                    data-r-small-nav="false"
                                    data-r-small-dots="true"
                                    data-r-medium="1"
                                    data-r-medium-nav="false"
                                    data-r-medium-dots="true">
                                    <ul>
                                        <li>
                                            <div class="media">
                                                <a href="#" class="pull-left">
                                                    <img src="img/client/1.png" alt="client" class="img-responsive">
                                                </a>
                                                <div class="media-body">
                                                    <h3><a href="#">Sandra Bullock</a></h3>
                                                    <p>My first time tasting arabian cuisine and my God! that was the best food I ever put in my mouth.</p>
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star checked" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star checked" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star checked" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star checked" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star checked" aria-hidden="true"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <a href="#" class="pull-left">
                                                    <img src="img/client/2.png" alt="client" class="img-responsive">
                                                </a>
                                                <div class="media-body">
                                                    <h3><a href="#">Pete davidson</a></h3>
                                                    <p>Hands down the best rice I've ever had in my life, definitely going back for some more.</p>
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star checked" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star checked" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star checked" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star checked" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star " aria-hidden="true"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <div class="media">
                                                <a href="#" class="pull-left">
                                                    <img src="img/client/1.png" alt="client" class="img-responsive">
                                                </a>
                                                <div class="media-body">
                                                    <h3><a href="#">Vera Jack</a></h3>
                                                    <p>I don't think I can hype the chocolate cake enough. It was a slice made in heaven.</p>
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star checked" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star checked" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star checked" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star checked" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star checked" aria-hidden="true"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <a href="#" class="pull-left">
                                                    <img src="img/client/3.png" alt="client" class="img-responsive">
                                                </a>
                                                <div class="media-body">
                                                    <h3><a href="#">Andy Long</a></h3>
                                                    <p>I totally enjoyed my meal, fantastic customer care with unbelievably tasty food.</p>
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star checked" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star checked" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star checked" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star checked" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star checked" aria-hidden="true"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <div class="media">
                                                <a href="#" class="pull-left">
                                                    <img src="img/client/2.png" alt="client" class="img-responsive">
                                                </a>
                                                <div class="media-body">
                                                    <h3><a href="#">Allie Larson</a></h3>
                                                    <p>The carrot cake is to die for, you better stock them enough because I'm going to announce it to everyone I know.</p>
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star checked" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star checked" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star checked" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star checked" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <a href="#" class="pull-left">
                                                    <img src="img/client/3.png" alt="client" class="img-responsive">
                                                </a>
                                                <div class="media-body">
                                                    <h3><a href="#">Rami Malek</a></h3>
                                                    <p>I missed the taste of my cultural food, and you have done it justice. Keep it up.</p>
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star checked" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star checked" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star checked" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star checked" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star checked" aria-hidden="true"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Client Reviews Area End-->

            <!-- Footer Area Start-->
            <footer>
                    <div class="footer-area-top section-space">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="footer-box">
                                        <h3 class="title-bar-footer">About Restaurant</h3>
                                        <div class="footer-about">
                                            <p>We aim to serve our customers the best food in the most amazing environment. To make us their home where they get to enjoy meals with loved ones or order their food and have it in the comfort of their homes.</p>
                                        </div>
                                        <ul class="footer-social">
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="footer-box">
                                        <h3 class="title-bar-footer">Our Categories</h3>
                                        <div class="footer-blog-post">
                                            <div class="media">

                                                <div class="media-body">
                                                    <h4><a href="#dishes">Restaurant</a></h4>

                                                </div>
                                            </div>
                                        </div>
                                         <div class="footer-blog-post">
                                            <div class="media">

                                                <div class="media-body">
                                                    <h4><a href="#bakery">Bakery</a></h4>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="footer-box">
                                        <h3 class="title-bar-footer">Opening Hours</h3>
                                        <ul class="opening-schedule">
                                          <li>Monday<span> 8am - 10pm</span></li>
                                          <li>Tuesday<span> 8am - 10pm</span></li>
                                          <li>Wednesday <span> 8am - 10pm</span></li>
                                          <li>Thursday<span> 8am - 10pm</span></li>
                                          <li>Friday<span> 2pm - Midnight</span></li>
                                          <li>Saturday <span> 8am - 4pm</span></li>
                                          <li>Sunday<span> Closed</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-area-bottom">
                        <div class="container">
                            <p>&copy; Khalil 2019. </p>
                        </div>
                    </div>
            </footer>
            <!-- Footer Area End-->
        </div>


        <!-- Preloader Start-->
        <div id="preloader"></div>
        <!-- Preloader End-->


        <!-- jquery-->
        <script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>

        <!-- Plugins js -->
        <script src="js/plugins.js" type="text/javascript"></script>

        <!-- Bootstrap js -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

        <!-- WOW JS -->
        <script src="js/wow.min.js"></script>

        <!-- Nivo slider js -->
        <script src="vendor/slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
        <script src="vendor/slider/js/home.js" type="text/javascript"></script>

        <!-- Owl Cauosel JS -->
        <script src="vendor/OwlCarousel/owl.carousel.min.js" type="text/javascript"></script>

        <!-- Meanmenu Js -->
        <script src="js/jquery.meanmenu.min.js" type="text/javascript"></script>

        <!-- Srollup js -->
        <script src="js/jquery.scrollUp.min.js" type="text/javascript"></script>

         <!-- jquery.counterup js -->
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/waypoints.min.js"></script>

       <!-- Date Time Picker Js -->
        <script src="js/jquery.datetimepicker.full.min.js" type="text/javascript"></script>

        <!-- Validator js -->
        <script src="js/validator.min.js" type="text/javascript"></script>

        <!-- Custom Js -->
        <script src="js/main.js" type="text/javascript"></script>
    </body>
</html>
