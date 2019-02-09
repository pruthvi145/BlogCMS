<?php include "includes/db.php" ?>
<?php include "includes/header.php" ?>

<?php if(isset($_GET['p_id'])): ?>
<?php 

	$post_id = $_GET['p_id'];

	if(isset($_POST['edit_post'])){
		$post_fields = $_POST;
		$post_files = $_FILES;
		
		$post_image = $post_files['post_image']['name'];
		
		if(!empty($post_image)){
			$post_image_temp = $post_files['post_image']['tmp_name'];
			move_uploaded_file($post_image_temp, "../imgs/$post_image");
		}else{
			$row = fetch_post($post_id);
			$post_image = $row['post_image'];
		}
		
		
		$post_fields['post_image'] = $post_image;
		
		edit_post($post_id, $post_fields);
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
					<small> - edit post</small>
				</h1>
				<?php $row = fetch_post($post_id); ?>
				<?php 
					
					$post_id = $row['post_id'];
					$post_author = $row['post_author'];
					$post_title = $row['post_title'];
				
					$post_cat_id = $row['post_cat_id'];	
					
					$post_status = $row['post_status'];
					$post_image = $row['post_image'];
					$post_tags = $row['post_tags'];
					$post_comment_count = $row['post_comment_count'];
					$post_date = $row['post_date'];
					$post_content = $row['post_content'];
				
				?>
				<form method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="post_title">Post Title</label>
						<input type="text" class="form-control" name="post_title" value="<?php echo $post_title ?>">
					</div>
					<div class="form-group">
						<h5><b>Category</b></h5>
						<select name="post_cat_id" id="">
							<?php $cat_rows = fetch_all_categories(); ?>
							<?php foreach($cat_rows as $cat_row): ?>
							<?php 
							
							$cat_id = $cat_row['cat_id'];		
							$cat_title = $cat_row['cat_title'];		
						
							?>
							<option <?php echo ($cat_id == $post_cat_id) ? "selected='$cat_title'" : '' ?> value="<?php echo $cat_id ?>">
								<?php echo $cat_title ?>
							</option>

							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group">
						<label for="post_author">Post Author</label>
						<input type="text" class="form-control" name="post_author" value="<?php echo $post_author ?>">
					</div>
					<div class="form-group">
						<div style="margin:20px 0"><b>Post Image</b></div>
						<img src="../imgs/<?php echo $post_image ?>" alt="Thumbnail" height="100px;">
						<input type="file" class="form-control" name="post_image">
					</div>
					<div class="form-group">
						<label for="post_tags">Post Tags</label>
						<input type="text" class="form-control" name="post_tags" value="<?php echo $post_tags ?>">
					</div>
					<div class="form-group">
						<label for="post_tags">Post Status</label>
						<select name="post_status">
							<option <?php echo ($post_status == "published") ? "selected = $post_status" : '' ?> value="published">Published</option>
							<option <?php echo ($post_status == "draft") ? "selected = $post_status" : '' ?> value="draft">Draft</option>
						</select>
					</div>
					<div class="form-group">
						<label for="post_content">Post Content</label>
						<textarea class="form-control " name="post_content" id="body" cols="30" rows="10"><?php echo $post_content ?></textarea>
					</div>
					<button type="submit" class="btn btn-primary" name="edit_post">edit Post</button>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /#wrapper -->
<?php include "includes/footer.php" ?>
<?php else: ?>
<?php header('Location: posts.php'); ?>
<?php endif; ?>
