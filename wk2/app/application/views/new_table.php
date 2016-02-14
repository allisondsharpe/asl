<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Add a New Entry</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
	<script src="<?php echo base_url(); ?>js/main.js"></script>
	<link href="<?php echo base_url() ; ?>css/style.css" type="text/css" rel="stylesheet" />
</head>
<body>

	<div id="content">
	
		<form action="<?php echo site_url('index.php/user_entries/savedata'); ?>" method="post">

			<!---- Add/Create ----->
		
			<h1> Add a New Entry: </h1> 
	
			<table>
			
				<tr>
					<td> Title </td>
					<td> : </td>
					<td><input type="text" name="title"></td>
				</tr>
			
				<tr>
					<td> Date </td>
					<td> : </td>
					<td><input type="text" name="date"></td>
				</tr>
		
				<tr>
					<td> Content </td>
					<td> : </td>
					<td><input type="text" name="content"></td>
				</tr>
			
				<tr>
					<input type="submit" value="Save" name="submit"> 
				</tr>
		
			</table>
		
		</form>
		
	</div>


<!-- Scripts -->

<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>

</body>
</html>