<?php
$email=$_GET["email"];
$password=$_GET["password"];
$conn=new mysqli('localhost','root','','customer_details');
if($conn->connect_error){
die('connecton Failed:'.$conn->connect->connect_error);
}
else{
$stmt=$conn->prepare("select * from customer_account where Email=?");
$stmt->bind_param("s",$email);
$stmt->execute();
$stmt_result = $stmt->get_result();
if($stmt_result->num_rows>0){
$data=$stmt_result->fetch_assoc();
if($data["password"]===$password){
echo"<h1>Login Successfull</h1>";
header('location:customer_registration.php');
}else{
echo"<h2>Invalid Password</h2>";
}
}else{
echo"<h2>Invalid Email or Password</h2>";
}
}
?>
