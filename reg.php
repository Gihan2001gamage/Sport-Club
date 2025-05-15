<?php
include 'connect.php';


if (isset($_POST['signup'])) {
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    //$school = $_POST['school'];
    //$password = md5($password);
    $checkEmail="SELECT * From users where email='$email'";
    $result=$conn->query($checkEmail);
    if($result->num_rows>0){
       echo "Email Address Already Exists !";
    }
    else{
       $insertQuery="INSERT INTO users(firstName,lastName,email,password)
                      VALUES ('$firstName','$lastName','$email','$password')";
           if($conn->query($insertQuery)==TRUE){
               header("location: home.php");
           }
           else{
               echo "Error:".$conn->error;
           }
   
     }
    }

   
     
     

?>