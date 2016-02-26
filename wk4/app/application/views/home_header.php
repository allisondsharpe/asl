<style>

	#home_heading {
		background-color: #4d4d4d;
		border-bottom: 1px solid #000;
	}

	#h1_heading {
		color: #fff;
		width: 900px;
		margin-left: 245px;
		text-align: center;
		margin-top: -100px;
		padding-bottom: 30px;
		font-size: 28pt;
		text-shadow: 2px 2px #000;
		font-family: noteworthy; 
	}	

	#help_header {
		margin-right: 50px;
		background: #fff;
		border: 1px solid #000;
		border-radius: 0.3em;
		padding: 12px;
		box-shadow: 2px 2px #000;
	}
	
	#header_btns {
		float: right;
		margin-top: 30px;
		font-size: 12pt;
	}

	#header_btns > a {
		text-decoration: none;
		color: #4d4d4d;
	}

	#signup_header
	{
		margin-right: 10px;
		background: #fff;
		border: 1px solid #000;
		border-radius: 0.3em;
		padding: 12px;
		box-shadow: 2px 2px #000;
	}

</style>

<!-- Main header created specifically for home page -->

<header id="home_heading"> 
	<div id="header_btns"> 	
		<a href="<?php echo base_url() ; ?>index.php/user_signup" id="signup_header"> Sign Up </a>
		<a href="" id="help_header"> Help </a>
	</div>
			
	<img src="<?php echo base_url() ; ?>images/logo.png">
					
	<h1 id="h1_heading"> Feel free to write, vent, and aspire all while remaining anonymous to the public! </h1> 			
</header>
