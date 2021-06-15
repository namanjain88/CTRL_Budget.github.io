<?php 
$con=mysqli_connect("localhost","root","","ctrl_budget") or die(mysqli_error($con));
?>
<html>
    <head>
       <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


      
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Signup</title>
        
        <style>
              #footer{
              padding: 10px 0;
              background-color: #101010;
              color: #9d9d9d;
               position: fixed; 
               left: 0;         
               bottom: 0;        
              width: 100%;
              text-align: center;
          }      
        </style>
    </head>
    <body>
         <div class="navbar navbar-inverse navbar-collapse">
            <div class="container">
                <div class="navbar-header">
                   
                    <a class="navbar-brand" href="index.php">CTRL Budget</a>
                </div>
                <div class="collapse navbar-collapse" >
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="about_us.php"><span class="glyphicon glyphicon-exclamation-sign"></span>About Us </a> </li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        
                    </ul>
                </div>
            </div>
         </div>

        <div class="container">
             <div class="container-fluid decor_bg">
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4">
                     <div class="panel panel-info">
                        <div class="panel-heading">
                         <h4>Signup</h4>
                        </div>
                     <div class="panel-body">
                
                         <form  method="POST" action="signup_script.php" >
                    <div class="form-group">
                        
                        <p><b>Name:</b></p>
                        <input type='text' class="form-control" name='name' id="name" placeholder="Enter Name">
                    </div>
                    <div class='form-group'>
                        <p><b>Email:</b></p>
                        <input type='email' name='email' class="form-control" id="email" placeholder="Enter Valid Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" >
                        <div>
                            
                        </div>
                    </div>
                    <div class='form-group'>
                        <p><b>Password:</b></p>
                        <input type='password' name='password' id="password" class="form-control" placeholder="Min. 6 characters"  required = "true" pattern=".{6,}">
                    </div>
                     <div class='form-group'>
                         <p><b>Phone number:</b></p>
                        <input type='number' name='contact' id="contact" class="form-control" placeholder="Enter number">
                    </div>
                             <a href="home-page.php">
                                 <button type="submit" class="btn-success" name="signup">Signup</button>
                             </a>
                             
                             
                        
                </form>
             </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 
   
     <div id="footer">
        <footer>
            <div class="container">
                <center>
                    <p>Copyright © Control Budget. All Rights  Reserved|“Contact Us: +91 90000 00000</p>
                </center>
            </div>
        </footer>
     </div>
    

    </body>
</html>



