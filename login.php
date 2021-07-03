<?php
include 'function.php';
include 'header.php'; 



if(isset($_POST["ok-signup"])){
	$name = $_POST["names"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$cpassword = $_POST["cpassword"];

	$_SESSION["names"] = $name;
	$_SESSION["email"] = $email;
	$_SESSION["password"] = $password;

	if(isset($_POST["names"])){
		set_flash("Registration successful","uccess");
	}else{
		set_flash("There was error in registration","danger");
	}
}

?>


<body>

<?php

if(isset($_SESSION["names"])){

	if(isset($_POST["ok-login"])){
		$email = $_POST["email"];
		$password = $_POST["password"];

		$logpassword = $_SESSION["password"];

		if($logpassword == $password){
			set_flash("You have login successfuly","success");

			echo "Your Name: ".$_SESSION["names"]."<br>";
			echo "Your Email: ".$_SESSION["email"]."<br>";

			echo "<a href='logout.php'><button>Logout</button></a>";
		}else{
			set_flash("Invalid email or password","danger");
		}
}
echo flash();
?>
	
                    <div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="#" method="post">
							<input type="text" placeholder="Input your Gmail Address" name="email" value="<?php echo @$_POST["username"];?>" />
							<input type="password" placeholder="Input your password" name="password" ?>
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit" class="btn btn-default" name="ok-login">Login</button>
						</form>
					</div><!--/login form-->



<?php

}else{
?>
		<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="" method="post" enctype="multipart/form-data">
							<input type="text" placeholder="Full Name" name="names" required="" />
							<input type="email" placeholder="Email Address" name="email" required="" />
							<input type="password" placeholder="Password" name="password" required="" />
							<input type="password" placeholder="Retype Password" name="cpassword" required="" />
							<button type="submit" class="btn btn-default" name="ok-signup">Signup</button>
							
						</form>
			</div><!--/sign up form-->
                   
<?php
}
?>

    
</body>
</html>
<script>
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
  </script>