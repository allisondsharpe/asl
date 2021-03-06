<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_entries extends CI_Controller { /* controller 'user_entries' created for 'dashboard' and 'new_table' views */

	public function __construct()
	{
		parent::__construct();
		
		/* calling model */
		$this->load->model('entries_model', 'm'); /* 'm' used as an abbreviation for 'entries_model' */
	}
	
	function index() 
	{
		$this->load->view('nav'); /* main index page */
		$this->load->view('dashboard');
	}
	
	function new_table() { /* loads nav view file to 'new_table' */
		$this->load->view("entries_header");
		$this->load->view('nav');
		$this->load->view('new_table');
		$this->load->view("site_footer");
	}
	
	function dashboard() { /* loads nav view file to 'dashboard' */
		$this->load->view("entries_header");
		$this->load->view('nav');
		$this->load->view('dashboard');
		$this->load->view("site_footer");
	}

	
	/* create */
	
	function savedata() /* used for 'new_table' after user has submitted their entry */
	{
		/* create array to get data from index */
		$data = array(
			'title' => $this->input->post('title'),
			'date' => $this->input->post('date'),
			'content' => $this->input->post('content')
		);
		
		/* inserts data into table 'data' */
		$this->db->insert('data', $data);
		redirect('index.php/user_entries/dashboard');
	}
	
	/* update */

	function edit($id) /* function 'edit' created to enable 'getonerow' from the model 'entries_model' when user selects the action 'edit' within an entry */
	{
		$row = $this->m->getonerow($id);
		$data['r'] = $row;
		$this->load->view("entries_header");
		$this->load->view('nav');
		$this->load->view('dashboard');
		$this->load->view('edit', $data);
		$this->load->view("site_footer");
	}
		
	function update($id) /* function update created to enable the user to edit their entry by one row at a time */
	{
		$id = $this->input->post('id'); /* grabs the id of a row */
		
		$data = array(
			'title' => $this->input->post('title'),
			'date' => $this->input->post('date'),
			'content' => $this->input->post('content')
		);
		
		$this->db->where('id', $id); /* grabbing row 'id' from the database */
		$this->db->update('data', $data);
		redirect('index.php/user_entries/dashboard');
	}
	
	/* delete */
	
	function delete($id) /* function delete created to enable the user to delete an entry by simply clicking 'delete' */
	{
		$id = $this->db->where('id', $id); /* once again, grabbing each row one by one with their unique id */
		$this->db->delete('data');
		redirect('index.php/user_entries/dashboard');
	}
}
