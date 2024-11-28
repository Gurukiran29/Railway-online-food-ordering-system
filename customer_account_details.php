<?php
$user_id=$_GET["user_id"];
$name=$_GET["name"];
$number=$_GET["number"];
$email=$_GET["email"];
$password=$_GET["password"];
$conn=new mysqli('localhost','root','','customer_details');
if($conn->connect_error){
die('connecton Failed:'.$conn->connect->connect_error);
}
else{
$stmt = $conn->prepare("insert into customer_account(user_id,name,Number,Email,password)values(?,?,?,?,?)");
$stmt->bind_param("isiss",$user_id,$name,$number,$email,$password);
$stmt->execute();
header('location:customer_registration.php');
$stmt->close();
$conn->close();
}
?>