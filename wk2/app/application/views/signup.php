<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> Sign Up </title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
	<script src="<?php echo base_url(); ?>js/main.js"></script>
	<link href="<?php echo base_url() ; ?>css/style.css" type="text/css" rel="stylesheet" />
</head>
<body>
		
	<div id="content">
	
		<!--- Sign Up Form --->
		
		<?=form_open(base_url() . 'index.php/user_entries/dashboard') ?>
		
			<table cellspacing='3' cellpadding='3'>
			
				<tr><td> 
				<!-- set_value leaves information in input fields when user refreshes --->
				First Name: <td> <?=form_input(array('name' => 'firstname', 'value' => set_value('firstname'))) ?>
				<td> <?=form_error('firstname') ?></td></tr>
				
				<tr><td> 
				Last Name: <td> <?=form_input(array('name' => 'lastname', 'value' => set_value('lastname'))) ?>
				<td> <?=form_error('lastname') ?></td></tr>
				
				<tr><td> 
				Email Address: <td> <?=form_input(array('name' => 'email', 'value' => set_value('email'))) ?>
				<td> <?=form_error('email') ?></td></tr>
				
				<tr><td> 
				Username: <td> <?=form_input(array('name' => 'username', 'value' => set_value('username'))) ?>
				<td> <?=form_error('username') ?></td></tr>
				
				<tr><td> 
				Password: <td> <?=form_input(array('name' => 'password')) ?>
				<td> <?=form_error('password') ?></td></tr>
				
				<tr><td> 
				Confirm Password: <td> <?=form_input(array('name' => 'confirm_pass')) ?>
				<td> <?=form_error('confirm_pass') ?></td></tr>
				
				
				<tr><td> 
					<?=form_submit(array('name' => 'submit', 'value' => 'Sign Up')) ?>
				</td></tr>
			
			</table> 
		
		<?=form_close(); ?>
		
	
	</div>

<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>

</body>
</html>