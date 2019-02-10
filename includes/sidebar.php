<div class="col-md-4">
	
	<!-- Blog Search Well -->
	<div class="well">
	
		<h4>Blog Search</h4>
		<form action="search.php" method="get">
			<div class="input-group">
				<input type="text" name="search" class="form-control">
				<span class="input-group-btn">
					<button class="btn btn-default" type="submit">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</span>
			</div>
		</form>
	</div> 
		<!-- Login -->
	<div class="well">
	
		<h4>Login</h4>
		<form action="<?php echo getRootURI(); ?>/includes/login.php" method="post">
			<div class="form-group">
				<input type="text" name="username" class="form-control" placeholder="Username">
			</div>
			<div class="input-group">
				<input type="password" name="password" class="form-control" placeholder="Password">
				<span class="input-group-btn">
					<button class="btn btn-primary" type="submit" name="login">Submit</button>
				</span>
			</div>
			
		</form>

		<!-- /.input-group -->
	</div> 

	<!-- Blog Categories Well -->
	<div class="well">
		<h4>Blog Categories</h4>
		<div class="row">
			<div class="col-lg-12">
				<ul class="list-unstyled">
				<?php $rows = fetch_all_categories(); ?>
				<?php foreach($rows as $row): ?>
				<?php 
					
					$cat_id = $row['cat_id'];
					$cat_title = $row['cat_title'];
			
				?>
					<li><a href="category.php?cat_id=<?php echo $cat_id ?>"><?php echo $cat_title ?></a></li>
				<?php  endforeach; ?>
				</ul>
			</div>
			<!-- /.col-lg-6 -->
		</div>
		<!-- /.row -->
	</div>

	<!-- Side Widget Well -->
	<div class="well">
		<h4>Side Widget Well</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
	</div>

</div>
