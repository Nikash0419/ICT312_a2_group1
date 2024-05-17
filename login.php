<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="login-container">
        <h1>Admin Login</h1>
        <?php if(isset($_SESSION['error'])):?>
        <div class="alert">
            <?php echo $_SESSION['error']; unset($_SESSION['error'])?>
        </div>
        <?php elseif(isset($_SESSION['success'])):?>
            <div class="success">
                <?php echo $_SESSION['success']; unset($_SESSION['success'])?>
            </div>
        <?php endif?>
        <form action="form.php" method="post">
            <div class="form-group">
                <label for="username">Email:</label>
                <input class="form-control" type="email" id="username" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input class="form-control" type="password" id="password" name="password" required>
            </div>
            <input type="submit" value="Login" name="adminLogin" class="button">
        </form>
    </div>
    
</body>
</html>