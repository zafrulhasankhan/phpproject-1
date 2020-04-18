<?php
$db=  mysqli_connect("localhost", "root", "", "phpproject-1");


if(isset($_POST['register'])){
    
    $name= mysqli_real_escape_string($db,$_POST['name']);
    $dept= mysqli_real_escape_string($db,$_POST['dept']);
    $email= mysqli_real_escape_string($db,$_POST['email']);
    $mobile= mysqli_real_escape_string($db,$_POST['mobileno']);
    $pass= mysqli_real_escape_string($db,$_POST['pass']);
    
    $query= "insert into register values(id,'$name','$dept','$email','$mobile','$pass')";
    mysqli_query($db, $query);
    header('location: regis_success.php');
}
    ?>

