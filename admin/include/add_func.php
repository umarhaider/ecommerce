<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 'On');

$servername = "localhost";
$username = "115673";
$password = "saltaire";
$dbname = "115673";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$name = $_POST['usersname']; // get credidentials from post data
$email = $_POST['usersemail']; // get credidentials from post data
$phone = $_POST['usersnumber']; // get credidentials from post data
if($_POST['usersmembershiptype'] == "1"){ // change bootstrap custom selector data to readable data
	$memtype = "Casual";
}
else if($_POST['usersmembershiptype'] == "2"){
	$memtype = "Fitness";
}
else if($_POST['usersmembershiptype'] == "3"){
	$memtype = "Dedicated";
}
$photo = $_POST['usersfile']; // get credidentials from post data


$sql = "INSERT INTO users (name, email, phonenumber, memtype, photo) VALUES ('$name', '$email', '$phone', '$memtype', '$photo')";
if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
    header('Location: ../add_user.php?code=1'); // redirect for successful entry
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    header('Location: ../add_user.php?code=0'); // redirect for error
}

?>