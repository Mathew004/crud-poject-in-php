<?php
$con= new mysqli('localhost','root','','crudoperation');
if (!$con) {
 # code...
    die(mysqli_error($con));
}
//if($con){
 //   echo 'connection successfully established.';
//}
?>