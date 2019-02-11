<?php include "includes/header.php" ?>
<?php 

	if(isset($_POST['add_post'])){
		$post_fields = $_POST;
		$post_files = $_FILES;
				
		$post_image = $post_files['post_image']['name'];
		$post_image_temp = $post_files['post_image']['tmp_name'];
		move_uploaded_file($post_image_temp, "../imgs/$post_image");
		
		$post_fields['post_image'] = $post_image;
		
		if(add_post($post_fields)){
			$notify = "Post has been Added successfully!";
			$notifyClass = "alert-info";
			echo "here is exicuted";
		}else{
			$notify = "Sorry! Post can't be creacted due to some reason!";
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
				<h1 class="page-header">Posts<small> - Add new post</small></h1>
				<?php if(!empty($notify)): ?>
				<div class="alert <?php echo $notifyClass?>">
					<?php echo $notify?>
					<a href="posts.php" class="btn btn-primary">See all posts</a>
				</div>
				<?php endif; ?>
				<form method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="post_title">Post Title</label>
						<input type="text" class="form-control" name="post_title">
					</div>
					<div class="input-group">
						<label for="post_cat_id">Select Category</label>
						<select name="post_cat_id" id="" class="form-control">
						<?php $cat_rows = fetch_all_categories(); ?>
						<?php foreach($cat_rows as $cat_row): ?>
						<?php 
							
							$cat_id = $cat_row['cat_id'];		
							$cat_title = $cat_row['cat_title'];		
						
						?>
							<option value="<?php echo $cat_id ?>"><?php echo $cat_title ?></option>
							
						<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group"></div>
					<div class="form-group">
						<label for="post_author">Post Author</label>
						<input type="text" class="form-control" name="post_author">
					</div>
					<div class="form-group">
						<label for="post_image">Post Image</label>
						<input type="file" name="post_image">
					</div>
					<div class="form-group">
						<label for="post_tags">Post Tags</label>
						<input type="text" class="form-control" name="post_tags">
					</div>
					<div class="input-group">
						<label for="post_status"> Select Status </label>
						<select name="post_status" class="form-control">
							<option value="published">Published</option>
							<option value="Draft">Draft</option>
						</select>
					</div>
					<div class="form-group"></div>
					<div class="form-group">
						<label for="post_content">Post Content</label>
						<textarea class="form-control " name="post_content" id="editor"></textarea>
					</div>
					<button type="submit" class="btn btn-primary" name="add_post">Add Post</button>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /#wrapper -->
<?php include "includes/footer.php" ?>
