
<?php 
   
   include "../db/connect.php";
   
   
    ?>
    

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello to admin page</title>
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
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">main_home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="search.php">search</a>
            </li>
              <a type="button" class="btn btn-primary nav-link active" href="create.php">Add New</a>
            </li>
           
            <li class="nav-item">
              <!--a type="button" class="btn btn-primary nav-link active" href="includes/body.php">backtopage</a-->
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container my-4">
    <table class="table">
    <thead>
      <tr>
        <th>participant_id</th>
        <th>event_id</th>
        <th>fullname</th>
        <th>email</th>
        <th>mobile</th>
        <th>college</th>
        <th>branch</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include "../db/connect.php";
        $sql = "select * from participants";
        $result = $con->query($sql);
        if(!$result){
          die("Invalid query!");
        }
        while($row=$result->fetch_assoc()){
          echo "
      <tr>
        <th>$row[p_id]</th>
        <td>$row[event_id]</td>
        <td>$row[fullname]</td>
        <td>$row[email]</td>
        <td>$row[mobile]</td>
        <td>$row[college]</td>
        <td>$row[branch]</td>
        <td>
                  <a class='btn btn-success' href='edit.php?p_id=$row[p_id]'>Edit</a>
                  <a class='btn btn-danger' href='delete.php?p_id=$row[p_id]'>Delete</a>

                </td>
      </tr>
      ";
        }
      ?>
    </tbody>
  </table>
      </div>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>