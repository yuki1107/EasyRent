<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Base extends CI_Controller {

    function __construct() {
    		// Call the Controller constructor
	    	parent::__construct();
    		$this->load->library('form_validation');
			$this->load->model('user');
			$this->load->model('user_model');
			$this->load->helper('url');
	    	session_start();
    }

	public function index()
	{
		$this->load->view('home_page');
	}
	
	public function rentingPage(){
		$this->load->view('renting_page');
	}
	
	public function needRoomatePage(){
		$this->load->view('need_roomate_page');
	}
	
	public function needRoomPage(){
		$this->load->view('need_room_page');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */