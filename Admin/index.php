<?php require_once 'header.php'?>
<?php 
    if(!isset($_SESSION['admin_id'])){
        echo"
        <script>
            window.location.href = 'login.php'
        </script>
        ";
    }
?>
    <div class="content">
        <div class="welcome-container">
            <h1>Welcome to the Admin Dashboard</h1>
            <p>Manage your site effectively and efficiently.</p>
        </div>
    </div>
</body>
</html>
