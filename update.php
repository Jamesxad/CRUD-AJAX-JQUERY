<?php
include 'db.php';


if(isset($_POST['updateid'])){
    $id=$_POST['updateid'];
    $name= $_POST['updatename'];
    $email=$_POST['updateemail'];
    $phone=$_POST['updatephone'];
    $password=$_POST['updatepassword'];

$sql = "UPDATE `data` SET `name`='$name',`email`='$email',`phone`='$phone',`password`='$password' WHERE id='$id' ";
    
$result = mysqli_query($con, $sql);

}
?>