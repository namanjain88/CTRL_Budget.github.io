<?php

session_start();
$con=mysqli_connect("localhost","root","","ctrl_budget") or die(mysqli_error($con));

$email= mysqli_real_escape_string($con,$_POST['email']);
$password= mysqli_real_escape_string($con,$_POST['password']);

$s="SELECT * from users_details where email='$email' && password='$password'";
$res= mysqli_query($con, $s);
$num= mysqli_num_rows($res);

if($num>0){
    $row = mysqli_fetch_array($res);
    
  $_SESSION['email'] = $row['email'];
  $_SESSION['user_id'] = $row['id'];
 header("location:home-page.php");
 $m=$_SESSION['user_id'];
 $a="SELECT * from budget_details where user_id=$m";
$b= mysqli_query($con, $a)or die(mysqli_error($con));
$ro= mysqli_fetch_array($b);
    if (mysqli_num_rows($b) >= 1){
         header("location:your_plans.php"); 
    }
 else {
       header("location:home-page.php");
 }



}
else{
    echo 'Invalid email or password';
}

?>