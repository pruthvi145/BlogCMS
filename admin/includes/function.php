<?php

	function getRootURI(){
		return "http://localhost/php-newcms";
	}

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
			die("ERROR: can't fetch post! <br>".$query."<br>".mysqli_error($connection));
		}
		
		return mysqli_fetch_assoc($res);
	}

	function add_post($post_fields){
		global $connection;
		
		$post_cat_id = $post_fields['post_cat_id'];		
		$post_title = $post_fields['post_title'];
		$post_author = $post_fields['post_author'];			
		$post_date = date('d-m-y');
		$post_image = $post_fields['post_image'];
		$post_content = $post_fields['post_content'];
		$post_tags = $post_fields['post_tags'];
		$post_comment_count = 0;
		$post_status = $post_fields['post_status'];
		
		$query = "INSERT INTO posts(post_cat_id, post_title, post_author, post_date, post_image, post_content, post_tags, post_comment_count, post_status) ";
		$query .= "VALUES($post_cat_id, '$post_title', '$post_author', $post_date, '$post_image', '$post_content', '$post_tags', $post_comment_count, '$post_status')";
		$res = mysqli_query($connection,$query);
		
		if(!$res){
			die("ERROR: can't add post! <br>".$query."<br>".mysqli_error($connection));
		}
	}

	function delete_post($post_id){
		global $connection;
		$query = "DELETE FROM posts ";
		$query .= "WHERE post_id = $post_id";
		$res = mysqli_query($connection,$query);
		
		if(!$res){
			die("ERROR: can't delete post! <br>".$query."<br>".mysqli_error($connection));
		}else{
				delete_post_comments($post_id);
				header('Location: posts.php');
			}
	}

	function edit_post($post_id, $post_fields){
			global $connection;
		
			$post_cat_id = $post_fields['post_cat_id'];		
			$post_title = $post_fields['post_title'];
			$post_author = $post_fields['post_author'];			
			$post_date = date('dd-mm-yyyy');
			$post_image = $post_fields['post_image'];
			$post_content = $post_fields['post_content'];
			$post_tags = $post_fields['post_tags'];
			$post_status = $post_fields['post_status'];
		
			$query = "UPDATE posts SET ";
			$query .= "post_cat_id = $post_cat_id, ";
			$query .= "post_title = '$post_title', ";
			$query .= "post_author = '$post_author', ";
			$query .= "post_date = $post_date, ";
			$query .= "post_content = '$post_content', ";
			$query .= "post_image = '$post_image', ";
			$query .= "post_tags = '$post_tags', ";
			$query .= "post_status = '$post_status' ";

			$query .= "WHERE post_id = $post_id";
			$res = mysqli_query($connection,$query);

			if(!$res){
				die("ERROR: can't update category! <br>".$query."<br>".mysqli_error($connection));
			}
	}

	function edit_post_field($post_id, $post_field, $post_field_value){
		global $connection;
		
		$query = "UPDATE posts SET ";
		$query .= "$post_field = $post_field_value ";
		$query .= "WHERE post_id = $post_id";
			$res = mysqli_query($connection,$query);

			if(!$res){
				die("ERROR: can't update post field! <br>".$query."<br>".mysqli_error($connection));
			}
	}

	function clone_post($post_id){
		global $connection;
		
		$row = fetch_post($post_id);
		add_post($row);
	}

	function fetch_category_posts($cat_id){
		global $connection;
		$query = "SELECT * FROM posts ";
		$query .= "WHERE post_cat_id = $cat_id";
		$res = mysqli_query($connection, $query);

		if(!$res){
				die("ERROR: can't fetch category Posts! <br>".$query."<br>".mysqli_error($connection));
		}
		$rows = array();
		while($row = mysqli_fetch_assoc($res)){
			$rows[] = $row;
		} 
		return $rows;
	}


#posts - CRUD - end


#comments - CRUD - start

	function fetch_all_comments(){
		global $connection;
		$query = "SELECT * FROM comments";
		$res = mysqli_query($connection, $query);

		if(!$res){
				die("ERROR: can't fetch all comments! <br>".$query."<br>".mysqli_error($connection));
		}
		$rows = array();
		while($row = mysqli_fetch_assoc($res)){
			$rows[] = $row;
		} 
		return $rows;
	}

	function fetch_comment($comment_id){
		global $connection;
		
		$query = "SELECT * FROM comments ";
		$query .= "WHERE comment_id = $comment_id";
		$res = mysqli_query($connection,$query);
		if(!$res){
			die("ERROR: can't fetch comment! <br>".$query."<br>".mysqli_error($connection));
		}
		return mysqli_fetch_assoc($res);
	}

	function add_comment($comment_fields){
		global $connection;
		
		$comment_post_id = $comment_fields['comment_post_id'];		
		$comment_author = $comment_fields['comment_author'];			
		$comment_email = $comment_fields['comment_email'];			
		$comment_content = $comment_fields['comment_content'];			
		$comment_status = $comment_fields['comment_status'];			
		$comment_date =  date('d-m-y');

		$post_comments_rows = fetch_post_all_comments($comment_post_id);
		$n = sizeof($post_comments_rows);
		
		$query = "INSERT INTO comments(comment_post_id,comment_author, comment_email, comment_content, comment_status, comment_date) ";
		$query .= "VALUES($comment_post_id,'$comment_author', '$comment_email', '$comment_content', '$comment_status', $comment_date)";
		$res = mysqli_query($connection,$query);
		
		if(!$res){
			die("ERROR: can't add comment! <br>".$query."<br>".mysqli_error($connection));
		}else{
			edit_post_field($comment_post_id, 'post_comment_count', $n+1);	
		}
	}

	function delete_comment($comment_id){
		global $connection;
		
		$row = fetch_comment($comment_id);
		$comment_post_id = $row['comment_post_id'];
		$post_comments_rows = fetch_post_all_comments($comment_post_id);
		$n = sizeof($post_comments_rows);

		$query = "DELETE FROM comments ";
		$query .= "WHERE comment_id = $comment_id";
		$res = mysqli_query($connection,$query);
		
		if(!$res){
			die("ERROR: can't delete comment! <br>".$query."<br>".mysqli_error($connection));
		}else{
			edit_post_field($comment_post_id, 'post_comment_count', $n-1);
			header('Location: comments.php');
		}
	}


	function approve_comment($comment_id, $status){
			global $connection;
				
			$comment_status = ($status =='approve') ? 'approved' : 'unapporved';			
		
			$query = "UPDATE comments SET ";
			$query .= "comment_status = '$comment_status' ";
			$query .= "WHERE comment_id = $comment_id";
		
			$res = mysqli_query($connection,$query);

			if(!$res){
				die("ERROR: can't update Comment! <br>".$query."<br>".mysqli_error($connection));
			}else{
				header('Location: comments.php');
			}
	}

	function fetch_post_approved_comments($post_id){
		global $connection;
		
		$query = "SELECT * FROM comments ";
		$query .= "WHERE comment_post_id = $post_id && comment_status = 'approved'";
		$res = mysqli_query($connection,$query);
		
		if(!$res){
			die("ERROR: can't fetch post comments! <br>".$query."<br>".mysqli_error($connection));
		}
		$rows = array();
		while($row = mysqli_fetch_assoc($res)){
			$rows[] = $row;
		} 
		return $rows;
	}
	function fetch_post_all_comments($post_id){
		global $connection;
		
		$query = "SELECT * FROM comments ";
		$query .= "WHERE comment_post_id = $post_id";
		$res = mysqli_query($connection,$query);
		
		if(!$res){
			die("ERROR: can't fetch post comments! <br>".$query."<br>".mysqli_error($connection));
		}
		$rows = array();
		while($row = mysqli_fetch_assoc($res)){
			$rows[] = $row;
		} 
		return $rows;
	}

function delete_post_comments($post_id){
		global $connection;
		
		$query = "DELETE FROM comments ";
		$query .= "WHERE comment_post_id = $post_id";
		$res = mysqli_query($connection,$query);
		
		if(!$res){
			die("ERROR: can't fetch post comments! <br>".$query."<br>".mysqli_error($connection));
		}
	}

#Categories - CRUD - end