<?php include "includes/header.php" ?>
<?php if(!is_admin()){
	header('Location: index.php');
} ?>

	<?php 
		if(isset($_POST['submit_action'])){
		$action = $_POST['action'];
			
		if(!isset($_POST['user_ids'])){
			$notify = "No user is selected!";
			$notifyClass = "alert-danger";
		}
		$user_ids = $_POST['user_ids'];
		
			foreach($user_ids as $user_id){
				delete_user($user_id);
			}
	}	
	?>

<div id="wrapper">
<?php include "includes/navigation.php" ?>
	<div id="page-wrapper">
		<div class="container-fluid">
			<div class="row">
				<h1 class="page-header">Users<small> no subheading asshole!</small>
				</h1>
				<?php if(!empty($notify)): ?>
				<div class="alert <?php echo $notifyClass?>"><?php echo $notify?></div>
				<?php endif; ?>
				<form action="" method="post">
				<table class="table table-hover table-bordered">
				<div class="col-xs-4" style="margin-bottom: 20px;">
						<select class="form-control" name="action" id="">
							<option value="">Select Options</option>
							<option value="delete">Delete</option>
						</select>
						</div>
						<div class="col-xs-4">
							<input type="submit" name="submit_action" class="btn btn-success" value="Apply">
							<a href="add_user.php" class="btn btn-primary">Add new</a>
						</div>
					<thead>
						<tr>
							<th><input type="checkbox" id="checkAll"></th>
							<th>#</th>
							<th>username</th>
							<th>Firstname</th>
							<th>Lastname</th>
							<th>password</th>
							<th>email</th>
							<th>image</th>
							<th>role</th>

						</tr>
					</thead>
					<tbody>
						<?php $rows = fetch_all_users(); ?>
						<?php foreach($rows as $row): ?>
						<?php 
						
						$user_id = $row['user_id'];
						$username = $row['username'];
						$user_firstname = $row['user_firstname'];
						$user_lastname = $row['user_lastname'];
						$user_password = $row['user_password'];
						$user_email = $row['user_email'];
						$user_image = $row['user_image'];
						$user_role= $row['user_role'];

					
					?>
						<tr>
							<td scope="col"><input type="checkbox" class="checkBox" name='user_ids[]' value="<?php echo $user_id ?>"></td>
							<td scope="col"><?php echo $user_id ?></td>
							<td scope="col"><?php echo $username ?></td>
							<td scope="col"><?php echo $user_firstname ?></td>
							<td scope="col"><?php echo $user_lastname ?></td>
							<td scope="col"><?php echo $user_password ?></td>
							<td scope="col"><?php echo $user_email ?></td>
							<td scope="col"><img src="../imgs/user_imgs/<?php echo $user_image ?>" alt="<?php echo $user_image ?>" width="100"></td>
							<td scope="col"><?php echo $user_role ?></td>
							<td scope="col"><a href="user.php?u_id=<?php echo $user_id ?>">Edit</a></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /#wrapper -->
<?php include "includes/footer.php" ?>
