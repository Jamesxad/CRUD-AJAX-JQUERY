<?php 
include "db.php";

?>


<?php

$name = "";
$email = "";
$phone = "";
$address = "";

$errorMessageMail = "";
$errorMessagePhone = "";
$successMessage = "";
$errorName ="";
$errorEmail ="";
$errorPhone ="";
$errorAdd ="";
    
if(isset($_POST['submit']))
            {
                $sqlmail = "SELECT * FROM clients WHERE email ='$email'";
        
                $check = mysqli_query($con, $sqlmail);
                $checkres = mysqli_num_rows($check);
        
                $sqlphone = "SELECT * FROM clients WHERE  phone = '$phone'";
                $checkphone = mysqli_query($con, $sqlphone);
                $checkrph = mysqli_num_rows($checkphone);
        
                //add client to database
                if($checkres>=1){
                    
                  echo  $errorMessageMail = $email ." Already Exist ";
        
                }elseif($checkrph>=1){
                   echo  $errorMessagePhone = $phone ." Already Exist ";  
                    
                }else{
                    

}
}
?>
