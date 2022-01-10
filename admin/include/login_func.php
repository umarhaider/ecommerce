<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 'On');

include "conn.php";

$username = $_POST['username']; // get credidentials from post data
$password = $_POST['password']; // get credidentials from post data

$sql = "SELECT * FROM adminusers WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $sql);
if(!$conn){
die("Connection failed: " . mysqli_connect_error());
}

if (mysqli_num_rows($result)==0){
	unset($_SESSION['loggedIn']); // set login as true so that it can access pages that need login
	unset($_SESSION['userType']);
	header('Location: ../login.php?code=0'); // redirect for credidentials error
}
else{
	$row = mysqli_fetch_array($result);
	$_SESSION['loggedIn'] = "1"; // set login as true so that it can access pages that need login
	$_SESSION['userType'] = "$row[3]"; // set access control 
	header("Location: ../dashboard.php");
}




?>