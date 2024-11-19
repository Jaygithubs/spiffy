<?php
include('../components/headerlink.php');
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
                                    <div class="content">
                                        <h5>Products</h4>
                                        <h5>3</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="category_count">
                                <a href="<?=ADMIN_URL?>pages/add_category.php" target="_blank">
                                    <div class="content">
                                        <h5>Categories</h5>
                                        <h5>3</h5>
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