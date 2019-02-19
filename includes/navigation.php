<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="<?php echo ROOT ?>"><?php echo SITE_TITLE ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
   		<?php $rows = fetch_all_categories(); ?>
		<?php foreach($rows as $row): ?>
		<?php 
			$cat_id = $row['cat_id'];
			$cat_title = $row['cat_title'];
		?>
		<li class="nav-item"><a class="nav-link" href="category.php?cat_id=<?php echo $cat_id ?>">
			<?php echo $cat_title ?></a></li>
		<?php  endforeach; ?>
		<?php if(isset($_SESSION['user_id'])): ?>
			<li class="nav-item"><a class="nav-link" href='admin'>Admin</a></li>
		<?php endif; ?>
    </ul>
  </div>
</nav>
		