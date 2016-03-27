<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

 	function __construct() {
        parent::__construct();
    }

	/**
	 * Index Page for this controller.
	 */
	public function index() {

		$this->data['pagebody'] = 'timetable';
		$this->data['title'] = 'Timetable';
		$this->data['pagetitle'] = 'Timetable';

		$this->load->model('timetable');

		// populate dropdown data
		$this->data['days'] = $this->timetable->getDaysOfTheWeek();
		$this->data['courses'] = $this->timetable->getCourses();
		$this->data['timeslots'] = $this->timetable->getTimeslots();

		// testing
		// print_r($this->timetable->getTimeslots());

		$this->render();
	}
}
