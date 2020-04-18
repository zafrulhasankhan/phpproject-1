<?php

 $db=  mysqli_connect("localhost", "root", "", "phpproject-1");
  $result=  mysqli_query($db, "select * from register");
  ?>
  <html>
  <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="css/userlist.css">
  </head>
  <body>
      <div class="heading" align="center">
            <h2>See all User</h2>
        </div>
      <div class="table">
          <table>
          <thead>
             <tr>
                 <td class="hid"> serial no. </td>
                 <td class="hname"> Name </td>
                 <td class="hdept"> Department name </td>
                 <td class="hemail"> Email </td>
                 <td class="hmobile"> mobile No. </td> 
             </tr>
                  
          </thead>
          
          <tbody>
              <?php while($row=  mysqli_fetch_array($result)) { ?>
                
              <tr>
                  <td class="bid"> <?php  echo $row['id']; ?> </td>   
                    <td class="bname"> <?php  echo $row['name']; ?> </td> 
                      <td class="bdept"> <?php  echo $row['dept']; ?> </td> 
                        <td class="bemail"> <?php echo  $row['email']; ?> </td> 
                          <td class="bmobile"> <?php echo  $row['mobile']; ?> </td> 
                          
              </tr>
              <?php } ?>
          </tbody>
          </table>
      </div>
      
      <div class="gohomepro">
          <a href="index.php"> <h4>Home</h4></a>
      </div>
      
  </body>
  </html>
