<?php
$host="localhost";
$username="root";
$password="";
$dbname="notedownme";

$con=mysqli_connect($host,$username,$password);
mysqli_select_db($con,$dbname);
?>