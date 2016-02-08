<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {
	public function index() {
		$this->home();
	}
	
	/* multiple views  */

	public function home() {
		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("content_home");
		$this->load->view("site_footer");
}

	public function about() {
		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("content_about");
		$this->load->view("site_footer");
		}
		
	public function contact() {
	
		$data["message"] = "";

		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("content_contact", $data);
		$this->load->view("site_footer");
		}	
		
	public function send_email() {
		$this->load->library("form_validation");
		
		$this->form_validation->set_rules("fullName", "Full Name", "required|alpha"); /* (name, output name, conditions) */ /* "alpha" will state that full name should only contain alphabetical characters */ 
		$this->form_validation->set_rules("email", "Email Address", "required|valid_email"); /* "valid_email" will display a message stating that email needs to be valid */
		$this->form_validation->set_rules("message", "Message", "required");
		
		if ($this->form_validation->run() == FALSE) { /* if form validation fales, load contact view again */
		
			$data["message"] = "Your submission was unsuccessful.";

			$this->load->view("site_header");
			$this->load->view("site_nav");
			$this->load->view("content_contact", $data);
			$this->load->view("site_footer");
		}else{
			$data["message"] = "The email has successfully been sent!";
			
			$this->load->library("email");
			
			$this->email->from(set_value("email"), set_value("fullName")); /* who email is from */
			$this->email->to("allisonsharpe@ymail.com"); /* receiver */
			$this->email->subject("Message from form");
			$this->email->message(set_value("message"));
			
			$this->email->send();
			
			echo $this->email->print_debugger();
			
			$this->load->view("site_header");
			$this->load->view("site_nav");
			$this->load->view("content_contact", $data);
			$this->load->view("site_footer");
		}
	}		

}