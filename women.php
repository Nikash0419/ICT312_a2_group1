<?php require_once 'include/header.php'?>
<?php
    require_once 'include/dbconnect.php';

    $query = "SELECT * FROM products where category = 'women'";

    $result = mysqli_query($conn,$query);
?>
    
    <div class="product-container">
        <h1>Our Products</h1>
        <div class="product-grid">
            <?php foreach($result as $data):?>
                <div class="product-item">
                    <img src="img/products/<?php echo $data['Image']?>" alt="Shoe 1">
                    <h2><?php echo $data['product_name']?></h2>
                    <p><?php echo $data['price']?></p>
                    <p style="margin-bottom: 15px;"><?php echo $data['category']?></p>
                    <?php if(isset($_SESSION['uid'])):?>
                        <a href="cart.php?id=<?php echo $data['id']?>" class="btn">Add to Cart</a>
                    <?php else:?>
                        <button onclick="location.href='login.php'">Add to Cart</button>
                    <?php endif?>
                </div>
            <?php endforeach?>
        </div>
    </div>
<?php require_once 'include/footer.php'?>

