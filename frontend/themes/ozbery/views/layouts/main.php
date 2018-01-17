<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use frontend\themes\ozbery\assets\OzberyAsset;

AppAsset::register($this);
OzberyAsset::register($this);

?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>

        <!-- TODO подключить к базе к таблице настройки проекта-->
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <div id="app">
        <div class="inner-wrap">
            <aside class="left-off-canvas-menu">
                <div class="mobile-navi">
                    <form method="get" class="mobile-search">
                        <label class="sr-only" for="m-search"></label>
                        <input class="form-control input-lg" name="m-search" id="m-search" type="text"
                               placeholder="Search">
                        <button type="submit"><i class="icon icon-search"></i></button>
                    </form>
                    <ul class="buttons">
                        <li class="lang"><a href="#">Eng<i></i></a>
                            <ul class="submenu">
                                <li><a href="#">Deu</a></li>
                                <li><a href="#">Esp</a></li>
                                <li><a href="#">Jpn</a></li>
                            </ul>
                        </li>
                        <li class="currency"><a href="#">$ Usd<i></i></a>
                            <ul class="submenu">
                                <li><a href="#">&euro; Eur</a></li>
                                <li><a href="#">&pound; Gbp</a></li>
                                <li><a href="#">&yen; Yen</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="buttons">
                        <li><a href="login.html">Login</a></li>
                        <li><a href="signup.html">Sign Up</a></li>
                    </ul>
                    <ul>
                        <li class="current"><a href="index.html">Home</a><span></span>
                            <ul class="submenu">
                                <li><a href="home-business-law.html">Home Business</a><span></span>
                                    <ul class="sub-submenu">
                                        <li><a href="home-business-law.html">Lawyer Services</a></li>
                                        <li><a href="home-business-real-estate.html">Real Estate</a></li>
                                    </ul>
                                </li>
                                <li><a href="home-portfolio-photographer.html">Home Portfolio</a><span></span>
                                    <ul class="sub-submenu">
                                        <li><a href="home-portfolio-photographer.html">Photographer</a></li>
                                        <li><a href="home-portfolio-musician.html">Musician</a></li>
                                    </ul>
                                </li>
                                <li><a href="home-blog-corporate.html">Home Blog</a><span></span>
                                    <ul class="sub-submenu">
                                        <li><a href="home-blog-personal.html">Personal Blog</a></li>
                                        <li><a href="home-blog-corporate.html">Corporate Blog</a></li>
                                    </ul>
                                </li>
                                <li><a href="home-shop-catalog.html">Home E-Commerce</a><span></span>
                                    <ul class="sub-submenu">
                                        <li><a href="home-shop-catalog.html">Home Catalog</a></li>
                                        <li><a href="home-shop-featured-product.html">Featured Product</a></li>
                                    </ul>
                                </li>
                                <li><a href="home-events.html">Home Events</a></li>
                                <li><a href="home-startup.html">Home Startup</a></li>
                                <li><a href="home-landing.html">Home Landing</a></li>
                                <li><a href="home-services.html">Home Services</a></li>
                            </ul>
                        </li>
                        <li><a href="blog-grid-sr.html">Blog</a><span></span>
                            <ul class="submenu">
                                <li><a href="blog-grid-sr.html">Grid Layout</a><span></span>
                                    <ul class="sub-submenu">
                                        <li><a href="blog-grid-fw.html">Grid Full Width</a></li>
                                        <li><a href="blog-grid-sr.html">Grid Sidebar Right</a></li>
                                        <li><a href="blog-grid-sl.html">Grid Sidebar Left</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog-list-sr.html">List Layout</a><span></span>
                                    <ul class="sub-submenu">
                                        <li><a href="blog-list-fw.html">List Full Width</a></li>
                                        <li><a href="blog-list-2cols.html">List 2 Columns</a></li>
                                        <li><a href="blog-list-sr.html">List Sidebar Right</a></li>
                                        <li><a href="blog-list-sl.html">List Sidebar Left</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog-single-slider.html">Single Post</a><span></span>
                                    <ul class="sub-submenu">
                                        <li><a href="blog-single-image.html">Image Post</a></li>
                                        <li><a href="blog-single-banner.html">Fullwidth Banner</a></li>
                                        <li><a href="blog-single-gallery.html">Gallery Post</a></li>
                                        <li><a href="blog-single-slider.html">Slider Post</a></li>
                                        <li><a href="blog-single-video.html">Video Post</a></li>
                                        <li><a href="blog-single-audio.html">Audio Post</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="shop-grid-1-big-banner.html">Shop</a><span></span>
                            <ul class="submenu">
                                <li><a href="shop-grid-1-big-banner.html">Grid Layout Type 1</a><span></span>
                                    <ul class="sub-submenu">
                                        <li><a href="shop-grid-1-fw.html">Grid Full Width</a></li>
                                        <li><a href="shop-grid-1-big-banner.html">Grid Big Banner</a></li>
                                        <li><a href="shop-grid-1-sl.html">Grid Sidebar Left</a></li>
                                        <li><a href="shop-grid-1-sr.html">Grid Sidebar Right</a></li>
                                    </ul>
                                </li>
                                <li><a href="shop-grid-2-big-banner.html">Grid Layout Type 2</a><span></span>
                                    <ul class="sub-submenu">
                                        <li><a href="shop-grid-2-fw.html">Grid Full Width</a></li>
                                        <li><a href="shop-grid-2-big-banner.html">Grid Big Banner</a></li>
                                        <li><a href="shop-grid-2-sl.html">Grid Sidebar Left</a></li>
                                        <li><a href="shop-grid-2-sr.html">Grid Sidebar Right</a></li>
                                    </ul>
                                </li>
                                <li><a href="shop-list-big-banner.html">List Layout</a><span></span>
                                    <ul class="sub-submenu">
                                        <li><a href="shop-list-fw.html">List Full Width</a></li>
                                        <li><a href="shop-list-big-banner.html">List Big Banner</a></li>
                                        <li><a href="shop-list-sl.html">List Sidebar Left</a></li>
                                        <li><a href="shop-list-sr.html">List Sidebar Right</a></li>
                                    </ul>
                                </li>
                                <li><a href="shop-single-dr.html">Single Product</a><span></span>
                                    <ul class="sub-submenu">
                                        <li><a href="shop-single-dr.html">Description Right</a></li>
                                        <li><a href="shop-single-dl.html">Description Left</a></li>
                                    </ul>
                                </li>
                                <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="checkout.html">Checkout</a><span></span>
                                    <ul class="sub-submenu">
                                        <li><a href="checkout.html">Checkout Page</a></li>
                                        <li><a href="checkout-unregistered.html">Unregistered User</a></li>
                                    </ul>
                                </li>
                                <li><a href="shop-delivery.html">Delivery Info Page</a></li>
                                <li><a href="shop-tracking.html">Delivery Tracking</a></li>
                                <li><a href="shop-history.html">Purchase History</a></li>
                            </ul>
                        </li>
                        <li><a href="pages.html">Pages</a><span></span>
                            <ul class="submenu">
                                <li><a href="login.html">Login Page</a></li>
                                <li><a href="signup.html">Sign Up Page</a></li>
                                <li><a href="user-account.html">User Account Page</a></li>
                                <li><a href="resume.html">Resume / Portfolio</a></li>
                                <li><a href="portfolio-single.html">Single Project Page</a></li>
                                <li><a href="events-schedule.html">Events Schedule</a></li>
                                <li><a href="about-corporate.html">About Us</a><span></span>
                                    <ul class="sub-submenu">
                                        <li><a href="about-corporate.html">About Corporate</a></li>
                                        <li><a href="about-personal.html">About Personal</a></li>
                                    </ul>
                                </li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="team.html">Our Team</a></li>
                                <li><a href="team-profile.html">Team Member Profile</a></li>
                                <li><a href="faq-tabs.html">FAQ/Support Pages</a><span></span>
                                    <ul class="sub-submenu">
                                        <li><a href="faq-tabs.html">Tabs Version</a></li>
                                        <li><a href="faq-standard.html">Standard Version</a></li>
                                    </ul>
                                </li>
                                <li><a href="under-construction.html">Under Construction</a></li>
                                <li><a href="search.html">Search Page</a></li>
                                <li><a href="search-results.html">Search Results</a></li>
                                <li><a href="404.html">Error Pages</a><span></span>
                                    <ul class="sub-submenu">
                                        <li><a href="404.html">404 Page</a></li>
                                        <li><a href="500.html">500 Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="sitemap.html">Sitemap</a></li>
                            </ul>
                        </li>
                        <li><a href="components-and-styles.html">Features</a><span></span>
                            <ul class="submenu">
                                <li><a href="components-and-styles.html">Components &amp; Styles</a></li>
                                <li><a href="sliders-and-carousels.html">Sliders &amp; Carousels</a></li>
                                <li><a href="grid-and-list.html">Grid &amp; List Layouts</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </aside>
            <div class="site-layout">
                <div class="header-toolbar">
                    <div class="container">
                        <div class="cont-info">
                            <div><i class="fa fa-map-marker"></i>105448 Casa Blanca BLVD New York</div>
                            <div><i class="fa fa-phone"></i>+30 (45) 224-33-12</div>
                            <div><i class="fa fa-envelope"></i><a href="mailto:info@yoursite.com">info@yoursite.com</a>
                            </div>
                        </div>
                        <div class="social-bar">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-github-alt"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                        <ul class="tools">
                            <li class="currency"><a href="#">$ Usd</a>
                                <ul>
                                    <li><a href="#">&euro; Eur</a></li>
                                    <li><a href="#">&pound; Gbp</a></li>
                                    <li><a href="#">&yen; Yen</a></li>
                                </ul>
                            </li>
                            <li class="lang"><a href="#">Eng</a>
                                <ul>
                                    <li><a href="#">Deu</a></li>
                                    <li><a href="#">Esp</a></li>
                                    <li><a href="#">Jpn</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <header class="header sticky">
                    <div class="inner">
                        <div class="container group">
                            <a class="logo" href="index.html"><img src="img/logo.png" alt="Kedavra"/></a>
                            <div class="left-off-canvas-toggle" id="nav-toggle">
                                <span></span>
                            </div>
                            <div class="navigation">
                                <nav class="menu">
                                    <ul>
                                        <li class="active has-mega-menu">
                                            <a href="index.html">Home</a>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="search"><i class="icon icon-search"></i></div>
                            </div>
                            <div class="tools group">
                                <a class="signup pull-left" href="signup.html">Sign Up</a>
                                <a class="pull-left" href="login.html">Login</a>
                                <div class="cart-btn"><a class="link" href="shopping-cart.html">4</a>
                                    <div class="cart-dropdown">
                                        <div class="empty-cart">
                                            <p>There are no items in your cart.</p>
                                            <a class="btn btn-center btn-primary" href="shop-grid-1-big-banner.html">Go
                                                to catalog</a>
                                        </div>
                                        <div class="wrap">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-8 col-sm-9">
                                                        <div class="owl-carousel">
                                                            <div class="item">
                                                                <div class="delete"><i class="fa fa-angle-right"></i><i
                                                                            class="fa fa-angle-left"></i></div>
                                                                <a href="shop-single-dr.html">
                                                                    <span class="name">Tourist backpack</span>
                                                                    <span class="price">175 $</span>
                                                                    <span class="overlay"></span>
                                                                    <img src="img/cart-dropdown/item01.jpg"
                                                                         alt="Item01"/>
                                                                </a>
                                                                <div class="qnt-count">
                                                                    <a class="incr-btn fa fa-angle-left inactive"
                                                                       data-action="decrease" href="#"></a>
                                                                    <input class="quantity" type="text" value="1">
                                                                    <a class="incr-btn fa fa-angle-right"
                                                                       data-action="increase" href="#"></a>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="delete"><i class="fa fa-angle-right"></i><i
                                                                            class="fa fa-angle-left"></i></div>
                                                                <a href="shop-single-dl.html">
                                                                    <span class="name">Horsefeathers 752</span>
                                                                    <span class="price">129 $</span>
                                                                    <span class="overlay"></span>
                                                                    <img src="img/cart-dropdown/item02.jpg"
                                                                         alt="Item02"/>
                                                                </a>
                                                                <div class="qnt-count">
                                                                    <a class="incr-btn fa fa-angle-left inactive"
                                                                       data-action="decrease" href="#"></a>
                                                                    <input class="quantity" type="text" value="1">
                                                                    <a class="incr-btn fa fa-angle-right"
                                                                       data-action="increase" href="#"></a>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="delete"><i class="fa fa-angle-right"></i><i
                                                                            class="fa fa-angle-left"></i></div>
                                                                <a href="shop-single-dr.html">
                                                                    <span class="name">Leather handbag</span>
                                                                    <span class="price">345 $</span>
                                                                    <span class="overlay"></span>
                                                                    <img src="img/cart-dropdown/item03.jpg"
                                                                         alt="Item03"/>
                                                                </a>
                                                                <div class="qnt-count">
                                                                    <a class="incr-btn fa fa-angle-left inactive"
                                                                       data-action="decrease" href="#"></a>
                                                                    <input class="quantity" type="text" value="1">
                                                                    <a class="incr-btn fa fa-angle-right"
                                                                       data-action="increase" href="#"></a>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="delete"><i class="fa fa-angle-right"></i><i
                                                                            class="fa fa-angle-left"></i></div>
                                                                <a href="shop-single-dl.html">
                                                                    <span class="name">Ultra durable backpack</span>
                                                                    <span class="price">220 $</span>
                                                                    <span class="overlay"></span>
                                                                    <img src="img/cart-dropdown/item04.jpg"
                                                                         alt="Item04"/>
                                                                </a>
                                                                <div class="qnt-count">
                                                                    <a class="incr-btn fa fa-angle-left inactive"
                                                                       data-action="decrease" href="#"></a>
                                                                    <input class="quantity" type="text" value="1">
                                                                    <a class="incr-btn fa fa-angle-right"
                                                                       data-action="increase" href="#"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-md-offset-1 col-sm-3">
                                                        <table>
                                                            <tr>
                                                                <td>Subtotal</td>
                                                                <td class="text-right">999 $</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Delivery</td>
                                                                <td class="text-right">111 $</td>
                                                            </tr>
                                                        </table>
                                                        <table class="total">
                                                            <tr>
                                                                <td>Total</td>
                                                                <td class="text-right">1110 $</td>
                                                            </tr>
                                                        </table>
                                                        <div class="links">
                                                            <a href="#">Need a Special Preparation?</a><br/>
                                                            <a href="#" id="promo-code-link">Gift or Promo Code?</a>
                                                            <form class="promo-code group">
                                                                <label for="promo-code"></label>
                                                                <input class="form-control" type="text"
                                                                       name="promo-code" id="promo-code"
                                                                       placeholder="Code">
                                                                <input class="btn disabled" type="submit" value="Apply">
                                                            </form>
                                                        </div>
                                                        <a class="btn btn-center btn-primary" href="checkout.html">Checkout</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form class="quick-search" method="get" autocomplete="off">
                        <div class="overlay"></div>
                        <input class="search-field" type="text" placeholder="Search">
                        <span>Press enter to search</span>
                    </form>
                </header>
                <div class="page">
                    <?= $content ?>
                </div>
                <footer class="footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">

                            </div>
                            <div class="col-md-4 col-sm-4">

                            </div>
                            <div class="col-md-4 col-sm-4">

                            </div>
                        </div>
                    </div>
                    <div class="copyright">
                        <div class="container">
                            <p><a href="http://8guild.com/" target="_blank">8 Guild</a> - Quality premium themes build
                                by creatives</p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <div class="sticky-btns">
        <form class="quick-contact" method="post" name="quick-contact">
            <h3>Contact us</h3>
            <div class="form-group">
                <label for="qc-name">Full name</label>
                <input class="form-control" type="text" name="qc-name" id="qc-name" placeholder="Enter full name"
                       required>
            </div>
            <div class="form-group">
                <label for="qc-email">Email</label>
                <input class="form-control" type="email" name="qc-email" id="qc-email" placeholder="Enter email"
                       required>
            </div>
            <div class="form-group">
                <label for="qc-message">Your message</label>
                <textarea class="form-control" name="qc-message" id="qc-message" placeholder="Enter your message"
                          required></textarea>
            </div>
            <input class="btn btn-primary btn-block" type="submit" value="Send">
        </form>
        <span id="qcf-btn"><i class="fa fa-envelope"></i></span>
        <span id="scrollTop-btn"><i class="fa fa-chevron-up"></i></span>
    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>