<?php
include "../db/connect.php";

$p_id = "";
$fullname = "";
$email = "";
$mobile = "";
$event_id = "";
$branch = "";
$success = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == 'GET') {
    if (!isset($_GET['p_id'])) {
        header("location: crud100/home_edit.php");
        exit;
    }
    $p_id = $_GET['p_id'];
    $sql = "SELECT * FROM participants WHERE p_id = $p_id";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $fullname = $row["fullname"];
        $email = $row["email"];
        $mobile = $row["mobile"];
        $event_id = $row["event_id"];
        $branch = $row["branch"];
    } else {
        header("location: crud100/home_edit.php");
        exit;
    }
} elseif ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $p_id = $_POST["p_id"];
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $event_id = $_POST["event_id"];
    $branch = $_POST["branch"];

    $sql = "UPDATE participants SET fullname = '$fullname', email = '$email', mobile = '$mobile', event_id = '$event_id', branch = '$branch' WHERE p_id = '$p_id'";
    if ($con->query($sql)) {
        $success = "Participant information updated successfully.";
    } else {
        $error = "Error updating participant information: " . $con->error;
    }
}
?>

<!-- Rest of the HTML code remains unchanged -->


<!-- Rest of the HTML code remains unchanged -->


<!DOCTYPE html>
<html>
<head>
 <title>CRUD</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" class="fw-bold">
      <div class="container-fluid">
        <a class="navbar-brand" href="home_edit.php">PHP CRUD OPERATION</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home_edit.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="create.php">Add New</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-warning">
 <h1 class="text-white text-center">  Update Member </h1>
 </div><br>

 <input type="hidden" name="p_id" value="<?php echo $p_id; ?>" class="form-control"> <br>

 <label> NAME: </label>
 <input type="text" name="fullname" value="<?php echo $fullname; ?>" class="form-control"> <br>

 <label> EMAIL: </label>
 <input type="text" name="email" value="<?php echo $email; ?>" class="form-control"> <br>

 <label> MOBILE PHONE: </label>
 <input type="text" name="mobile" value="<?php echo $mobile; ?>" class="form-control"> <br>

 <label> BRANCH: </label>
 <input type="text" name="branch" value="<?php echo $branch; ?>" class="form-control"> <br>

 <label> EVENT ID </label>
 <input type="text" name="event_id" value="<?php echo $event_id; ?>" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>
</html>