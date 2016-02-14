<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CRUD</title>
	<style>
	</style>
</head>
<body>

<div id="content">

	<form action="<?php echo site_url('index.php/user_entries/update'); ?>" method="post">
		
		<!-- Create content -->

		<table>
		
			<input type="text" name="id" value="<?php echo $r->id;  ?>">
				
			<tr>
				<td> Title </td>
				<td> : </td>
				<td><input type="text" name="title" value="<?php echo $r->title;  ?>"></td>
			</tr>
			
			<tr>
				<td> Date </td>
				<td> : </td>
				<td><input type="text" name="date" value="<?php echo $r->date;  ?>"></td>
			</tr>
		
			<tr>
				<td> Content </td>
				<td> : </td>
				<td><input type="text" name="content" value="<?php echo $r->content;  ?>"></td>
			</tr>
			
			<tr>
				<input type="submit" value="Save" name="submit"> 
			</tr>
		
		</table>
		
	</form>

</div>

</body>
</html>