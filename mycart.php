<?php require_once 'include/header.php'?>
<?php  
require_once 'include/dbconnect.php';
    if(!isset($_SESSION['uid'])){
        echo"
        <script>
            window.location.href = 'login.php'
        </script>
        ";
    }
    if(isset($_GET['delete_id'])){
        $query1 = "DELETE FROM cart WHERE cart_id=".$_GET['delete_id'];

        $result1 = mysqli_query($conn, $query1);
        if($result1){
            $_SESSION['success'] = "The data has been deleted successfully";
        }
    }
    $query ="SELECT cart.cart_id,products.id,products.product_name,products.price,products.Image FROM products
    JOIN cart on cart.product_id = products.id WHERE cart.uid=".$_SESSION['uid'];
    $result = mysqli_query($conn,$query);
?>
    
    <h2>Shopping Cart</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($result as $i => $data):?>
                <tr>
                    <td><?php echo ++$i?></td>
                    <td><?php echo $data['product_name']?></td>
                    <td>1</td>
                    <td><?php echo $data['price']?></td>
                    <td><?php echo 1 * $data['price']?></td>
                </tr>
            <?php endforeach?>
    
        </tbody>
    </table>
    <br>
    <a href="order.php" class="checkout-btn">Proceed to Order</a>
<?php require_once 'include/footer.php'?>

