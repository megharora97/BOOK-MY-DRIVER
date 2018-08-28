<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_model extends CI_Model {
	public function __construct()
	{
		$this->load->database();

	}

     function addStudent($student)
	{   
		 return $this->db->insert('cars',$student);
	}
	 function viewStudent()
	{
		
	}
	 function viewStudents()
	{
      
	}
	 function editStudent()
	{
		
	}
	
	function deleteStudent()
	{
		
	}
}
