<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include "conn.php";
if(isset($_POST["email"], $_POST["password"])) 
    {     

        $email = stripslashes($_POST["email"]); 
        $password = stripslashes($_POST["password"]); 

        $sql = "SELECT email, password FROM shopuserstable WHERE email = '".$email."' AND  password = '".$password."'";
        $result = $conn->query($sql);
        if($result->num_rows > 0 )
        { 
            $sql1 = "SELECT firstname, lastname FROM shopuserstable WHERE email = '".$email."' AND  password = '".$password."'";
            $result1 = $conn->query($sql1);
            $row = $result1->fetch_assoc();
            $_SESSION["logged_in"] = "true"; 
            $_SESSION["firstname"] = $row["firstname"]; 
            $_SESSION["lastname"] = $row["lastname"]; 
            header("location: ../login.php?code=0");
        }
        else
        {
            header("location: ../login.php?code=1");
        }
}

?>