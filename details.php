<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<?php
error reporting(0);
$con= new mysqli("Localhost","root","","phpadmission");
if($con->connect_error) {
    echo"Failed to connect to MySQL:" .$con->connect_error;
    exit();
}

$uid=$_GET['uid'];
echo $uid;
$sql="select * from `studentdata` where `uid`='$uid'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_query($result);
$path="images/".$row['image'];
?>
<div class="container">

    
    <img src="TCSC logo.jpg" alt="" width="100%", height="200px" >
    <h1>
        Admission form 
    </h1>
    <br>
    <br>
    <form action="data.php" method="POST" enctype="multipart/form-data">
        <div>
            <div claass="row">
                <div class="col">
                    <div class="img img-thumbnail" src=<?path?>
    


       <div class="row">
           <div class="col">
    
              <label for="uname">Lastname </label>
              <input class="form-control" disabled="true" type="text" id="uname" name="Lastname"  value="<?=$row[1]?>">
           </div>

        <br>


           <div class="col">
              <label for="vname">Firstname</label>
              <input class="form-control" disabled="true"  type="text" id="vname" name="Firstname" value="<?=$row[2]?>">
           </div>
        

           <div class="col">
              <label for="vname">Middlename </label>
              <input class="form-control" disabled="true" type="text" id="vname" name="Middlename" value="<?=$row[3]?>">
           </div>
        </div>

        <div class="row">
            <div class="col">
               <label for="vname">Email </label>
               <input class="form-control" disabled="true" type="text" id="vname" name="Email" value="<?=$row[4]?>">
            </div>


            <div class="col">
              <label for="vname">ContactNo </label>
              <input class="form-control" disabled="true"  type="text" id="vname" name="ContactNo" value="<?=$row[5]?>">
            </div>
        </div>
       <br>
       <br>


    <div class="row">
        <div class="col">
            <label for="">Address</label>
            <textarea name="form-control" disabled="true" name="Address" id=""><?=$row[6]?></textarea>
        </div>
    
       <div class="col">
           <label for="vname">AadharCardNo </label>
           <input class="form-control" disabled="true"  type="number" id="Aadhar" name="Aadhar Card No" value="<?=$row[7]?>">
       </div>


        <div class="col">
             <label for="vname">DOB</label>
             <input class="form-control" disabled="true"  type="text" id="dob" name="DOB" value="<?=$row[8]?>">
        </div>
        <div class="col">
             <label for="vname">TelephoneNo</label>
             <input class="form-control" disabled="true" type="number" id="TelephoneNo" name="TelephoneNo">
        </div>
        <div class="col">
             <label for="vname">PanCardNo</label>
             <input class="form-control" disabled="true" type="number" id="PanCardNo" name="TelephoneNo">
        </div>
    </div>
        <!-- <div class="row">
            <div class="col mt-3">
            <label for="Image">Upload your image</label>
            <input class="form-control" disabled="true" type="file" id="file" name="image">
        </div> -->
    </div>
    <div class="row">
        <div class="col">
                <label>Gender</label>
                <div><?=$row[9]?></div>
                <input class="Form-check-input" disabled="true" type="radio" name="Gender" value="Male">
                <label class="Form-check-input" for="radio-1">Male</label>
        </div>
        <div class="col form check form check-inline">
                    <input class="Form-control" disabled="true" type="radio" name="Gender" value="Female">
                    <label class="Form-check-input" for="radio-1">Female</label>
        </div> 
        <div class=" col form check form check-inline">
                    <input class="Form-control" disabled="true" type="radio" name="Gender" value="Other">
                    <label class="Form-check-input" for="radio-1">Other</label>
        </div>
    </div>
        <div class="row">
            <div class="col mt-3">
                <label>Level</label>
                <label><?=$row[10]?></label>
                
        </div>
        <div class="col">
            <label>Course/Stream</label>
            <label><?=$row[11]?></div>
           
    
            </select>
        </div>

        <div class="col">
            <label>Semester</label>
            <label><?=$row[12]?></label>
    
                    
    
            </select>
        </div>

        

      
   
</form>
    
</div>
    <script src=https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    
</body>
</html>