<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>View Entry</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
	<script src="<?php echo base_url(); ?>js/main.js"></script>
	<link href="<?php echo base_url() ; ?>css/style.css" type="text/css" rel="stylesheet" />
</head>
<style>

	.form_entries {
		padding: 20px;
		background-color: #4d4d4d;
		width: 1228px;
		margin-left: 62px;
	}
	
	.table_container {
		width: 1188px;
	}
	
	#table_body_wrapper {
		background: #4d4d4d;
		clear: left;
	}

	.table_container tbody {
		background-color: #eee;
	}

	.table_container td {
		padding: 20px;
		border: 1px solid #000;
	}

	.table_container th {
		color: #fff;
		padding: 20px;
		width: 200px;
		background-color: #808080;
		border: 1px solid #000;
	}
	
	.content_data {
		clear: left;
	}
	
</style>

<body>

	<div id="content">
		
			<!---- View content ----->
	
			<form class="form_entries" action="<?php echo site_url('index.php/user_entries/dashboard'); ?>" method="post">

				<table class="table_container">
						<thead> <!-- table headers -->
							<th> Title: </th>
							<th> Date: </th>
							<th> Content: </th>
						</thead>
					
						<div id="table_body_wrapper">
							<tbody> <!-- table body -->
								<?php
									foreach($this->m->gettable() as $row) /* foreach loop will take data from database and echo them to the table (tbody) columns */
									{
										echo "<tr>
												<td>$row->title</td>
												<td>$row->date</td>
												<td>$row->content</td>
											 </tr>";
									}
								?>
			
							</tbody>
						</div>				
				</table>
		
			</form>	
			
		</div>	
	
	</div>
	
	
<!-- Scripts -->	

<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>

</body>
</html>