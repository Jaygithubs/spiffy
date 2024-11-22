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
                    <h4>Add Product</h4>
                    <form action="" method="post" id="add_product" enctype="multipart/form-data">
                        <label for="productname">Product Name: </label>
                        <input type="text" name="productname" id="productname" placeholder="Enter product name" required>
                        <br>
                        <label for="short_discription">Short Discription: </label>
                        <textarea cols="100" rows="5" type="text" name="short_discription" id="short_discription" placeholder="Enter product short discription"></textarea>
                        <br>
                        <label for="discription">Cost Detail: </label><br>
                        <textarea cols="100" rows="10" type="text" name="discription" id="discription" placeholder="Enter product cost details" required></textarea>
                        <br>
                        <label for="note">Note: </label><br>
                        <textarea name="note" id="note" placeholder="Enter product note here"></textarea>
                        <br>
                        <label for="price">Price: </label>
                        <input type="number" name="price" id="price" placeholder="Enter your product price" required>
                        <br>
                        <label for="category">Category: </label>
                        <select name="category" id="category" required>
                            <option value="">Select product category</option>
                            <?php
                            $category=$conn->prepare("SELECT * FROM `category`");
                            if($category->execute())
                            {
                                $category_result=$category->get_result();
                                foreach($category_result->fetch_all(MYSQLI_ASSOC) as $category)
                                {
                                    ?>
                                    <option value="<?=$category['category']?>"><?=$category['category']?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                        <br>
                        <label for="frontimage">Upload product front image: </label>
                        <input type="file" name="frontimage" id="frontimage" required>
                        <br>
                        <label for="productimagegallery">Product Gallery Images: </label>
                        <input type="file" name="productimagegallery" id="productimagegallery" required multiple>
                        <button type="submit" class="add_product_btn">Add Product <i class="bi bi-arrow-right-short"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include('../components/footerlink.php');
?>