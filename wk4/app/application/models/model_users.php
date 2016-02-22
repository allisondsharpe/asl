<?php

class model_users extends CI_Model{ /* 'model_users' created for controller 'user_login' */

	public function __construct()
	{
		parent::__construct();
	}
	
	function login_data($email, $password) /* function 'login_data' will get the data from the database and will enable the user to login */
	{
		$this->db->where('email', $email); /* getting email and password from database */
		$this->db->where('password', $password);
		
		$query = $this->db->get('users'); /* getting data from 'users' table in the 'crud' database */
		if($query->num_rows() > 0) /* if there are more that 0 rows in table, the foreach loop will activate */
		{
			foreach($query->result() as $rows)
			{
				/* adding the data to array with $userdata */
				$userdata = array (
					'email' => $rows->email,
					'logged_in' => TRUE,			
				);
			}
			$this->session->set_userdata($userdata); /* if login is successful, the session will return as true */
			return true;
		}else{
			return false;
		}
			
	}

}	
	
?>