<style> 
	nav {
		margin-left: 50px;
		font-size: 1.2em;
	}
	
	#nav_1 a, #nav_2 a, #nav_3 a {
		color: #000;
		font-weight: bold;
	}

	#nav_1:active, #nav_2:active, #nav_3:active {
		background-color: #f9c20a;
		color: #000;
	}

	#nav_1, #nav_2, #nav_3 {
		border: 1px solid #000;
		box-shadow: 1px 1px #000;
		background: #fff;
		width: 400px;
		padding: 20px;
		display: inline-block;
		text-align: center;
		margin-left: 10px;
	}
</style>

<!-- Navigational view created for Dashboard and New Table views -->

<div id="content">

	<div id="nav-entries">
		<nav>
			<div id="nav_1"><a href="<?php echo base_url() ; ?>index.php/user_entries/new_table"> Add a New Entry </a></div>
			<div id="nav_2"><a href="<?php echo base_url() ; ?>index.php/user_entries/dashboard"> View Previous Entries </a></div>
			<div id="nav_3"><a href="<?php echo base_url() ; ?>index.php/calendar/display"> View Your Calendar </a></div>
		</nav>
	</div>
	
</div>

