<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookingController extends CI_Controller {

	
	public function showBookingForm($data=NULL)
	{
		$this->load->view('bookingform',$data);
	}
	public function processBooking()
	{
		$user['PickupDate']=$_POST['pickup_date'];
		$user['PickupTime']=$_POST['pickup_time'];
		$user['PickupPlace']=$_POST['pickup_place'];
		$user['DropoffPlace']=$_POST['dropoff_place'];
		$user['SpecialInstruction']=$_POST['specialinstr'];
		$this->load->model('booking');
		$result = $this->booking->saveBooking($user);
		if($result)
			$this->load->view("bookingSuccess",array('success' => "BOOKED SUCCESSFULLY!!" ));
         else
         	$this->showBookingForm(array('failure' => "Failed to book! Try again!" ));
         }
		
		
}
