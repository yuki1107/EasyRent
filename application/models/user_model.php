<?php
class User_model extends CI_Model {

	 function __construct(){
	   parent::__construct(); 
	   $this->load->model('User');
	   $this->load->database();
     }

	function insert($user) {
		return $this->db->insert('users',$user);
	}
	
}
?>