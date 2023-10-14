


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
              <a class="nav-link active" aria-current="page" href="../includes/body.php">main_home</a>
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
   
    <tbody>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>filter box to get all the details </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Participant ID</th>
                                    <th>Event_id</th>
                                    <th>full name</th>
                                    <th>Email</th>
                                    <th>mobile_no</th>
                                    <th>Branch</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","Vaibhav@@2104","eventmgmt");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM participants WHERE CONCAT(p_id,event_id,fullname,email,mobile,branch) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['p_id']; ?></td>
                                                    <td><?= $items['event_id']; ?></td>
                                                    <td><?= $items['fullname']; ?></td>
                                                    <td><?= $items['email']; ?></td>
                                                    <td><?= $items['mobile']; ?></td>
                                                    <td><?= $items['branch']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>