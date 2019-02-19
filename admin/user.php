<?php include "includes/header.php" ?>
<?php if(!is_admin()){
	header('Location: index.php');
} ?>
<?php if(isset($_GET['u_id'])): ?>
<?php 
	
	$user_id = $_GET['u_id'];
	if(isset($_POST['edit_user'])){
		$user_fields = $_POST;
		$user_files = $_FILES;
				
		$user_image = $user_files['user_image']['name'];
		
		if(!empty($user_image)){
			$user_image_temp = $user_files['user_image']['tmp_name'];
			move_uploaded_file($user_image_temp, "../imgs/user_imgs/$user_image");
		}else{
			$row = fetch_user($user_id);
			$user_image = $row['user_image'];
		}
		
		$user_fields['user_image'] = $user_image;
	
		if(edit_user($user_id, $user_fields)){
			$notify = "User been Updated successfully!";
			$notifyClass = "alert-success";
		}else{
			$notify = "Sorry! User can't be updateed due to some reason!";
			$notifyClass = "alert-danger";
		}
	}

?>
<div id="wrapper">
	<!-- Navigation -->
	<?php include "includes/navigation.php" ?>


	<div id="page-wrapper">
		<div class="container-fluid">
			<div class="row">
				<h1 class="page-header">user<small> - Add new user</small></h1>
				<?php $row = fetch_user($user_id); ?>
				<?php 
				
					$user_id = $row['user_id'];
					$username = $row['username'];
					$user_password = $row['user_password'];
					$user_firstname = $row['user_firstname'];
					$user_lastname = $row['user_lastname'];
					$user_email = $row['user_email'];
					$user_image = $row['user_image'];
					$user_role= $row['user_role'];

				?>
				<?php if(!empty($notify)): ?>
				<div class="alert <?php echo $notifyClass?>">
					<?php echo $notify?>
					<a href="users.php" class="btn btn-primary">See all users</a>
				</div>
				<?php endif; ?>
				<form method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" name="username" value="<?php echo $username ?>">
					</div>
					<div class="form-group">
						<label for="user_password">Password</label>
						<input type="password" class="form-control" name="user_password" value="<?php echo $user_password ?>">
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label for="user_firstname">First Name</label>
							<input type="text" class="form-control" name="user_firstname" value="<?php echo $user_firstname ?>">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label for="user_lastname">Last Name</label>
							<input type="text" class="form-control" name="user_lastname" value="<?php echo $user_lastname?>">
						</div>
					</div>
					<div class="form-group">
						<label for="user_email">Email</label>
						<input type="text" class="form-control" name="user_email" value="<?php echo $user_email ?>">
					</div>
					<div class="form-group">
						<label for="user_image">User Image</label>
						<br>
						<img src="../imgs/user_imgs/<?php echo $user_image ?>" alt="User Avtar" height="100px">
					</div>
					<div class="form-group">
						<input type="file" name="user_image">
					</div>
					<div class="input-group">
						<label for="user_role">Post Status</label>
						<select name="user_role" class="form-control">
							<option <?php echo ($user_role=="admin" ) ? 'selected = "selected"' : '' ?> value="admin">Admin</option>
							<option <?php echo ($user_role=="author" ) ? 'selected = "selected"' : '' ?> value="author">Author</option>
							<option <?php echo ($user_role=="editor" ) ? 'selected = "selected"' : '' ?> value="editor">Editor</option>
							<option <?php echo ($user_role=="subscriber" ) ? 'selected = "selected"' : '' ?> value="subscriber">Subscriber</option>
						</select>
					</div>
					<div class="form-group"></div>
					<button type="submit" class="btn btn-primary" name="edit_user">Edit user</button>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /#wrapper -->
<?php else: ?>
<?php header('Location: users.php'); ?>
<?php endif; ?>
<?php include "includes/footer.php" ?>
