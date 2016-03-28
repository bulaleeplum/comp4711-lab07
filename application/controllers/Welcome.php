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
		$this->data['pagetitle'] = 'Index';

		$this->load->model('timetable');

		// populate dropdown data
		$this->data['days'] = $this->timetable->getDaysOfTheWeek();
		$this->data['courses'] = $this->timetable->getCourses();
		$this->data['timeslots'] = $this->timetable->getTimeslots();

		$this->render();
	}

    /*
     * Get inputs from search form and get the results from the Timetable model.
     */
	function search () {
        $this->data['pagetitle'] = 'Search Result';
		$this->data['pagebody'] = 'timetable_search';

		$this->load->model('timetable');

        // Search form inputs
		$queryDay = $this->input->post('day');
		$queryTime= $this->input->post('time');

		$dayResult = $this->timetable->searchDaysOfTheWeek($queryDay, $queryTime);
		$courseResult = $this->timetable->searchCourses($queryDay, $queryTime);
		$timeslotResult = $this->timetable->searchTimeslots($queryDay, $queryTime);

        // Check if the search returns consistent data. If consistent, display 'bingo' and result.
        // Each facet should return a single booking and the three bookings should be the same.
        if (count($dayResult == 1 &&
                  $courseResult == 1 &&
                  $timeslotResult == 1) &&
            ($dayResult == $courseResult && $courseResult == $timeslotResult)) {
            $this->data['bingo'] = "Bingo!";
        } else {
            $this->data['bingo'] = "Error, no bingo.";
            // Turn the results into nothingness so no data displays
            $dayResult = array();
            $courseResult = array();
            $timeslotResult = array();
        }
        // Pass view parameters:
        $this->data['days'] = $dayResult;
        $this->data['courses'] = $courseResult;
        $this->data['timeslots'] = $timeslotResult;
        $this->render();
    }
}
