<?php
header('Content-Type: application/json');
include('../config/db.php');

if(isset($_POST['product_delete']))
{
    $product_id=$_POST['product_id'];
    $sql=$conn->prepare("DELETE FROM `products` WHERE `id`=?");
    $sql->bind_param('i',$product_id);
    if($sql->execute())
    {
        echo json_encode(["status"=>true,"msg"=>"Product delete successfully"]);
    }
    else
    {
        echo json_encode(["status"=>false,"msg"=>"Product not delete"]);

    }
}


?>