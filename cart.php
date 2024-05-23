<?php 
session_start();
require_once 'include/dbconnect.php';
$product_id = $_GET['id'];
$cid = $_SESSION['uid'];
$query = "INSERT INTO cart VALUES(NULL,'$product_id','$cid')";
$result = mysqli_query($conn,$query);
if($result){
    $_SESSION['success'] = "A";
    header('location:product.php');
}
?>