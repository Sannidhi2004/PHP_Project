<?php 
    $con= new mysqli("localhost","root","","phpadmission");
    if($con->connect_error){
        echo "Failed to connect to MySQL: ".$con->connect_error;
        exit();
    }

$firstname = $_POST["sfirstname"];
$middlename = $_POST["smiddlename"];
$lastname = $_POST["slastname"];
$email = $_POST["semail"];
$contactnumber = $_POST["CN"];
$address = $_POST["address"];
$aadhar = $_POST["Aadhar"];
$dateofbirth = $_POST["DOB"];
$Gender = $_POST["gender"];
$Level = $_POST["level"];
$Course = $_POST["course"];
$Semister = $_POST["sem"];
$ParentFname=$_POST["pfirstname"];
$ParentLname=$_POST["plastname"];
$ParentEmail=$_POST["pemail"];
$ParentCN=$_POST["pCN"];
$ParentAadhar=$_POST["pAadhar"];
$ParentDOB=$_POST["pDOB"];

$sql ="INSERT INTO `studentdata`(`firstname`,`middlename`,`lastname`,`email`,`contactnumber`,`address`,`Aadharcardno`,`dateofbirth`,`gender`,`level`,`course`,`sem`, `ParentFname`,`ParentLname`,`ParentEmail`,`ParentCN`,`ParentAadhar`,`ParentDOB`)values('$firstname','$middlename','$lastname','$email','$contactnumber','$address','$aadhar','$dateofbirth','$Gender','$Level','$Course','$Semister','$ParentFname','$ParentLname','$ParentEmail','$ParentCN','$ParentAadhar','$ParentDOB')";

if($con->query($sql) == TRUE){
    echo "New record created succesfully";
    
    $last_id = $con->insert_id;
    $targetDir = "images/";
    $fileName = basename($_FILES["image"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    if (!empty($_FILES["image"]["name"])) {
        // Allow certain file formats
        $allowTypes = array('jpg', 'png', 'jpeg');
        if (in_array($fileType, $allowTypes)) {
            // Upload file to server
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
                // Insert image file name into database
                $insert = $con->query("UPDATE `studentdata` SET `image`='" . $fileName . "' WHERE `uid`='" . $last_id . "'");
                if ($insert) {
                    $statusMsg = "The file " . $fileName . " has been uploaded successfully.";
                } else {
                    $statusMsg = "File upload failed, please try again.";
                }
            } else {
                $statusMsg = "Sorry, there was an error uploading your file.";
            }
        } else {
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        }
    } else {
        $statusMsg = 'Please select a file to upload.';
    }
    echo $statusMsg;

    $last_id10 = $con->insert_id10;
    $targetDir10 = "10th/";
    $fileName10 = basename($_FILES["10th_marksheet"]["name"]);
    $targetFilePath10 = $targetDir10 . $fileName10;
    $fileType10 = pathinfo($targetFilePath10, PATHINFO_EXTENSION);
    if (!empty($_FILES["10th_marksheet"]["name"]))
    {
        // Allow certain file formats
        $allowTypes10 = array('jpg', 'png', 'jpeg');
        if (in_array($fileType10, $allowTypes10)) 
        {
            // Upload file to server
            if (move_uploaded_file($_FILES["10th_marksheet"]["tmp_name"], $targetFilePath10)) 
            {
                // Insert image file name into database
                $insert10 = $con->query("UPDATE `studentdata` SET `10th`='" . $fileName10 . "' WHERE `uid`='" . $last_id10 . "'");
                if ($insert10) 
                {
                    $statusMsg10 = "The file " . $fileName10 . " has been uploaded successfully.";
                } 
                else 
                {
                    $statusMsg10 = "File upload failed, please try again.";
                }
            } 
            else 
            {
                $statusMsg10 = "Sorry, there was an error uploading your file.";
            }
        } 
        else 
        {
            $statusMsg10 = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        }
    } 
    else 
    {
        $statusMsg10 = 'Please select a file to upload.';
        echo $statusMsg10;
    } 


    $last_id12 = $con->insert_id12;
    $targetDir12 = "12th/";
    $fileName12 = basename($_FILES["12th_marksheet"]["name"]);
    $targetFilePath12 = $targetDir12 . $fileName12;
    $fileType12 = pathinfo($targetFilePath12, PATHINFO_EXTENSION);
    if (!empty($_FILES["12th_marksheet"]["name"])) {
        // Allow certain file formats
        $allowTypes12 = array('jpg', 'png', 'jpeg');
        if (in_array($fileType12, $allowTypes12)) {
            // Upload file to server
            if (move_uploaded_file($_FILES["12th_marksheet"]["tmp_name"], $targetFilePath12)) {
                // Insert image file name into database
                $insert12 = $con->query("UPDATE `studentdata` SET `12th`='" . $fileName12 . "' WHERE `uid`='" . $last_id12 . "'");
                if ($insert12) {
                    $statusMsg12 = "The file " . $fileName12 . " has been uploaded successfully.";
                } else {
                    $statusMsg12 = "File upload failed, please try again.";
                }
            } else {
                $statusMsg12 = "Sorry, there was an error uploading your file.";
            }
        } else {
            $statusMsg12 = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        }
    } else {
        $statusMsg12 = 'Please select a file to upload.';

    // Display status message
    echo $statusMsg12;
    //header('Location: data.php');
    }
}