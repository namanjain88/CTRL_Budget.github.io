<?php
$con=mysqli_connect("localhost","root","","ctrl_budget") or die(mysqli_error($con));

session_start();
$initial_budget=$_POST['initial_budget'];
$no_of_people=$_POST['no_of_people'];
$title=$_POST['title'];
$start_date=$_POST['start_date'];
$end_date=$_POST['end_date'];
$id=$_SESSION['user_id'];


$create_new_plan_query="INSERT INTO budget_details (user_id ,title, initial_budget, peoples, starting_date, end_date) VALUES ('$id' ,'$title', '$initial_budget' ,'$no_of_people', '$start_date', '$end_date')";
$create_new_plan_result= mysqli_query($con, $create_new_plan_query)or die(mysqli_error($con));
      $budget_id = mysqli_insert_id($con);
     $_SESSION['budget_id']=$budget_id;
     $_SESSION['budget_name']=$title;
 
      
       header("location:your_plans.php");


    

     
                         
                      
?>
       