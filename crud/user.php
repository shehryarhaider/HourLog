<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>

</head>
<?php
    include('connection.php');
    $query = mysqli_query($connect, "select * from users");

?>
<body>
    <br><br>
    <a href="add-user.php">
        <button class="btn btn-primary">ADD User</button>
    </a>
    <br><br>
    <table class="table">
        <thead>
            <th>Name:</th>
            <th>Email:</th>
            <th>Edit:</th>
            <th>Delete:</th>
        </thead>
        <tbody>
        <?php
            while($fetch_user = mysqli_fetch_array($query))
            {
                echo "<tr>
                    <td>".$fetch_user['name']."</td>
                    <td>".$fetch_user['email']."</td>
                    <td>
                        <a href='add-user.php?id=".$fetch_user['id']."'><span>Edit</span></a>
                    </td>
                    <td>
                        <a href='user.php?action=delete&id=".$fetch_user['id']."'><span>Delete</span></a>
                    </td>
                </tr>";

            }
        ?>
        </tbody>
    </table>
    <?php
        if(isset($_GET['action']))
        {
            if($_GET['action'] == 'delete')
            {
                echo "<script>confirm('Are You Sure');</script>";
                exit;
                $delete = mysqli_query($connect,"DELETE from users WHERE id = ".$_GET['id']."");
                header('location:user.php');
            }
        }
    ?>
</body>
</html>
