<?php
/*$host="localhost";
$user="root";
$pass="";
$db="prajaseve";

$conn= mysqli_connect($host,$user,$pass,$db);*/

$servername = "166.62.44.10:3306";
$username = "adminiid_ic_admn";
$password = "p_mentor@2024";
$dbname = "adminiid_projectmentor";

/* Create connection */
$conn =mysqli_connect($servername, $username, $password, $dbname);
/* Check connection */
if ($conn->connect_error) {
    die("Connection failed: " . $con->connect_error);
}


?>