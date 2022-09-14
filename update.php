<?php
include 'connect.php';
$id=$_GET['id'];
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];

    $sql="update `crud` set id='$id',name='$name',email='$email',phone='$phone',password='$password' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "data inserted successfully";
        header('location:display.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

    <title>crud operations</title>
  </head>
  <body>
    <div class="container">
        <form  method="post" autocomplete="off">
            <div class="form-group my-5">
                <label>Name</label>
                <input type="text" class="form-control"  placeholder="Enter name" name="name" autocomplete="off" Required>
            </div>
            <div class="form-group">
                <label>email</label>
                <input type="email" class="form-control"  placeholder="Enter email" name="email" autocomplete="off"  Required>
            </div>
            <div class="form-group">
                <label>phone</label>
                <input type="text" class="form-control"  placeholder="Enter phone" name="phone" autocomplete="off" Required>
            </div>
            <div class="form-group">
                <label>password</label>
                <input type="text" class="form-control"  placeholder="Enter password" name="password" autocomplete="off" Required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">update</button>

        </form>
    </div>



    
  </body>
</html>