<?php
include('../components/headerlink.php');
include("../config/db.php");

$product_count;
$product_category_count;
$product_count_sql=$conn->prepare("SELECT COUNT(*) AS product_count FROM `products`");
if($product_count_sql->execute())
{
    $product_count_result=$product_count_sql->get_result();
    $product_count=$product_count_result->fetch_all(MYSQLI_ASSOC)[0]['product_count'];
}
$product_category_sql=$conn->prepare("SELECT COUNT(*) AS product_category FROM `category`");
if($product_category_sql->execute())
{
    $product_category_result=$product_category_sql->get_result();
    $product_category_count=$product_category_result->fetch_all(MYSQLI_ASSOC)[0]['product_category'];
}

?>

<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2 p-0">
                <?php include('../components/sidebar.php'); ?>
            </div>
            <div class="col-sm-10 p-0">
                <div class="content">
                    <h4>Admin Panel</h4>
                    <div class="row py-3">
                        <div class="col-sm-4">
                            <div class="products_count">
                                <a href="<?=ADMIN_URL?>pages/products.php" target="_blank">
                                    <div class="product_content">
                                        <h5>Products</h4>
                                        <h5><?=$product_count?></h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="category_count">
                                <a href="<?=ADMIN_URL?>pages/add_category.php" target="_blank">
                                    <div class="category_content">
                                        <h5>Categories</h5>
                                        <h5><?=$product_category_count?></h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include('../components/footerlink.php');
?>