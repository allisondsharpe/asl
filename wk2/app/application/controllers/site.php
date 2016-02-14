<?php

class Site extends CI_Controller { /* main controller 'site' created for the home page */
	
	/* Home Page */
	
	public function index() {
		$this->home();
	}
	
	public function home() { /* loading multiple views into home page */
		$this->load->view("home_header");
		$this->load->view("content_home");
		$this->load->view("site_footer");
	}
	
	/* Login */
	
	public function verify_login() {
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email'); /* will check for form validation - (form/db name, display name, values/rules) */
		$this->form_validation->set_rules('password', 'Password', 'required|callback_verifyUser');
	
		if($this->form_validation->run() == false) { /* if form validation returns false, user will remain on home page and error messages will display */
			$this->load->view("home_header");
			$this->load->view('content_home');
			$this->load->view("site_footer");
		}else{
			redirect('http://localhost/app/index.php/user_entries/dashboard'); /* if form validation returns true, user will redirect to 'dashboard' */
		}
	}
	
	public function verifyUser() 
	{
		$email = $this->input->post('email'); /* grabbing entered data from user */
		$password = $this->input->post('password');
		
		$this->load->model('site_model'); /* grabbing the data from the model 'site_model' */

		if($this->site_model->login($email, $password)) { /* if user's email and password validate as true, the if statement will return true */
			return true;
		}else{
			$this->form_validation->set_message('verifyUser', 'Incorrect email or password.'); /* if user's email and password return false, they'll receive an error message */
			return false;
		}
	}
		
}
