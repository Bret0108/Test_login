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


    <h1>Signup</h1>

    <div class="position-absolute top-50 start-50 translate-middle">
      <div class="w-100 p-3 border border-secondary" style="background-color: #eee;">
        
        <h2>Signup</h2>
        <form action="" method="POST" >
         <?php include('create.php');?>
        <div class="row">
          <div class="col-25">
            <label for="fname">Username</label>
          </div>
          <div class="col-75">
            <input class="form-control" type="text" id="fname" name="username" placeholder="Username" required></input>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="subject">Password</label>
          </div>
          <div class="col-75">
            <input class="form-control" type="password" id="subject" name="password" placeholder="Password" required></input>
          </div>
        </div>
        <div class="rows">
          <input type="submit" value="Submit" name="signup">
          <a class="button" href="index.php">back</a>
        </div>
      </form>
      </div>

    </div>












    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
  </body>
</html>