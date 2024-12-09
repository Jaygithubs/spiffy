<?php
header('Content-Type: application/json');
include('../config/db.php');

// Retrieve the POST data
$product_id = $_POST['product_id'];
$productname = $_POST['productname'];
$short_discription = $_POST['short_discription'];
$discription = $_POST['discription'];
$note = $_POST['note'];
$price = $_POST['price'];
$category = $_POST['category'];

// Directory for uploads
$uploadDir = '../assets/images/productimages/';

// Function to generate a unique file name based on the timestamp
function generateUniqueFileName($originalFileName) {
    // Get the file extension
    $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
    // Generate a unique name using current timestamp and a random number
    return time() . '-' . rand(1000, 9999) . '.' . $fileExtension;
}

// Handle front image upload
$frontImagePath = '';
if (isset($_FILES['frontimage']) && $_FILES['frontimage']['error'] == 0) {
    $frontImageName = $_FILES['frontimage']['name'];
    $frontImageTmp = $_FILES['frontimage']['tmp_name'];

    // Generate a unique name for the front image
    $frontImagePath = $uploadDir . generateUniqueFileName($frontImageName);

    // Move the front image to the upload directory
    if (!move_uploaded_file($frontImageTmp, $frontImagePath)) {
        echo json_encode(["status" => false, "message" => "Failed to upload front image."]);
        exit;
    }
} 

// If no new front image is uploaded, retain the existing one (if provided)
if (empty($frontImagePath) && !empty($_POST['frontimagevalue_for_blank'])) {
    $frontImagePath = $_POST['frontimagevalue_for_blank'];
}

// Handle multiple product gallery images
$uploadedGalleryImages = [];
if (isset($_FILES['productimagegallery'])) {
    if (is_array($_FILES['productimagegallery']['name'])) {
        // Multiple gallery images
        for ($i = 0; $i < count($_FILES['productimagegallery']['name']); $i++) {
            $galleryImageName = $_FILES['productimagegallery']['name'][$i];
            $galleryImageTmp = $_FILES['productimagegallery']['tmp_name'][$i];

            // Generate a unique name for the gallery image
            $galleryImagePath = $uploadDir . generateUniqueFileName($galleryImageName);

            // Move gallery images to the upload directory
            if (move_uploaded_file($galleryImageTmp, $galleryImagePath)) {
                $uploadedGalleryImages[] = $galleryImagePath; // Store the path of the uploaded image
            } else {
                echo json_encode(["status" => false, "message" => "Failed to upload one or more gallery images."]);
                exit;
            }
        }
    } else {
        // Single gallery image
        $galleryImageName = $_FILES['productimagegallery']['name'];
        $galleryImageTmp = $_FILES['productimagegallery']['tmp_name'];

        // Generate a unique name for the gallery image
        $galleryImagePath = $uploadDir . generateUniqueFileName($galleryImageName);

        // Move the single gallery image to the upload directory
        if (move_uploaded_file($galleryImageTmp, $galleryImagePath)) {
            $uploadedGalleryImages[] = $galleryImagePath;
        } else {
            echo json_encode(["status" => false, "message" => "Failed to upload the gallery image."]);
            exit;
        }
    }
}

// Convert gallery image paths to JSON string
$galleryJson = !empty($uploadedGalleryImages) ? json_encode($uploadedGalleryImages) : null;

// Prepare the SQL query to update the product details
if (empty($galleryJson)) {
    // No gallery images uploaded, update only the main fields and front image
    $updateProductSQL = $conn->prepare("UPDATE `products` SET `productname`=?, `price`=?, `category`=?, `shortdiscription`=?, `discription`=?, `note`=?, `frontimages`=? WHERE `id`=?");
    $updateProductSQL->bind_param('sdsssssi', $productname, $price, $category, $short_discription, $discription, $note, $frontImagePath, $product_id);
} else {
    // Gallery images also updated
    $updateProductSQL = $conn->prepare("UPDATE `products` SET `productname`=?, `price`=?, `category`=?, `shortdiscription`=?, `discription`=?, `note`=?, `frontimages`=?, `galleryimages`=? WHERE `id`=?");
    $updateProductSQL->bind_param('sdssssssi', $productname, $price, $category, $short_discription, $discription, $note, $frontImagePath, $galleryJson, $product_id);
}

// Execute the SQL query
if ($updateProductSQL->execute()) {
    echo json_encode(["status" => true, "message" => "Product updated successfully."]);
} else {
    echo json_encode(["status" => false, "message" => "Failed to update product.", "error" => $updateProductSQL->error]);
}
?>
