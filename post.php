<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?>

<?php if(isset($_GET['p_id'])): ?>
<?php 

	$post_id = $_GET['p_id'];

	if(isset($_POST['add_comment'])){
		
		$comment_fields = $_POST;
		$comment_fields['comment_status'] = 'unapproved'; 
		$comment_fields['comment_post_id'] = $post_id; 
		add_comment($comment_fields);
	}


?>
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
<div class="container">
	<div class="row">
		<div class="col-lg-8">
			<h1>
			<?php echo $post_title ?>
			<?php if(is_loggedin() && is_admin()): ?>
				<a href="admin/post.php?p_id=<?php echo $post_id ?>" class="btn btn-primary">Edit post</a>
			<?php endif; ?>
			</h1>
			<p class="lead"> by <a href="#"><?php echo $post_author ?></a></p>
			<hr>
			<p><span class="glyphicon glyphicon-time"></span> Posted on<?php echo $post_date ?> at 9:00 PM</p>
			<hr>
			<img class="img-responsive" src="imgs/<?php echo $post_image ?>" alt="">
			<hr>

			<!-- Post Content -->
			<p>
				<?php echo $post_content ?>
			</p>

			<hr>

			<!-- Blog Comments -->

			<!-- Comments Form -->
			<div class="well">
				<h4>Leave a Comment:</h4>
				<form method="post">
					<div class="form-group">
						<label for="comment_author">Author</label>
						<input type="text" name="comment_author" class="form-control">
					</div>
					<div class="form-group">
						<label for="comment_email">Email</label>
						<input type="text" name="comment_email" class="form-control">
					</div>
					<div class="form-group">
					<label for="comment_content">Comment</label>
						<textarea class="form-control" name="comment_content" rows="3"></textarea>
					</div>
					<button type="submit" class="btn btn-primary" name="add_comment">Submit</button>
				</form>
			</div>

			<hr>

			<!-- Posted Comments -->
			<?php $comment_rows = fetch_post_approved_comments($post_id); ?>
			<?php if(empty($comment_rows)): ?>
			<div class="alert alert-info" role="alert">No comments yet!</div>
			<?php endif; ?>
			<?php foreach($comment_rows as $comment_row): ?>
			<?php 
				$author = $comment_row['comment_author'];
				$date = $comment_row['comment_date'];
				$content = $comment_row['comment_content'];
			?>
			<div class="media">
				<a class="pull-left" href="#">
					<img class="media-object" src="http://placehold.it/64x64" alt="">
				</a>
				<div class="media-body">
					<h4 class="media-heading"><?php echo $author; ?>
						<small><?php echo $date; ?></small>
					</h4>
					<?php echo $content; ?>
				</div>
			</div>

			
			<?php endforeach; ?>

		</div>
		<?php include "includes/sidebar.php" ?>
	</div>

</div>
<!-- /.row -->

<hr>
<?php include "includes/footer.php" ?>
<?php else: ?>
<?php header('Location: index.php'); ?>
<?php endif; ?>
