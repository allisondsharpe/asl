<?php

class Entries_model extends CI_Model { /* 'Entries_model' created for 'user_entries.php' controller */
	function __construct()
	{
		parent::__construct();
	}

	/* function 'gettable' will be used to retrieve data and return it to the table */
	function gettable()
	{
		$query = $this->db->get('data');
		return $query->result();
	}
	
	/* will grab one row by their id at a time */
	function getonerow($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('data');
		return $query->row();
	}
	
}