<?php
include('connection.php');


$username = "";
$password = "";


if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  

  if (empty($username)) {
    ?>
        <div class="alert alert-danger" role="alert">
          Username required
        </div>
        <?php  
  }
  else if (empty($password)) {
    ?>
        <div class="alert alert-danger" role="alert">
          Password Required
        </div>
        <?php  
  }

  else{
    
    $query = "SELECT * FROM `login` WHERE `Username` ='$username'
    AND `Password` = '$password'";
    $results = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($results);

    if (mysqli_num_rows($results) == 1) {
        header('location: main.php');
    }
    else {
        ?>
        <div class="alert alert-danger" role="alert">
        Username/Password Incorrect
        </div>
        <?php    
    }
  }
}

?>