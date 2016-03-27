<?php

/**
 * core/MY_Controller.php
 *
 * Default application controller.
 *
 * Master view tempate providing the overall webpage layout and placeholders
 * for the content on the page.
 * -------------------------------------------------------------------------
 */
class MY_Controller extends CI_Controller {

	protected $data = array();	  // parameters for view components
	protected $id;				  // identifier for our content

	/**
	 * Constructor.
	 * Establish view parameters & load common helpers
	 */
	function __construct() {
        parent::__construct();
        $this->data = array();
        $this->data['title'] = 'title';             // default title
        $this->data['pagetitle'] = 'pagetitle'; 	// default page
        $this->load->library('parser');
	}

	/**
	 * Render this page
	 */
	function render() {

        // load in the page content
        $this->data['content'] = $this->parser->parse($this->data['pagebody'], $this->data, true);
        $this->data['data'] = $this->data;

        // load the template
        $this->parser->parse('base/_template', $this->data);
	}
}
