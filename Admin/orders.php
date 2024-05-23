<?php require_once 'header.php'?>
<?php
    require_once 'dbconnect.php';

    $query ="SELECT products.product_name, products.price, products.Image, users.full_name FROM products 
            JOIN orders on orders.product_id= products.id	
            JOIN users on users.id = orders.uid";
    $result = mysqli_query($conn,$query);
?>
    <div class="content">
        <h1>Order Management</h1>
        <?php if(isset($_SESSION['error'])):?>
            <div class="alert">
                <?php echo $_SESSION['error']; unset($_SESSION['error'])?>
            </div>
        <?php elseif(isset($_SESSION['success'])):?>
            <div class="success">
                <?php echo $_SESSION['success']; unset($_SESSION['success'])?>
            </div>
        <?php endif?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Ordered By</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($result as $i => $data):?>
                <tr>
                    <td><?php echo ++$i;?></td>
                    <td><?php echo $data['product_name']?></td>
                    <td>$<?php echo $data['price']?></td>
                    <td><?php echo $data['full_name']?></td>
                    <td><img src="../img/products/<?php echo $data['Image']?>" alt="" height="150"></td>
                    <td>
                        <button class="edit">Edit</button>
                        <button class="delete">Delete</button>
                    </td>
                </tr>
                <?php endforeach?>
            </tbody>
        </table>
    </div>
</body>
</html>
