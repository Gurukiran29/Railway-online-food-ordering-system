<?php
session_start();

session_unset();
header('location:delivery_Person_login.php');
?>