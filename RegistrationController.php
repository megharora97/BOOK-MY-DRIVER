<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistrationController extends CI_Controller {

	
	public function showRegistrationForm($data=NULL)
	{
		$this->load->view('registrationform',$data);
	}
	public function processRegistration()
	{
		$user['Name']=$_POST['Name'];
		$user['Email']=$_POST['Email'];
		$user['Mobile']=$_POST['Mobile'];
		$user['Password']=$_POST['Password'];
		$this->load->model('user');
		$result = $this->user->addUser($user);
		if($result)
			$this->load->view("registrationoSuccess",array('success' => "REGISTERED SUCCESSFULLY!!" ));
         else
         	$this->showRegistrationForm(array('failure' => "Failed to register! Try again!" ));
         }
		
		
}
