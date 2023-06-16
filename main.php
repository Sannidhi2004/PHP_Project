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
 <div class="container">
    
    <img src="TCSC logo.jpg" alt="" width="100%", height="200px" >
    <h1>
        Admission form 
    </h1>
    <br>
    <br>
    <form action="data.php" method="POST" enctype="multipart/form-data">
    
       <div class="row">
           <div class="col">
    
              <label for="uname">Lastname </label>
              <input class="form-control"  type="text" id="uname" name="Lastname" required="true" />
           </div>

        <br>
           <div class="col">
              <label for="vname">Firstname</label>
              <input class="form-control"  type="text" id="vname" name="Firstname" required="true">
           </div>
           <div class="col">
              <label for="vname">Middlename </label>
              <input class="form-control" type="text" id="vname" name="Middlename" required="true">
           </div>
        </div>

        <div class="row">
            <div class="col">
               <label for="vname">Email </label>
               <input class="form-control" type="text" id="vname" name="Email" required="true">
            </div>


            <div class="col">
              <label for="vname">ContactNo </label>
              <input class="form-control"  type="number" id="Contact no" name="ContactNo" required="true" />
            </div>
        </div>
       <br>
       <br>


    <div class="row">
        <div class="col">
            <label for="">Address</label>
            <textarea class="form-control" type="address" name="Address" id="" required="true"></textarea>
        </div>
    
       <div class="col">
           <label for="vname">AadharCardNo </label>
           <input class="form-control"  type="number" id="AadharCardNo" name="AadharCardNo"required="true" />
       </div>


        <div class="col">
             <label for="vname">DOB</label>
             <input class="form-control"  type="date" id="dob" name="DOB" />
        </div>
        <div class="col">
             <label for="vname">TelephoneNo</label>
             <input class="form-control"  type="number" id="TelephoneNo" name="TelephoneNo" >
        </div>
        <div class="col">
             <label for="vname">PanCardNo</label>
             <input class="form-control"  type="number" required="true" id="PanCardNo" name="PanCardNo">
        </div>
    </div>
        <div class="row">
            <div class="col mt-3">
            <label for="Image">Upload your image</label>
            <input class="form-control" type="file" id="file" name="Upload your image">
        </div>
    </div>
        <div class="row">
            <label>Gender</lable>
               <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="Gender" name="Gender" value="Male">
            <label class="form-check-label" for="radio1">Male</label>
               </div>
               <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="Gender" name="Gender" value="Female">
            <label class="form-check-label" for="radio2">Female</label>
               </div>
               <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="Gender" name="Gender" value="Other">
            <label class="form-check-label" for="radio3">Other</label>
               </div>
        </div>
        <div class="row">
                <div class="col mt-3">
                  <label>Level</label>
                  <select class="form-select" name="Level" id="Level" >
                    <option value="Junior">Jumior</option>
                    <option value="UG">UG</option>
                    <option value="PG">PG</option>
                  </select>
                </div>
                <div class="col">
                  <label>Course</label>
                  <select class="form-select" name="Course" id="Course" >
                    <option value="Science">Science</option>
                    <option value="Commerce">Commerce</option>
    
                 </select>
                </div>

                <div class="col">
                    <label>Semester</label>
                    <select class="form-select" name="Semester" id="Semester">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    </select>
                </div>
        </div>
                <div class="border">
        <div class="row" >
                <label for="">qualification:</label>
        </div>
        <div class="row">
            <div class="col">
                    <input type="checkbox" id="upload-10th-checkbox"> 
                    <label>Upload 10th marksheet</label>
                    <div id="upload-10th-input" style="display:none;">
                    <input type="file" name="10th_marksheet">
            </div> 
        </div>
        <div class="row">
            <div class="col">
                    <input type="checkbox" id="upload-12th-checkbox"> 
                    <label>Upload 12th marksheet</label>
                <div id="upload-12th-input" style="display:none;">
                    <input type="file" name="12th_marksheet">
                </div>
            </div>
        </div>
                    
            
        <div class="row">
            <div class="col">
              <div><p><h4>Parent/Guardian Information:</h4></p></div>
            </div>

    
            <div class="col">
                    <label for="Father's name">Father's name</label>
                    <input class="form-control" type="text" name="Father's name" />
                </div>

            
                <div class="col">
                    <label for="Mother's name">Mother's name</label>
                    <input class="form-control" type="text" name="Mother's name" />
                </div>
        </div>
        <div class="row">
            <div class="col">
                    <label for="Father's occupation">Father's occupation</label>
                    <input class="form-control" type="text" name="Father's name" />
            </div>

            
            <div class="col">
                    <label for="Mother's occupation">Mother's occupation</label>
                    <input class="form-control" type="text" name="Mother's occupation" />
            </div>
        </div>
            

        

      
    <div class="row">
    <div class="col text-center mt-5">
    <button type="submit" class="btn btn-warning">Submit</button>
    </div>
    </div>
</form>
    
 </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="assets\main.js"></script>
    
    
</body>
</html>