<?php
include("./assets/config/db.php");

$product_id=$_GET['id'];
$category=$_GET['category'];
$fetch_product_detail=$conn->prepare("SELECT * FROM `products` WHERE `id`=? AND `category`=?");
$fetch_product_detail->bind_param("is",$product_id,$category);
$pro;
if($fetch_product_detail->execute())
{
    $fetch_product_detail_result=$fetch_product_detail->get_result();
    $pro=$fetch_product_detail_result->fetch_all(MYSQLI_ASSOC)[0];
    $fetch_product_detail->close();
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta Data -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Spiffy Sole</title>

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

        <!-- Site Stylesheet -->
        <link rel="stylesheet" href="assets/css/app.css" type="text/css">
        <link rel="stylesheet" href="assets/css/responsive.css" type="text/css">
        <link rel="stylesheet" href="assets/css/product-features.css" type="text/css">

        <!-- Google Web Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@100;200;300;400;500;600;700&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=EB+Garamond:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&amp;display=swap" rel="stylesheet">
    </head>

    <body class="home">
        <div id="page" class="hfeed page-wrapper">
            <header id="site-header" class="site-header header-v1">
                <?php include('inc/header.php'); ?>
            </header>

            <div id="site-main" class="site-main">
                <div id="main-content" class="main-content">
                    <div id="primary" class="content-area">
                        <div id="content" class="site-content" role="main">
                            
                            <div class="container-fluid my-5">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="details-page-main-image" id="imageZoomEle" style="
                                        --url: url('<?=str_replace('..','/spiffy/admin',$pro['frontimages'])?>');
                                        --zoom-x: 0%; --zoom-y: 0%;
                                        --opacity:0;
                                        ">
                                            <img src="<?=str_replace('..','/spiffy/admin',$pro['frontimages'])?>" alt="<?=$pro['frontimages']?>" srcset="">
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="product-gallery-images">
                                                    <?php
                                                    foreach(json_decode($pro['galleryimages']) as $galleryimage)
                                                    {
                                                        ?>
                                                        <span class="gallery-image">
                                                            <img src="<?=str_replace('..','/spiffy/admin',$galleryimage)?>" alt="<?=$galleryimage?>">
                                                        </span>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="product_detail">                                         
                                            <div class="productname">
                                                <h4>Product Name :</h4>
                                                <p><?=$pro['productname']?></p>
                                            </div>
                                            <div class="short_discription">
                                                <h4>Short Discription :</h4>
                                                <p><?=$pro['shortdiscription']?></p>
                                            </div>
                                            <div class="cost_details">
                                                <h4>Cost Details :</h4>
                                                <p><?=$pro['discription']?></p>
                                            </div>
                                            <div class="note">
                                                <h4>Note :</h4>
                                                <p><?=$pro['note']?></p>
                                            </div>
                                            <div class="price">
                                                <h4>Price :</h4>
                                                <p>RS .<?=$pro['price']?></p>
                                            </div>
                                            <div class="buttons">
                                                <button class="revamp">Revamp My Jeans/Jacket/Shoes</button><br>
                                                <button class="custom-new-pair">Custom New Pair</button><br>
                                                <button class="connect-now">Connect Now</button>
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
        </div>

        <!-- Back Top button -->
        <div class="back-top button-show">
            <i class="arrow_carrot-up"></i>
        </div>


        <!-- Dependency Scripts -->
        <script src="libs/popper/js/popper.min.js"></script>
        <script src="libs/jquery/js/jquery.min.js"></script>
        <script src="libs/bootstrap/js/bootstrap.min.js"></script>
        <script src="libs/slick/js/slick.min.js"></script>
        <script src="libs/countdown/js/jquery.countdown.min.js"></script>
        <script src="libs/mmenu/js/jquery.mmenu.all.min.js"></script>

        <!-- Site Scripts -->
        <script src="assets/js/app.js"></script>
        <script src="assets/js/custom.js"></script>
        <script src="assets/js/product-features.js"></script>
    </body>
</html>