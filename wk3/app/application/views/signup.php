<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> Sign Up </title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
	<script src="<?php echo base_url(); ?>js/main.js"></script>
	<link href="<?php echo base_url() ; ?>css/style.css" type="text/css" rel="stylesheet" />
</head>
<style>
#signup_heading {
	color: #fff;
	text-align: center;
}

#form_signup {
	width: 420px;
	height: 330px;
	background-color: #f9c20a;
	margin: 30px 0px 20px 470px;
	padding: 20px;
	border: 1px solid #000;
	box-shadow: 1px 1px #000;
	border-radius: 0.3em;
}

#form_signup  p {
	width: 300px;
	margin-left: 100px;
	color: #f9c20a;
}

.signup_label {
	color: #666;
	margin-top: 15px;
	margin-right: 5px;
	font-weight: 400;
	font-size: 14pt;
	width: 170px;
}

#signup_table {
	margin-left: 20px;
}

#signup_submit {
	margin-right: 10px;
	background: #fff;
	border: 1px solid #000;
	border-radius: 0.3em;
	padding: 10px;
	box-shadow: 2px 2px #000;
	margin-left: 125px;
	margin-top: 20px;
	font-size: 11pt;
	color: #4d4d4d;
	position: absolute;
}
</style>
<body>
		
	<div id="content">
	
		<h2 id="signup_heading"> Sign Up Today for Free! </h2>
	
		<!--- Sign Up Form --->
		<div id="form_signup">
				
			<?=form_open(base_url() . 'index.php/user_signup/') ?>
		
				<table id="signup_table" cellspacing='3' cellpadding='3'>
			
					<tr><td> 
					<!-- set_value leaves information in input fields when user refreshes --->
					<label class="signup_label"> First Name: </label><td> <?=form_input(array('name' => 'firstname', 'value' => set_value('firstname'))) ?>
					<td> <?=form_error('firstname') ?></td></tr>
				
					<tr><td> 
					<label class="signup_label"> Last Name: </label><td> <?=form_input(array('name' => 'lastname', 'value' => set_value('lastname'))) ?>
					<td> <?=form_error('lastname') ?></td></tr>
				
					<tr><td> 
					<label class="signup_label"> Email Address: </label><td> <?=form_input(array('name' => 'email', 'value' => set_value('email'))) ?>
					<td> <?=form_error('email') ?></td></tr>
				
					<tr><td> 
					<label class="signup_label"> Username: </label><td> <?=form_input(array('name' => 'username', 'value' => set_value('username'))) ?>
					<td> <?=form_error('username') ?></td></tr>
				
					<tr><td> 
					<label class="signup_label"> Password: </label><td> <?=form_input(array('name' => 'password')) ?>
					<td> <?=form_error('password') ?></td></tr>
				
					<tr><td> 
					<label class="signup_label"> Confirm Password: </label><td> <?=form_input(array('name' => 'confirm_pass')) ?>
					<td> <?=form_error('confirm_pass') ?></td></tr>
				
				
					<tr><td> 
						<?=form_submit(array('name' => 'submit', 'value' => 'Sign Up', 'id' => 'signup_submit')) ?>
					</td></tr>
			
				</table> 
		
			<?=form_close(); ?>
			
		</div>
	
	</div>
	
	
<!-- Scripts -->

<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>

</body>
</html>