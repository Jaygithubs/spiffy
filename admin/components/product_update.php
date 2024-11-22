<?php
include('../components/headerlink.php');
include("../config/db.php");

$update_product_id=$_GET['id'];
$update_product_sql=$conn->prepare("SELECT * FROM `products` WHERE id=?");
$update_product_sql->bind_param('i',$update_product_id);
$data;
if($update_product_sql->execute())
{
    $update_product_sql_result=$update_product_sql->get_result();
    $data=$update_product_sql_result->fetch_all(MYSQLI_ASSOC)[0];
    $update_product_sql->close();
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
                    <h4>Add Product</h4>
                    <form action="" method="post" id="update_product" enctype="multipart/form-data">
                        <label for="productname">Product Name: </label>
                        <input type="text" name="productname" id="productname" value="<?=$data['productname']?>">
                        <br>
                        <label for="short_discription">Short Discription: </label>
                        <textarea cols="100" rows="5" type="text" name="short_discription" id="short_discription"><?=$data['shortdiscription']?></textarea>
                        <br>
                        <label for="discription">Cost Detail: </label><br>
                        <textarea cols="100" rows="10" type="text" name="discription" id="discription"><?=$data['discription']?></textarea>
                        <br>
                        <label for="note">Note: </label><br>
                        <textarea name="note" id="note"><?=$data['note']?></textarea>
                        <br>
                        <label for="price">Price: </label>
                        <input type="number" name="price" id="price" value="<?=$data['price']?>">
                        <br>
                        <label for="category">Category: </label>
                        <select name="category" id="category">
                            <option value="<?=$data['category']?>"><?=$data['category']?></option>
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
                        <input type="file" name="frontimage" accept="image/*" id="frontimage" >
                        <input type="hidden" id='frontimagevalue_for_blank' name="frontimagevalue_for_blank" value="<?=$data['frontimages']?>">
                        <?php
                        $hh=trim($data['galleryimages'], '"');
                        $array = explode('","', $hh);
                        $array = array_map(function($item) {
                            return str_replace('\/', '/', $item);
                        }, $array);
                        $json = json_encode($array, JSON_PRETTY_PRINT);
                        ?>
                        <input type="hidden" id='frontimage_gallery_value_for_blank' name="image_gallery_value_for_blank" value="<?=$json?>">
                        <div class="show_frontproduct_image w-25 p-2">
                            <img src="<?=$data['frontimages']?>" alt="" class="img-thumbnail border-1">
                        </div>
                        <br>
                        <label for="productimagegallery">Product Gallery Images: </label>
                        <input type="file" name="productimagegallery[]" accept="image/*" id="productimagegallery" multiple>
                        <div class="show_galleryproduct_image w-25 p-2">
                            <?php
                            foreach(json_decode($data['galleryimages']) as $images)
                            {
                                ?>
                                    <img src="<?=$images?>" alt="" class="img-thumbnail border-1">
                                <?php
                            }
                            ?>
                        </div>
                        <input type="hidden" name="product_id" value="<?=$update_product_id?>">
                        <button type="submit" class="product_update_btn">Update Product <i class="bi bi-arrow-right-short"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include('../components/footerlink.php');
?>