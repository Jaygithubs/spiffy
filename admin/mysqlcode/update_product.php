<?php
header('Content-Type: application/json');
include('../config/db.php');

$product_id=$_POST['product_id'];
$productname=$_POST['productname'];
$short_discription=$_POST['short_discription'];
$discription=$_POST['discription'];
$note=$_POST['note'];
$price=$_POST['price'];
$category=$_POST['category'];
$frontImagePath;

$uploadDir = '../assets/images/productimages/';

if (isset($_FILES['frontimage']) && $_FILES['frontimage']['error'] == 0) {
    $frontImageName = $_FILES['frontimage']['name'];
    $frontImageTmp = $_FILES['frontimage']['tmp_name'];
    $frontImagePath = $uploadDir . basename($frontImageName);
    
    // Move front image to upload directory
    if (!move_uploaded_file($frontImageTmp, $frontImagePath)) {
        echo json_encode(["status" => false, "message" => "Failed to upload front image."]);
        exit;
    }
} 


if(empty($_FILES['frontimage']['name']))
{
    $frontImagePath=$_POST['frontimagevalue_for_blank'];
}


$uploadedGalleryImages = [];


    if (isset($_FILES['productimagegallery'])) {
        // Check if multiple files were uploaded
        if (is_array($_FILES['productimagegallery']['name'])) {
            // Loop through the multiple files
            for ($i = 0; $i < count($_FILES['productimagegallery']['name']); $i++) {
                $galleryImageName = $_FILES['productimagegallery']['name'][$i];
                $galleryImageTmp = $_FILES['productimagegallery']['tmp_name'][$i];
                $galleryImagePath = $uploadDir . basename($galleryImageName);
                
                // Move gallery images to upload directory
                if (move_uploaded_file($galleryImageTmp, $galleryImagePath)) {
                    $uploadedGalleryImages[] = $galleryImagePath;  // Save the path of the uploaded image
                } 
                // else {
                //     echo json_encode(["status" => false, "message" => "fds"]);
                //     exit;
                // }
            }
        } else {
            // If only one image is uploaded (not multiple)
            $galleryImageName = $_FILES['productimagegallery']['name'];
            $galleryImageTmp = $_FILES['productimagegallery']['tmp_name'];
            $galleryImagePath = $uploadDir . basename($galleryImageName);
            
            // Move the single gallery image
            if (move_uploaded_file($galleryImageTmp, $galleryImagePath)) {
                $uploadedGalleryImages[] = $galleryImagePath;  // Save the path of the uploaded image
            } 
        }
    }


if($_FILES['productimagegallery']['name'] === [""])
{
    $updata_product_sql=$conn->prepare("UPDATE `products` SET `productname`=?,`price`=?,`category`=?,`shortdiscription`=?,`discription`=?,`note`=?,`frontimages`=? WHERE `id`=?");
    $updata_product_sql->bind_param('sdsssssi',$productname,$price,$category,$short_discription,$discription,$note,$frontImagePath,$product_id);
    if($updata_product_sql->execute())
    {
        echo json_encode(["status"=>true]);
    }
    else
    {
        echo json_encode(["status"=>false,$updata_product_sql->error]);
    }
}
else
{
    $galleryJson=json_encode($uploadedGalleryImages);
    $updata_product_sql=$conn->prepare("UPDATE `products` SET `productname`=?,`price`=?,`category`=?,`shortdiscription`=?,`discription`=?,`note`=?,`frontimages`=?,`galleryimages`=? WHERE `id`=?");
    $updata_product_sql->bind_param('sdssssssi',$productname,$price,$category,$short_discription,$discription,$note,$frontImagePath,$galleryJson,$product_id);
    if($updata_product_sql->execute())
    {
        echo json_encode(["status"=>true]);
    }
    else
    {
        echo json_encode(["status"=>false,$updata_product_sql->error]);
    }
}

?>