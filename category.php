<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?>

<?php if (isset($_GET['cat_id'])) : ?>
<?php 

$cat_id = $_GET['cat_id'];
$row = fetch_category($cat_id);
$cat_title = $row['cat_title'];

?>

<!-- Page Content -->
<div class="container">
	<div class="row">
		<!-- Blog Entries Column -->
		<div class="col-md-8">
			<h1 class="page-header">Category <small>-
					<?php echo $cat_title; ?></small></h1>
			<hr>
			<?php $rows = fetch_category_posts($cat_id); ?>
			<?php if (empty($rows)) : ?>
			<h3 class="alert alert-info" role="alert">No Post found!</h3>
			<?php endif; ?>
			<?php foreach ($rows as $row) : ?>
			<?php 
				$post_id = $row['post_id'];
				$post_cat_id = $row['post_cat_id'];
				$post_author_id = $row['post_author_id'];
				$post_author_row = fetch_user($post_author_id);
				$post_author = $post_author_row['user_firstname'] . " " . $post_author_row['user_lastname'];
				$post_title = $row['post_title'];

				$post_image = $row['post_image'];
				$post_tags = $row['post_tags'];
				$post_comment_count = $row['post_comment_count'];
				$post_date = date_to_string($row['post_date']);
				$post_content = $row['post_content'];
		?>
			<!-- First Blog Post -->
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

		<!-- Blog Sidebar Widgets Column -->
		<?php include "includes/sidebar.php" ?>

	</div>
	<!-- /.row -->

	<hr>

	<!-- Footer -->
	<?php include "includes/footer.php" ?>
	<?php else : ?>
	<?php redirect('Location: index.php'); ?>
	<?php endif; ?>