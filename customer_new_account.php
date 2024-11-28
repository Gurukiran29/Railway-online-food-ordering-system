<?php
$user_id=$_GET["user_id"];$name=$_GET["name"];
$number=$_GET["number"];
$email=$_GET["email"];
$conn=new mysqli('localhost','root','','customer_details');
if($conn->connect_error){
die('connecton Failed:'.$conn->connect->connect_error);
}
else{
$stmt = $conn->prepare("insert into customer_account(user_id,name,Number,Email)values(?,?,?,?)");
$stmt->bind_param("isis",$user_id,$name,$number,$email);
$stmt->execute();
header('location:customer_registration.php');
$stmt->close();
$conn->close();
}
?>