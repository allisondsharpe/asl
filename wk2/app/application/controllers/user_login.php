<?php

class User_login extends CI_Controller { /* 'User_login' controller created for the 'login' view */

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_users'); /* grabbing the data from the model 'model_users' */
	}
	
	public function index()
	{
		$this->load->view('content_home'); /* loading the 'content_home' view page */
	}

	function login() /* function 'login' created to enable the user to enter in their information and be redirected to the dashboard page */
	{
		$this->load->library('form_validation'); /* loading the 'form_validation' library inside code igniter */
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('pass', 'Password', 'trim|required');
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('content_home'); /* if session returns false, the browser will remain on the 'content_home' page */
		}else{ /* if session returns true, the browser will redirect the user to the 'dashboard' */
			$email = $this->input->post('email');
			$password = $this->input->post('pass');
			
			$result = $this->model_users->login($email, $password);
			if($result) {
				redirect ('http://localhost/app/index.php/user_entries/dashboard'); /* redirects user to 'dashboard' view after logging in */
			}else{
				echo "<script> alert ('Error! Please try logging in again.'); </script>"; /* if an error occurs, user will receive this message created using Javascript */
			}
		}
	}

}

