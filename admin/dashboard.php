<!DOCTYPE html>
<html lang="en">
   <head>
      <?php
      session_start();
      if($_SESSION['loggedIn'] == "0"){
        header('Location: login.php?code=1');
      }
      else if(!isset($_SESSION['loggedIn'])){
        header('Location: login.php?code=1');
      }
      ?>
      <title>Contact Management</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Contact Management</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Dashboard</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="add_user.php">Add User</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="show_all_users.php">Show All Users</a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="jumbotron text-center">
         <h1>Dashboard</h1>
         <p>Contact Management System</p>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-sm-2">
            </div>
            <div class="col-sm-8">
               <div class="jumbotron text-center">
                  <h3>Welcome <strong><?php  if($_SESSION['loggedIn'] == "0"){
        header('Location: login.php?code=1');
      }
      else if(!isset($_SESSION['loggedIn'])){
        header('Location: login.php?code=1');
      } if($_SESSION['userType'] == "1"){echo "User";}else if($_SESSION['userType'] == "2"){echo "Admin";};?></strong></h3>
                  <p><?php  if($_SESSION['loggedIn'] == "0"){
        header('Location: login.php?code=1');
      }
      else if(!isset($_SESSION['loggedIn'])){
        header('Location: login.php?code=1');
      } if($_SESSION['userType'] == "1"){echo "You can only list users! No edits can be made.";}else if($_SESSION['userType'] == "2"){echo "You have full permisions and can also view the log.";} ?></p>
               </div>
               <a href="#" class="btn btn-info text-center btn-block active" role="button" aria-pressed="true">View Log</a>
               <a href="include/logout.php" class="btn btn-danger text-center btn-block active" role="button" aria-pressed="true">Log out</a>
               <br>
            </div>
            <div class="col-sm-2">
            </div>
         </div>
      </div>
      <div class="jumbotron text-center">
         <p>Copyright &copy; Umar Haider 2021</p>
      </div>
   </body>
</html>