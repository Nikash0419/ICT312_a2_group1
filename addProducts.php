<?php require_once 'header.php'?>
    <div class="content">
        <h1>Add Products</h1>
        <div class="form-container">
            <h2>Add New Product</h2>
            <form action="form.php" method="POST" enctype="multipart/form-data">
                <label for="product-name">Product Name:</label>
                <input type="text" id="product-name" name="product-name" required>
                
                <label for="description">Description:</label>
                <textarea id="description" name="description" required></textarea>
                
                <label for="price">Price:</label>
                <input type="text" id="price" name="price" required>

                <label for="price">Select Category:</label>
                <select name="category" id="">
                    <option value="">-------------</option>
                    <option value="men">Mens</option>
                    <option value="women">Women</option>
                    <option value="kids">Kids</option>
                </select>

                <label for="price">Image:</label>
                <input type="file" id="image" name="image" required>
                
                <input class="button" type="submit" value="Add Product" name="addProduct">
            </form>
        </div>
    </div>
</body>
</html>
