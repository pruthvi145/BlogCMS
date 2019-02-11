<?php include "includes/header.php" ?>

<?php 
	
	if(isset($_POST['submit_action'])){
		
		$action = $_POST['action'];
		if(!isset($_POST['comment_ids'])){
			$notify = "No post is selected!";
			$notifyClass = "alert-danger";
		}else{
			$comment_ids = $_POST['comment_ids'];
			foreach($comment_ids as $comment_id){

			if($action === 'delete'){
				delete_comment($comment_id);
			}elseif($action === 'approved' || $action === 'unapproved'){
				edit_comment_field($comment_id, 'comment_status', $action);
				}
			}
		}		
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
				<?php if(!empty($notify)): ?>
				<div class="alert <?php echo $notifyClass?>">
					<?php echo $notify?>
				</div>
				<?php endif; ?>
				<form action="" method="post">
					<table class="table table-hover table-bordered">
						<div class="col-xs-4" style="margin-bottom: 20px;">
							<select class="form-control" name="action" id="">
								<option value="">Select Options</option>
								<option value="approved">Approve</option>
								<option value="unapproved">unapprove</option>
								<option value="delete">Delete</option>
							</select>
						</div>
						<div class="col-xs-4">
							<input type="submit" name="submit_action" class="btn btn-success" value="Apply">
							<a href="add_post.php" class="btn btn-primary">Add new</a>
						</div>
						<thead>
							<tr>
								<th scope="col"><input type="checkbox" id="checkAll"></th>

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
								<td><input type="checkbox" class="checkBox" name='comment_ids[]' value="<?php echo $comment_id ?>"></td>
								<td scope="col"><?php echo $comment_id ?></td>
								<td scope="col"><?php echo $comment_author ?></td>
								<td scope="col"><?php echo substr($comment_content,0,50) ?></td>
								<td scope="col"><?php echo $comment_email ?></td>
								<td scope="col"><a href="<?php echo getRootURI() ?>/post.php?p_id=<?php echo $comment_post_id ?>"><?php echo $comment_post_title ?></a></td>
								<td scope="col"><?php echo $comment_status ?></td>
								<td scope="col"><?php echo $comment_date ?></td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /#wrapper -->
<?php include "includes/footer.php" ?>
