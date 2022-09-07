<?php

include('connection.php');

if(isset($_POST['ups'])){
	$ID = $_POST['ups'];
	$username = $_POST['username'];
	$password = $_POST['password'];


	$sql = "UPDATE `login` SET `Username`='$username',`Password`='$password' WHERE `ID_No` = '$ID'";
	$run = mysqli_query($con, $sql);

  }

 ?>