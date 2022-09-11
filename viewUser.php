<?php

include('connection.php');
include('delete.php');
include('update.php');

$records = "SELECT * FROM login";
$Rec = mysqli_query($con, $records);

if(mysqli_num_rows($Rec) > 0){
	foreach($Rec as $rec){

			?>
				<link rel="stylesheet" type="text/css" href="style.css">
    			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


    			

				<tr>
					<td>
						<button type="button" style="padding-right:7px;" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#update">
  						Update</button>
  						<button type="button" style="padding-right:7px;" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">
  						Delete</button>
					</td>
					<td><?= $rec['Username'];?></td>
					<td><?= $rec['Password'];?></td>
				</tr>


				
			<div class="modal fade" id="update" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Update</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      <div class="modal-body">

				      	<form action="" method="POST">

				      	<div class="row">
			                  <div class="col-25">
			                    <label for="fname">Type Old Username</label>
			                  </div>
			                  <div class="col-75">
			                    <input class="form-control" type="text" id="fname" name="Oldusername"  placeholder="Username"></input>
			                  </div>
                		</div>

				        <div class="row">
				          <div class="col-25">
				            <label for="fname">New Username</label>
				          </div>
				          <div class="col-75">
				            <input class="form-control" type="text" id="fname" name="username" placeholder="Username"></input>
				          </div>
				        </div>
				        <div class="row">
				          <div class="col-25">
				            <label for="subject">New Password</label>
				          </div>
				          <div class="col-75">
				            <input class="form-control" type="password" id="subject" name="password" placeholder="Password"></input>
				          </div>
				        </div>
					        <div class="modal-footer">
					        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
					        <button  class="btn btn-success" name="ups">Update</button>
						    </div>
					    </form>
					  </div>      
				    </div>
				  </div>
				</div>


				<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete?</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      <div class="modal-body">

				      	<form action="" method="GET">

				      	<div class="row">
			                  <div class="col-25">
			                    <label for="fname">Type your username to delete</label>
			                  </div>
			                  <div class="col-75">
			                    <input class="form-control" type="text" id="fname" name="Dusername"  placeholder="Username"></input>
			                  </div>
                		</div>

					        <div class="modal-footer">
					        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancel</button>
					        <button  class="btn btn-danger" name="dels">Delete</button>
						    </div>
					    </form>
					  </div>      
				    </div>
				  </div>
				</div>

				


				<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
   				<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
		<?php
		}
	}

?>