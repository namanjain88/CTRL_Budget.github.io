<?php
session_start();
$con=mysqli_connect("localhost","root","","ctrl_budget") or die(mysqli_error($con));


$new_password = $_POST['new_password'];
$user_id = $_SESSION['user_id'];
$update_password_query = "UPDATE users_details SET password = '$new_password' WHERE id = '$user_id'";
$update_password_result = mysqli_query($con, $update_password_query) or die(mysqli_error($con));
echo 'password updated succesfully';
?>

