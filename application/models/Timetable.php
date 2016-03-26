<?php
    /**
     * Created by PhpStorm.
     * User: scott
     * Date: 25/03/16
     * Time: 3:03 PM
     */
class Timetable extends CI_Model {
    protected $xml;
    protected $daysofweek;

    public function __construct() {
        $this->xml = simplexml_load_file('data/timetable.xml');
        print_r($this->xml->days);
        foreach($this->xml->days as $day) {
            echo $day;
        }
    }

    public function getDaysOfWeek() {
        return $this->daysoftheweek;
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