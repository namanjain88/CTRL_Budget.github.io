# CTRL_Budget.github.io
<?php 
$con=mysqli_connect("localhost","root","","ctrl_budget") or die(mysqli_error($con));
?>
<html>
    <head>
        <title>CTRL Budget</title>
       <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <style>
             #content{
        min-height:600px;
        }
    #bannerimage{
             padding-bottom: 50px; 
             margin-bottom: 20px;
             text-align: center;
             color: #f8f8f8;
             background: url(data:image/jpeg;base64,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)no-repeat center; 
             background-size: cover; 
             }
    #inner-bannerimage{
            padding-top: 12%;
            width:80%;
            margin:auto; 
    }
    #banner-content{
          position: relative;
          padding-top: 6%;
          padding-bottom: 6%;
          overflow:hidden;
          margin-bottom: 12%;
          background-color: rgba(0, 0, 0, 0.7); 
          max-width: 660px;
          }
    #footer{
              padding: 10px 0;
              background-color: #101010;
              color: #9d9d9d;
              position: fixed; 
              left: 0;        
              bottom: 0;      
              width: 100%;
              text-align: center;
          }      
          @media(max-width:768px) {
    #banner_content {
        padding-bottom: 15%;
    }
    footer{
        text-align:left;
    }
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
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
         </div>
            
                 <center>
        <div id="content">
            <div id="bannerimage">
                <div id="inner-bannerimage">
                    <div id="banner-content">
                        <h3>We Help You Control Your Budget</h3>
                        <a href="login.php" class="btn btn-success btn-lg active">Start Now</a>
                    </div>
                </div>
            </div>
            </div>
           </center>
     <div id="footer">
        <footer>
            <div class="container">
                <center>
                    <p>“Copyright © Control Budget. All Rights  Reserved|“Contact Us: +91 900000 0000</p>
                </center>
            </div>
        </footer>
        </div>
       
    </body>
  
</html>
