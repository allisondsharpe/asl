<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Contact</title>
</head>
<body>

<div id="container">

	<?php echo heading("Content", 1) ?>

			
		<?php
		
		$this->load->helper("form");
		
			echo $message; /* displays $message from site.php */
		
			echo validation_errors();
			
			echo form_open("index.php/site/send_email"); /* opening form tag */
			
			
			echo form_label("Full Name: ", "fullName"); /* (name, value) */
			
			$data = array( 
				"name" => "fullName", 
				"id" => "fullName",
				"value" => set_value("fullName")
			
			);
			echo form_input($data); /* creates input from $data */
			
			
			echo form_label("Email: ", "email"); /* (name, value) */
			
			$data = array( 
				"name" => "email", 
				"id" => "email",
				"value" => set_value("email")
			
			);
			echo form_input($data); /* creates input from $data */
			
			
			echo form_label("Message: ", "message"); /* (name, value) */
			$data = array( 
				"name" => "message", 
				"id" => "message",
				"value" => set_value("message")
			
			);
			echo form_textarea($data);
			
			echo form_submit("contactSubmit", "Send!"); /* submit button */
			
			
			echo form_close(); /* closing form tag */
		
		
		?>
	
</div>

</body>
</html>