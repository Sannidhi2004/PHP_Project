<?php
  $con= new mysqli("localhost","root","","phpadmission");
  if($con->connect_error) {
      echo"Failed to connect to MySQL:" .$con->connect_error;
      exit();
  }
?>