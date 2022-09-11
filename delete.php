<?php

include('connection.php');



if(isset($_GET['dels'])){
	$username = $_GET['Dusername'];

	$sql = "DELETE FROM `login` WHERE `Username` = '$username'";
	$run = mysqli_query($con, $sql);

  }


 ?>