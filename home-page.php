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
        <title>Home</title>
        
        <style>
              #footer{
              padding: 10px 0;
              background-color: #101010;
              color: #9d9d9d;
              bottom: 0;
              width: 100%;
              position: fixed;  
             left: 0;          
            text-align: center;
          }      
        </style>
    </head>
    <body>
        <?php
        session_start();
        if (isset($_session['id'])){
             header("location:your_plans.php");
        }
 else 
        {?>
        <div class="navbar navbar-inverse navbar-collapse">
            <div class="container">
                <div class="navbar-header">
                   
                    <a class="navbar-brand" href="index.php">CTRL Budget</a>
                </div>
                <div class="collapse navbar-collapse" >
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="about_us.php"><span class="glyphicon glyphicon-exclamation-sign"></span>About Us </a> </li>
                        <li><a href="change_password.php"><span class="glyphicon glyphicon-cog"></span>Change Password</a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
                        
                    </ul>
                </div>
            </div>
         </div>
        <div class="container">
            <h3>You Don't Have Any Active Plans</h3>
             <div class="col-xs-4 col-xs-offset-4">
            <div class='jumbotron'>
                <p> <span class='glyphicon glyphicon-plus-sign'></span><a href='create_new_plan.php'>Create New Plan</a></p>
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
          <?php }?>
    </body>
</html>
