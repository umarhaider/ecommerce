<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Contact Management - Edit User</title>
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
            <div class="col-sm-8 m-2">
               <h3 class="text-center p-2">Edit User</h3>
               <form>
                 <div class="form-row">
                   <div class="col-md-4 mb-3">
                     <label for="name">Name</label>
                     <input type="text" class="form-control" id="name" placeholder="Name" value="" required>
                   </div>
                   <div class="col-md-4 mb-3">
                     <label for="phonenumber">Phone Number</label>
                     <input type="text" class="form-control" id="phonenumber" placeholder="07XXXXXXXXX" value="" required>
                   </div>
                   <div class="col-md-4 mb-3">
                     <label for="emailaddress">Email Address</label>
                     <div class="input-group">
                       <div class="input-group-prepend">
                         <span class="input-group-text" id="inputGroupPrepend2">@</span>
                       </div>
                       <input type="text" class="form-control" id="emailaddress" placeholder="emailaddress" aria-describedby="inputGroupPrepend2" value="" required>
                     </div>
                   </div>
                 </div>
                 <div class="form-row">
                   <div class="col-md-6 mb-3">
                     <label for="validationDefault03">Membership Type</label>
                     <select class="custom-select" required>
                        <option value="">Choose Membership</option>
                        <option value="1">Casual</option>
                        <option value="2">Fitness</option>
                        <option value="3">Dedicated</option>
                     </select>
                   </div>
                   <div class="col-md-6 mb-3">
                     <label for="validationDefault04">Photo</label>
                     <div class="custom-file">
                      <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                      <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                    </div>
                   </div>
                 </div>
                 <button class="btn btn-primary" type="submit">Save</button>
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