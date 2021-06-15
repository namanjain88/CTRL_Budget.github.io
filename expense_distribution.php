<?php 
session_start();
$con=mysqli_connect("localhost","root","","ctrl_budget") or die(mysqli_error($con));
$id=$_SESSION['user_id'];
$p="SELECT * from budget_details where user_id=$id";
$a= mysqli_query($con, $p)or die(mysqli_error($con));
$ro= mysqli_fetch_array($a);
$m=$ro['user_id'];
$n=$ro['budget_id'];
 $query="SELECT * from expense_detail where user_id=$m and budget_id=$n";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $row= mysqli_fetch_array($result);
  $c=$ro['initial_budget'];
  $d=$row['amount'];
  $count=$row['expense_id'];
  $f=0;
  while($row = mysqli_fetch_array($result)){
  $b=$c-$d;
  $c=$b;
  $e=$f+$row['amount'];
  
  }
 
  ?>

<html>
    <head>
       <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


      
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Create New Plan</title>
        
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
        <div class="col-xs-4 col-xs-offset-4">
        <div class="panel panel-success">
            <div class="panel-heading"><?php echo $ro['title']; ?></div>
            <div class="panel-body">
                <div class="col-xs-6">
                    <b>Initial Budget</b><br>
                    <b>Total Amount Spent</b><br>
                    <b>Remaing Amount</b><br>
                </div>
                <div class="col-xs-6">
                  <?php echo $ro['initial_budget'].'<br>'.$e.'<br>'.$b; ?>  
                </div>
                <a href="view_plan.php" class="btn btn-info"><span class="glyphicon  glyphicon-arrow-left"></span> Go Back</a>
            </div>
            
        </div>
    </div>
    </body>

</html>

