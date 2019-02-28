<?php include "db.php" ?>
<?php ob_start(); ?>
<?php
	
	define('SITE_TITLE', 'php-newCMS');
	define('ROOT', 'http://localhost/php-newcms');
	
	function is_loggedin(){
		return (isset($_SESSION['user_id'])) ? true : false;
	}

	function redirect($link){
		header($link);
	}
	function is_admin($user_id = ''){
		$user_id = (empty($user_id)) ? $_SESSION['user_id'] : $user_id;
		$user = fetch_user($user_id);
		return ($user['user_role'] === "admin") ? true : false;
	} 
	function user_role($user_id){
		$user = fetch_user($user_id);
		return $user['user_role'];
	}
	function current_user_id(){
		return $_SESSION['user_id'];
	}

function current_user(){
	return fetch_user(current_user_id());
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
				redirect('Location: categories.php');
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
				redirect('Location: categories.php');
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
				redirect('Location: categories.php');
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
		$query = "SELECT * FROM posts ORDER BY post_date DESC";
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
	function fetch_published_posts(){
		global $connection;
		$query = "SELECT * FROM posts ";
		$query .= "WHERE post_status = 'published' ORDER BY post_date DESC";
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
		$post_author_id = $post_fields['post_author_id'];			
		$post_image = $post_fields['post_image'];
		//$post_date = date('M dS, Y \a\t g:i A');
		$post_date = date('Y-m-d H:i:s');
		$post_content = $post_fields['post_content'];
		$post_tags = $post_fields['post_tags'];
		$post_comment_count = 0;
		$post_status = $post_fields['post_status'];
		
		$query = "INSERT INTO posts(post_cat_id, post_title, post_author_id, post_date, post_image, post_content, post_tags, post_comment_count, post_status) ";
		$query .= "VALUES($post_cat_id, '$post_title', $post_author_id, '$post_date', '$post_image', '$post_content', '$post_tags', $post_comment_count, '$post_status')";
		$res = mysqli_query($connection,$query);
		
		if(!$res){
			die("ERROR: can't add post! <br>".$query."<br>".mysqli_error($connection));
		}
		else return true;
	}

	function delete_post($post_id){
		global $connection;
		$query = "DELETE FROM posts ";
		$query .= "WHERE post_id = $post_id";
		$res = mysqli_query($connection,$query);
		
		if(!$res){
			die("ERROR: can't delete post! <br>".$query."<br>".mysqli_error($connection));
		}
	}

	function edit_post($post_id, $post_fields){
			global $connection;
		
			$post_cat_id = $post_fields['post_cat_id'];		
			$post_title = $post_fields['post_title'];		
			//$post_date = date('M dS, Y \a\t g:i A');
			$post_date = date('Y-m-d H:i:s');
			$post_image = $post_fields['post_image'];
			$post_content = $post_fields['post_content'];
			$post_tags = $post_fields['post_tags'];
			$post_status = $post_fields['post_status'];
		
			$query = "UPDATE posts SET ";
			$query .= "post_cat_id = $post_cat_id, ";
			$query .= "post_title = '$post_title', ";
			$query .= "post_date = '$post_date', ";
			$query .= "post_content = '$post_content', ";
			$query .= "post_image = '$post_image', ";
			$query .= "post_tags = '$post_tags', ";
			$query .= "post_status = '$post_status' ";

			$query .= "WHERE post_id = $post_id";
			$res = mysqli_query($connection,$query);

			if(!$res){
				die("ERROR: can't update category! <br>".$query."<br>".mysqli_error($connection));
			}else return true;
	}

	function edit_post_field($post_id, $field, $value){
		global $connection;
		
		$query = "UPDATE posts SET ";
		$query .= "$field =  ";
		$query .= (is_string($value)) ? "'$value'" : "$value";
		$query .= " WHERE post_id = $post_id";
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
		$query .= "WHERE post_cat_id = $cat_id ORDER BY post_date DESC";
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

	function fetch_author_posts($u_id){
		global $connection;
		$query = "SELECT * FROM posts ";
		$query .= "WHERE post_author_id = $u_id ORDER BY post_date DESC";
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


function search_post($search){
	
	global $connection;
	$query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%' ";	
	$query .= "OR post_title LIKE '%$search%' ORDER BY post_date DESC";	
	$res = mysqli_query($connection, $query);
	
	if(!$res){
		die("Query failed".mysqli_error($connection));
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
		
		$n = count_rows('comments', 'comment_post_id', $comment_post_id);
		
		$query = "INSERT INTO comments(comment_post_id,comment_author, comment_email, comment_content, comment_status, comment_date) ";
		$query .= "VALUES($comment_post_id,'$comment_author', '$comment_email', '$comment_content', '$comment_status', $comment_date)";
		$res = mysqli_query($connection,$query);
		
		if(!$res){
			die("ERROR: can't add comment! <br>".$query."<br>".mysqli_error($connection));
		}else{
			edit_post_field($comment_post_id, 'post_comment_count', $n+1);	
			return true;
		}
	}

	function delete_comment($comment_id){
		global $connection;
		
		$row = fetch_comment($comment_id);
		$comment_post_id = $row['comment_post_id'];
		$n = count_rows('comments', 'comment_post_id', $comment_post_id);

		$query = "DELETE FROM comments ";
		$query .= "WHERE comment_id = $comment_id";
		$res = mysqli_query($connection,$query);
		
		if(!$res){
			die("ERROR: can't delete comment! <br>".$query."<br>".mysqli_error($connection));
		}else{
			edit_post_field($comment_post_id, 'post_comment_count', $n-1);
		}
	}


	function approve_comment($comment_id, $status){
			global $connection;
				
			$comment_status = ($status =='approve') ? 'approved' : 'unapproved';			
		
			$query = "UPDATE comments SET ";
			$query .= "comment_status = '$comment_status' ";
			$query .= "WHERE comment_id = $comment_id";
		
			$res = mysqli_query($connection,$query);

			if(!$res){
				die("ERROR: can't update Comment! <br>".$query."<br>".mysqli_error($connection));
			}
	}

	function edit_comment_field($comment_id, $field, $value){
		global $connection;
		$query = "UPDATE comments SET ";
		$query .= "$field = ";
		$query .= (is_string($value)) ? "'$value'" : "$value";
		$query .= " WHERE comment_id = $comment_id";
		
		$res = mysqli_query($connection,$query);

		if(!$res){
			die("ERROR: can't update Comment! <br>".$query."<br>".mysqli_error($connection));
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


#Comments - CRUD - end


#users - CRUD - start

	function fetch_all_users(){
		global $connection;
		$query = "SELECT * FROM users";
		$res = mysqli_query($connection, $query);

		if(!$res){
				die("ERROR: can't fetch all users! <br>".$query."<br>".mysqli_error($connection));
		}
		$rows = array();
		while($row = mysqli_fetch_assoc($res)){
			$rows[] = $row;
		} 
		return $rows;
	}

	function fetch_user($user_id){
		global $connection;
		
		$query = "SELECT * FROM users ";
		$query .= "WHERE user_id = $user_id";
		$res = mysqli_query($connection,$query);
		
		if(!$res){
			die("ERROR: can't fetch user! <br>".$query."<br>".mysqli_error($connection));
		}
		
		return mysqli_fetch_assoc($res);
	}

	function add_user($user_fields){
		global $connection;
		
		$username = $user_fields['username'];
		$user_password = md5($user_fields['user_password']);
		$user_firstname = (isset($user_fields['user_firstname'])) ? $user_fields['user_firstname'] : "";
		$user_lastname = (isset($user_fields['user_lastname'])) ? $user_fields['user_lastname'] : "";
		$user_email = $user_fields['user_email'];
		$user_image = (isset($user_fields['user_image'])) ? $user_fields['user_image'] : "";
		$user_role= $user_fields['user_role'];

		$query = "INSERT INTO users(username, user_password, user_firstname, user_lastname, user_email, user_image, user_role) ";
		$query .= "VALUES('$username', '$user_password', '$user_firstname', '$user_lastname', '$user_email', '$user_image', '$user_role')";
		$res = mysqli_query($connection,$query);
		
		if(!$res){
			die("ERROR: can't add user! <br>".$query."<br>".mysqli_error($connection));
		}else return true;
	}

	function delete_user($user_id){
		global $connection;
		$query = "DELETE FROM users ";
		$query .= "WHERE user_id = $user_id";
		$res = mysqli_query($connection,$query);
		
		if(!$res){
			die("ERROR: can't delete user! <br>".$query."<br>".mysqli_error($connection));
		}
	}

	function edit_user($user_id, $user_fields){
			global $connection;
		
			$username = $user_fields['username'];
			$user_password= md5($user_fields['user_password']);
			$user_firstname = $user_fields['user_firstname'];
			$user_lastname = $user_fields['user_lastname'];
			$user_email = $user_fields['user_email'];
			$user_image = $user_fields['user_image'];
			$user_role= $user_fields['user_role'];
			//$radSalt = $user_fields['randSalt'];
			$randSalt = "passenc";
		
			$query = "UPDATE users SET ";
			$query .= "username = '$username', ";
			$query .= "user_password = '$user_password', ";
			$query .= "user_firstname = '$user_firstname', ";
			$query .= "user_lastname = '$user_lastname', ";
			$query .= "user_email = '$user_email', ";
			$query .= "user_image = '$user_image', ";
			$query .= "user_role = '$user_role', ";
			$query .= "randSalt = '$randSalt' ";

			$query .= "WHERE user_id = $user_id";
			$res = mysqli_query($connection,$query);

			if(!$res){
				die("ERROR: can't update user! <br>".$query."<br>".mysqli_error($connection));
			}else return true;
	}
	function clone_user($user_id){
		global $connection;

		$row = fetch_user($user_id);
		add_user($row);
	}

function fetch_admin_users(){
	global $connection;
		$query = "SELECT * FROM users ";
		$query .= "WHERE user_role = 'admin'";
		$res = mysqli_query($connection, $query);

		if(!$res){
				die("ERROR: can't fetch admins! <br>".$query."<br>".mysqli_error($connection));
		}
		$rows = array();
		while($row = mysqli_fetch_assoc($res)){
			$rows[] = $row;
		} 
		return $rows;
}


#users - CRUD - end

function count_rows($tablename, $condition = '', $value = ''){
	global $connection;
	$query = "SELECT * FROM $tablename";
	
	if(!empty($condition) && !empty($value)){
		$query .= " WHERE $condition = ";
		$query .= (is_string($value)) ? "'$value'" : "$value";
	}
	
	$res = mysqli_query($connection, $query);
	if(!$res){
		die("ERROR: Can't count rows from $tablename.<br>".$query."<br>".mysqli_error($connection));
	}
	return mysqli_num_rows($res);
	
}

function fetch_rows($tablename, $condition = '', $value = ''){
	global $connection;
		$idq = substr($tablename,0,-1) . '_id';
		$query = "SELECT * FROM $tablename";
		if(!empty($condition) && !empty($value)){
			$query .= " WHERE $condition = ";
			$query .= (is_string($value)) ? "'$value'" : "$value";;			
		}
		//$query .= " ORDER BY $idq DESC";
	
		$res = mysqli_query($connection,$query);
		if(!$res){
				die("ERROR: Can't fetch row/s from $tablename.<br>".$query."<br>".mysqli_error($connection));
		}
		$rows = array();

		while($row = mysqli_fetch_assoc($res)){
			$rows[] = $row;
		}
	 return $rows;
}

function delete_rows($tablename, $condition, $value){
	global $connection;
		
		$query = "DELETE * FROM $tablename";
		$query .= " WHERE $condition = ";
		$query .= (is_string($value)) ? "'$value'" : "$value";;			
	
		$res = mysqli_query($connection,$query);
		if(!$res){
			die("ERROR: Can't delete row/s from $tablename.<br>".$query."<br>".mysqli_error($connection));
		}
}

function get_columns($tablename){
	global $db_name, $connection;
	$query = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS ";
	$query .= "WHERE TABLE_SCHEMA = '$db_name' AND TABLE_NAME = '$tablename'";
	$res = mysqli_query($connection,$query);
	
	$rows = array();
	while($row = mysqli_fetch_assoc($res)){
		$rows[] = $row;
	}
	
	return array_column($rows, 'COLUMN_NAME');
	
}

	function is_my_post($post_id){
		$rows = fetch_rows('posts','post_author_id', current_user_id());
		foreach($rows as $row){
			$this_post_id = $row['post_id'];
			if($this_post_id == $post_id){
				return true;
			}
		}
	return false;
	}

	function date_to_string($date){
		$d = new DateTime($date);
		$r = $d->format('M dS, Y \a\t g:i A');

		return ($r) ? $r : false;
	}

	ob_end_flush();