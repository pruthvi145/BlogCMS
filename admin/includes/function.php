<?php 

#Categories - CRUD - start

		function fetch_all_categories(){
		global $connection;
		$query = "SELECT * FROM categories";
		$res = mysqli_query($connection, $query);
		if(!$res){
				die("ERROR: can't fetch all categories! <br>".$query."<br>".mysqli_error($connection));
			}
		$rows = array();
		while($row = mysqli_fetch_assoc($res)){
			$rows[] = $row;
		} 
		return $rows;
	}

	function fetch_category($cat_id){
		global $connection;
		$query = "SELECT * FROM categories ";
		$query .= "WHERE cat_id = $cat_id";
		$res = mysqli_query($connection,$query);
		
		if(!$res){
			die("ERROR: can't fetch category! <br>".$query."<br>".mysqli_error($connection));
		}
		
		return mysqli_fetch_assoc($res);
	}

	function add_category($cat_title){
		global $connection;
		$query = "INSERT INTO categories (cat_title) ";
		$query .= "VALUES ('$cat_title')";
		$res = mysqli_query($connection,$query);
		
		if(!$res){
			die("ERROR: can't add category! <br>".$query."<br>".mysqli_error($connection));
		}else{
				header('Location: categories.php');
			}
	}

	function delete_category($cat_id){
		global $connection;
		$query = "DELETE FROM categories ";
		$query .= "WHERE cat_id = $cat_id";
		$res = mysqli_query($connection,$query);
		
		if(!$res){
			die("ERROR: can't delete category! <br>".$query."<br>".mysqli_error($connection));
		}else{
				header('Location: categories.php');
			}
	}

	function edit_category($cat_id, $new_cat_title){
			global $connection;
			$query = "UPDATE categories SET ";
			$query .= "cat_title = '$new_cat_title'";
			$query .= "WHERE cat_id = $cat_id";
			$res = mysqli_query($connection,$query);

			if(!$res){
				die("ERROR: can't update category! <br>".$query."<br>".mysqli_error($connection));
			}else{
				header('Location: categories.php');
			}
	}

	function clone_category($cat_id){
		global $connection;
		
		$row = fetch_category($cat_id);
		$cat_title = $row['cat_title'];	
		add_category($cat_title);
	}


#Categories - CRUD - end
?>
<?php 

#Posts - CRUD - start

	function fetch_all_posts(){
		global $connection;
		$query = "SELECT * FROM posts";
		$res = mysqli_query($connection, $query);

		if(!$res){
				die("ERROR: can't fetch all Posts! <br>".$query."<br>".mysqli_error($connection));
		}
		$rows = array();
		while($row = mysqli_fetch_assoc($res)){
			$rows[] = $row;
		} 
		return $rows;
	}

	function fetch_post($post_id){
		global $connection;
		
		$query = "SELECT * FROM posts ";
		$query .= "WHERE post_id = $post_id";
		$res = mysqli_query($connection,$query);
		
		if(!$res){
			die("ERROR: can't fetch category! <br>".$query."<br>".mysqli_error($connection));
		}
		
		return mysqli_fetch_assoc($res);
	}

	function add_post($post_fields, $post_files = []){
		global $connection;
		
		$post_title = $post_fields['post_title'];
		$post_author = $post_fields['post_author'];			
		$post_cat_id = $post_fields['post_cat_id'];		
		$post_status = $post_fields['post_status'];
		
		$post_image = $post_files['post_image']['name'];
		$post_image_temp = $post_files['post_image']['tmp_name'];
		//move_uploaded_file($post_image_temp, "/imgs/$post_image");
		
		$post_tags = $post_fields['post_tags'];
		$post_comment_conut = 4;
		//$post_date = date('d-m-y');
		$post_content = $post_fields['post_content'];
		
		$query = "INSERT INTO posts (post_title, post_author, post_cat_id, post_status, post_image, post_tags,post_comment_conut,post_date,post_content) ";
		$query .= "VALUES ('$post_title', '$post_author', $post_cat_id, '$post_status', '$post_image', '$post_tags', '$post_comment_conut', now(), '$post_content')";
		$res = mysqli_query($connection,$query);
		
		if(!$res){
			die("ERROR: can't add category! <br>".$query."<br>".mysqli_error($connection));
		}else{
				//header('Location: categories.php');
			}
	}

	function delete_post($post_id){
		global $connection;
		$query = "DELETE FROM posts ";
		$query .= "WHERE post_id = $post_id";
		$res = mysqli_query($connection,$query);
		
		if(!$res){
			die("ERROR: can't delete category! <br>".$query."<br>".mysqli_error($connection));
		}else{
				//header('Location: posts.php');
			}
	}

	function edit_post($cat_id, $new_cat_title){
			global $connection;
			$query = "UPDATE categories SET ";
			$query .= "cat_title = '$new_cat_title'";
			$query .= "WHERE cat_id = $cat_id";
			$res = mysqli_query($connection,$query);

			if(!$res){
				die("ERROR: can't update category! <br>".$query."<br>".mysqli_error($connection));
			}else{
				header('Location: categories.php');
			}
	}

	function clone_post($post_id){
		global $connection;
		
		$row = fetch_category($post_id);
		$cat_title = $row['cat_title'];	
		add_post($row);
	}


#Categories - CRUD - end
?>