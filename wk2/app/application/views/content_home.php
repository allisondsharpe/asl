<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Please Log In</title> 
	<link rel="shortcut icon" type="image/ico" href="<?php echo base_url("assets/images/favicon.ico"); ?>"/>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
	<script src="<?php echo base_url(); ?>js/main.js"></script>
	<link href="<?php echo base_url() ; ?>css/style.css" type="text/css" rel="stylesheet" />
</head>
<body>
		
	<div id="content">
	
		<!--- Login form --->
		<div id="form_login">
	
			<?php echo validation_errors(); ?>
	
			<?php echo form_open('index.php/site/verify_login'); ?>
	
			<h2 id="login_heading"> Login to Your Account </h2>
	
			<label class="login_label"> Email Address: </label> <br/>
				<input type="text" class="login_input" name="email" /><br/>
	
			<label class="login_label"> Password: </label> <br/>
				<input type="text" class="login_input" name="password" /><br/>
				
			<p id="forgot_pass"> Forgot Your Password? </p>	
	
			<input type="submit" value="Login" id="login_btn" name="submit" /><br/>
		
		</div>	
		
		<!-- Sign up link -->
		
		<h4 id="account"> Don't Have An Account? </h4>
		
		<div id="signup_wrapper">
			<a href="<?php echo base_url() ; ?>index.php/user_signup" id="signup_btn"> Sign Up </a>
		</div>
	</div>
	

<!-- Scripts -->

<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>

</body>
</html>