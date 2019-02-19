<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="../index.php">New CMS admin</a>
	</div>
	<!-- Top Menu Items -->
	<ul class="nav navbar-right top-nav">
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
			<ul class="dropdown-menu message-dropdown">
				<li class="message-preview">
					<a href="#">
						<div class="media">
							<span class="pull-left">
								<img class="media-object" src="http://placehold.it/50x50" alt="">
							</span>
							<div class="media-body">
								<h5 class="media-heading">
									<strong>John Smith</strong>
								</h5>
								<p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
								<p>Lorem ipsum dolor sit amet, consectetur...</p>
							</div>
						</div>
					</a>
				</li>
				<li class="message-preview">
					<a href="#">
						<div class="media">
							<span class="pull-left">
								<img class="media-object" src="http://placehold.it/50x50" alt="">
							</span>
							<div class="media-body">
								<h5 class="media-heading">
									<strong>John Smith</strong>
								</h5>
								<p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
								<p>Lorem ipsum dolor sit amet, consectetur...</p>
							</div>
						</div>
					</a>
				</li>
				<li class="message-preview">
					<a href="#">
						<div class="media">
							<span class="pull-left">
								<img class="media-object" src="http://placehold.it/50x50" alt="">
							</span>
							<div class="media-body">
								<h5 class="media-heading">
									<strong>John Smith</strong>
								</h5>
								<p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
								<p>Lorem ipsum dolor sit amet, consectetur...</p>
							</div>
						</div>
					</a>
				</li>
				<li class="message-footer">
					<a href="#">Read All New Messages</a>
				</li>
			</ul>
		</li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
			<ul class="dropdown-menu alert-dropdown">
				<li>
					<a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
				</li>
				<li>
					<a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
				</li>
				<li>
					<a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
				</li>
				<li>
					<a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
				</li>
				<li>
					<a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
				</li>
				<li>
					<a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
				</li>
				<li class="divider"></li>
				<li>
					<a href="#">View All</a>
				</li>
			</ul>
		</li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $user['user_firstname']." ".$user['user_lastname']; ?><b class="caret"></b></a>
			<ul class="dropdown-menu">
				<li>
					<a href="user.php?u_id=<?php echo $user['user_id'] ?>"><i class="fa fa-fw fa-user"></i> Profile</a>
				</li>
				<li>
					<a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
				</li>
				<li>
					<a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
				</li>
				<li class="divider"></li>
				<li>
					<a href="<?php echo getRootURI(); ?>/admin/includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
				</li>
			</ul>
		</li>
	</ul>
	<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav side-nav">
			<li>
				<a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
			</li>
			<li>
				<a href="javascript:;" data-toggle="collapse" data-target="#posts"><i class="fa fa-fw fa-arrows-v"></i> Posts <i class="fa fa-fw fa-caret-down"></i></a>
				<ul id="posts" class="collapse">
					<li>
						<a href="posts.php">View All Posts</a>
					</li>
					<li>
						<a href="add_post.php">Add New Post</a>
					</li>
				</ul>
			</li>
			<?php if(is_admin()): ?>
				<li>
				<a href="javascript:;" data-toggle="collapse" data-target="#users"><i class="fa fa-fw fa-arrows-v"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
				<ul id="users" class="collapse">
					<li>
						<a href="users.php">View All users</a>
					</li>
					<li>
						<a href="add_user.php">Add New iuser</a>
					</li>
				</ul>
			</li>
			<?php endif; ?>
			<li class="active">
				<a href="categories.php"><i class="fa fa-fw fa-file"></i>Catagories</a>
			</li>
			<li>
				<a href="comments.php"><i class="fa fa-fw fa-file"></i>Comments</a>
			</li>
		</ul>
	</div>
	<!-- /.navbar-collapse -->
</nav>