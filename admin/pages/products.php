<?php
include('../components/headerlink.php');
include("../config/db.php");
?>

<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2 p-0">
                <?php include('../components/sidebar.php'); ?>
            </div>
            <div class="col-sm-10 p-0">
                <div class="content">
                    <h4>All Products</h4>
                    <div class="product_table">
                        <table>
                            <thead>
                                <tr>
                                    <td>Product Image</td>
                                    <td>Product Name</td>
                                    <td>Category</td>
                                    <td>Price</td>
                                    <td>Short Discription</td>
                                    <td>Discription</td>
                                    <td colspan="2">Operations</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $products=$conn->prepare("SELECT * FROM `products`");
                                if($products->execute())
                                {
                                    $products_result=$products->get_result();
                                    foreach($products_result as $productData)
                                    {
                                        ?>
                                            <tr>
                                                <td class="frontimage"><img src="<?=$productData['frontimages']?>" alt="" class="img-thumbnail border-0"></td>
                                                <td><?=$productData['productname']?></td>
                                                <td><?=$productData['category']?></td>
                                                <td><?=$productData['price']?></td>
                                                <td><?=$productData['shortdiscription']?></td>
                                                <td><?=$productData['discription']?></td>
                                                <td class="product_edit"><i class="bi bi-pencil-square"></i></td>
                                                <td class="product_delete"><i class="bi bi-trash3-fill"></i></td>
                                            </tr>
                                        <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include('../components/footerlink.php');
?>