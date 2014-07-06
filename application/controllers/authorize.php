<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authorize extends CI_Controller {

    function __construct() {
    		// Call the Controller constructor
	    	parent::__construct();
    		$this->load->library('form_validation');
			$this->load->model('user');
			$this->load->model('user_model');
			$this->load->helper(array('form','url'));
	    	session_start();
    }

	
	public function registerPage(){
		$this->load->view('login_register_page');
	}

	
	public function register(){
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[20]|matches[passconf]');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|min_length[6]|max_length[20]');
		$this->form_validation->set_rules('first', 'First', "required");
		$this->form_validation->set_rules('last', 'last', "required");
		$this->form_validation->set_rules('email', 'Email', "required|is_unique[users.email]|valid_email");
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
			
			$this->load->view('home_page');
		}	
	}
	
	public function login(){
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('home_page');
		}
		else  
		{
			
			$username = $this->input->post('username');
			$enterPwd = $this->input->post('password');
			
			$user = $this->user_model->read($username);
			if(isset($user) && $user->comparePassword($enterPwd)){
				$_SESSION['user'] = $user;				
				redirect('base/index');
			}else{
				$errMsg = "Incorrect User Name or Password!";
				$this->load->view('home_page', $errMsg);
			}
		}
	}
	
	public function comparePassword($password, $user){
		if(isset($password) && isset($user) && $user->password == $password){
			return true;
		}else{
			return false;
		}		
	}
	
	public function logout(){
		unset($_SESSION['user']);
		redirect('base\index');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */