<?php include "includes/header.php" ?>

<div id="wrapper">
	<!-- Navigation -->
	<?php include "includes/navigation.php" ?>
	<?php 
	
		if(isset($_GET['delete'])){
			$post_id = $_GET['delete'];
			delete_post($post_id);
			
		}elseif(isset($_GET['clone'])){
			$post_id = $_GET['clone'];
			clone_post($post_id);
		}
	
	?>

	<div id="page-wrapper">
		<div class="container-fluid">
			<div class="row">
				<h1 class="page-header">
					Posts
					<small>no subheading asshole!</small>
				</h1>
				<table class="table table-hover table-bordered">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Author</th>
							<th scope="col">Title</th>
							<th scope="col">Category</th>
							<th scope="col">Satuts</th>
							<th scope="col">Image</th>
							<th scope="col">Tags</th>
							<th scope="col">Comments</th>
							<th scope="col">Date</th>

						</tr>
					</thead>
					<tbody>
					<?php $rows = fetch_all_posts(); ?>				
					<?php foreach($rows as $row): ?>
					<?php 
						
						$post_id = $row['post_id'];
						$post_author = $row['post_author'];
						$post_title = $row['post_title'];
						
						$post_cat_id = $row['post_cat_id'];
						$post_cat_row = fetch_category($post_cat_id);
						$post_cat_title = $post_cat_row['cat_title'];
						
						$post_status = $row['post_status'];
						$post_image = $row['post_image'];
						$post_tags = $row['post_tags'];
						$post_comment_conut = $row['post_comment_conut'];
						$post_date = $row['post_date'];
					
					?>
						<tr>
							<td scope="col"><?php echo $post_id ?></td>
							<td scope="col"><?php echo $post_author ?></td>
							<td scope="col"><?php echo $post_title ?></td>
							<td scope="col"><?php echo $post_cat_title ?></td>
							<td scope="col"><?php echo $post_status ?></td>
							<td scope="col"><img src="../imgs/<?php echo $post_image ?>" alt="" width="100px"></td>
							<td scope="col"><?php echo $post_tags ?></td>
							<td scope="col"><?php echo $post_comment_conut ?></td>
							<td scope="col"><?php echo $post_date ?></td>
							<td scope="col"><a href="?delete=<?php echo $post_id ?>">Delete</a></td>
							<td scope="col"><a href="post.php?p_id=<?php echo $post_id ?>">Edit</a></td>
							<td scope="col"><a href="?clone=<?php echo $post_id ?>">Clone</a></td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- /#wrapper -->
<?php include "includes/footer.php" ?>
