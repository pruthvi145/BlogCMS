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
				Search result<small> -
					<?php echo $search ?></small>
			</h1>
		<hr>
			<?php if(empty($rows)): ?>
			<h3 class="alert alert-info" role="alert">No Post found!</h3>
			<?php endif; ?>
			<?php foreach($rows as $row): ?>
			<?php 
				
				$post_id = $row['post_id'];
				$post_title = $row['post_title'];
				$post_author_id = $row['post_author_id'];
				$post_author_row = fetch_user($post_author_id);
				$post_author = $post_author_row['user_firstname']." ".$post_author_row['user_lastname'];
				$post_date = date_to_string($row['post_date']);
				$post_image = $row['post_image'];
				$post_content = $row['post_content']; 
			
			?>

<h2 class="display-5"><a class="text-info" href="post.php?p_id=<?php echo $post_id ?>"><?php echo $post_title ?></a></h2>
			<div class="post-info clearfix">
			<p class="float-left align-middle"><strong>By </strong><a href="author_posts.php?u_id=<?php echo $post_author_id ?>">
					<?php echo $post_author ?></a></p>
			<p class="align-middle float-right"><i class="far fa-clock"></i> <strong>Posted on</strong> 
				<?php echo $post_date ?>
			</p>
			</div>
			<a href="post.php?p_id=<?php echo $post_id ?>"><img class="img-fluid" src="imgs/<?php echo $post_image ?>" alt="postimage"></a>
			<!--p><?php echo substr($post_content, 0, 100) ?></p-->
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