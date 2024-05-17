<?php 
session_start();
require_once 'include/dbconnect.php';
$cid = $_SESSION['uid'];
$query = "INSERT INTO orders (uid, product_id)
SELECT uid, product_id
FROM cart
WHERE uid = '$cid'";

$delete_query = "DELETE FROM cart
                 WHERE uid = '$cid'";
$result = mysqli_query($conn,$query);
$delete = mysqli_query($conn,$delete_query);


if ($result === TRUE && $delete === TRUE) {
    $_SESSION['success'] = "A";
    header('location:myorders.php');
}

?>