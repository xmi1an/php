<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "userloginsystem";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
//     echo "Connected!";
}

else
    die("Error". mysqli_connect_error());

?>