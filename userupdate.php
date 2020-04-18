<?php
session_start();


?>
<html>
 <head>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/userprofile.css">
    </head>
    <body>
        
        
        <br><div class="panel-heading" align="center"> <h3 style="color:white;">  profile  of <?php echo $_SESSION['name']; ?></h3></div>
        <form action="userupdate_controller.php" method="post">
        <div class="container">
                
                    
                <br>
                                
                                         
                                        <input class="form-control" hidden="" type="text" name="id" value="<?php echo $_SESSION['id']; ?>" style="width:280px; text-align: center; color: #0000ff" >
                                    
                                <div class="form">
                                    
                                    
                                    <div class="name">
                                         <h5 style="color:white;"> Username : </h5>
                                        <input class="form-control" type="text" name="name" value="<?php echo $_SESSION['name']; ?>" style="width:280px; text-align: center; color: #0000ff" >
                                    </div><br>
                                    
                                        
                                   
                                        <div class="dept">
                                        <h5 style="color:white;"> Department name : </h5>
                                        <input class="form-control" type="text" name="dept" value="<?php echo $_SESSION['dept']; ?>" style="width:280px; text-align: center;color: #0000ff" >
                                    </div><br>
                              
                                
                                    
                                    <div class="email">
                                        <h5 style="color:white;"> Email : </h5>
                                        <input class="form-control" name="email" type="text" value="<?php echo $_SESSION['email']; ?>" style="width:280px; text-align: center;color: #0000ff" >
                                    </div><br>
                               
                                
                                       <div class="mobile">
                                        <h5 style="color:white;">Mobile Number</h5>
                                        <input class="form-control" name="mobile" type="text" value="<?php echo $_SESSION['mobile']; ?>" style="width:280px; text-align: center; color: #0000ff" >
                                    </div>
                                
                                </div>
                                    <div class="vl"></div>
                                    
                                    <div class="image">
                                        <input type="file" > 
                                         
                                    </div>
                                    <div class="namedept">
                                     <h2 style=" text-align:center;"> <?php echo $_SESSION['name']; ?> </h2>
                                         <h3 style=" text-align:center;">Dept. of <?php echo $_SESSION['dept']; ?> </h3>
                                    </div>
                                    
                               
                            
                        </div>
                                     <div class="update">
                                         <button class="btnn" name="update">Update </button></a>
                                         
                                         
                                </div>
                               </form>
        
                                    <div class="scroll">
                                        <div class="updatemsg"><?php echo $_SESSION['upsucc'];?> </div>
                                    </div>
                                        
                                    
    </body>
 </html>