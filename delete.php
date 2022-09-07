<?php

include('connection.php');



if(isset($_GET['dels'])){
	$ID = $_GET['dels'];

	$sql = "DELETE FROM `login` WHERE `ID_No` = '$ID'";
	$run = mysqli_query($con, $sql);

  }


 ?>