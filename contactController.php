<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contactController extends CI_Controller {

	
	public function showContactForm()
	{
		$this->load->view('contactform');
	}
	public function processContact()
	{
		$user['Name']=$_POST['Name'];
		$user['Email']=$_POST['Email'];
		$user['Address']=$_POST['Address'];
		$user['Mobileno']=$_POST['Mobileno'];
		$user['Message']=$_POST['Message'];
		$this->load->model('user');
		$result = $this->user->sendMessage($user);
		if($result)
			$this->load->view("messageSuccess",array('success' => "Message sent SUCCESSFULLY!!" ));
         else
         	$this->load->view('contactform',$arrayName = array('failure' => "Failed to send Message!"));
         }
		
		
}
