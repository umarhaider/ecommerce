<?php
session_start();
require "include/checkIfLoggedIn.php";
if($_SESSION['userType'] == "user"){
		echo '<script language="javascript">';
		echo 'alert("You cannot access this page!")';
		echo '</script>';
		header('Location: login.php?code=2');
}

?>
<head>
	<title>Contact Management - Edit Details</title>
</head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="style2.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
<style>
	

	.header {
		font-family: Arial, Helvetica, sans-serif;
  padding: 10px 16px;
  background: #555;
  color: #f1f1f1;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 102px;
}
</style>
<html class="content">
<body>

<div class="header" id="myHeader">
  <a href="dashboard.php" style="text-align: left;"><h2>Dashboard</h2></a>
</div>
	<h1 class="elegantshadow">Details</h1>
	<p>The contact details on file are as shown below.<br>
	Edit the data and save your changes to file.
	</p>
	<?php  
		$name = $_GET['name'];
		$handle = fopen("data.csv", "r");
		if ($handle) {
		    while (($line = fgets($handle)) !== false) {
		        $lineArray = explode(",", $line);
		        if($lineArray[0] == $name){
		        
		        	echo('<form action="include/editfunction.php" method="post">');
		        	echo('<input size="20" type="hidden" maxlength="15" name="old1" value="'.$lineArray[0].'">');
		        	echo('<input size="20" type="hidden" maxlength="15" name="old2" value="'.$lineArray[1].'">');
		        	echo('<input size="20" type="hidden" maxlength="15" name="old3" value="'.$lineArray[2].'">');
		        	echo('<input size="20" type="hidden" maxlength="15" name="old4" value="'.$lineArray[3].'">');
		        	echo('<input size="20" type="hidden" maxlength="15" name="old5" value="'.$lineArray[4].'">');
					echo('<table>');
					echo('<tr>');
					echo('<td align="right">Name: </td>');
					echo('<td><input size="20" type="text" maxlength="50" name="fullname" value="'.$lineArray[0].'"></td>');
					echo('</tr>');
					echo('<tr>');
					echo('<td align="right">Email Address: </td>');
					echo('<td><input size="20" type="text" maxlength="100" name="emailaddress" value="'.$lineArray[1].'"></td>');
					echo('</tr>');
					echo('<tr>');
					echo('<td align="right">Phone Number: </td>');
					echo('<td><input size="20" type="text" maxlength="11" name="phonenumber" value="'.$lineArray[2].'"></td>');
					echo('</tr>');
					echo('<tr>');
					echo('<td align="right">Membership Type: </td>');
					echo('<td><input size="20" type="text" maxlength="1" name="memtype" value="'.$lineArray[3].'"></td>');
					echo('</tr>');
					echo('<tr>');
					echo('<td align="right">Photo Link: </td>');
					echo('<td><input size="20" type="text" maxlength="5000" name="photo" value="'.$lineArray[4].'"></td>');
					echo('</tr>');
					echo('<tr>');
					echo('<td> ');
					echo('</td>');
					echo('<td colspan="2" align="left"><input class="w3-button w3-block w3-gray" type="submit" value="Submit"></td>');
					echo('</tr>');
					echo('</table>');
					echo('</form>');
		        }
		    }
		    fclose($handle);
		} else {
		    echo("Error opening data file.");

		} 


?>
</body>	
<br>
<div class="header" id="myHeader">
  <a href="https://github.com/umarhaider/ContactManagementSystem" style="text-align: left; font-size: 5px;"><h2>&copy; Copyright Umar Haider</h2></a>
</div>
</html>