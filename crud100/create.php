<?php
include "../db/connect.php";

if(isset($_POST['submit'])){
    $p_id = $_POST['p_id'];
    $event_id = $_POST['event_id'];
    $fullname = $_POST['fullname'];  // Make sure you have this field in your HTML form
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $college = $_POST['college'];
    $branch = $_POST['branch'];  // Make sure you have this field in your HTML form
    
    // Use prepared statements for security
    $sql = "INSERT INTO `participants`(`p_id`, `event_id`, `fullname`, `email`, `mobile`, `college`, `branch`)
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $con->prepare($sql);
    $stmt->bind_param("iisssss", $p_id, $event_id, $fullname, $email, $mobile, $college, $branch);
    
    if ($stmt->execute()) {
        // Insert successful
    } else {
        // Insert failed
    }
    
    $stmt->close();
    
    // You might want to redirect or provide some feedback to the user
    header('location: /crud100/home_edit.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
 <title>Creating a new participant</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="home_edit.php">PHP CRUD OPERATION</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home_edit.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="create.php"><span style="font-size:larger;">Add New</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-primary">
 <h1 class="text-white text-center">  Create New Member </h1>
 </div><br>

 <label> Participant-id </label>
 <input type="text" name="p_id" class="form-control"> <br>

 <label> Event-id </label>
 <input type="text" name="event_id" class="form-control"> <br>

 <label> Fullname </label>
 <input type="text" name="fullname" class="form-control"> <br>

 <label> Email </label>
 <input type="text" name="email" class="form-control"> <br>

 <label> mobile </label>
 <input type="text" name="mobile" class="form-control"> <br>

 <label> college</label>
 <input type="text" name="college" class="form-control"> <br>

 <label> branch</label>
 <input type="text" name="branch" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>
</html>