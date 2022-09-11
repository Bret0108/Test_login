<?php

include('connection.php');

if(isset($_POST['ups'])){
	$Oldusername = $_POST['Oldusername'];
	$username = $_POST['username'];
	$password = $_POST['password'];


	$sql = "UPDATE `login` SET `Username`='$username',`Password`='$password' WHERE `Username` = '$Oldusername'";
	$run = mysqli_query($con, $sql);

  }

 ?>