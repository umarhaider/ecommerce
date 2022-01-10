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

      if($_SESSION['userType'] == "1"){
        header('Location: login.php?code=2');
      }
      else if(!isset($_SESSION['userType'])){
        header('Location: login.php?code=2');
      }
    ?>
      <title>Contact Management - Add User</title>
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
         <h1>Saltaire Sports</h1>
         <p>Contact Management System</p>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-sm-2">
            </div>
            <div class="col-sm-8 m-2">
               <h3 class="text-center p-2">Add User</h3>
               <?php 
                        if(!isset($_GET['code'])){
                           echo '<form action="include/add_func.php" method="post">';
                        }
                        else if($_GET['code'] == "0"){
                           echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">';
                           echo '<strong>An error has occured!</strong> Contact your database manager.';
                           echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
                           echo '<span aria-hidden="true">&times;</span>';
                           echo '</button>';
                           echo '</div>';
                           echo '<form class="m-2" action="include/add_func.php" method="post">';
                        }
                        else if($_GET['code'] == "1"){
                           echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
                           echo '<strong>Your user data has been successfully entered!</strong>';
                           echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
                           echo '<span aria-hidden="true">&times;</span>';
                           echo '</button>';
                           echo '</div>';
                           echo '<form class="m-2" action="include/add_func.php" method="post">';
                        }
                        else{
                          echo '<form action="include/add_func.php" method="post">';
                        }
               ?>
                 <div class="form-row">
                   <div class="col-md-4 mb-3">
                     <label for="name">Name</label>
                     <input type="text" name="usersname" class="form-control" id="name" placeholder="Name" required>
                   </div>
                   <div class="col-md-4 mb-3">
                     <label for="phonenumber">Phone Number</label>
                     <input type="text" name="usersnumber" class="form-control" id="phonenumber" placeholder="07XXXXXXXXX" required>
                   </div>
                   <div class="col-md-4 mb-3">
                     <label for="emailaddress">Email Address</label>
                     <div class="input-group">
                       <div class="input-group-prepend">
                         <span class="input-group-text" id="inputGroupPrepend2">@</span>
                       </div>
                       <input type="text" name="usersemail" class="form-control" id="emailaddress" placeholder="emailaddress" aria-describedby="inputGroupPrepend2" required>
                     </div>
                   </div>
                 </div>
                 <div class="form-row">
                   <div class="col-md-6 mb-3">
                     <label for="validationDefault03">Membership Type</label>
                     <select name="usersmembershiptype" class="custom-select" required>
                        <option value="">Choose Membership</option>
                        <option value="1">Casual</option>
                        <option value="2">Fitness</option>
                        <option value="3">Dedicated</option>
                     </select>
                   </div>
                   <div class="col-md-6 mb-3">
                     <label for="validationDefault04">Photo</label>
                     <div class="custom-file">
                      <input name="usersfile" type="file" class="custom-file-input" id="validatedCustomFile" required>
                      <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                    </div>
                   </div>
                 </div>
                 <button class="btn btn-primary" type="submit">Add</button>
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