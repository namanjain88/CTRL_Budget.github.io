<?php
session_start();
$con=mysqli_connect("localhost","root","","ctrl_budget") or die(mysqli_error($con));



$email = $_POST['email'];
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)) {
  echo "Incorrect email";
}
$password = $_POST['password'];
if (strlen($password) < 6) {
  echo "Password should have at-least 6 characters";
}



$name= mysqli_real_escape_string($con,$_POST['name']);
$email= mysqli_real_escape_string($con,$_POST['email']);
$password= mysqli_real_escape_string($con,$_POST['password']);
$contact= mysqli_real_escape_string($con,$_POST['contact']);

$sql_u = "SELECT * FROM users_details WHERE contact='$contact'";
$sql_e = "SELECT * FROM users_details WHERE email='$email'";
 $res_u = mysqli_query($con, $sql_u);
 $res_e = mysqli_query($con, $sql_e);


  	if (mysqli_num_rows($res_u) > 0)
            {
              echo 'contact already registered';	
  	}
        else if(mysqli_num_rows($res_e) > 0)
            {
              echo 'email already registered';	
  	}
        else{
    
           $sql="INSERT INTO users_details ( name , email , password , contact ) VALUES ('$name','$email','$password','$contact')";
          $result=mysqli_query($con,$sql)or die(mysqli_error($con));
          header("location:home-page.php");
          $_SESSION['email'] = $email;
         $userid = mysqli_insert_id($con);
         $_SESSION['user_id']=$userid;
  	}



?>

