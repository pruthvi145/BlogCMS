<?php  include "includes/header.php"; ?>
<?php  include "includes/navigation.php"; ?>
<?php

	if(isset($_POST['submit'])){
		
        $username = $_POST['username'];
        
		$email = $_POST['user_email'];
		$password = $_POST['user_password'];
			
		$_POST['username'] = mysqli_real_escape_string($connection, $_POST['username']);
		$_POST['user_email'] =	mysqli_real_escape_string($connection, $_POST['user_email']);
		$_POST['user_password'] = mysqli_real_escape_string($connection, $_POST['user_password']);

		$_POST['user_password'] = md5($_POST['user_password']);
		$_POST['user_role'] = "subscriber";
		
		add_user($_POST);
		
	}

?>
    
    <!-- Page Content -->
    <div class="container">
    
<section id="registration">
    <div class="container">
        <div class="row jumbotron">
        <div class="col-3"></div>
            <div class="col-6 col-offset-3">
                <div class="form-wrap">
                <h1>Register</h1>
                    <form id="registrationForm" action="registration.php" method="post" id="login-form" autocomplete="off">
                        <div class="form-group">
                            <input type="text" name="username" id="username" class="form-control" placeholder="Enter Desired Username">
                            <p class="ml-4 text-danger"><small></small></p>
                        </div>
                         <div class="form-group">
                            <input type="email" name="user_email" id="email" class="form-control" placeholder="somebody@example.com">
                        </div>
                         <div class="form-group">
                            <input type="password" name="user_password" id="key" class="form-control" placeholder="Password">
                            <p class="ml-2 text-danger"><small id="passError"></small></p>
                        </div>
                        <input type="submit" name="submit" id="Register" class="btn btn-dark btn-lg btn-block" value="Register">
                    </form>
                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>
 <hr>
<?php include "includes/footer.php";?>
