<?php if (isset($_POST['login'])) {
    $db=  mysqli_connect("localhost", "root", "", "phpproject-1");
 
   $email= mysqli_real_escape_string($db, $_POST['email']);
   $pass = mysqli_real_escape_string($db, $_POST['pass']);

 

       $query = "SELECT * FROM register WHERE email='$email' AND pass='$pass'";
  	$results = mysqli_query($db, $query);
  	$row = mysqli_fetch_array($results);
          ?>


   <?php   if($row["email"]==$email && $row["email"]==$email){ ?>
         
<html>
    
    <head>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/userprofile.css">
    </head>
    <body>
        
        
        
        <br><div class="panel-heading" align="center"> <h3 style="color:white;">  profile  of <?php echo $row['name']; ?></h3></div>
            <div class="container">
                    
                <br>
                                <div class="form">
                                    <div class="name">
                                         <h5 style="color:white;"> Username : </h5>
                                        <input class="form-control" type="text" name="firstname" value="<?php echo $row['name']; ?>" style="width:280px; text-align: center; color: #0000ff" readonly>
                                    </div><br>
                                    
                                        
                                   
                                        <div class="dept">
                                        <h5 style="color:white;"> Department name : </h5>
                                        <input class="form-control" type="text" name="firstname" value="<?php echo $row['dept']; ?>" style="width:280px; text-align: center;color: #0000ff" readonly>
                                    </div><br>
                              
                                
                                    
                                    <div class="email">
                                        <h5 style="color:white;"> Email : </h5>
                                        <input class="form-control" type="text" value="<?php echo $row['email']; ?>" style="width:280px; text-align: center;color: #0000ff" readonly>
                                    </div><br>
                               
                                
                                       <div class="mobile">
                                        <h5 style="color:white;">Mobile Number</h5>
                                        <input class="form-control" type="text" value="<?php echo $row['mobile']; ?>" style="width:280px; text-align: center; color: #0000ff" readonly >
                                    </div>
                                
                                </div>
                                    <div class="vl"></div>
                                    
                                    <div class="image">
                                        <input type="file" > 
                                         
                                    </div>
                                    <div class="namedept">
                                     <h2 style=" text-align:center;"> <?php echo $row['name']; ?> </h2>
                                         <h3 style=" text-align:center;">Dept. of <?php echo $row['dept']; ?> </h3>
                                    </div>
                                    
                               
                            
                        </div>
                                     <div class="update">
                                         <a href="userupdate.php"><button class="btnn">Update Profile</button></a>
                                </div>
                                    <div class="scroll">
                                   <h2 class="updatemsg">This is your profile</h2>
                                    </div>
        
        
        <?php
                      session_start();
                      $_SESSION['id']=$row['id'];
                      $_SESSION['name']=$row['name'];
                      $_SESSION['dept']=$row['dept'];
                       $_SESSION['email']=$row['email'];
                        $_SESSION['mobile']=$row['mobile'];
                      
        
            ?>

    </body>
    
</html>   
        
  <?php 
   }
     else{
         echo  " invalid password or email";
     }
}

?>