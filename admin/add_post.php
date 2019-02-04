<?php include "includes/header.php" ?>
<?php 
	
	if(isset($_POST['add_post'])){
		$post_fields = $_POST;
		$post_files = $_FILES;
		
		
	}

?>

<div id="wrapper">
	<!-- Navigation -->
	<?php include "includes/navigation.php" ?>


	<div id="page-wrapper">
		<div class="container-fluid">
			<div class="row">
				<h1 class="page-header">
					Posts
					<small> - Add new post</small>
				</h1>
				<form method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="post_title">Post Title</label>
						<input type="text" class="form-control" name="post_title">
					</div>
					<div class="form-group">
						<label for="post_cat_id">Post cat id</label>
						<input type="text" class="form-control" name="post_cat_id">
					</div>
					<div class="form-group">
						<label for="post_author">Post Author</label>
						<input type="text" class="form-control" name="post_author">
					</div>
					<div class="form-group">
						<label for="post_image">Post Title</label>
						<input type="file" class="form-control" name="post_image">
					</div>
					<div class="form-group">
						<label for="post_tags">Post Tags</label>
						<input type="text" class="form-control" name="post_tags">
					</div>
					<div class="form-group">
						<label for="post_tags">Post Status</label>
						<input type="text" class="form-control" name="post_status">
					</div>
					<div class="form-group">
						<label for="post_content">Post Content</label>
						<textarea class="form-control " name="post_content" id="body" cols="30" rows="10"></textarea>
					</div>
					<button type="submit" class="btn btn-primary" name="add_post">Add Post</button>
				</form>

			</div>
		</div>
	</div>
</div>
<!-- /#wrapper -->
<?php include "includes/footer.php" ?>
