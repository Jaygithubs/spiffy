<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta Data -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Shoes | Spiffy Sole</title>

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="media/favicon.png">

        <!-- Dependency Styles -->
        <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="libs/feather-font/css/iconfont.css" type="text/css">
        <link rel="stylesheet" href="libs/icomoon-font/css/icomoon.css" type="text/css">
        <link rel="stylesheet" href="libs/font-awesome/css/font-awesome.css" type="text/css">
        <link rel="stylesheet" href="libs/wpbingofont/css/wpbingofont.css" type="text/css">
        <link rel="stylesheet" href="libs/elegant-icons/css/elegant.css" type="text/css">
        <link rel="stylesheet" href="libs/slick/css/slick.css" type="text/css">
        <link rel="stylesheet" href="libs/slick/css/slick-theme.css" type="text/css">
        <link rel="stylesheet" href="libs/mmenu/css/mmenu.min.css" type="text/css">
        <link rel="stylesheet" href="libs/slider/css/jslider.css">

        <!-- Site Stylesheet -->
        <link rel="stylesheet" href="assets/css/app.css" type="text/css">
        <link rel="stylesheet" href="assets/css/responsive.css" type="text/css">

        <!-- Google Web Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@100;200;300;400;500;600;700&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=EB+Garamond:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&amp;display=swap" rel="stylesheet">

        <style type="text/css">
            .float{
                position:fixed;
                width:60px;
                height:60px;
                bottom:40px;
                right:40px;
                background-color:#25d366;
                color:#FFF;
                border-radius:50px;
                text-align:center;
                font-size:30px;
                box-shadow: 2px 2px 3px #999;
                z-index:100;
            }

            .my-float{
                margin-top:16px;
            }
        </style>
    </head>

    <body class="shop">
        <div id="page" class="hfeed page-wrapper">
            <header id="site-header" class="site-header header-v1 absolute">
                <?php include('inc/header.php'); ?>
            </header>

            <div id="site-main" class="site-main">
                <div id="main-content" class="main-content">
                    <div id="primary" class="content-area">
                        <div id="title" class="page-title">
                            <div class="section-container">
                                <div class="content-title-heading">
                                    <h1 class="text-title-heading">
                                        Shoes	
                                    </h1>
                                </div>
                            </div>
                        </div>

                        <div id="content" class="site-content" role="main">
                            <div class="section-padding">
                                <div class="section-container p-l-r">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                            <!--                                            <div class="products-topbar clearfix">
                                                                                            <div class="products-topbar-left">
                                                                                                <div class="products-count">
                                                                                                    Showing all 21 results
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="products-topbar-right">
                                                                                                <div class="products-sort dropdown">
                                                                                                    <span class="sort-toggle dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Default sorting</span>
                                                                                                    <ul class="sort-list dropdown-menu" x-placement="bottom-start">
                                                                                                        <li class="active"><a href="#">Default sorting</a></li>
                                                                                                        <li><a href="#">Sort by popularity</a></li>
                                                                                                        <li><a href="#">Sort by average rating</a></li>
                                                                                                        <li><a href="#">Sort by latest</a></li>
                                                                                                        <li><a href="#">Sort by price: low to high</a></li>
                                                                                                        <li><a href="#">Sort by price: high to low</a></li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                                <ul class="layout-toggle nav nav-tabs">
                                                                                                    <li class="nav-item">
                                                                                                        <a class="layout-grid nav-link active" data-toggle="tab" href="#layout-grid" role="tab"><span class="icon-column"><span class="layer first"><span></span><span></span><span></span></span><span class="layer middle"><span></span><span></span><span></span></span><span class="layer last"><span></span><span></span><span></span></span></span></a>
                                                                                                    </li>
                                                                                                    <li class="nav-item">
                                                                                                        <a class="layout-list nav-link" data-toggle="tab" href="#layout-list" role="tab"><span class="icon-column"><span class="layer first"><span></span><span></span></span><span class="layer middle"><span></span><span></span></span><span class="layer last"><span></span><span></span></span></span></a>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>-->

                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="layout-grid" role="tabpanel">
                                                    <div class="products-list grid">
                                                        <div class="row">
                                                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-lable">
                                                                            <div class="hot">Hot</div>
                                                                        </div>
                                                                        <div class="product-thumb-hover">
                                                                            <a href="https://api.whatsapp.com/send?phone=9205857379&text=Hi! I’d like to customize my sneakers. What’s the process to do that?">
                                                                                <img width="600" height="600" src="media/product/Shoe/set 28/1.jpg" class="post-image" alt="">
                                                                                <img width="600" height="600" src="media/product/Shoe/set 28/2.jpg" class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents text-center">
                                                                            <h3 class="product-title">Girl Power Custom</h3>
                                                                            <h3 class="product-title">Rs.3999</h3>
                                                                            <span class="price"><a href="https://api.whatsapp.com/send?phone=9205857379&text=Hi! I’d like to customize my sneakers. What’s the process to do that?">Buy Now</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-lable">
                                                                            <div class="hot">Hot</div>
                                                                        </div>
                                                                        <div class="product-thumb-hover">
                                                                            <a href="https://api.whatsapp.com/send?phone=9205857379&text=Hi! I’d like to customize my sneakers. What’s the process to do that?">
                                                                                <img width="600" height="600" src="media/product/Shoe/set 27/1.jpg" class="post-image" alt="">
                                                                                <img width="600" height="600" src="media/product/Shoe/set 27/12.jpg" class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents text-center">
                                                                            <h3 class="product-title">Hello</h3>
                                                                            <span class="price"><a href="https://api.whatsapp.com/send?phone=9205857379&text=Hi! I’d like to customize my sneakers. What’s the process to do that?">Buy Now</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-lable">
                                                                            <div class="hot">Hot</div>
                                                                        </div>
                                                                        <div class="product-thumb-hover">
                                                                            <a href="https://api.whatsapp.com/send?phone=9205857379&text=Hi! I’d like to customize my sneakers. What’s the process to do that?">
                                                                                <img width="600" height="600" src="media/product/Shoe/set 26/1.jpg" class="post-image" alt="">
                                                                                <img width="600" height="600" src="media/product/Shoe/set 26/2.jpg" class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents text-center">
                                                                            <h3 class="product-title">Harry Potter Custom (H&M High Top)</h3>
                                                                            <h3 class="product-title">Rs.3999</h3>
                                                                            <span class="price"><a href="https://api.whatsapp.com/send?phone=9205857379&text=Hi! I’d like to customize my sneakers. What’s the process to do that?">Buy Now</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-lable">
                                                                            <div class="hot">Hot</div>
                                                                        </div>
                                                                        <div class="product-thumb-hover">
                                                                            <a href="https://api.whatsapp.com/send?phone=9205857379&text=Hi! I’d like to customize my sneakers. What’s the process to do that?">
                                                                                <img width="600" height="600" src="media/product/Shoe/set 25/1.jpg" class="post-image" alt="">
                                                                                <img width="600" height="600" src="media/product/Shoe/set 25/2.jpg" class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents text-center">
                                                                            <h3 class="product-title">Exclusive</h3>
                                                                            <span class="price"><a href="https://api.whatsapp.com/send?phone=9205857379&text=Hi! I’d like to customize my sneakers. What’s the process to do that?">Buy Now</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-lable">
                                                                            <div class="hot">Hot</div>
                                                                        </div>
                                                                        <div class="product-thumb-hover">
                                                                            <a href="https://api.whatsapp.com/send?phone=9205857379&text=Hi! I’d like to customize my sneakers. What’s the process to do that?">
                                                                                <img width="600" height="600" src="media/product/Shoe/set 24/1.jpg" class="post-image" alt="">
                                                                                <img width="600" height="600" src="media/product/Shoe/set 24/2.jpg" class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents text-center">
                                                                            <h3 class="product-title">J Cole Custom (Nike Court Royale</h3>
                                                                            <h3 class="product-title">Rs.4899</h3>
                                                                            <span class="price"><a href="https://api.whatsapp.com/send?phone=9205857379&text=Hi! I’d like to customize my sneakers. What’s the process to do that?">Buy Now</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-lable">
                                                                            <div class="hot">Hot</div>
                                                                        </div>
                                                                        <div class="product-thumb-hover">
                                                                            <a href="https://api.whatsapp.com/send?phone=9205857379&text=Hi! I’d like to customize my sneakers. What’s the process to do that?">
                                                                                <img width="600" height="600" src="media/product/Shoe/Set 11/1.jpg" class="post-image" alt="">
                                                                                <img width="600" height="600" src="media/product/Shoe/Set 11/2.jpg" class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents text-center">
                                                                            <h3 class="product-title">CN 90’s Custom 01</h3>
                                                                            <h3 class="product-title">Rs.5499</h3>
                                                                            <span class="price"><a href="https://api.whatsapp.com/send?phone=9205857379&text=Hi! I’d like to customize my sneakers. What’s the process to do that?">Buy Now</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-lable">
                                                                            <div class="hot">Hot</div>
                                                                        </div>
                                                                        <div class="product-thumb-hover">
                                                                            <a href="https://api.whatsapp.com/send?phone=9205857379&text=Hi! I’d like to customize my sneakers. What’s the process to do that?">
                                                                                <img width="600" height="600" src="media/product/Shoe/set 23/1.jpg" class="post-image" alt="">
                                                                                <img width="600" height="600" src="media/product/Shoe/set 23/2.jpg" class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents text-center">
                                                                            <h3 class="product-title">Nike AF1 Black Midnight Sketchups </h3>
                                                                            <h3 class="product-title">Rs.3999</h3>
                                                                            <span class="price"><a href="https://api.whatsapp.com/send?phone=9205857379&text=Hi! I’d like to customize my sneakers. What’s the process to do that?">Buy Now</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-lable">
                                                                            <div class="hot">Hot</div>
                                                                        </div>
                                                                        <div class="product-thumb-hover">
                                                                            <a href="https://api.whatsapp.com/send?phone=9205857379&text=Hi! I’d like to customize my sneakers. What’s the process to do that?">
                                                                                <img width="600" height="600" src="media/product/Shoe/set 22/1.jpg" class="post-image" alt="">
                                                                                <img width="600" height="600" src="media/product/Shoe/set 22/2.jpg" class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents text-center">
                                                                            <h3 class="product-title">Travel Stamp Custom Converse</h3>
                                                                            <h3 class="product-title">Rs.5199</h3>
                                                                            <span class="price"><a href="https://api.whatsapp.com/send?phone=9205857379&text=Hi! I’d like to customize my sneakers. What’s the process to do that?">Buy Now</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-lable">
                                                                            <div class="hot">Hot</div>
                                                                        </div>
                                                                        <div class="product-thumb-hover">
                                                                            <a href="https://api.whatsapp.com/send?phone=9205857379&text=Hi! I’d like to customize my sneakers. What’s the process to do that?">
                                                                                <img width="600" height="600" src="media/product/Shoe/set 20/1.jpg" class="post-image" alt="">
                                                                                <img width="600" height="600" src="media/product/Shoe/set 20/2.jpg" class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents text-center">
                                                                            <h3 class="product-title">Cuba Libra Custom(Puma Rebound)</h3>
                                                                            <span class="price"><a href="https://api.whatsapp.com/send?phone=9205857379&text=Hi! I’d like to customize my sneakers. What’s the process to do that?">Buy Now</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-lable">
                                                                            <div class="hot">Hot</div>
                                                                        </div>
                                                                        <div class="product-thumb-hover">
                                                                            <a href="https://api.whatsapp.com/send?phone=9205857379&text=Hi! I’d like to customize my sneakers. What’s the process to do that?">
                                                                                <img width="600" height="600" src="media/product/Shoe/set 19/1.jpg" class="post-image" alt="">
                                                                                <img width="600" height="600" src="media/product/Shoe/set 19/2.jpg" class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents text-center">
                                                                            <h3 class="product-title">Netflix n Chill Custom</h3>
                                                                            <h3 class="product-title">Rs.4099</h3>
                                                                            <span class="price"><a href="https://api.whatsapp.com/send?phone=9205857379&text=Hi! I’d like to customize my sneakers. What’s the process to do that?">Buy Now</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-lable">
                                                                            <div class="hot">Hot</div>
                                                                        </div>
                                                                        <div class="product-thumb-hover">
                                                                            <a href="https://api.whatsapp.com/send?phone=9205857379&text=Hi! I’d like to customize my sneakers. What’s the process to do that?">
                                                                                <img width="600" height="600" src="media/product/Shoe/set 18/1.jpg" class="post-image" alt="">
                                                                                <img width="600" height="600" src="media/product/Shoe/set 18/2.jpg" class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents text-center">
                                                                            <h3 class="product-title">Stephen Curry Custom (Puma Rebound)</h3>
                                                                            <h3 class="product-title">Rs.5299</h3>
                                                                            <span class="price"><a href="https://api.whatsapp.com/send?phone=9205857379&text=Hi! I’d like to customize my sneakers. What’s the process to do that?">Buy Now</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-lable">
                                                                            <div class="hot">Hot</div>
                                                                        </div>
                                                                        <div class="product-thumb-hover">
                                                                            <a href="https://api.whatsapp.com/send?phone=9205857379&text=Hi! I’d like to customize my sneakers. What’s the process to do that?">
                                                                                <img width="600" height="600" src="media/product/Shoe/set 17/1.jpg" class="post-image" alt="">
                                                                                <img width="600" height="600" src="media/product/Shoe/set 17/2.jpg" class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents text-center">
                                                                            <h3 class="product-title">Rick and Morty Custom 01 </h3>
                                                                            <h3 class="product-title">Rs.3899</h3>
                                                                            <span class="price"><a href="https://api.whatsapp.com/send?phone=9205857379&text=Hi! I’d like to customize my sneakers. What’s the process to do that?">Buy Now</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-lable">
                                                                            <div class="hot">Hot</div>
                                                                        </div>
                                                                        <div class="product-thumb-hover">
                                                                            <a href="https://api.whatsapp.com/send?phone=9205857379&text=Hi! I’d like to customize my sneakers. What’s the process to do that?">
                                                                                <img width="600" height="600" src="media/product/Shoe/set 16/1.jpg" class="post-image" alt="">
                                                                                <img width="600" height="600" src="media/product/Shoe/set 16/2.jpg" class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents text-center">
                                                                            <h3 class="product-title">Doodle Monster Custom Slip-ons </h3>
                                                                            <h3 class="product-title">Rs.2999</h3>
                                                                            <span class="price"><a href="https://api.whatsapp.com/send?phone=9205857379&text=Hi! I’d like to customize my sneakers. What’s the process to do that?">Buy Now</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-lable">
                                                                            <div class="hot">Hot</div>
                                                                        </div>
                                                                        <div class="product-thumb-hover">
                                                                            <a href="https://api.whatsapp.com/send?phone=9205857379&text=Hi! I’d like to customize my sneakers. What’s the process to do that?">
                                                                                <img width="600" height="600" src="media/product/Shoe/Set 15/1.jpg" class="post-image" alt="">
                                                                                <img width="600" height="600" src="media/product/Shoe/Set 15/2.jpg" class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents text-center">
                                                                            <h3 class="product-title">SpongeBob Squarepants Custom</h3>
                                                                            <h3 class="product-title">Rs.7199</h3>
                                                                            <span class="price"><a href="https://api.whatsapp.com/send?phone=9205857379&text=Hi! I’d like to customize my sneakers. What’s the process to do that?">Buy Now</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-lable">
                                                                            <div class="hot">Hot</div>
                                                                        </div>
                                                                        <div class="product-thumb-hover">
                                                                            <a href="https://api.whatsapp.com/send?phone=9205857379&text=Hi! I’d like to customize my sneakers. What’s the process to do that?">
                                                                                <img width="600" height="600" src="media/product/Shoe/set 14/1.jpg" class="post-image" alt="">
                                                                                <img width="600" height="600" src="media/product/Shoe/set 14/2.jpg" class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents text-center">
                                                                            <h3 class="product-title">Exclusive/h3>
                                                                                <span class="price"><a href="https://api.whatsapp.com/send?phone=9205857379&text=Hi! I’d like to customize my sneakers. What’s the process to do that?">Buy Now</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-lable">
                                                                            <div class="hot">Hot</div>
                                                                        </div>
                                                                        <div class="product-thumb-hover">
                                                                            <a href="https://api.whatsapp.com/send?phone=9205857379&text=Hi! I’d like to customize my sneakers. What’s the process to do that?">
                                                                                <img width="600" height="600" src="media/product/Shoe/set 13/1.jpg" class="post-image" alt="">
                                                                                <img width="600" height="600" src="media/product/Shoe/set 13/2.jpg" class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents text-center">
                                                                            <h3 class="product-title">Allen Iverson Custom (H&M High Top) </h3>
                                                                            <h3 class="product-title">Rs.6299</h3>
                                                                            <span class="price"><a href="https://api.whatsapp.com/send?phone=9205857379&text=Hi! I’d like to customize my sneakers. What’s the process to do that?">Buy Now</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-lable">
                                                                            <div class="hot">Hot</div>
                                                                        </div>
                                                                        <div class="product-thumb-hover">
                                                                            <a href="https://api.whatsapp.com/send?phone=9205857379&text=Hi! I’d like to customize my sneakers. What’s the process to do that?">
                                                                                <img width="600" height="600" src="media/product/Shoe/set 12/1.jpg" class="post-image" alt="">
                                                                                <img width="600" height="600" src="media/product/Shoe/set 12/2.jpg" class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents text-center">
                                                                            <h3 class="product-title">Exclusive</h3>
                                                                            <span class="price"><a href="https://api.whatsapp.com/send?phone=9205857379&text=Hi! I’d like to customize my sneakers. What’s the process to do that?">Buy Now</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-lable">
                                                                            <div class="hot">Hot</div>
                                                                        </div>
                                                                        <div class="product-thumb-hover">
                                                                            <a href="https://api.whatsapp.com/send?phone=9205857379&text=Hi! I’d like to customize my sneakers. What’s the process to do that?">
                                                                                <img width="600" height="600" src="media/product/Shoe/set 10/1.jpg" class="post-image" alt="">
                                                                                <img width="600" height="600" src="media/product/Shoe/set 10/2.jpg" class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents text-center">
                                                                            <h3 class="product-title">Nike Court Royale Graffiti Custom</h3>
                                                                            <h3 class="product-title">Rs.5699</h3>
                                                                            <span class="price"><a href="https://api.whatsapp.com/send?phone=9205857379&text=Hi! I’d like to customize my sneakers. What’s the process to do that?">Buy Now</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-lable">
                                                                            <div class="hot">Hot</div>
                                                                        </div>
                                                                        <div class="product-thumb-hover">
                                                                            <a href="https://api.whatsapp.com/send?phone=9205857379&text=Hi! I’d like to customize my sneakers. What’s the process to do that?">
                                                                                <img width="600" height="600" src="media/product/Shoe/set 9/1.jpg" class="post-image" alt="">
                                                                                <img width="600" height="600" src="media/product/Shoe/set 9/2.jpg" class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents text-center">
                                                                            <h3 class="product-title">Luffy and Zoro (One Piece) Custom Slip-ons </h3>
                                                                            <h3 class="product-title">Rs.4299</h3>
                                                                            <span class="price"><a href="https://api.whatsapp.com/send?phone=9205857379&text=Hi! I’d like to customize my sneakers. What’s the process to do that?">Buy Now</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- #content -->
                    </div><!-- #primary -->
                </div><!-- #main-content -->
            </div>

            <?php include('inc/footer.php'); ?>

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
            <a href="https://api.whatsapp.com/send?phone=9205857379&text=Hi! I’d like to customize my sneakers. What’s the process to do that?" class="float" target="_blank">
                <i class="fa fa-whatsapp my-float"></i>
            </a>


        </div>

        <!-- Back Top button -->
        <!-- <div class="back-top button-show">
            <i class="arrow_carrot-up"></i>
        </div> -->


        <!-- Dependency Scripts -->
        <script src="libs/popper/js/popper.min.js"></script>
        <script src="libs/jquery/js/jquery.min.js"></script>
        <script src="libs/bootstrap/js/bootstrap.min.js"></script>
        <script src="libs/slick/js/slick.min.js"></script>
        <script src="libs/countdown/js/jquery.countdown.min.js"></script>
        <script src="libs/mmenu/js/jquery.mmenu.all.min.js"></script>
        <script src="libs/slider/js/tmpl.js"></script>
        <script src="libs/slider/js/jquery.dependClass-0.1.js"></script>
        <script src="libs/slider/js/draggable-0.1.js"></script>
        <script src="libs/slider/js/jquery.slider.js"></script>

        <!-- Site Scripts -->
        <script src="assets/js/app.js"></script>
    </body>
</html>