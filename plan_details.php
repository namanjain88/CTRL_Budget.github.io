<?php
session_start();
$con=mysqli_connect("localhost","root","","ctrl_budget") or die(mysqli_error($con));


$initial_budget=$_POST['initial_budget'];
$no_of_people=$_POST['no_of_people'];
$title=$_POST['title'];
$start_date=$_POST['start_date'];
$end_date=$_POST['end_date'];



$create_new_plan_query="INSERT INTO budget_details (title, initial_budget, peoples, starting_date, end_date) VALUES ('$title', '$initial_budget' ,'$no_of_people', '$start_date', '$end_date')";
$create_new_plan_result= mysqli_query($con, $create_new_plan_query)or die(mysqli_error($con));
      $budgetid = mysqli_insert_id($con);
     $_SESSION['budget_id']=$budgetid;
                         
                      
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
         <div class="container">
             <div class="container-fluid decor_bg">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                     <div class="panel panel-info">
                        
                     <div class="panel-body">
                
                         <form action="plan_details_script.php" method="POST">
                   
                    <div class="form-group">
                        <div>
                        <?php 
                        $counter=1;
                        $no=$no_of_people;
                        for ($counter = 1; $counter <= $no ; $counter++) {
                              echo '<input type="text" class="form-control" name="person.$counter". placeholder="Enter person"'.'<br>';
                        }
                           
                        ?>   
                           
                        </div>
                        
                    </div>
                        
                    
                  <button type="submit" class="btn-success" name="plan">Next</button>
                    
                        
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
<?php 
?>