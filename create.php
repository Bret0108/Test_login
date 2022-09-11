<?php

include('connection.php');


if(isset($_POST['signup'])){

	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "INSERT INTO login(`Username`,`Password`) VALUES('$username','$password')";
	$run = mysqli_query($con, $sql);

	?>
			<div class="alert alert-success d-flex align-items-center" role="alert" style = "margin-bottom:0px;">	 
				<div>
				Username and Password saved
				</div>
			</div>
	<?PHP		

}

 ?>