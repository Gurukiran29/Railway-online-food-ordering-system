<?php
$admin_id=$_GET["admin_id"];
$name=$_GET["name"];
$number=$_GET["number"];
$address=$_GET["address"];
$email=$_GET["email"];
$password=$_GET["password"];
$conn=new mysqli('localhost','root','','customer_details');
if($conn->connect_error){
die('connecton Failed:'.$conn->connect->connect_error);
}
else{
$stmt = $conn->prepare("insert into admin(admin_id,name,Number,location,email,password)values(?,?,?,?,?,?)");
$stmt->bind_param("isisss",$admin_id,$name,$number,$address,$email,$password);
$stmt->execute();
header('location:admin_login.php');
$stmt->close();
$conn->close();
}
?>