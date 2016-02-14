<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_entries extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		/* calling model */
		$this->load->model('entries_model', 'm');
	}
	
	function index() 
	{
		$this->load->view('nav'); /* loads nav view file with page containing records */
		$this->load->view('dashboard');
	}
	
	function new_table() { /* loads nav view file to 'new_table' */
		$this->load->view("site_header");
		$this->load->view('nav');
		$this->load->view('new_table');
		$this->load->view("site_footer");
	}
	
	function dashboard() { /* loads nav view file to 'dashboard' */
		$this->load->view("site_header");
		$this->load->view('nav');
		$this->load->view('dashboard');
		$this->load->view("site_footer");
	}
	
	/* create */
	
	function savedata()
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

	function edit($id) 
	{
		$row = $this->m->getonerow($id);
		$data['r'] = $row;
		$this->load->view('edit', $data);
	}
		
	function update($id)
	{
		$id = $this->input->post('id');
		
		$data = array(
			'title' => $this->input->post('title'),
			'date' => $this->input->post('date'),
			'content' => $this->input->post('content')
		);
		
		$this->db->where('id', $id);
		$this->db->update('data', $data);
		redirect('index.php/user_entries/dashboard');
	}
	
	/* delete */
	
	function delete($id)
	{
		$id = $this->db->where('id', $id);
		$this->db->delete('data');
		redirect('index.php/user_entries/dashboard');
	}
}
