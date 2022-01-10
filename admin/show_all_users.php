<!DOCTYPE html>
<html lang="en">
<?php
    
      session_start();
      if($_SESSION['loggedIn'] == "0"){
        header('Location: login.php?code=1');
      }
      else if(!isset($_SESSION['loggedIn'])){
        header('Location: login.php?code=1');
      }

    
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 'On');

?>
   <head>
      <title>Contact Management - Show All Users</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script>
        function thisUser(userName, action){

          window.location.href = '/edit_contact_details.php?name=' + userName + '&action=' + action;

        }
      </script>
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
            <li class="nav-item active">
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
               <h3 class="text-center p-2">All Users</h3>
               <table class="table table-striped">
                 <thead>
                   <tr>
                     <th scope="col">#</th>
                     <th scope="col">Name</th>
                     <th scope="col">Phone Number</th>
                     <th scope="col">Membership</th>
                     <th scope="col">Action</th>
                   </tr>
                 </thead>
                 <tbody>
                   <?php
                      include "include/conn.php";

                      $result = mysqli_query($conn, "SELECT * FROM users");
                      while($row = mysqli_fetch_array($result)){
                        
                        $id = $row['id'];
                        echo '<tr>';
                          echo '<th scope="row">'.$row['id'].'</th>';
                          echo '<td>'.$row['name'].'</td>.';
                          echo '<td>'.$row['phonenumber'].'</td>';
                          echo '<td>'.$row['memtype'].'</td>';
                                if($_SESSION['userType'] == "2"){
        echo '<td class="text-center"><button onclick="thisUser("'.str_replace(' ', '', $id).'", "1")" type="button" class="btn btn-warning">Edit</button> <button onclick="thisUser("'.str_replace(' ', '', $id).'", "2")" type="button" class="btn btn-danger">Delete</button></td>';
      }
      else if(!isset($_SESSION['userType'])){
        header('Location: login.php?code=2');
      }
                          
                        echo '</tr>';
                        
                      }

                   ?>
                 </tbody>
               </table>
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