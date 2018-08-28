<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loginController extends CI_Controller {

	
	public function showLoginForm($error=NULL)
	{
		$this->load->view('loginform',$error);
	}
	public function checkLogin()
	{
		$user['Email']=$_POST['Email'];
		$user['Password']=$_POST['Password'];
		$this->load->model('user');
		$result = $this->user->checkLogin($user);
		if($result){
			session_start();
			$_SESSION['userData'] = $result;
			header('Location:/');
		} else{
         	$error = array("error"=>"FAILED TO LOGIN!!");
         	$this->showLoginForm($error);
         	}
         }

   function logout(){
		session_start();
		unset($_SESSION['userData']);
		session_destroy();
		header('Location:/');
	}
		
		
}