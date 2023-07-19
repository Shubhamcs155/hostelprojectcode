<?php
// $server = "localhost:3307";
$server = "username";
// $user = "root";
$user = "username";
// $password = "";
$password = "password";
$db = "mydatabasename";
// $conn = new mysqli($server, $user, $password, $db);
$conn = mysqli_connect($server,$user,$password,$db);
if(!$conn)
{
    echo "Error".mysqli_connect_error();
}
else
{
    // echo "Connected";   
}
?>