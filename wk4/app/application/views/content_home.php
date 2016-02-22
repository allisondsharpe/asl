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
<style>
	
	#form_login {
		margin-left: 500px;
		background-color: #f9c20a;
		padding: 20px;
		margin-right: 500px;
		border: 2px solid #4d4d4d;
		border-radius: 0.3em;
		box-shadow: 1px 1px #000;
	}

	#login_heading {
		color: #4d4d4d;
		font-size: 18pt;
		width: 400px;
		margin-left: 26px;
		font-weight: bold;
		margin-bottom: 20px;
	}

	.login_label {
		color: #666;
		margin-top: 15px;
		margin-left: 23px;
		font-weight: 400;
		font-size: 14pt;
	}

	.login_input {
		width: 260px;
		border: 1px solid #4d4d4d;
		border-radius: 0.3em;
		margin-left: 23px;
		padding: 5px;
	}
	
	#forgot_pass {
		color: #666;
		margin-top: 10px;
		font-size: 12pt;
		margin-left: 25px;
	}	
	
	#account {
		color: #fff;
		text-align: center;
		margin-bottom: 30px;
		margin-top: 30px;
		font-weight: 200;
		font-size: 12pt;
	}

	#signup_wrapper > a {
		text-decoration: none;
		color: #4d4d4d;
	}

	#signup_btn, #login_btn {
		margin-right: 10px;
		background: #fff;
		border: 1px solid #000;
		border-radius: 0.3em;
		padding: 10px;
		box-shadow: 2px 2px #000;
	}

	#login_btn {
		margin-left: 119px;
		width: 60px;
		font-size: 12pt;
		color: #4d4d4d;
	}

	#signup_btn {
		margin-left: 633px;
		width: 60px;
		font-size: 12pt;
	}

	
</style>
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
				
			<a href=""><p id="forgot_pass"> Forgot Your Password? </p></a>
	
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