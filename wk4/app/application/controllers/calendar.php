<?php

class Calendar extends CI_Controller { /* controller 'Calendar' created for 'calendar_view' */
	
	function display($year = null, $month = null) { /* generating values for $year and $month - 'null' should be set in order for it to properly work */

		$this->load->model('calendar_model'); /* loading model 'calendar_model' */
		$data['calendar'] = $this->calendar_model->generate($year, $month); /* generating values for $month and $year into variable $data */
	
		/* views */
		$this->load->view('entries_header');
		$this->load->view('calendar_view', $data);
		$this->load->view('site_footer');
		
	}		
		
}


