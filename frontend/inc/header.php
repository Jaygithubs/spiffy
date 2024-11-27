<?php
include("./assets/config/db.php");

$category_sql=$conn->prepare("SELECT * FROM `category`");
$category;
if($category_sql->execute())
{
    $category_sql_result=$category_sql->get_result();
    $category=$category_sql_result->fetch_all(MYSQLI_ASSOC);
    $category_sql->close();
}

?>

<div class="header-mobile">
    <div class="section-padding">
        <div class="section-container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3 header-left">
                    <div class="navbar-header">
                        <button type="button" id="show-megamenu" class="navbar-toggle"></button>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6 header-center">
                    <div class="site-logo">
                        <a href="index">
                            <img width="400" height="79" src="media/logo2.jpg" alt="Spiffy Sole" />
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3 header-right">
                    <div class="ruper-topcart dropdown">
                        <div class="dropdown mini-cart top-cart">
                            <a href="https://ig.me/m/spiffysole" target="_blank" class="button btn checkout btn-default">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--    <div class="header-mobile-fixed">
             Shop 
            <div class="shop-page">
                <a href="shop-grid-left.html"><i class="wpb-icon-shop"></i></a>
            </div>
    
             Login 
            <div class="my-account">
                <div class="login-header">
                    <a href="page-my-account.html"><i class="wpb-icon-user"></i></a>
                </div>
            </div>
    
             Search 
            <div class="search-box">
                <div class="search-toggle"><i class="wpb-icon-magnifying-glass"></i></div>
            </div>
    
             Wishlist 
            <div class="wishlist-box">
                <a href="shop-wishlist.html"><i class="wpb-icon-heart"></i></a>
            </div>
        </div>-->
</div>

<div class="header-desktop">
    <div class="header-wrapper">
        <div class="section-padding">
            <div class="section-container p-l-r">
                <div class="row">
                    <div class="col-xl-3 col-lg-2 col-md-12 col-sm-12 col-12 header-left">
                        <div class="site-logo">
                            <a href="index">
                                <img width="400" height="79" src="media/logo2.jpg" alt="Spiffy Sole" />
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12 text-center header-right">
                        <div class="site-navigation">
                            <nav id="main-navigation">
                                <ul id="menu-main-menu" class="menu">
                                    <li class="level-0 menu-item">
                                        <a href="index" ><span class="menu-item-text">Home</span></a>
                                    </li>
                                    <li class="level-0 menu-item ">
                                        <!-- menu-item-has-children -->
                                        <a href="<?=BASE_URL?>about" ><span class="menu-item-text">About Us</span></a>
                                        <!-- <ul class="sub-menu">
                                            <li>
                                                <a href="about"><span class="menu-item-text">Our Story</span></a>
                                            </li>
                                            <li>
                                                <a href="customers"><span class="menu-item-text">Gallery / Testinomials</span></a>
                                            </li>
                                            <li>
                                                <a href="faqs"><span class="menu-item-text">FAQs</span></a>
                                            </li>
                                        </ul> -->
                                    </li>
                                    <li class="level-0 menu-item menu-item-has-children">
                                        <a href="" ><span class="menu-item-text">Categories</span></a>
                                        <ul class="sub-menu">
                                            <?php
                                            foreach($category as $cate)
                                            {
                                                ?>
                                                    <li>
                                                        <a href="<?=BASE_URL?>store?category=<?=$cate['category']?>"><span class="menu-item-text"><?=$cate['category']?></span></a>
                                                    </li>
                                                <?php
                                            }
                                            ?>
                                        </ul>
                                    </li>

                                    <li class="level-0 menu-item">
                                        <a href="custom-request-form" ><span class="menu-item-text">Design Your Own</span></a>
                                    </li>

                                    <li class="level-0 menu-item">
                                        <a href="custom-request-form" ><span class="menu-item-text">Bulk Orders</span></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="discount-strip py-3 flat-discount-slider" style="background-color: lavender;">
    <ul class="list-unstyled d-flex justify-content-around mb-0">
        <li class="text-center"><strong class="text-danger">Flat 400/- off</strong> on your first customer order</li>
        <li class="text-center"><strong class="text-danger">Get Flat 600/- off</strong> on Sneakers + Jacket combo</li>
        <li class="text-center">Refer a friend and both of you get <strong class="text-danger">get 10% off</strong></li>
        <li class="text-center">Refer a friend and both of you get <strong class="text-danger">get 10% off</strong></li>
        <li class="text-center">Refer a friend and both of you get <strong class="text-danger">get 10% off</strong></li>
        <li class="text-center">Refer a friend and both of you get <strong class="text-danger">get 10% off</strong></li>
    </ul>
</div> -->