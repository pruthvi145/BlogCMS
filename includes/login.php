<?php session_start(); ?>
<?php ob_start(); ?>
<?php include "../admin/includes/function.php" ?>
<?php

if(isset($_POST['login'])){
	$login_username = $_POST['username'];
	$login_password = md5($_POST['password']);
	
	$login_username = mysqli_real_escape_string($connection, $login_username);
	$login_password = mysqli_real_escape_string($connection, $login_password);
	
	$rows = fetch_all_users();
	foreach($rows as $row){

		$user_id = $row['user_id'];
		$username = $row['username'];
		$user_password = $row['user_password'];
				
		if($login_username == $username && $login_password == $user_password){
			$found_user = true;
			$_SESSION['user_id'] = $user_id;
			redirect('Location: ../admin');
		}
	}
	if(!$found_user){
		redirect('Location: ../index.php');
	}
	
}else{
	redirect('Location: ../index.php');
}

ob_end_flush();
?>
