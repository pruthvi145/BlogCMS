<?php include "includes/db.php" ?>
<?php include "includes/header.php" ?>
<?php include "admin/includes/function.php" ?>
<?php include "includes/navigation.php" ?>

<!-- Page Content -->
<div class="container">

	<div class="row">
		
		<!-- Blog Entries Column -->
		<div class="col-md-8">
			<h1 class="page-header">
				Page title <small>Secondary Text</small>
			</h1>
			<?php $rows = fetch_all_posts(); ?>				
			<?php foreach($rows as $row): ?>
			<?php 
						
				$post_id = $row['post_id'];
				$post_author = $row['post_author'];
				$post_title = $row['post_title'];
						
				$post_image = $row['post_image'];
				$post_tags = $row['post_tags'];
				$post_comment_conut = $row['post_comment_conut'];
				$post_date = $row['post_date'];
				$post_content = $row['post_content'];
					
					?>
				<!-- First Blog Post -->
				<h2>
					<a href="#"><?php echo $post_title ?></a>
				</h2>
				<p class="lead">
					by <a href="index.php"><?php echo $post_author ?></a>
				</p>
				<p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date ?></p>
				<hr>
				<img height="300"  src="imgs/<?php echo $post_image ?>" alt="">
				<hr>
				<p style="overflow: hidden; height:40px"><?php echo $post_content ?></p>
				
				<a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

				<hr>
			<?php endforeach; ?>
		</div>

		<!-- Blog Sidebar Widgets Column -->
		<?php include "includes/sidebar.php" ?>

	</div>
	<!-- /.row -->

	<hr>

	<!-- Footer -->
	<?php include "includes/footer.php" ?>
