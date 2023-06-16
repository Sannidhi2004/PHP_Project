
<?php
   session_start();

   include("db.php");
   if($_SERVER['REQUEST_METHOD'] == "POST")
   {
     $Username = $_POST['Username'];
     $Password = $_POST['Password'];
     $gmail = $_POST['gmail'];


     if(!empty($gmail) && !empty($Password) && !is_numeric($gmail))
     {
        $query="insert into logindetails (username,password) values('$Username','$Password')";
        mysqli_query($con, $query);
        echo"<script type='text/javascript'> alert('Sucessfully registered')</script>";
     }
     else{
        echo"<script type='text/javascript'> alert('Please enter some valid information')</script>";
     }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create A New Account</title>
</head>
<body>
    <center>
    <div class="border">
        <div class="container">
            <img src="\ILS\Thakur.jfif" alt="" height="100x" width="auto"/>
        </div>
        <form method="POST" enctype="multipart/form-data">
		    <h2>Sign up</h2>
		    <div class="col">
                <div class="row">
                    <label for="">UserName:</label>
                    <input class="form-control" type="text" value="" name="Username" placeholder="New Username"/>
                </div>
                <div class="row">
                    <label for="">Password:</label>
                    <input class="form-control" type="text" value="" name="Password" placeholder="New Password">
                </div>
                <div class="row">
                    <label for="">gmail:</label>
                    <input class="form-control" type="email" value="" name="gmail" placeholder="New mail id">
                </div>
            </div>
            <br>
            <div class="col">
                <div class="row">
                    <input type="submit" value="Submit">
                </div>
            </div>
	    </form>
        <p>Already have an account?<a href="signup.php">Login here</a></p>
    </div>
    </center>
</body>
</html>