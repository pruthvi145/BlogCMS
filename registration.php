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

		$randSalt = '$2y$10$zaxscdvfbgnhmjaqswdefr';
		$_POST['user_password'] = crypt($_POST['user_password'], $randSalt);
		$_POST['user_role'] = "subscriber";
		
		add_user($_POST);
		
	}

?>
    
    <!-- Page Content -->
    <div class="container">
    
<section id="registration">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="form-wrap">
                <h1>Register</h1>
                    <form role="form" action="registration.php" method="post" id="login-form" autocomplete="off">
                        <div class="form-group">
                            <label for="username" class="sr-only">username</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Enter Desired Username">
                        </div>
                         <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="user_email" id="email" class="form-control" placeholder="somebody@example.com">
                        </div>
                         <div class="form-group">
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" name="user_password" id="key" class="form-control" placeholder="Password">
                        </div>
                
                        <input type="submit" name="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Register">
                    </form>
                 
                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>


        <hr>



<?php include "includes/footer.php";?>
