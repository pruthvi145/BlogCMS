<div class="col-md-4">
	<!-- Blog Search Well -->

	<div class="card">
		<div class="card-header">
			<h5 class="text-center">search posts</h5>
		</div>
		<div class="card-body">
			<form action="search.php" method="get">
				<div class="input-group">
					<input type="text" name="search" class="form-control" placeholder="search...">
					<span class="input-group-btn">
						<button class="btn btn-dark" type="submit">
							<i class="fas fa-search"></i>
						</button>
					</span>
				</div>
			</form>
		</div>
	</div>
	<!-- Login -->
	<div class="card">
		<div class="card-header">
			<h5 class="text-center">Login</h5>
		</div>
		<div class="card-body">
			<form action="<?php echo ROOT; ?>/includes/login.php" method="post">
				<div class="form-group">
					<input type="text" name="username" class="form-control" placeholder="Username">
				</div>
				<div class="input-group">
					<input type="password" name="password" class="form-control" placeholder="Password">
					<span class="input-group-btn">
						<button class="btn btn-dark" type="submit" name="login">Submit</button>
					</span>
				</div>
			</form>
		</div>
	</div>
	<!--categories-->
	<div class="card">
		<div class="card-header">
			<h5 class="text-center">Post Categories</h5>
		</div>
		<div class="card-body">
			<ul class="list-inline">
				<?php $rows = fetch_all_categories(); ?>
				<?php foreach($rows as $row): ?>
				<?php 
							$cat_id = $row['cat_id'];
							$cat_title = $row['cat_title'];
						?>
				<li class="list-inline-item"><a href="category.php?cat_id=<?php echo $cat_id ?>">
						<?php echo $cat_title ?></a></li>
				<?php  endforeach; ?>
			</ul>
		</div>
	</div>
</div>