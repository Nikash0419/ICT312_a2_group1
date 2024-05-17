<?php require_once 'include/header.php'?>

    <div class="login-container">
        <h1>Login</h1>
        <?php if(isset($_SESSION['error'])):?>
        <div class="alert">
            <?php echo $_SESSION['error']; unset($_SESSION['error'])?>
        </div>
        <?php elseif(isset($_SESSION['success'])):?>
            <div class="success">
                <?php echo $_SESSION['success']; unset($_SESSION['success'])?>
            </div>
        <?php endif?>
        <form action="include/form.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input class="form-control" type="text" id="username" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input class="form-control" type="password" id="password" name="password" required>
            </div>
            <input type="submit" value="Login" name="login" class="button">
            <p>New here? <a href="register.php">Register</a></p>
        </form>
    </div>
<?php require_once 'include/footer.php'?>

