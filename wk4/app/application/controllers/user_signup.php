<?php

class User_signup extends CI_Controller { /* 'User_signup' controller created for the 'signup' view */
	
	public function index()
	{
		/* validating the form using arrays to grab the row data as well as set up rules */
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
		
		/* setting the rules using form_validation */
		
		$this->form_validation->set_rules($validate_form);
		$this->form_validation->set_message('required', 'Please fill out the %s field.'); /* '%s' returns the value in any variable given in the form - ex: 'firstname' (overrides original message) */
				
		/* verifying if the form was submitted */
		
		if($this->form_validation->run() != true) {
			$this->load->view('site_header');
			$this->load->view('signup'); /* if form returns false, it will remain on the 'signup' view page */
			$this->load->view('site_footer');
		}else{
			$form = array(); /* array created to retain user submitted data within form */
			$form['firstname'] = $this->input->post('firstname');
			$form['lastname'] = $this->input->post('lastname');
			$form['email'] = $this->input->post('email');
			$form['username'] = $this->input->post('username');
			$form['password'] = $this->input->post('password'); /* will add in md5 method in upcoming weeks to password/confirm pass - md5(''); */
			$form['confirm_pass'] = $this->input->post('confirm_pass');
			
			if(self::createUser($form ['firstname'], $form ['lastname'], $form ['email'], $form ['username'], $form ['password'], $form ['confirm_pass']) == true)
			{ /* if true, user will be redirected to dashboard page and will be able to view their previously submitted entries */
				$data['username'] = $form['username'];
				$this->load->view('site_header');
				$this->load->view('success', $data);
				$this->load->view('site_footer');
			}else{ /* if false, the error message below will display */
				echo "Sorry, form couldn't be processed at this moment.";
			}
		}
	}
	
	/* function 'createUser' will insert the data submitted by the user for each row and insert it into the database */
	public function createUser($firstname, $lastname, $email, $username, $password, $confirm_pass)
	{
		$query = "
			INSERT INTO `users` (`firstname`, `lastname`, `email`, `username`, `password`, `confirm_pass`)
			VALUES (?, ?, ?, ?, ?, ?) ";
			
		$argument = array($firstname, $lastname, $email, $username, $password, $confirm_pass);
		
		if($this->db->query($query, $argument) == true)
		{
			return TRUE; /* if true, the form will have successfully added the data to the database and can be viewed */
		}else{
			return FALSE; /* if false, data will not be added to database */
		}	
		
	}
	
	
}



