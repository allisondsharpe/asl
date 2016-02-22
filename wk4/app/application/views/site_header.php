<style>

	#site_heading {
		background-color: #4d4d4d;
		border-bottom: 1px solid #000;
		height: 100px;
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

	#home_header {
		margin-right: 10px;
		background: #fff;
		border: 1px solid #000;
		border-radius: 0.3em;
		padding: 10px;
		box-shadow: 2px 2px #000;
	}

	#help_header {
		margin-right: 50px;
		background: #fff;
		border: 1px solid #000;
		border-radius: 0.3em;
		padding: 10px;
		box-shadow: 2px 2px #000;
	}

</style>

<!-- Header created for website -->

<header id="site_heading"> 

	<div id="header_btns"> 	
		<a href="<?php echo base_url() ; ?>index.php/site/home" id="home_header"> Home </a>
		<a href="" id="help_header"> Help </a>
	</div>
			
	<a href="<?php echo base_url() ; ?>index.php/site/home"><img src="<?php echo base_url() ; ?>images/logo.png"></a>
					
</header>
