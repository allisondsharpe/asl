<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Please Log In</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
	<script src="<?php echo base_url(); ?>js/main.js"></script>
	<link href="<?php echo base_url() ; ?>css/style.css" type="text/css" rel="stylesheet" />
</head>
<body>
		
	<div id="content">
	
		<!--- Login form --->
		
	
		<?php echo validation_errors(); ?>
	
		<?php echo form_open('index.php/site/verify_login'); ?>
	
		<h2> Login </h2>
	
		Email Address: <br/>
		<input type="text" name="email" /><br/>
	
		Password: <br/>
		<input type="text" name="password" /><br/>
	
		<input type="submit" value="Login" name="submit" /><br/>
		
		
		<!-- Sign up link -->
		
		<h4 id="account"> Don't Have An Account? </h4>
		
		<div id="signup_wrapper">
			<a href="<?php echo base_url() ; ?>index.php/user_signup" id="signup_btn"> Sign Up </a>
		</div>
	</div>


<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>

</body>
</html>