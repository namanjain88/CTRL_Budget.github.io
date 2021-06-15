<?php 
session_start();
$con = mysqli_connect("localhost","root","","ctrl_budget") or die(mysqli_error($con));


?>
<html>
    <head>
       <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


      
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>View Plan</title>
        
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
        
      <?php 
      $m=$_SESSION['user_id'];
      
      $p="SELECT * from budget_details where user_id = $m";
     $a= mysqli_query($con, $p)or die(mysqli_error($con));
      while ($row = mysqli_fetch_array($a)){
         
      ?>
        <div class="col-xs-4">
            <div class="panel panel-success">
                 <div class="panel-heading">
                             <center><h4>
                                     <div><?php echo $row['title']; ?></div>
                         </h4></center>
                    
                </div>
                <div class="panel-body">
                    <div class="col-xs-6">
                        <b>Budget</b><br>
                        <b>Start Date</b><br>
                        <b>End Date</b><br>
                    </div>
                    <div class="col-xs-6">
                        <?php echo $row['initial_budget'].'<br>'.$row['starting_date'].'<br>'.$row['end_date']; ?>
                    </div>
                </div>
                <div class="panel-footer">
                    <a href="view_plan.php" class="btn btn-info btn-lg">View Plan</a>
                </div>
            </div>
        </div>
          <?php }?>
        <div>
            <h1>   <p> <span class='glyphicon glyphicon-plus-sign'><a href="create_new_plan.php">Create_New_Plan</a></span></p> </h1>
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
