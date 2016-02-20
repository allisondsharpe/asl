<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar_model extends CI_Model { /* 'Calendar_model' created for controller 'Calendar' */
	
	function generate($year, $month) { 
		
		$conf = array ( /* array created to contain values for calendar */
			'day_type' => 'long',
			'show_next_prev' => true,
			'next_prev_url' => base_url() . 'index.php/calendar/display'
		);
	
		
		$this->load->library('calendar', $conf); /* loading 'calendar' from the library */
		
		return $this->calendar->generate($year, $month); /* returning generate function to the controller */
		
		
	}	

}
