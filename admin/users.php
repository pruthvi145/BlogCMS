<?php include "includes/header.php" ?>

	<?php 
		if(isset($_GET['delete'])){
			$user_id = $_GET['delete'];
			delete_user($user_id);
		}elseif(isset($_GET['clone'])){
			$user_id = $_GET['clone'];
			clone_user($user_id);
		}
	?>

<div id="wrapper">
<?php include "includes/navigation.php" ?>
	<div id="page-wrapper">
		<div class="container-fluid">
			<div class="row">
				<h1 class="page-header">
					Users
					<small>no subheading asshole!</small>
				</h1>
				<table class="table table-hover table-bordered">
					<thead>
						<tr>
							<th>#</th>
							<th>username</th>
							<th>Firstname</th>
							<th>Lastname</th>
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
						$user_email = $row['user_email'];
						$user_image = $row['user_image'];
						$user_role= $row['user_role'];

					
					?>
						<tr>
							<td scope="col"><?php echo $user_id ?></td>
							<td scope="col"><?php echo $username ?></td>
							<td scope="col"><?php echo $user_firstname ?></td>
							<td scope="col"><?php echo $user_lastname ?></td>
							<td scope="col"><?php echo $user_email ?></td>
							<td scope="col"><img src="../imgs/user_imgs/<?php echo $user_image ?>" alt="<?php echo $user_image ?>" width="100"></td>
							<td scope="col"><?php echo $user_role ?></td>
							<td scope="col"><a href="user.php?u_id=<?php echo $user_id ?>">Edit</a></td>
							<td scope="col"><a href="?delete=<?php echo $user_id ?>">Delete</a></td>
							<td scope="col"><a href="?clone=<?php echo $user_id ?>">Clone</a></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- /#wrapper -->
<?php include "includes/footer.php" ?>
