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
                    <div class="row">
                        <div class="col-sm-6 p-4">
                            <h4>Add Category</h4>
                            <form action="" method="post" id="add_category">
                                <label for="category">Category</label>
                                <input type="text" name="category" id="category" placeholder="Enter category name">
                                <button type="submit" class="add_category_btn">Add Category <i class="bi bi-arrow-right-short"></i></button>
                            </form>
                        </div>
                        <div class="col-sm-6 p-4">
                            <h4>All Category</h4>
                            <div class="category_table">
                                <ul>
                                    <?php
                            $fetch_category=$conn->prepare("SELECT * FROM `category`");
                            if($fetch_category->execute())
                            {
                                $fetch_category_result=$fetch_category->get_result();
                                foreach($fetch_category_result->fetch_all(MYSQLI_ASSOC) as $category)
                                {
                                    ?>
                                    <li><?=$category['category']?><span class="operation"><span class="delete_icon" category_id="<?=$category['category_id']?>"><i class="bi bi-trash3-fill"></i></span></span></li>
                                    <?php
                                }
                                
                            }
                            ?>
                                </ul>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include('../components/footerlink.php');
?>