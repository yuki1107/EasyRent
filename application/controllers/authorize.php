<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authorize extends CI_Controller {

    function __construct() {
    		// Call the Controller constructor
	    	parent::__construct();
    		$this->load->library('form_validation');
			$this->load->model('user');
			$this->load->model('user_model');
	    	session_start();
    }

	public function index()
	{
		$this->load->view('login_register_page');
	}
	
	public function register(){
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('first', 'First', "required");
		$this->form_validation->set_rules('last', 'last', "required");
		$this->form_validation->set_rules('email', 'Email', "required");
		$this->form_validation->set_rules('phone', 'Phone', NULL);
		
	
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('login_register_page');
		}
		else  
		{
			$user = new User();
			$user->username = $this->input->post('username');
			$user->first_name = $this->input->post('first');
			$user->last_name = $this->input->post('last');
			$user->password = $this->input->post('password');
			$user->email = $this->input->post('email');
			$user->phone =$this->input->post('phone');
			
			$error = $this->user_model->insert($user);
			
			$this->load->view('login_register_page');
		}	
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */