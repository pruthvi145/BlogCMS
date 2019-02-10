
<?php include "includes/header.php" ?>

	<?php 
		if(isset($_GET['delete'])){
			$comment_id = $_GET['delete'];
			delete_comment($comment_id);
			
		}elseif(isset($_GET['status']) && isset($_GET['c_id'])){
			$comment_id = $_GET['c_id'];
			$status = $_GET['status'];
			
			approve_comment($comment_id,$status);
		}
	?>

<div id="wrapper">
<?php include "includes/navigation.php" ?>
	<div id="page-wrapper">
		<div class="container-fluid">
			<div class="row">
				<h1 class="page-header">
					comments
					<small>no subheading asshole!</small>
				</h1>
				<table class="table table-hover table-bordered">
					<thead>
						<tr>
							<th>#</th>
							<th>Author</th>
							<th>Comment</th>
							<th>Email</th>
							<th>In Response To</th>
							<th>Status</th>
							<th>Date</th>

						</tr>
					</thead>
					<tbody>
						<?php $rows = fetch_all_comments(); ?>
						<?php foreach($rows as $row): ?>
						<?php 
						
						$comment_id = $row['comment_id'];
						$comment_post_id = $row['comment_post_id'];
						$comment_post_row = fetch_post($comment_post_id);
						$comment_post_title = $comment_post_row['post_title'];
						$comment_author = $row['comment_author'];
						$comment_email = $row['comment_email'];		
						$comment_content = $row['comment_content'];
						$comment_status = $row['comment_status'];
						$comment_date = $row['comment_date'];
		
					
					?>
						<tr>
							<td scope="col">
								<?php echo $comment_id ?>
							</td>
							<td scope="col">
								<?php echo $comment_author ?>
							</td>
							<td scope="col">
								<?php echo substr($comment_content,0,50) ?>
							</td>
							<td scope="col">
								<?php echo $comment_email ?>
							</td>
							<td scope="col"><a href="<?php echo getRootURI() ?>/post.php?p_id=<?php echo $comment_post_id ?>">
									<?php echo $comment_post_title ?></a></td>
							<td scope="col">
								<?php echo $comment_status ?>
							</td>
							<td scope="col">
								<?php echo $comment_date ?>
							</td>
							<td scope="col"><a href="?status=approve&c_id=<?php echo $comment_id ?>">approve</a></td>
							<td scope="col"><a href="?status=unapprove&c_id=<?php echo $comment_id ?>">unapprove</a></td>
							<td scope="col"><a href="?delete=<?php echo $comment_id ?>">Delete</a></td>
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
