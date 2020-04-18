<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/register.css"> 
        <link rel="stylesheet" href="css/bootstrap.css">
        <title></title>
    </head> 
    <body>
        <header>
            <!-- ======================================Navigation Bar================================================= -->
            <nav class="navbar navbar-expand-lg navStyle">
                
                <a class="brand-navbar" href="#"> </a>
                <div class="collapse navbar-collapse" id="mainMenu">
                    <ul class="navbar-nav ml-auto navList">
                    
                        <li class="nav-item active"><a href="index.php" class="nav-link"><i class="fas fa-align-right"></i><button type="button" style="color: white"  class="btn btn-link mb-1"><h4><b><i>Home</i></b></h4></button><span class="sr-only">(current)</span></a></li>
                       
                        <li class="nav-item">
                            <a href="search.jsp" class="nav-link"><i class="fas fa-search"></i><button type="button" style="color: white"  class="btn btn-link mb-1"><h4><b><i>Search</i></b></h4></button></a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="userlist.php" class="nav-link"><i class="fas fa-users"></i><button type="button" style="color: white"  class="btn btn-link mb-1"><h4><b><i>UserList</i></b></h4></button></a>
                        </li>
                        <li class="nav-item">
                            <a href="logout.jsp" class="nav-link"><i class="fas fa-sign-out-alt"></i> <button type="button" style="color: white"  class="btn btn-link mb-1"><h4><b><i>Logout</i></b></h4></button></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        
    </body>
    
    <div class="reg_form">
        <form action="login_controller.php" method="POST">
                           
                           <div class="form-group custom-mt-form-group" align="center>
								
								<label class="control-label">Email: </label><i class="bar"></i><br>
                           <input type="text" name="email" placeholder="Your Email ID" required="" class="email"/>
							</div>
                            
                            <div class="form-group custom-mt-form-group" align="center><br>
								
								<label class="control-label">Password :</label><i class="bar"></i><br>
                            <input type="password" name="pass" placeholder="PassWord" required="" class="pass" />
							</div>
                            
                             
                            <div class="form-group text-center custom-mt-form-group">
                                <button class="btn btn-primary btn-block account-btn" type="submit" name="login">Register</button>
                            </div>
                            
                        </form>
        
    </div>
</html>

