<?php
    session_start();
    require_once 'dbconnect.php';

    if(isset($_POST['addProduct'])) {
        // Get form data
        $product_name = $_POST['product-name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $image_path = $_FILES['image']['name']; 
        $category = $_POST['category'];
    
        $image = $_FILES['image']['name'];
        $target = "../img/products/".basename($image);
    
        // Insert data into database
        $sql = "INSERT INTO products (product_name, description, category, price, Image) VALUES ('$product_name', '$description', '$category', '$price', '$image_path')";

        $resul = mysqli_query($conn,$sql);
        if (move_uploaded_file($_FILES['image']['tmp_name'],$target)) {
            $_SESSION['success'] = "Product added successfully";
            header('location:products.php');
        }


    }
    if(isset($_POST['adminLogin'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";

        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) > 0){
            $data = mysqli_fetch_assoc($result);
            $_SESSION['admin_id'] = $data['admin_id'];
            header('location:index.php');
        }
        else{
            $_SESSION['error'] = "Username or password invalid !!";
            header('location:login.php');

        }
    }





?>