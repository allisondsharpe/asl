<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> Success! </title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
	<script src="<?php echo base_url(); ?>js/main.js"></script>
	<link href="<?php echo base_url() ; ?>css/style.css" type="text/css" rel="stylesheet" />
</head>
<style>

	#success_heading {
		color: #fff;
		text-align: center;
	}
	
	#success_btn {
		width: 160px;
		font-size: 12pt;
		margin-left: 600px;
		margin-top: 50px;
		margin-right: 10px;
		background: #fff;
		border: 1px solid #000;
		border-radius: 0.3em;
		padding: 10px;
		box-shadow: 2px 2px #000;
	}
	
	#success_btn > a {
		text-decoration: none;
		color: #4d4d4d;
}

</style>	
<body>

	<!-- Once user signs up, they will be directed to this page -->

	<div id="content">
	
		<h2 id="success_heading"> Congratulations, You are signed up and ready to post content! </h2> 
	
		<div id="success_btn"><a href="http://localhost/app/index.php/user_entries/dashboard"> Go to your account </a></div>
	
	</div>
	
<!-- Scripts -->
	
<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
		
</body>
</html>


