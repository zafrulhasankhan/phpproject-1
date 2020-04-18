<?php
session_start();

if (isset($_POST['update'])) {
    $db=  mysqli_connect("localhost", "root", "", "phpproject-1");
	$id=$_POST['id'];
       
	$name = $_POST['name'];
        $dept = $_POST['dept'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
	
        $query = "UPDATE register SET name='$name',dept='$dept',email='$email',mobile='$mobile' WHERE id=$id";
  	$results = mysqli_query($db, $query);
        $res=  mysqli_query($db, "select * from register");
	//$result= mysqli_query($db, "UPDATE register SET name='$name',dept='$dept',email='$email',mobile='$mobile' WHERE id=$id");
        //$results=  mysqli_query($db, "select * form register");
        while ($row =  mysqli_fetch_array($res)){
        
        if($row["id"]==$id ){
       
                     
                      $_SESSION['id']=$row['id'];
                      $_SESSION['name']=$row['name'];
                      $_SESSION['dept']=$row['dept'];
                       $_SESSION['email']=$row['email'];
                        $_SESSION['mobile']=$row['mobile'];
                      $_SESSION['upsucc']="Successfully update your profile";
        
            
        header('location: userupdate.php');
        }
        else{
            echo 'no update yet';
        }
        }
       
}
?>

