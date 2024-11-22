<?php
header('Content-Type: application/json');
include('../config/db.php');

// Check if the form is submitted and required fields are set
if (isset($_POST['productname']) && isset($_POST['discription']) && isset($_POST['price']) && isset($_POST['category'])) {
    // Get form fields
    $productname = $_POST['productname'];
    $short_description = $_POST['short_discription'];
    $description = $_POST['discription'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $note=$_POST['note'];

    // File upload directory
    $uploadDir = '../assets/images/productimages/';

    // Handle front image upload
    if (isset($_FILES['frontimage']) && $_FILES['frontimage']['error'] == 0) {
        $frontImageName = $_FILES['frontimage']['name'];
        $frontImageTmp = $_FILES['frontimage']['tmp_name'];
        $frontImagePath = $uploadDir . basename($frontImageName);
        
        // Move front image to upload directory
        if (!move_uploaded_file($frontImageTmp, $frontImagePath)) {
            echo json_encode(["status" => false, "message" => "Failed to upload front image."]);
            exit;
        }
    } else {
        echo json_encode(["status" => false, "message" => "Front image is required."]);
        exit;
    }

    // Handle multiple product gallery images
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
                } else {
                    echo json_encode(["status" => false, "message" => "Failed to upload one or more gallery images."]);
                    exit;
                }
            }
        } else {
            // If only one image is uploaded (not multiple)
            $galleryImageName = $_FILES['productimagegallery']['name'];
            $galleryImageTmp = $_FILES['productimagegallery']['tmp_name'];
            $galleryImagePath = $uploadDir . basename($galleryImageName);
            
            // Move the single gallery image
            if (move_uploaded_file($galleryImageTmp, $galleryImagePath)) {
                $uploadedGalleryImages[] = $galleryImagePath;  // Save the path of the uploaded image
            } else {
                echo json_encode(["status" => false, "message" => "Failed to upload the gallery image."]);
                exit;
            }
        }
    }

    // Convert gallery images array to JSON string
    $galleryJson = json_encode($uploadedGalleryImages);

    // Normally, you would save product data (including the image paths) to a database
    // For simplicity, we'll just return the response here.

    $add_product_sql = $conn->prepare("INSERT INTO `products`(`productname`, `price`, `category`, `shortdiscription`, `discription`, `note`, `frontimages`, `galleryimages`) VALUES (?,?,?,?,?,?,?,?)");

    // Bind the parameters: note the types 's' for string, 'd' for decimal, and 's' for the JSON string
    $add_product_sql->bind_param('sdssssss', $productname, $price, $category, $short_description, $description,$note, $frontImagePath, $galleryJson);

    if ($add_product_sql->execute()) {
        echo json_encode([
            "status" => true,
            "message" => "Product added successfully!",
            "galleryimagejson"=>$galleryJson
        ]);
    } else {
        echo json_encode([
            "status" => false,
            "message" => "Failed to add product."
        ]);
    }

} else {
    echo json_encode(["status" => false, "message" => "Missing required fields."]);
}
?>
