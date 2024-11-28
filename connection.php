<?php
error_reporting(0);
$servername="localhost";
$username="root";
$password="";
$dbname="customer_details";
$conn=mysqli_connect($srvername,$username,$password,$dbname);
if($conn)
{
//echo"connection OK";
}
else
{
echo"connection failed:".mysqli_connect_error();
}
?>