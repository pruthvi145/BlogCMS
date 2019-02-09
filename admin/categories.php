<?php include "includes/db.php" ?>
<?php include "includes/header.php" ?>

<?php 
	
	if(isset($_POST['add_cat'])){
		$cat_title = $_POST['cat_title'];
		add_category($cat_title);
		
	}elseif(isset($_GET['delete'])){
		$cat_id = $_GET['delete'];
		delete_category($cat_id);
		
	}elseif(isset($_GET['edit']) && isset($_POST['edit_cat'])){
		$cat_id = $_GET['edit'];
		$new_cat_title = $_POST['new_cat_title'];
		edit_category($cat_id, $new_cat_title);
		
	}elseif(isset($_GET['clone'])){
		$cat_id = $_GET['clone'];
		clone_category($cat_id);
		
	}
?>

<div id="wrapper">
	<!-- Navigation -->
	<?php include "includes/navigation.php" ?>
	<div id="page-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">
						Categories
						<small>no subheading asshole!</small>
					</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<?php if(isset($_GET['edit'])): ?>
					<?php
					
						$cat_id = $_GET['edit'];
						$row = fetch_category($cat_id);
						$cat_title = $row['cat_title'];	
					
					?>
					<form method="post">
						<div class="form-group">
							<h4>Edit Category</h4>
							<input type="text" class="form-control" placeholder="Category" name="new_cat_title" value="<?php echo $cat_title; ?>">
						</div>
						<button type="submit" class="btn btn-primary" name="edit_cat">Edit category</button>
					</form>

					<?php else: ?>

					<form method="post">
						<div class="form-group">
							<h4>Add New Category</h4>
							<input type="text" class="form-control" placeholder="Category" name="cat_title">
						</div>
						<button type="submit" class="btn btn-primary" name="add_cat">Add category</button>
					</form>

					<?php endif; ?>

				</div>
				<div class="col-lg-1"></div>
				<div class="col-lg-7">
					<?php $rows = fetch_all_categories(); ?>
				    <?php if(!empty($rows)): ?>
					<table class="table table-hover table-bordered">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Category Name</th>
								<th scope="col" colspan="3">Actions</th>

							</tr>
						</thead>
						<tbody>
							<?php foreach($rows as $row): ?>
							<?php
							
							$cat_id =  $row['cat_id'];
							$cat_title =  $row['cat_title'];
							
						?>
							<tr>
								<th scope="row">
									<?php echo $cat_id; ?>
								</th>
								<td>
									<?php echo $cat_title; ?>
								</td>
								<td><a href="?edit=<?php echo $cat_id?>">edit</a></td>
								<td><a href="?delete=<?php echo $cat_id?>">delete</a></td>
								<td><a href="?clone=<?php echo $cat_id?>">clone</a></td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
					<?php else: ?>
							<p class="alert alert-danger">No data found!</p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /#wrapper -->
<?php include "includes/footer.php" ?>
