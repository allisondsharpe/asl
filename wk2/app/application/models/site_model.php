<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site_model extends CI_Model { /* 'site_model' created for controller 'crud' */

	/* get/view */
	function get_records()
	{
		$query = $this->db->get('data'); /* get table 'data' from database 'crud' */
		return $query->result(); /* returns result from statement above */
	}
	
	/* add/create */
	function add_record($data)
	{
		$this->db->insert('data', $data); /* adding data to table */
		return;
	}
	
	/* delete */
	function delete_row()
	{
		$this->db->where('id', $this->uri->segment(3)); /* uri = automatically loaded, segment = refers to urls passed in address bar. ex: index.php/site/crud */ 
		$this->db->delete('data'); /* deletes row from table 'data' */
	}
	
	 // update person by id
   /* function update($id, $person){
        $this->db->where('id', $id);
        $this->db->update($this->tbl_person, $person);
    } */
	
	/* update */
    function update($id, $entry){
        $this->db->where('id', $id);
        $this->db->update($this->data, $entry);
    }
	
	public function login($email, $password) 
	{
		$this->db->select('email', 'password'); /* selecting the email and password rows from database 'login' */
		$this->db->from('users');
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		
		$query = $this->db->get(); /* $query will get the values from the database */
		
		if($query->num_rows() == 1){ /* if statement will run if there is at least one row in database */
			return true;
		}else{
			return false;
		}
	}



}
