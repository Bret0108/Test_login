<?php

include('connection.php');

if(isset($_POST['crt'])){

	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "INSERT INTO login(`Username`,`Password`) VALUES('$username','$password')";
	$run = mysqli_query($con, $sql);

  }

 ?>