<?php
    /**
     * Created by PhpStorm.
     * User: scott
     * Date: 25/03/16
     * Time: 3:03 PM
     */
class Timetable extends CI_Model {
    private $xml;
    private $daysOfWeek;
    private $courses;
    private $timeslots;

    public function __construct() {

        $this->xml = simplexml_load_file(DATAPATH . 'timetable' . XMLSUFFIX, "SimpleXMLElement", LIBXML_NOENT);

        //populate daysOfWeek array from days.xml
        foreach($this->xml->days->day as $day) {
            foreach($day->booking as $bookings) {
                $booking = array();
                $booking['room'] = (string) $bookings->room;
                $booking['dayofweek'] = (string) $day['code'];
                $booking['time'] = (string) $bookings->time;
                $booking['coursename'] = (string) $bookings->coursename;
                $booking['instr'] = (string) $bookings->instr;
                $booking['type'] = (string) $bookings->type;
                $this->daysOfWeek[] = new Booking($booking);

            }
        }

        //populates courses array from courses.xml
        foreach($this->xml->courses->course as $course) {
            foreach($course->booking as $bookings) {
                $booking = array();
                $booking['room'] = (string) $bookings->room;
                $booking['dayofweek'] = (string) $bookings->dayofweek;
                $booking['time'] = (string) $bookings->time;
                $booking['coursename'] = (string) $course['name'];
                $booking['instr'] = (string) $bookings->instr;
                $booking['type'] = (string) $bookings->type;
                $this->courses[] = new Booking($booking);

            }
        }

        //populates timeslots array from timeslots.xml
        foreach($this->xml->timeslots->timeslot as $timeslot) {
            foreach($timeslot->booking as $bookings) {
                $booking = array();
                $booking['room'] = (string) $bookings->room;
                $booking['dayofweek'] = (string) (string) $bookings->dayofweek;
                $booking['time'] = (string) $timeslot['time'];
                $booking['coursename'] = (string) $bookings->coursename;
                $booking['instr'] = (string) $bookings->instr;
                $booking['type'] = (string) $bookings->type;
                $this->timeslots[] = new Booking($booking);

            }
        }

    }

    // Get a list of days to populate dropdown
    public function getDaysOfTheWeek() {
        return $this->daysOfWeek;
    }

    // Get a list of courses to populate dropdown
    public function getCourses() {
       return $this->courses;
    }

    // Get a list of timeslots to populate dropdown
    public function getTimeslots() {
        return $this->timeslots;
    }

    public function getDaysDropdown() {
        return array('Monday' => 'Monday',
                    'Tuesday' => 'Tuesday',
                    'Wednesday' => 'Wednesday',
                    'Thursday' => 'Thursday',
                    'Friday' => 'Friday'
                    );
    }

    public function getTimeslotDropdown(){
        return array (
            '8:30' => '8:30',
            '9:30' => '9:30',
            '10:30' => '10:30',
            '11:30' => '11:30',
            '12:30' => '12:30',
            '13:30' => '13:30',
            '14:30' => '14:30',
            '15:30' => '15:30',
        );
    }

}



class Booking extends CI_Model {
    public $room;
    public $day;
    public $time;
    public $name;
    public $instructor;
    public $type;

    public function __construct($booking) {
        $this->room = $booking['room'];
        $this->day = $booking['dayofweek'];
        $this->time = $booking['time'];
        $this->name = $booking['coursename'];
        $this->instructor = $booking['instr'];
        $this->type = $booking['type'];
    }
}