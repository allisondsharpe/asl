<?php

class Calendar extends CI_Controller { /* controller 'Calendar' created for 'calendar' view */
	
	public function index() { /* will load 'calender_view' as default page */
		$this->load->view("site_header");
		$this->load->view("calendar_view");
		$this->load->view("site_footer");
		
		$preferences = array ( /* generating preferences for the calendar */
		   'show_next_prev'  => TRUE,
		   'next_prev_url'   => 'http://localhost/app/index.php/calendar/march',
		   'day_type' => 'long',
		   'month_type' => 'long',
		   
		   /* creating template for calendar that will be modified in file 'calendar.css' */
		   'template' => 
		   '{table_open}<table class="calendar">{/table_open}
			{week_day_cell}<th class="day_header">{week_day}</th>{/week_day_cell}
			{cal_cell_content}<span class="day_listing">{day}</span>&nbsp;&bull; {content}&nbsp;{/cal_cell_content}
			{cal_cell_content_today}<div class="today"><span class="day_listing">{day}</span>&bull; {content}</div>{/cal_cell_content_today}
			{cal_cell_no_content}<span class="day_listing">{day}</span>&nbsp;{/cal_cell_no_content}
			{cal_cell_no_content_today}<div class="today"><span class="day_listing">{day}</span></div>{/cal_cell_no_content_today}
			'
		 );
		
	
		$this->load->library('calendar', $preferences); /* loading calendar library and variable 'preferences' */
		echo $this->calendar->generate($this->uri->segment(3), $this->uri->segment(4)); /* retrieves the next segment, ex: index(), march() */
	
		
	}
	
	/* March 2016 */
	
	public function march() {
		$this->load->view("site_header");
		$this->load->view('calendar_view');
		$this->load->view("site_footer");
	
		$preferences = array ( /* generating preferences for the calendar */
		   'show_next_prev'  => TRUE,
		   'next_prev_url'   => 'http://localhost/app/index.php/calendar/april',
		   'day_type' => 'long',
		   'month_type' => 'long',
		   
		   /* creating template for calendar that will be modified in file 'calendar.css' */
		   
		   'template' => 
		   '{table_open}<table class="calendar">{/table_open}
			{week_day_cell}<th class="day_header">{week_day}</th>{/week_day_cell}
			{cal_cell_content}<span class="day_listing">{day}</span>&nbsp;&bull; {content}&nbsp;{/cal_cell_content}
			{cal_cell_content_today}<div class="today"><span class="day_listing">{day}</span>&bull; {content}</div>{/cal_cell_content_today}
			{cal_cell_no_content}<span class="day_listing">{day}</span>&nbsp;{/cal_cell_no_content}
			{cal_cell_no_content_today}<div class="today"><span class="day_listing">{day}</span></div>{/cal_cell_no_content_today}
			'
		 );

		$this->load->library('calendar', $preferences);

		echo $this->calendar->generate($this->uri->segment(3), $this->uri->segment(4));
	
	}
	
	/* April 2016 */

	public function april() {
		$this->load->view("site_header");
		$this->load->view('calendar_view');
		$this->load->view("site_footer");
	
		$preferences = array ( /* generating preferences for the calendar */
		   'show_next_prev'  => TRUE,
		   'next_prev_url'   => 'http://localhost/app/index.php/calendar/april', /* going back to previous url instead of forward */
		   'day_type' => 'long',
		   'month_type' => 'long',
		   
		   /* creating template for calendar that will be modified in file 'calendar.css' */
		   
		   'template' => 
		   '{table_open}<table class="calendar">{/table_open}
			{week_day_cell}<th class="day_header">{week_day}</th>{/week_day_cell}
			{cal_cell_content}<span class="day_listing">{day}</span>&nbsp;&bull; {content}&nbsp;{/cal_cell_content}
			{cal_cell_content_today}<div class="today"><span class="day_listing">{day}</span>&bull; {content}</div>{/cal_cell_content_today}
			{cal_cell_no_content}<span class="day_listing">{day}</span>&nbsp;{/cal_cell_no_content}
			{cal_cell_no_content_today}<div class="today"><span class="day_listing">{day}</span></div>{/cal_cell_no_content_today}
			'
		 );

		$this->load->library('calendar', $preferences);

		echo $this->calendar->generate($this->uri->segment(3), $this->uri->segment(4));
	
	}
	
}
