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
<style> 

	.form_entries {
		padding: 20px;
	}
	
	#add_wrapper {
		background-color: #4d4d4d;
		padding: 20px;
		width: 1230px;
		margin-left: 40px;
	}

	input {
		padding: 10px;
	}
	
	textarea {
		padding: 20px;
		width: 800px;
	}

	#add_table {
		width: 1188px;
	}
	
	.table_container {
		background-color: #eee;
		border: 1px solid #000;
	}

	.table_container td {
		padding: 20px;
		border: 1px solid #000;
		font-size: 1.0em;
	}
	
	.table_container th {
		background-color: #808080;
		color: #fff;
		padding: 20px;
		border: 1px solid #000;
		width: 200px;
	}
 
	#submit_btn {
		margin-right: 10px;
		background: #fff;
		border: 1px solid #000;
		border-radius: 0.3em;
		padding: 10px;
		box-shadow: 2px 2px #000;
		margin-top: 50px;
		margin-left: 565px;
	}


</style> 
<body>

	<div id="content">
	
			<form class="form_entries" action="<?php echo site_url('index.php/user_entries/savedata'); ?>" method="post">

				<!---- Add/Create ----->
				
				<div id="add_wrapper">
					
					<table class="table_container" id="add_table">
					
						<tr>
							<th>Entry Specifications:</th>
							<th>Entry Fields:</th>
						</tr>
		
						<tr>
							<td> Title: </td>
							<td><input type="text" name="title" placeholder='Ex: "My Title"'></td>
						</tr>
		
						<tr>
							<td> Date: </td>
							<td><input type="text" name="date" placeholder="Format: YYYY-MM-DD"></td>
						</tr>
	
						<tr>
							<td> Content: </td>
							<td><textarea name="content" placeholder="Tell us your life story. Max: 500 words"></textarea></td>
						</tr>
						
					</table>
			
					<input id="submit_btn" type="submit" value="Submit" name="submit"> 
		
				</div>		
			
			</form>
			
		</div>
		
	</div>


<!-- Scripts -->

<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>

</body>
</html>