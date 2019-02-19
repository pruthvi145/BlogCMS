<?php 

	$total_posts = count_rows('posts','post_author_id', current_user_id());
	$published_posts = count_rows('posts','post_status', 'published');
	$draft_posts = count_rows('posts','post_status', 'draft');
	$total_comments = count_rows('comments');
	$pending_comments = count_rows('comments','comment_status', 'unapproved');
	$total_users = count_rows('users');
	$subscribers = count_rows('users', 'user_role', 'subscriber');
	$total_categories = count_rows('categories');

?>
<div id="wrapper">
	<!-- Navigation -->
	<?php include "includes/navigation.php" ?>
	<div id="page-wrapper">
		<div class="container-fluid">
			<!-- Page Heading -->
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Welcome to Admin <small>
							<?php echo $user['username']; ?></small></h1>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-3">
									<i class="fa fa-file-text fa-5x"></i>
								</div>
								<div class="col-xs-9 text-right">
									<div class='huge'>
										<?php echo $total_posts ?>
									</div>
									<div>Posts</div>
								</div>
							</div>
						</div>
						<a href="posts.php">
							<div class="panel-footer">
								<span class="pull-left">View Details</span>
								<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="panel panel-green">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-3">
									<i class="fa fa-comments fa-5x"></i>
								</div>
								<div class="col-xs-9 text-right">
									<div class='huge'>
										<?php echo $total_comments ?>
									</div>
									<div>Comments</div>
								</div>
							</div>
						</div>
						<a href="comments.php">
							<div class="panel-footer">
								<span class="pull-left">View Details</span>
								<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="panel panel-red">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-3">
									<i class="fa fa-list fa-5x"></i>
								</div>
								<div class="col-xs-9 text-right">
									<div class='huge'>
										<?php echo $total_categories ?>
									</div>
									<div>Categories</div>
								</div>
							</div>
						</div>
						<a href="categories.php">
							<div class="panel-footer">
								<span class="pull-left">View Details</span>
								<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
			</div>
			<!-- /.row -->
			<div class="row">
				<script>
					google.charts.load('current', {
						packages: ['corechart', 'bar']
					});
					google.charts.setOnLoadCallback(drawBasic);

					function drawBasic() {

						var data = google.visualization.arrayToDataTable([
							['Data', 'Counts'],
							['Posts', <?php echo $total_posts ?>],
							['Published Posts', <?php echo $published_posts ?>],
							['Draft Posts', <?php echo $draft_posts ?>],
							['Comments', <?php echo $total_comments ?>],
							['Pending Comments', <?php echo $pending_comments ?>],
							['Users', <?php echo $total_users ?>],
							['Subscribers', <?php echo $subscribers ?>],
							['Categories', <?php echo $total_categories ?>]
						]);

						var options = {
							title: '',
						};

						var chart = new google.visualization.ColumnChart(
							document.getElementById('graph'));

						chart.draw(data, options);
					}

				</script>
				<div id="graph" style="height: 400px"></div>
			</div>
		</div>
	</div>
</div>