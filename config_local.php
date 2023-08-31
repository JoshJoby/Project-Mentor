<?php
/*$host="localhost";
$user="root";
$pass="";
$db="prajaseve";

$conn= mysqli_connect($host,$user,$pass,$db);*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectmentor";

/* Create connection */
$conn =mysqli_connect($servername, $username, $password, $dbname);
/* Check connection */
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>