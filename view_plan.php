<?php 
session_start();
if(isset($_SESSION['budget_id'])){
$con=mysqli_connect("localhost","root","","ctrl_budget") or die(mysqli_error($con));
$m=$_SESSION['budget_id'];
$p="SELECT * from budget_details where budget_id=$m";
$a= mysqli_query($con, $p)or die(mysqli_error($con));

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
      <?php $ro= mysqli_fetch_array($a);
             $sum=0;
                $n=$_SESSION['budget_id'];
                $query="SELECT * from expense_detail where budget_id=$n";
                $result = mysqli_query($con, $query)or die($mysqli_error($con));
                 if (mysqli_num_rows($result) >= 1) {
                    
                            ?>         
                   
                   
        <div class="row">
        <div class="col-xs-6">
            <div class="panel panel-success">
                <div class="panel-heading">
                            <center><h4>
                        <div><?php echo $ro['title']; ?></div>
                        </h4></center>
                   
                </div>

                <div class="panel-body">
                    <div class="col-xs-6">
                        <b>Budget</b><br>
                        
                        <b>Date</b><br>
                    </div>
                    <div class="col-xs-6">
                         <?php echo $ro['initial_budget']?><br>
                         
                          <?php echo $ro['starting_date'];  ?>       
                    </div>
                </div>
            </div>
        </div>
        
           
        
        <div class="col-xs-6">

        </div>
        </div>
            <div class="row">
           <div class="col-xs-6">
               <?php
               while ($row = mysqli_fetch_array($result)) 
                {?>
               
                 <div class="col-xs-6">
                   <div class="panel panel-success">
                       <div class="panel-heading"><?php echo $row['expense_name']; ?></div>
                       <div class="panel-body">
                           <div class="col-xs-6">
                               <b>Amount</b><br>
                               <b>Paid By</b><br>
                               <b>Paid On</b><br>
                           </div>
                           <div class="col-xs-6">
                               <?php
                               echo $row['amount'].'<br>'.$row['spend_by'].'<br>'.$row['date'];
                               ?>
                           </div>
                       </div>
                   </div>
               </div>
          
           
              
                <?php }?>
           </div>
                <div class="col-xs-6">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <center><h4>Add New Expense</h4></center>
                </div>
                <div class="panel-body">
                    <form action="view_plan_script.php" method="POST">
                        <p><b>Title</b></p>
                        <input type="text" name="title" class="form-control" placeholder="Expense Name" required><br>
                        <p><b>Date</b></p>
                        <input type="date" name="date" class="form-control" min="<?php $ro['starting_date'] ?>" max="<?php $ro['end_date']?>" required><br>
                        <p><b>Amount Spend</b></p>
                        <input type="number" name="amount_spend" class="form-control" placeholder="Amount Spend" min="0" required><br>
                      <p><b>Amount Spend By</b></p>
                        <input type="text" name="person" class="form-control" placeholder="Amount Spend By" required><br>
                     <button type="submit" class="btn-success">Add</button>
                        
                    </form>
                </div>
            </div>
        </div>
            </div>
       
                 <?php }
                 else{
                 ?>
         <div class="row">
        <div class="col-xs-6">
            <div class="panel panel-success">
                <div class="panel-heading">
                            <center><h4>
                        <div><?php echo $ro['title']; ?></div>
                        </h4></center>
                </div>
                <div class="panel-body">
                    <div class="col-xs-6">
                        <b>Budget</b><br>
                   
                        <b>Date</b><br>
                    </div>
                    <div class="col-xs-6">
                        <?php echo $ro['initial_budget']?><br>
                        
                          <?php echo $ro['starting_date'];  ?>  
                    </div>
                </div>
            </div>
           
        </div>
        <div class="col-xs-6">
          
        </div>
        </div>
            <div class="row">
          
                <div class="col-xs-6"></div>
                <div class="col-xs-6">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <center><h4>Add New Expense</h4></center>
                </div>
                <div class="panel-body">
                    <form action="view_plan_script.php" method="POST">
                        <p><b>Title</b></p>
                        <input type="text" name="title" class="form-control" placeholder="Expense Name" required><br>
                        <p><b>Date</b></p>
                        <input type="date" name="date" class="form-control" min="<?php $ro['starting_date'] ?>" max="<?php $ro['end_date'] ?>" required><br>
                        <p><b>Amount Spend</b></p>
                        <input type="number" name="amount_spend" class="form-control" placeholder="Amount Spend" min="0" required><br>
                        <p><b>Amount Spend By</b></p>
                        <input type="text" name="person" class="form-control" placeholder="Amount Spend By" required><br>
                       
                     <button type="submit" class="btn-success">Add</button>
                        
                    </form>
                </div>
            </div>
        </div>
            </div>

<?php }}?>
        
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
