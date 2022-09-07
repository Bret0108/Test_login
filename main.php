<?php 
include('login.php');
include('create.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>practice</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>


    <h1>Login Information</h1>




    <div class="container">
        <div class="table-responsive">
            <table class = "table table-bordered" style="background-color: #eee;">
                <thead>
                  <tr>
                      <th >Action</th>
                      <th >Username</th>
                      <th >Password</th>
                    

                  <tbody>
                      <?php include('viewUser.php'); ?>
                  </tbody>
                  </tr>
                </thead>
            </table>
        </div>

        <a class="button" href="index.php">Logout</a>

        <div class="position-relative">
          <button type="button" class="button position-absolute top-50 start-50 translate-middle btn btn-success" href="main.php" data-bs-toggle="modal" data-bs-target="#create">Create</a> 
         </div>

        <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">

                <form action="" method="POST">
                <div class="row">
                  <div class="col-25">
                    <label for="fname">Username</label>
                  </div>
                  <div class="col-75">
                    <input class="form-control" type="text" id="fname" name="username" placeholder="Username"></input>
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="subject">Password</label>
                  </div>
                  <div class="col-75">
                    <input class="form-control" type="password" id="subject" name="password" placeholder="Password"></input>
                  </div>
                </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                  <button  class="btn btn-success" name="crt" value="">Create</button>
                </div>
              </form>
            </div>      
            </div>
          </div>
        </div>









    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
  </body>
</html>