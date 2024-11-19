<?php
include("../config/config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
<link rel="shortcut icon" href="<?=IMGFOLDER?>logos/favicon.png" type="image/x-icon">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?=ADMIN_URL?>assets/css/admin.css">
<!-- jquery cdn -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<?php
$CSS_file = $_SERVER['DOCUMENT_ROOT'] . "/spiffy/admin/assets/css/" . CURRENT_PAGE . ".css";

if (file_exists($CSS_file)) {
    echo "<link rel='stylesheet' href='".ADMIN_URL."assets/css/".CURRENT_PAGE.".css'>";
}
?>
<!-- bootstrap icons cdn link -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<!-- bootstrap css link -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    