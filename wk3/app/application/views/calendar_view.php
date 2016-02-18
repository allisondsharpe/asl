<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Your Monthly Calendar</title> 
	<link rel="shortcut icon" type="image/ico" href="<?php echo base_url("assets/images/favicon.ico"); ?>"/>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
	<script src="<?php echo base_url(); ?>js/main.js"></script>
	<link href="<?php echo base_url() ; ?>css/style.css" type="text/css" rel="stylesheet" />
</head>
<style>

.calendar {
    font-family: sans-serif;
    width: 100%;
    margin-top: 20px;
}

.day_header {
    font-weight: 400;
    text-align: center;
    color: #000;
    font-size: 11pt;
}

.calendar td {
    width: 14%;
    border: 1px solid #000;
    height: 100px;
    vertical-align: top;
    font-size: 10pt;
}

.calendar td:hover {
	background-color: #f9c20a;
}

.day_listing {
    display: block;
    text-align: right;
    font-size: 10pt;
    color: #4d4d4d;
    padding: 5px;
}

div.today {
    background: #eee;
    height: 100%;
} 

</style>

<body>
		
	<div id="content">
	
		<?php
	
	
		?>
 
	</div>
	

<!-- Scripts -->

<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>

</body>
</html>