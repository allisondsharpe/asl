<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site_model extends CI_Model { /* 'Site_model' created for controller 'site' */

	public function login($email, $password) 
	{
		$this->db->select('email', 'password'); /* selecting the email and password rows from 'users' table in 'crud' database  */
		$this->db->from('users');
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		
		$query = $this->db->get(); /* $query will get the values inserted to both email and password rows from the database */
		
		if($query->num_rows() == 1){ /* if there is a row with valid email and password, if statement will return true */
			return true;
		}else{
			return false;
		}
	}



}
