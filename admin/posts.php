<?php include "includes/header.php" ?>

<?php 
	
	if(isset($_POST['submit_action'])){
		
		$action = $_POST['action'];
		if(!isset($_POST['post_ids'])){
			$notify = "No post is selected!";
			$notifyClass = "alert-danger";
		}else{
			$post_ids = $_POST['post_ids'];
			foreach($post_ids as $post_id){
				
			if($action === 'clone'){
				clone_post($post_id);
			}elseif($action === 'delete'){
				delete_post($post_id);
			}elseif($action === 'published' || $action === 'draft'){
				edit_post_field($post_id, 'post_status', $action);
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
				<h1 class="page-header">Posts<small> no subheading asshole!</small></h1>
				<?php if(!empty($notify)): ?>
				<div class="alert <?php echo $notifyClass?>"><?php echo $notify?></div>
				<?php endif; ?>
				<form action="" method="post">
					<table class="table table-hover table-bordered">
						<div class="col-xs-4" style="margin-bottom: 20px;">
							<select class="form-control" name="action" id="">
								<option value="">Select Options</option>
								<option value="published">Publish</option>
								<option value="draft">Draft</option>
								<option value="delete">Delete</option>
								<option value="clone">clone</option>
							</select>
						</div>
						<div class="col-xs-4">
							<input type="submit" name="submit_action" class="btn btn-success" value="Apply">
							<a href="add_post.php" class="btn btn-primary">Add new</a>
						</div>

						<thead>
							<tr>
								<th scope="col"><input type="checkbox" id="checkAll"></th>
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
						
						$post_comment_count = $row['post_comment_count'];
						
						$post_date = $row['post_date'];
					
						?>
							<tr>
								<td><input type="checkbox" class="checkBox" name='post_ids[]' value="<?php echo $post_id ?>"></td>
								<td scope="col">
									<?php echo $post_id ?>
								</td>
								<td scope="col">
									<?php echo $post_author ?>
								</td>
								<td scope="col"><a href="<?php echo getRootURI() ?>/post.php?p_id=<?php echo $post_id ?>">
										<?php echo $post_title ?></a></td>
								<td scope="col">
									<?php echo $post_cat_title ?>
								</td>
								<td scope="col">
									<?php echo $post_status ?>
								</td>
								<td scope="col"><img src="../imgs/<?php echo $post_image ?>" alt="" width="100px"></td>
								<td scope="col">
									<?php echo $post_tags ?>
								</td>
								<td scope="col">
									<?php echo $post_comment_count ?>
								</td>
								<td scope="col">
									<?php echo $post_date ?>
								</td>
								<td scope="col"><a href="post.php?p_id=<?php echo $post_id ?>">Edit</a></td>
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
