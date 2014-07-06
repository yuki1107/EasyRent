<?php

class User  {
	public $id;
	public $first_name;
	public $last_name;
	public $password;  
	public $email;	
	public $phone;
	public $username;
	
	public function comparePassword($enterPassword){
		return ($enterPassword == $this->password);
	}	
}