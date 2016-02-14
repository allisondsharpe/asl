<?php

class Entries_model extends CI_Model {
	function __construct()
	{
		/* calling model contructor */
		parent::__construct();
	}

	/* function 'gettable' will be used to retrieve data and return it to the table */
	function gettable()
	{
		$query = $this->db->get('data');
		return $query->result();
	}
	
	function getonerow($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('data');
		return $query->row();
	}
	
}