<?php
include 'connect.php'
?>
<!doctype html>
<html lang="en">
    <head>
 <title>crud operation</title>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <button class="btn btn-primary my-5"><a href="user.php" class="text-light">add user</a></button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">sl</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">password</th>
      <th scope="col">operation</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql= "select * from `crud`" ;
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result))
        {
            echo'<tr>
            <td scope="row">'.$row['id'].'</td>
            <td>'.$row['name'].'</td>
            <td>'.$row['email'].'</td>
            <td>'.$row['phone'].'</td>
            <td>'.$row['password'].'</td>
            <td>
            <button class="btn btn-primary"><a  class="text-light" href="update.php?id='.$row['id'].'">update</a></button>
            <button class="btn btn-danger" ><a class="text-light" href="delete.php?id='.$row['id'].'">delete</a></button>
            </td>
          </tr>';
        }
    }
    else{
        echo 'no records';
    }
    ?>

 <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>-->

  </tbody>
</table>
</div>
</body>
</html>


