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
					
			<?php if(empty($rows)): ?>
				<h3 class="alert alert-info" role="alert">No Post found!</h3>
			<?php endif; ?>
			<?php foreach($rows as $row): ?>
			<?php 
				
				$post_id = $row['post_id'];
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
			
			<a href="post.php?p_id=<?php echo $post_id ?>"><img class="img-responsive" src="imgs/<?php echo $post_image ?>" alt=""></a>
			<hr>
			<p><?php echo substr($post_content, 0, 100) ?>...</p>
			<hr>
			<?php endforeach; ?>
		</div>
		<?php include "includes/sidebar.php" ?>
	</div>
</div>
<?php else: ?>
<?php header('Location: index.php'); ?>
<?php endif; ?>
<?php include "includes/footer.php" ?>
