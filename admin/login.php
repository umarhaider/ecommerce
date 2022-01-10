<!DOCTYPE html>
<html lang="en">
   <head>
      <?php
         session_start();
         $_SESSION['loggedIn'] = "25";
         if($_SESSION['loggedIn'] == "1"){
           header('Location: dashboard.php');
         }
         else if(!isset($_SESSION['loggedIn'])){

         }
      ?>
      <title>Contact Management - Login</title>
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
            <li class="nav-item">
              <a class="nav-link" href="add_user.php">Add User</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="show_all_users.php">Show All Users</a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="jumbotron text-center">
         <h1>Saltaire Sports</h1>
         <p>Contact Management System</p>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-sm-2">
            </div>
            <div class="col-sm-8">
               <h3 class="text-center">Login</h3>
               <?php 
                        if(!isset($_GET['code'])){
                           echo '<form class="m-2" action="include/login_func.php" method="post">';
                        }
                        else if ($_GET['code'] == "0")
                        {
                           echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
                           echo '<strong>Incorrect login details!</strong> You should check in on some of those fields below.';
                           echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
                           echo '<span aria-hidden="true">&times;</span>';
                           echo '</button>';
                           echo '</div>';
                           echo '<form class="m-2" action="include/login_func.php" method="post">';
                        }
                        else if($_GET['code'] == "1"){
                           echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">';
                           echo '<strong>You are not logged in!</strong> Enter your login details below.';
                           echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
                           echo '<span aria-hidden="true">&times;</span>';
                           echo '</button>';
                           echo '</div>';
                           echo '<form class="m-2" action="include/login_func.php" method="post">';
                        }
                        else if($_GET['code'] == "2"){
                           echo '<div class="alert alert-info alert-dismissible fade show" role="alert">';
                           echo '<strong>You do not have permision to access this page!</strong> Please login with admin credidentials.';
                           echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
                           echo '<span aria-hidden="true">&times;</span>';
                           echo '</button>';
                           echo '</div>';
                           echo '<form class="m-2" action="include/login_func.php" method="post">';
                        }
               ?>
                  <div class="form-group">
                     <label for="username">Username</label>
                     <input type="text" class="form-control" name="username" id="username" aria-describedby="username" placeholder="Enter username">
                  </div>
                  <div class="form-group">
                     <label for="password">Password</label>
                     <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
                  </div>
                  <div class="form-check m-2">
                     <input type="checkbox" class="form-check-input" id="exampleCheck1">
                     <label class="form-check-label" for="exampleCheck1">Show Password</label>
                  </div>
                  <button type="submit" class="btn btn-primary text-center btn-block">Login</button>
               </form>
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