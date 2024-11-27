<?php
include("./assets/config/db.php");

$products;

if (isset($_GET['category'])) {
    $category = $_GET['category'];
    $sql = "SELECT * FROM `products` WHERE `category`=?";
    $product_sql = $conn->prepare($sql);
    $product_sql->bind_param('s', $category);
    if ($product_sql->execute()) {
        $product_sql_result = $product_sql->get_result();
        $products = $product_sql_result->fetch_all(MYSQLI_ASSOC);
        $product_sql->close();
    }
} else {
    $sql = "SELECT * FROM `products`";
    $product_sql = $conn->prepare($sql);
    if ($product_sql->execute()) {
        $product_sql_result = $product_sql->get_result();
        $products = $product_sql_result->fetch_all(MYSQLI_ASSOC);
        $product_sql->close();
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Store | Spiffy Sole</title>

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
        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .my-float {
            margin-top: 16px;
        }
    </style>
</head>

<body class="shop">
    <div id="page" class="hfeed page-wrapper">
        <header id="site-header" class="site-header header-v1">
            <?php include('inc/header.php'); ?>
        </header>

        <div id="site-main" class="site-main">
            <div id="main-content" class="main-content">
                <div id="primary" class="content-area">
                    <!-- <div id="title" class="page-title">
                            <div class="section-container">
                                <div class="content-title-heading">
                                    <h1 class="text-title-heading">
                                        Shoes	
                                    </h1>
                                </div>
                            </div>
                        </div> -->

                    <div id="content" class="site-content my-5" role="main">
                        <div class="section-padding">
                            <div class="section-container p-l-r">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="layout-grid" role="tabpanel">
                                                <div class="products-list grid">
                                                    <div class="row">
                                                        <?php
                                                        foreach($products as $pro)
                                                        {
                                                            ?>
                                                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-lable">
                                                                            <div class="hot">Hot</div>
                                                                        </div>
                                                                        <div class="product-thumb-hover">
                                                                            <a href="<?=BASE_URL?>product-features?category=<?=$pro['category']?>&id=<?=$pro['id']?>">
                                                                                <img width="600" height="600" src="<?=str_replace('..','/spiffy/admin',$pro['frontimages'])?>" class="post-image" alt="">
                                                                                <img width="600" height="600" src="<?=str_replace('..','/spiffy/admin',json_decode($pro['galleryimages'])[0])?>" class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents text-center">
                                                                            <h3 class="product-title"><?=$pro['productname']?></h3>
                                                                            <h3 class="product-title">Rs.<?=$pro['price']?></h3>
                                                                            <span class="price"><a href="https://api.whatsapp.com/send?phone=9205857379&text=Hi! I’d like to customize my sneakers. What’s the process to do that?">Buy Now</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <?php
                                                        }
                                                        ?>

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
    <script src="assets/js/custom.js"></script>
</body>

</html>