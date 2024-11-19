<?php
header('Content-Type: application/json');
include('../config/db.php');

if(isset($_POST['category']))
{
    $category=$_POST['category'];
    $category_sql=$conn->prepare("INSERT INTO `category`(`category`) VALUES (?) ON DUPLICATE KEY UPDATE category=?");
    $category_sql->bind_param('ss',$category,$category);
    if($category_sql->execute())
    {
        echo json_encode(['status'=>true,'data'=>$category]);
    }
}

if(isset($_POST['category_id']))
{
    $category_id=$_POST['category_id'];
    $category_delete_sql=$conn->prepare("DELETE FROM `category` WHERE `category_id`=?");
    $category_delete_sql->bind_param('i',$category_id);
    if($category_delete_sql->execute())
    {
        echo json_encode(['status'=>true]);
    } 
}

?>