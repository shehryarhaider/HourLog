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
    ob_start();
    if(isset($_GET['id']))
    {
        $user = mysqli_query($connect,"select * from users where id = ".$_GET['id']."");
        $fetch_user = mysqli_fetch_array($user);
    }
?>
<body>
    <div class="container">
        <br>
        <h1 class="text-center">Add User</h1>
        <br>
        <div class="jumbotron">
            <center>

            <form action="<?php echo isset($_GET['id']) ? $_SERVER['PHP_SELF']."?id=".$_GET['id'] : $_SERVER['PHP_SELF'];?>" method="post" class="form-group">
                <label for="">Name:</label>
                <input type="text" name="name" placeholder="Name" class="form-control" value="<?php
                if(isset($_GET['id']))
                {
                    echo $fetch_user['name'];
                }
                ?>">
                <label for="">Email:</label>
                <input type="text" name="email" placeholder="Email" class="form-control" value="<?php
                if(isset($_GET['id']))
                {
                    echo $fetch_user['email'];
                }
                ?>"><br>
                <input type="submit" value="Submit" name="submit" class="btn btn-success" >
            </form>
            </center>
            <?php
                if(isset($_POST['submit']))
                {
                    $name = $_POST['name'];
                    $email = $_POST['email'];

                    if(isset($_GET['id']))
                    {
                        $query = "UPDATE users SET `name` = '$name', `email` = '$email' WHERE id = ".$_GET['id']."";
                    }
                    else
                    {
                        $query = "INSERT INTO users(`name`,`email`) VALUES ('$name','$email')";
                    }

                    $insert = mysqli_query($connect,$query);

                    if($insert)
                    {
                        header('Location:user.php');
                    }
                }


            ?>
        </div>
    </div>
</body>
</html>
