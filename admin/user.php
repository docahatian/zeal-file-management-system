<?php include('html_head_home.php')?>

    <!-- additional for favicon-->
     <link rel="icon" type="image/png" href="fav/user.png"> 
	<title>User | Student File Management System</title>
	</head>
<body>
   <?php include ('nav_home.php')?>
	 
<div class = content-container> <!--end  container  ------->
	<div id = "content">
		<br /><br /><br />
		<div class="alert alert-info"><h3>Users</h3></div> 
		<button class="btn btn-success" data-toggle="modal" data-target="#form_modal"><span class="fas fa-user-plus fa-lg"></span> Add User</button>
		<br /><br />
		<table id = "table" class="table table-bordered">
			<thead>
				<tr>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Username</th>
					<th>Password</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$query = mysqli_query($conn, "SELECT * FROM `user`") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query)){
				?>
				<?php 
					if($fetch['status'] != "administrator" || $_SESSION['status'] == $fetch['status']){
				?>	
					<tr class="del_user<?php echo $fetch['user_id']?>">
						<td><?php echo $fetch['firstname']?></td>
						<td><?php echo $fetch['lastname']?></td>
						<td><?php echo $fetch['username']?></td>
						<td>********</td>
						<td><?php echo $fetch['status']?></td>
						<td><center><button class="btn btn-warning" data-toggle="modal" data-target="#edit_modal<?php echo $fetch['user_id']?>"><span class="fas fa-user-pen fa-lg"></span> Edit</button> 
						<?php
							if($fetch['status'] != "administrator"){
						?>
							| <button class="btn btn-danger btn-delete" id="<?php echo $fetch['user_id']?>" type="button"><span class="glyphicon glyphicon-trash"></span> Delete</button></center></td>
						<?php
							}
						?>
					</tr>
					
					<div class="modal fade" id="edit_modal<?php echo $fetch['user_id']?>" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<form method="POST" action="update_user.php">	
									<div class="modal-header">
										<h4 class="modal-title">Update User</h4>
									</div>
									<div class="modal-body">
										<div class="col-md-3"></div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Firstname</label>
												<input type="hidden" name="user_id" value="<?php echo $fetch['user_id']?>"/>
												<input type="text" name="firstname" value="<?php echo $fetch['firstname']?>" class="form-control" required="required"/>
											</div>
											<div class="form-group">
												<label>Lastname</label>
												<input type="text" name="lastname" value="<?php echo $fetch['lastname']?>" class="form-control" required="required"/>
											</div>
											<div class="form-group">
												<label>Username</label>
												<input type="text" name="username" value="<?php echo $fetch['username']?>" class="form-control" required="required"/>
											</div>
											<div class="form-group">
												<label>Password</label>
												<input type="password" name="password" class="form-control" required="required"/>
											</div>
											<div class="form-group">
												<label>Status</label>
												<input type="text" name="status" value="Regular" class="form-control" readonly="readonly" required="required"/>
											</div>
										</div>
									</div>
									<div style="clear:both;"></div>
									<div class="modal-footer">
										<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fas fa-cirle-x fa-lg"></span> Close</button>
										<button name="edit" class="btn btn-warning" ><span class="fas fa-user fa-lg"></span> Update</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					
					
				<?php
					}
				?>
				<?php
					}
				?>
			</tbody>
		</table>
	</div>

	<div class="modal fade" id="modal_confirm" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title">System</h3>
				</div>
				<div class="modal-body">
					<center><h4 class="text-danger">Are you sure you want to delete this data?</h4></center>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-success" id="btn_yes">Yes</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="form_modal" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<form method="POST" action="save_user.php">	
					<div class="modal-header">
						<h4 class="modal-title">Add User</h4>
					</div>
					<div class="modal-body">
						<div class="col-md-3"></div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Firstname</label>
								<input type="text" name="firstname" class="form-control" required="required"/>
							</div>
							<div class="form-group">
								<label>Lastname</label>
								<input type="text" name="lastname" class="form-control" required="required"/>
							</div>
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="username" class="form-control" required="required"/>
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" class="form-control" required="required"/>
							</div>
							<div class="form-group">
								<label>Status</label>
								<input type="text" name="status" value="Regular" class="form-control" readonly="readonly" required="required"/>
							</div>
						</div>
					</div>
					<div style="clear:both;"></div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
						<button name="save" class="btn btn-success" ><span class="glyphicon glyphicon-save"></span> Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>

<?php include ('script.php')?>
<script type="text/javascript">
$(document).ready(function(){
	$('.btn-delete').on('click', function(){
		var user_id = $(this).attr('id');
		$("#modal_confirm").modal('show');
		$('#btn_yes').attr('name', user_id);
	});
	$('#btn_yes').on('click', function(){
		var id = $(this).attr('name');
		$.ajax({
			type: "POST",
			url: "delete_user.php",
			data:{
				user_id: id
			},
			success: function(){
				$("#modal_confirm").modal('hide');
				$(".del_user" + id).empty();
				$(".del_user" + id).html("<td colspan='6'><center class='text-danger'>Deleting...</center></td>");
				setTimeout(function(){
					$(".del_user" + id).fadeOut('slow');
				}, 1000);
			}
		});
	});
});
</script>
</div><!--end  container  ------->
<?php include ('footer.php')?>
</body>
</html>