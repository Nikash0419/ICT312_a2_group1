<?php require_once 'header.php'?>
<?php
    require_once 'dbconnect.php';

    $query = "SELECT * FROM users";

    $result = mysqli_query($conn,$query);
?>
    <div class="content">
        <h1>User Management</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($result as $i => $data):?>
                <tr>
                    <td><?php echo ++$i;?></td>
                    <td><?php echo $data['full_name']?></td>
                    <td><?php echo $data['email']?></td>
                </tr>
                <?php endforeach?>
            </tbody>
        </table>
    </div>
</body>
</html>
