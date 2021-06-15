<?php
session_start();
$con=mysqli_connect("localhost","root","","ctrl_budget") or die(mysqli_error($con));


$id_1=$_SESSION['user_id'];
$id=$_SESSION['budget_id'];
$expense_name=$_POST['title'];
$date=$_POST['date'];
$amount=$_POST['amount_spend'];
$person=$_POST['person'];
$b="INSERT INTO expense_detail(user_id ,budget_id ,amount, spend_by ,expense_name , date ) VALUES ('$id_1' ,'$id', '$amount','$person' ,'$expense_name', '$date' )";
$r= mysqli_query($con, $b)or die(mysqli_error($con));
   header("location:view_plan.php");
 $expenseid = mysqli_insert_id($con);
 
    $_SESSION['expense_id']=$expenseid
?>

