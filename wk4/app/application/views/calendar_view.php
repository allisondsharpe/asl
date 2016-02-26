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
    font-size: 1.0em;
}

.calendar a {
	margin-left: 30px;
}

table.calendar {
	margin: auto;
}

.calendar .days td {
	width: 80px; 
	height: 80px;
	padding: 4px;
	border: 1px solid #4d4d4d;
	vertical-align: top;
	background-color: #eee;
}

.calendar .days td:hover {
	background-color: #f9c20a;
}

.calender .highlight {
	font-weight: bold;
	color: #4d4d4d;
}

.title {
	text-align: center;
	color: #fff;
	font-size: 1.5em;
}

.weekdays {
	color: #fff;
	background-color: #4d4d4d;
	padding: 20px;
	font-size: 1.0em;
}

.next_prev_url {
	color: #4d4d4d;
}

#return_dash {
	background: #fff;
	border: 1px solid #000;
	border-radius: 0.3em;
	padding: 10px;
	box-shadow: 2px 2px #000;
	margin-top: 20px;
	margin-left: 590px;
	font-size: 1.1em;
}

a {
	color: #4d4d4d;
}

</style>

<body>

	<!-- echoing the controller 'calendar' to the view page -->
		
	<div id="content">
	
		<?php echo $calendar; ?>
		
		<a href="<?php echo base_url() ; ?>index.php/user_entries/dashboard"><input id="return_dash" type="submit" value="Return to Dashboard"></a> 

	</div>
	
	
<!-- Scripts -->

<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>

</body>
</html>