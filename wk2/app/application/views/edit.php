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
<body>

<div id="content">

	<form action="<?php echo site_url('index.php/user_entries/update'); ?>" method="post">
		
		<!-- Create content -->

		<table class="table_container" id="edit_table">
					
			<tr>
				<td> ID </td>
				<td><input type="text" name="id" value="<?php echo $r->id;  ?>"></td>
			</tr>
				
			<tr>
				<td> Title </td>
				<td><input type="text" name="title" value="<?php echo $r->title;  ?>"></td>
			</tr>
			
			<tr>
				<td> Date </td>
				<td><input type="text" name="date" value="<?php echo $r->date;  ?>"></td>
			</tr>
		
			<tr>
				<td> Content </td>
				<td><textarea name="content" value="<?php echo $r->content;  ?>"></textarea>
			</tr>
		
		</table>
		
		<input id="save_btn" type="submit" value="Save" name="submit"> 
		
	</form>

</div>

</body>
</html>