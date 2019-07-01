<?php

require_once('configuration.php');
$fname = $lname = $role = $doh = $contract = $department = $contact = '';
$errors = $success = array();


if(isset($_POST['submit'])){
if (empty($_POST['firstname'])) {
 array_push($errors, "first name is required");
}


if (empty($_POST['lastname'])) {
  array_push($errors, "last name is required");
}

if (empty($_POST['role'])) { 
   array_push($errors, "role is required");
}

if (empty($_POST['doh'])) {
    array_push($errors, "Date of Birth is required");
}

if (empty($_POST['contract'])) { 
   array_push($errors, "please enter your contract type");
}

if (empty($_POST['department'])) { 
   array_push($errors, "please enter your department");
}

if (empty($_POST['contact'])) { 
   array_push($errors, "please enter your mobile number");
}

if(count($errors)==0){
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $role = $_POST['role'];
    $doh = $_POST['doh'];
    $contract = $_POST['contract'];
    $department = $_POST['department'];
    $contact = $_POST['contact'];

    $sql = "INSERT INTO registration (firstname, lastname, role, doh, contract, department, contact) VALUES ('$fname', '$lname', '$role', 
    '$doh', '$contract','$department', '$contact')";
    $result = mysqli_query($conn,$sql);

    if(!$result){
             echo "error:".mysqli_error($conn);
      
    }
    else{
          //header("Location: login.php");
     array_push($success,"".$fname." ".$lname." has been registered successfully");
    }

}

}

?>
