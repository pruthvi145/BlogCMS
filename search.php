<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?>
<?php 
	if(isset($_GET['search'])):
		$search = $_GET['search'];
		$rows = search_post($search);
?>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h1 class="page-header">
				Search result<small> - <?php echo $search ?></small>
			</h1>
					
		<?php if(!empty($rows)): ?>
					<?php foreach($rows as $row): ?>
			<?php 
				
				$post_title = $row['post_title'];
				$post_author = $row['post_author'];
				$post_date = $row['post_date'];
				$post_image = $row['post_image'];
				$post_content = $row['post_content']; 
			
			?>

			<h2><a href="#"><?php echo $post_title ?></a></h2>
			<p class="lead">by <a href="index.php"><?php echo $post_author ?></a></p>
			<p><span class="glyphicon glyphicon-time"></span> Posted on<?php echo $post_date ?></p>
			<hr>
			
			<img class="img-responsive" src="imgs/<?php echo $post_image ?>" alt="">
			<hr>
			<p><?php echo $post_content ?></p>
			<a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

			<hr>

			<?php endforeach; ?>
		<?php else: ?>
			<h2>No Post found!</h2>
		<?php endif; ?>


		</div>
		<?php include "includes/sidebar.php" ?>
	</div>
</div>
<?php else: ?>
<?php header('Location: index.php'); ?>
<?php endif; ?>
<?php include "includes/footer.php" ?>
