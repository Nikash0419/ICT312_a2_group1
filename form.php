<?php 
session_start();
require_once 'dbconnect.php';

	if(isset($_POST['login'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$query = "SELECT * FROM users WHERE email = '$email' and password = '$password'";
		$result = mysqli_query($conn,$query);
		if(mysqli_num_rows($result) == 1){
			$data = mysqli_fetch_assoc($result);
			$_SESSION['uid'] = $data['id'];
            $_SESSION['name'] = $data['id'];
			header('location:../index.php');
		}
		else{
			$_SESSION['error'] = "Invalid username or password";
			header('location:../login.php');
		}
	}

    if(isset($_POST['register'])){
        $fullname = $_POST['fullname'];
        $address = $_POST['address'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result) == 1){
            $_SESSION['error'] = "This Email has been already taken, enter new one";
            header('location:../register.php');
        }else{
            $query = "INSERT INTO users VALUES(NULL,'$fullname','$address','$contact','$email','$password')";
            $result = mysqli_query($conn,$query);
            if($result){
                $_SESSION['success'] = "Your account has been setup, please login to contiune";
                header('location:../login.php');
            }

        }
    }

?>