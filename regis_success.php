

        <html>
    <head>
        <?php include 'login_controller.php'; ?>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <title>Registration Successful</title>
        
        <style>
            body{
                background-color: #33ffcc;
            }
            
        </style>
            
        
        }
    </head>
    <body>
        <div class="container">
            <div class="row text-center" style="float: center" align="center">
                <div class="col col-sm-offset-4">
                    <br><br> <h2 style="color:#0fad00">Successfully Registered</h2>
                    <?php echo  $row['email']; ?>
                    <img src="css/image/chktrue.jpg">
                    <p style="font-size:20px;color: #ff0000;"><b>Thank you for registering into our web site. Please update your profile with your details.
                        Click on below link to login.</></p>
                    <a href="login.jsp" class="btn btn-success">     Log in      </a>
                    <br><br>
                </div>

            </div>
        </div>
    </body>
</html>
   
