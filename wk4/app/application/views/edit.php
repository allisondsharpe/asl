<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Update Your Entry</title>
	<style>
	</style>
</head>
<style>

	#edit_wrapper {
		background-color: #4d4d4d;
		padding: 20px;
		width: 1230px;
		margin-left: 60px;
	}
	
	#edit_table {
		width: 1188px;
	}
	
	.table_container td {
		border: 1px solid #000;
	}
	
	#save_btn {
		margin-right: 10px;
		background: #fff;
		border: 1px solid #000;
		border-radius: 0.3em;
		padding: 10px;
		box-shadow: 2px 2px #000;
		margin-top: 50px;
		margin-left: 560px;
		font-size: 1.0em;
	}
	
	#edit_heading {
		margin-left: 430px;
		color: #fff;
		margin-bottom: 20px;
	}

</style>

<body>

<div id="content">

	<form action="<?php echo site_url('index.php/user_entries/update'); ?>" method="post">
		
		<!-- Edit content -->
	
		<div id="edit_wrapper">
		
			<h2 id="edit_heading"> Update Your Information </h2> 
			
			<table class="table_container" id="edit_table">
		
				<tr>
					<th>Entry Specifications:</th>
					<th>Entry Fields:</th>
				</tr>
					
				<tr>
					<td> Entry ID: </td>
					<td><input type="text" name="id" value="<?php echo $r->id;  ?>"></td>
				</tr>
				
				<tr>
					<td> New Title: </td>
					<td><input type="text" name="title" value="<?php echo $r->title;  ?>"></td>
				</tr>
			
				<tr>
					<td> New Date: </td>
					<td><input type="text" name="date" value="<?php echo $r->date;  ?>"></td>
				</tr>
		
				<tr>
					<td> Updated Content: </td>
					<td><textarea name="content" value="<?php echo $r->content;  ?>"></textarea>
				</tr>
		
			</table>
			
			<input id="save_btn" type="submit" value="Save" name="submit"> 

			
		</div>	
				
	</form>

</div>

</body>
</html>