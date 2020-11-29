<?php


?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Restaurant Menu</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

        <!-- Normalize CSS -->
        <link rel="stylesheet" href="css/normalize.css">

        <!-- Main CSS -->
        <link rel="stylesheet" href="css/main.css">

        <!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.min.css">

        <!-- Font-awesome CSS-->
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!-- Flaticon CSS-->
        <link rel="stylesheet" type="text/css" href="css/font/flaticon.css">

        <!-- Owl Caousel CSS -->
        <link rel="stylesheet" href="vendor/OwlCarousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendor/OwlCarousel/owl.theme.default.min.css">

        <!-- Main Menu CSS -->
        <link rel="stylesheet" href="css/meanmenu.min.css">

        <!-- nivo slider CSS -->
        <link rel="stylesheet" href="vendor/slider/css/nivo-slider.css" type="text/css" />
        <link rel="stylesheet" href="vendor/slider/css/preview.css" type="text/css" media="screen" />

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/style.css">

        <!-- Modernizr Js -->
        <script src="js/modernizr-2.8.3.min.js"></script>

    </head>
    <body>
        <div class="wrapper">
            <!-- Header Area Start -->
            <header>
              <div class="header2-area">
                  <div class="header-top-area">
                      <div class="container">
                          <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                  <div class="header-top-left">
                                      <ul>
                                          <li><i class="fa fa-phone" aria-hidden="true"></i><a href="Tel:+25708772232"> + 254 708 772232 </a></li>
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
                                                        <li><a href="#">Restaurant Menu</a></li>
                                                        <li><a href="reservation.html">Reservation</a></li>
                                                        <li><a href="cart.html">Cart</a></li>
                                                        <li><a href="checkout.php">Checkout</a></li>
                                                        <li><a href="contact-form.html">Contact</a></li>
                                                    </ul>
                                                  </li>
                                                  <li><a href="index.php">Home</a></li>
                                                  <li><a href="#">Restaurant</a></li>

                                                  <li><a href="reservation.html">Reservation</a></li>
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
                                              <a href="#"><i aria-hidden="true" class="fa fa-shopping-cart my-cart-icon"></i><span class="badge badge-notify my-cart-badge"></span></a>
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
                                                <li><a href="index.php">Home</a>

                                                </li>
                                                <li><a href="#">All Pages</a>
                                                    <ul>
                                                        <li><a href="index.php">Home</a></li>
                                                        <li><a href="about1.html">About Us</a></li>
                                                        <li><a href="our-recipes.html">Our Recipes</a></li>
                                                        <li><a href="#">Restaurant Menu</a></li>
                                                        <li><a href="reservation.html">Reservation</a></li>
                                                        <li><a href="cart.html">Cart</a></li>
                                                        <li><a href="checkout.php">Checkout</a></li>
                                                        <li><a href="contact-form.html">Contact</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Restaurant</a></li>
                                                <li><a href="reservation.html">Reservation</a></li>
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
            <!-- Header Area End -->
            <!-- Inner Page Banner Area Start -->
            <div class="inner-page-banner-area">
                <div class="container">
                    <div class="pagination-area">
                        <h2>Our restaurant menu</h2>
                        <ul>
                            <li><a href="index.php">Home </a></li>
                            <li><a href="#dishes" class="restaurant-list">/- Dishes Menu</a></li>
                            <li><a href="#bakery" class="restaurant-list">/- Bakery Menu</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Inner Page Banner Area End -->
            <!-- Food Menu 4 Area Start -->
            <div class="food-menu4-area section-space">
                <div class="container menu-list-wrapper"  id="dishes">
                    <h2 class="text-center">Dishes Menu</h2>
                    <div class="row menu-list">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6  menu-item">
                            <div class="food-menu4-box">
                                <img src="img/dish/41.jpg" alt="dish" class="img-responsive">
                                <span>Ksh450</span>
                                <div class="food-menu4-box-title">
                                    <h3><a href="#">Laham Mandi</a></h3>
                                    <p>An Arabian dish prepared in the traditional Arab style of rice with goat meat.</p>
                                    <a href="#" data-id="1" data-name="Laham Mandi" data-price="450" data-image="img/dish/41.jpg" data-quantity="1" class="default-btn add-to-cart my-cart-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6  menu-item">
                            <div class="food-menu4-box">
                                <img src="img/dish/41.jpg" alt="dish" class="img-responsive">
                                <span>Ksh500</span>
                                <div class="food-menu4-box-title">
                                    <h3><a href="#">Samak Mandi</a></h3>
                                    <p>A variation of the dajaj mandi but this time served with fish instead of the chicken.</p>
                                    <a href="#" data-id="2" data-name="Samak Mandi" data-price="500" data-image="img/dish/41.jpg" data-quantity="1" class="default-btn add-to-cart my-cart-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6  menu-item">
                            <div class="food-menu4-box">
                                <img src="img/dish/41.jpg" alt="dish" class="img-responsive">
                                <span>Ksh350</span>
                                <div class="food-menu4-box-title">
                                    <h3><a href="#">Spaghetti & Meatballs</a></h3>
                                    <p>An Italian delicacy known to most and doesn't need any introduction. Had for a light meal.</p>
                                    <a href="#" data-id="3" data-name="Spaghetti & Meatballs" data-price="350" data-image="img/dish/41.jpg" data-quantity="1" class="default-btn add-to-cart my-cart-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6  menu-item">
                            <div class="food-menu4-box">
                                <img src="img/dish/34.jpg" alt="dish" class="img-responsive">
                                <span>Ksh550</span>
                                <div class="food-menu4-box-title">
                                    <h3><a href="#">Dajaj Mandi</a></h3>
                                    <p>An exquisite arabian dish to die for with special sauce and ingredients to make the perfect taste of rice with chicken.</p>
                                    <a href="#" data-id="4" data-name="Dajaj Mandi" data-price="550" data-image="img/dish/41.jpg" data-quantity="1" class="default-btn add-to-cart my-cart-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6  menu-item">
                            <div class="food-menu4-box">
                                <img src="img/dish/41.jpg" alt="dish" class="img-responsive">
                                <span>Ksh500</span>
                                <div class="food-menu4-box-title">
                                    <h3><a href="#">Kabsa Rice</a></h3>
                                    <p>An Arabian dish prepared in the most delicate way to preserve the flavours of the rice and goat meat that melts on your tongue.</p>
                                    <a href="#" data-id="5" data-name="Kabsa Rice" data-price="500" data-image="img/dish/41.jpg" data-quantity="1" class="default-btn add-to-cart my-cart-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6  menu-item">
                            <div class="food-menu4-box">
                                <img src="img/dish/34.jpg" alt="dish" class="img-responsive">
                                <span>Ksh420</span>
                                <div class="food-menu4-box-title">
                                    <h3><a href="#">Chips & Chicken</a></h3>
                                    <p>A plate of chips with 1/4 roasted chicken prepared in the healthiest way possible.</p>
                                    <a href="#" data-id="6" data-name="Chips & Chicken" data-price="420" data-image="img/dish/41.jpg" data-quantity="1" class="default-btn add-to-cart my-cart-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6  menu-item">
                            <div class="food-menu4-box">
                                <img src="img/dish/37.jpg" alt="dish" class="img-responsive">
                                <span>Ksh250</span>
                                <div class="food-menu4-box-title">
                                    <h3><a href="#">Shourba</a></h3>
                                    <p>An Arabian prepared soup with boiled meat, amazing for your health. Usually had as an entree for the main meal.</p>
                                    <a href="#" data-id="7" data-name="Shourba" data-price="250" data-image="img/dish/37.jpg" data-quantity="1" class="default-btn add-to-cart my-cart-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6  menu-item">
                            <div class="food-menu4-box">
                                <img src="img/dish/41.jpg" alt="dish" class="img-responsive">
                                <span>Ksh280</span>
                                <div class="food-menu4-box-title">
                                    <h3><a href="#">Moroccan Chicken Skillet</a></h3>
                                    <p>It's a Moroccan delicacy where the chicken is prepared with Moroccan spices and dipped in flour.</p>
                                    <a href="#" data-id="8" data-name="Moroccan Chicken" data-price="280" data-image="img/dish/41.jpg" data-quantity="1" class="default-btn add-to-cart my-cart-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6  menu-item hidden">
                            <div class="food-menu4-box">
                                <img src="img/dish/37.jpg" alt="dish" class="img-responsive">
                                <span>Ksh450</span>
                                <div class="food-menu4-box-title">
                                    <h3><a href="#">Chicken Biryani</a></h3>
                                    <p>A full plate of steamy rice with an enchanting aroma and 1/2 a chicken dipped in a special sauce.</p>
                                    <a href="#" data-id="9" data-name="Chicken Biryani" data-price="450" data-image="img/dish/41.jpg" data-quantity="1" class="default-btn add-to-cart my-cart-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6  menu-item hidden">
                            <div class="food-menu4-box">
                                <img src="img/dish/34.jpg" alt="dish" class="img-responsive">
                                <span>Ksh400</span>
                                <div class="food-menu4-box-title">
                                    <h3><a href="#">Beef Biryani</a></h3>
                                    <p>A popular Coastal dish, a must try for tourists, a proper rice and beef lunch to fill your stomach up.</p>
                                    <a href="#" data-id="10" data-name="Beef Biryani" data-price="400" data-image="img/dish/41.jpg" data-quantity="1" class="default-btn add-to-cart my-cart-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6  menu-item hidden">
                            <div class="food-menu4-box">
                                <img src="img/dish/37.jpg" alt="dish" class="img-responsive">
                                <span>Ksh240</span>
                                <div class="food-menu4-box-title">
                                    <h3><a href="#">Hummus</a></h3>
                                    <p>The big daddy chickpea spread can be slathered on anything from a burger or baked potato to the traditional hot pita bread..</p>
                                    <a href="#" data-id="11" data-name="Hummus" data-price="240" data-image="img/dish/41.jpg" data-quantity="1" class="default-btn add-to-cart my-cart-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6  menu-item hidden">
                            <div class="food-menu4-box">
                                <img src="img/dish/41.jpg" alt="dish" class="img-responsive">
                                <span>Ksh320</span>
                                <div class="food-menu4-box-title">
                                    <h3><a href="#">Spicy Basque Chicken</a></h3>
                                    <p>Smoked paprika, chilies, and green olives give this Spicy Basque Chicken a bright color and well-rounded flavor and paired with saffron rice.</p>
                                    <a href="#" data-id="12" data-name="Spicy Basque Chicken" data-price="320" data-image="img/dish/41.jpg" data-quantity="1" class="default-btn add-to-cart my-cart-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="loadmore">
                        <a href="#" class="ghost-color-btn">Load More</a>
                    </div>
                </div>
            </div>
            <!-- Food Menu 4 Area End -->
            <!-- Food Menu 4 Area Start Here -->
            <div class="food-menu4-area section-space">
                <div class="container menu-list-wrapper">
                    <div class="row menu-list" id="bakery">
                        <h2 class="text-center">Pasteries Menu</h2>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6  menu-item">
                            <div class="food-menu4-box">
                                <img src="dishes/blackforest2.jpg" alt="dish" class="img-responsive">
                                <span>2500Ksh</span>
                                <div class="food-menu4-box-title">
                                    <h3><a href="#">Black Forest</a></h3>
                                    <p>A chocolate sponge cake with a rich cherry filling. It consists of several layers of chocolate sponge cake sandwiched with whipped cream and cherries.</p>
                                    <a href="#" data-id="13" data-name="Black Forest" data-price="2500" data-image="dishes/blackforest2.jpg" data-quantity="1" class="default-btn my-cart-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6  menu-item">
                            <div class="food-menu4-box">
                                <img src="dishes/choccake2.jpg" alt="dish" class="img-responsive">
                                <span>1800Ksh</span>
                                <div class="food-menu4-box-title">
                                    <h3><a href="#">Chocolate Cake</a></h3>
                                    <p>It's a cake flavored with melted chocolate and cocoa powder, an amazing treat for your taste buds especially for those with a sweet tooth.</p>
                                    <a href="#" data-id="14" data-name="Chocolate Cake" data-price="1800" data-image="dishes/choccake2.jpg" data-quantity="1" class="default-btn my-cart-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6  menu-item">
                            <div class="food-menu4-box">
                                <img src="dishes/carrotcake2.jpg" alt="dish" class="img-responsive">
                                <span>1500Ksh</span>
                                <div class="food-menu4-box-title">
                                    <h3><a href="#">Carrot Cake</a></h3>
                                    <p>It's a cake that contains carrots mixed into the batter and coated with a fine white cream cheese frosting to supplement to the taste.</p>
                                    <a href="#" data-id="15" data-name="Carrot Cake" data-price="1500" data-image="dishes/carrotcake2.jpg" data-quantity="1" class="default-btn my-cart-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6  menu-item">
                            <div class="food-menu4-box">
                                <img src="dishes/german2.jpg" alt="dish" class="img-responsive">
                                <span>1800Ksh</span>
                                <div class="food-menu4-box-title">
                                    <h3><a href="#">German Chocolate Cake</a></h3>
                                    <p>It's a cake with its signature coconut-pecan filling and topping and chocolate frosting which makes it delicious.</p>
                                    <a href="#" data-id="16" data-name="German Chocolate Cake" data-price="1800" data-image="dishes/german2.jpg" data-quantity="1" class="default-btn my-cart-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6  menu-item">
                            <div class="food-menu4-box">
                                <img src="dishes/hummingbird2.jpg" alt="dish" class="img-responsive">
                                <span>1500Ksh</span>
                                <div class="food-menu4-box-title">
                                    <h3><a href="#">Hummingbird Cake</a></h3>
                                    <p>It is a banana-pineapple spice cake served with cream cheese frosting, a favourite in southern U.S.</p>
                                    <a href="#" data-id="17" data-name="Hummingbird Cake" data-price="1500" data-image="dishes/hummingbird2.jpg" data-quantity="1" class="default-btn my-cart-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6  menu-item">
                            <div class="food-menu4-box">
                                <img src="dishes/redvelvet2.jpg" alt="dish" class="img-responsive">
                                <span>1200Ksh</span>
                                <div class="food-menu4-box-title">
                                    <h3><a href="#">Red Velvet Cake</a></h3>
                                    <p>It's a crimson coloured chocolate layer cake, layered with white cream cheese with a combination of buttermilk and vinegar.</p>
                                    <a href="#" data-id="18" data-name="Red Velvet Cake" data-price="1200" data-image="dishes/redvelvet2.jpg" data-quantity="1" class="default-btn my-cart-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6  menu-item">
                            <div class="food-menu4-box">
                                <img src="dishes/blueberry2.jpg" alt="dish" class="img-responsive">
                                <span>300Ksh</span>
                                <div class="food-menu4-box-title">
                                    <h3><a href="#">Blueberry Muffin</a></h3>
                                    <p>This muffin is yummy with the sugary-cinnamon crumb topping with a wonderful extra-generously-sized deli style muffin.</p>
                                    <a href="#" data-id="19" data-name="Blueberry Muffin" data-price="300" data-image="dishes/blueberry2.jpg" data-quantity="1" class="default-btn my-cart-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6  menu-item">
                            <div class="food-menu4-box">
                                <img src="dishes/pecanpie2.jpg" alt="dish" class="img-responsive">
                                <span>550Ksh</span>
                                <div class="food-menu4-box-title">
                                    <h3><a href="#">Pecan Pie</a></h3>
                                    <p>A traditional southern U.S pecan pie mixed in honey, syrup and all the sweetness.</p>
                                    <a href="#" data-id="20" data-name="Pecan Pie" data-price="550" data-image="dishes/pecanpie2.jpg" data-quantity="1" class="default-btn my-cart-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6  menu-item hidden">
                            <div class="food-menu4-box">
                                <img src="dishes/fudgecake2.jpg" alt="dish" class="img-responsive">
                                <span>2000Ksh</span>
                                <div class="food-menu4-box-title">
                                    <h3><a href="#">Fudge Cake</a></h3>
                                    <p>It's a cake made with melted chocolate and cocoa and topped with chocolate ganache.</p>
                                    <a href="#" data-id="21" data-name="Fudge Cake" data-price="2000" data-image="dishes/fudgecake2.jpg" data-quantity="1" class="default-btn my-cart-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6  menu-item hidden">
                            <div class="food-menu4-box">
                                <img src="dishes/opera2.jpg" alt="dish" class="img-responsive">
                                <span>1000Ksh</span>
                                <div class="food-menu4-box-title">
                                    <h3><a href="#">Opera Cake</a></h3>
                                    <p>A French cake made with layers of almond sponge cake soaked in coffee syrup, layered with ganache and covered in a chocolate glaze.</p>
                                    <a href="#" data-id="22" data-name="Opera Cake" data-price="1000" data-image="dishes/opera2.jpg" data-quantity="1" class="default-btn my-cart-btn">Add to Cart</a> 
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6  menu-item hidden">
                            <div class="food-menu4-box">
                                <img src="dishes/cheesecake2.jpg" alt="dish" class="img-responsive">
                                <span>1300Ksh</span>
                                <div class="food-menu4-box-title">
                                    <h3><a href="#">Cheese Cake</a></h3>
                                    <p>It's a sweet dessert consisting of 2 layers and a mixture of soft, fresh cheese, eggs, and sugar.</p>
                                    <a href="#" data-id="23" data-name="Cheese Cake" data-price="1300" data-image="dishes/cheesecake2.jpg" data-quantity="1" class="default-btn my-cart-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6  menu-item hidden">
                            <div class="food-menu4-box">
                                <img src="dishes/hazelnut2.jpg" alt="dish" class="img-responsive">
                                <span>650Ksh</span>
                                <div class="food-menu4-box-title">
                                    <h3><a href="#">Hazelnut Mocha Waffle</a></h3>
                                    <p>Crushed Ferrero Rocher, hazelnut ice cream, warm mocha-hazelnut sauce. Now even more Ferrero chocolate.</p>
                                    <a href="#" data-id="24" data-name="Hazelnut Mocha Waffle" data-price="650" data-image="dishes/hazelnut2.jpg" data-quantity="1" class="default-btn my-cart-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6  menu-item hidden">
                            <div class="food-menu4-box">
                                <img src="dishes/mocha2.jpg" alt="dish" class="img-responsive">
                                <span>650Ksh</span>
                                <div class="food-menu4-box-title">
                                    <h3><a href="#">Mocha Waffle</a></h3>
                                    <p>Waffles made with cocoa, topped with chocolate ice cream, chocolate sauce & sweetened espresso syrup.</p>
                                    <a href="#" data-id="25" data-name="Mocha Waffle" data-price="650" data-image="dishes/mocha2.jpg" data-quantity="1" class="default-btn my-cart-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6  menu-item hidden">
                            <div class="food-menu4-box">
                                <img src="dishes/strawban2.jpg" alt="dish" class="img-responsive">
                                <span>500Ksh</span>
                                <div class="food-menu4-box-title">
                                    <h3><a href="#">Banana berry waffle</a></h3>
                                    <p>A full waffle served with fresh bananas & strawberries, a combination of strawberry & vanilla ice cream, caramel & chocolate sauce.</p>
                                    <a href="#" data-id="26" data-name="Banana Berry Waffle" data-price="500" data-image="dishes/strawban2.jpg" data-quantity="1" class="default-btn my-cart-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6  menu-item hidden">
                            <div class="food-menu4-box">
                                <img src="dishes/belgian2.jpg" alt="dish" class="img-responsive">
                                <span>700Ksh</span>
                                <div class="food-menu4-box-title">
                                    <h3><a href="#">Belgian Brownie Waffle</a></h3>
                                    <p>It's a waffle combined with warm brownies, choc chip ice cream and chocolate sauce, layered beautifully.</p>
                                    <a href="#" data-id="27" data-name="Belgian brownie Waffle" data-price="700" data-image="dishes/belgian2.jpg" data-quantity="1" class="default-btn my-cart-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6  menu-item hidden">
                            <div class="food-menu4-box">
                                <img src="dishes/snow2.jpg" alt="dish" class="img-responsive">
                                <span>600Ksh</span>
                                <div class="food-menu4-box-title">
                                    <h3><a href="#">Snow White Waffle</a></h3>
                                    <p>Vanilla ice cream, chocolate sauce & icing sugar.</p>
                                    <a href="#" data-id="28" data-name="Snow White Waffle" data-price="600" data-image="dishes/snow2.jpg" data-quantity="1" class="default-btn my-cart-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="loadmore">
                        <a href="#" class="ghost-color-btn">Load More</a>
                    </div>
                </div>
            </div>
            <!-- Food Menu 4 Area End Here -->
            <!-- Footer Area Start -->
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
                                        <h3 class="title-bar-footer">Our Category</h3>
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
                                            <li>Monday<span> 5pm - 11pm</span></li>
                                            <li>Tuesday<span> 5pm - 11pm</span></li>
                                            <li>Wednesday <span> Closed</span></li>
                                            <li>Thursday<span> 5pm - Midnight</span></li>
                                            <li>Friday<span> 4:30pm - Midnight</span></li>
                                            <li>Saturday <span> 5pm - 11pm</span></li>
                                            <li>Sunday<span> 5pm - 11pm</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-area-bottom">
                        <div class="container">
                            <p>&copy;  Khalil 2019. </p>
                        </div>
                    </div>
            </footer>
            <!-- Footer Area End -->
        </div>

        <!-- Preloader Start -->
        <div id="preloader"></div>
        <!-- Preloader End -->

        <!-- jquery-->
        <script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>

        <!-- Bootstrap js -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>        

        <!--Jquery Mycart pugin-->
        <script src="js/jquery.mycart.js"></script>

        <!-- Plugins js -->
        <script src="js/plugins.js" type="text/javascript"></script>

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

        <!-- Isotope js -->
        <script src="js/isotope.pkgd.min.js" type="text/javascript"></script>

        <!-- Switch js -->
        <script src="js/switch-style.js" type="text/javascript"></script>

        <!-- Vue js -->
        <script src="js/vue.js"></script>

        <!-- Custom Js -->
        <script src="js/main.js" type="text/javascript"></script>

    </body>
</html>
