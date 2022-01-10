<?php

session_start();
unset($_SESSION['loggedIn']); // unset so that the admin pages know that the user is not logged in
unset($_SESSION['userType']);

header('Location: ../login.php?code=1');

?>