<?php

class User_signup extends CI_Controller { /* name class after controller file - ex: 'site.php' with class of 'Site' */
	
	public function index()
	{
		/* validating the form */
		$validate_form = array(
			'firstname' => array( /* setting up array variables and their values */
				'field' => 'firstname',
				'label' => 'First Name',
				'rules' => 'required|max_length[25]|min_length[1]'
			),
			'lastname' => array( 
				'field' => 'lastname',
				'label' => 'Last Name',
				'rules' => 'required|max_length[25]|min_length[1]'
			),
			'email' => array( 
				'field' => 'email',
				'label' => 'Email Address',
				'rules' => 'required|valid_email'
			),
			'username' => array( 
				'field' => 'username',
				'label' => 'Username',
				'rules' => 'required'
			),
			'password' => array( 
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required|max_length[16]|min_length[1]'
			),
			'confirm_pass' => array( 
				'field' => 'confirm_pass',
				'label' => 'Confirm Password',
				'rules' => 'required|max_length[16]|min_length[1]|matches[password]'
			)
		);
		
		/* setting the rules */
		$this->form_validation->set_rules($validate_form);
		$this->form_validation->set_message('required', 'Please fill out the %s field.'); /* '%s' returns the value in any variable given in the form - ex: 'firstname' (overrides original message) */
				
		/* verifying if form was submitted */
		if($this->form_validation->run() != true) {
			$this->load->view('signup'); /* displays signup page */
		}else{
			$form = array();
			$form['firstname'] = $this->input->post('firstname');
			$form['lastname'] = $this->input->post('lastname');
			$form['email'] = $this->input->post('email');
			$form['username'] = $this->input->post('username');
			$form['password'] = $this->input->post('password'); /* add in md5 method to password/confirm pass - md5(''); */
			$form['confirm_pass'] = $this->input->post('confirm_pass');
			
			if(self::createUser($form ['firstname'], $form ['lastname'], $form ['email'], $form ['username'], $form ['password'], $form ['confirm_pass']) == true)
			{
				$data['username'] = $form['username'];
				$this->load->view('site_header');
				$this->load->view('dashboard', $data);
				$this->load->view('site_footer');
			}else{
				echo "Sorry, form couldn't be processed at this moment.";
			}
		}
	}
	
	public function createUser($firstname, $lastname, $email, $username, $password, $confirm_pass)
	{
		$query = "
			INSERT INTO `users` (`firstname`, `lastname`, `email`, `username`, `password`, `confirm_pass`)
			VALUES (?, ?, ?, ?, ?, ?) ";
			
		$argument = array($firstname, $lastname, $email, $username, $password, $confirm_pass);
		
		if($this->db->query($query, $argument) == true)
		{
			return TRUE; /* successfully added to database */
		}else{
			return FALSE; /* problem adding to database */
		}	
	}
	
	
}



