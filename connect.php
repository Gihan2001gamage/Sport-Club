<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "database";

$conn = new mysqli($host,$user,$pass,$db);

if ($conn->connect_error) {

 echo "failed to connect".$conn->connect_error;
}
//else {
    //echo "connection successful";
//}



?>