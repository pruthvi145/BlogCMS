<?php include "includes/header.php" ?>
<?php 
	
	if(isset($_POST['add_user'])){
		$user_fields = $_POST;
		$user_files = $_FILES;
				
		$user_image = $user_files['user_image']['name'];
		$user_image_temp = $user_files['user_image']['tmp_name'];
		move_uploaded_file($user_image_temp, "../imgs/user_imgs/$user_image");
		
		$user_fields['user_image'] = $user_image;
		add_user($user_fields);
	}

?>
<div id="wrapper">
	<!-- Navigation -->
	<?php include "includes/navigation.php" ?>


	<div id="page-wrapper">
		<div class="container-fluid">
			<div class="row">
				<h1 class="page-header">user<small> - Add new user</small> </h1>
				<form method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" name="username">
					</div>
					<div class="form-group">
						<label for="user_password">Password</label>
						<input type="password" class="form-control" name="user_password">
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label for="user_firstname">First Name</label>
							<input type="text" class="form-control" name="user_firstname">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label for="user_lastname">Last Name</label>
							<input type="text" class="form-control" name="user_lastname">
						</div>
					</div>
					<div class="form-group">
						<label for="user_email">Email</label>
						<input type="text" class="form-control" name="user_email">
					</div>
					<div class="form-group">
						<label for="user_image">User Image</label>
						<input type="file" class="form-control" name="user_image">
					</div>

					<div class="form-group">
						<label for="user_role">Select Role</label>
						<select name="user_role" id="">
							<option value="admin">Admin</option>
							<option value="author">author</option>
							<option value="editor">editor</option>
							<option value="subscriber" selected="selected">subscriber</option>
						</select>
					</div>
					<button type="submit" class="btn btn-primary" name="add_user">Add user</button>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /#wrapper -->
<?php include "includes/footer.php" ?>
