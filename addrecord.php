<?php
include 'db.php';
extract($_POST);

if (isset($_POST['namesend']) && isset($_POST['passwordsend']) && isset($_POST['emailsend'])
&& isset($_POST['phonesend'])){



$namesend="";
$emailsend="";
$passwordsend="";
$phonesend="";
$errorMessageMail="";
$errorMessagePhone="";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $namesend = $_POST["namesend"];
    $passwordsend = $_POST["passwordsend"];
    $emailsend = $_POST["emailsend"];
    $phonesend = $_POST["phonesend"];

    if ( empty($namesend)){
    $errorMessage = "Please type your Username!";
    }
    elseif (empty($passwordsend)) {
    $errorMessagep = "Please type your password!";
    }
    elseif ( empty($emailsend)){
        $errorMessage = "Please type your Email!";
    }
     elseif (empty($phonesend)) {
        $errorMessagep = "Please type your phone!";

    }else{  
        $sqlmail = "SELECT * FROM data WHERE email ='$emailsend'";
        
        $check = mysqli_query($con, $sqlmail);
        $checkres = mysqli_num_rows($check);

        $sqlphone = "SELECT * FROM data WHERE  phone = '$phonesend'";
        $checkphone = mysqli_query($con, $sqlphone);
        $checkrph = mysqli_num_rows($checkphone);
       //add client to database
       if($checkres>=1){
            
        echo $errorMessage = $emailsend ." Already Exist "; 

     }elseif($checkrph>=1){
          echo $errorMessagePhone = $phonesend ." Already Exist ";  
         
     }else{



    $sql ="INSERT INTO data (name,password,email,phone) 
    VALUES ('$namesend','$passwordsend','$emailsend','$phonesend')";

    $result = mysqli_query($con,$sql);
    echo'Record added succesfully';
}
}
}
}

   
$con->close();

?>

<span class="emailerr">
    <?php
    if ( !empty($errorPhone) ) {
        echo "
        <strong>$errorPhone</strong>"; 
    }elseif($errorMessageMail){
        echo "$errorMessageMail";
    }
     
    ?>
</span>