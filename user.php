<?php
class User extends CI_Model{
	function __construct(){
		$this->load->database();
	}
	function addUser($user)
	{
		return $this->db->insert('User',$user);
	}
	function sendMessage($Message)
	{
		return $this->db->insert('Message',$Message);
	}
	function checkLogin($user)
	{
		$Email=$user['Email'];
		$Password=$user['Password'];
		$sql="SELECT * from driver.user where Email='$Email' and Password='$Password'";
		$query = $this->db->query($sql);
		foreach ($query->result_array() as $row)
			{
        		if($row['ID'])
        			return $row;
			}
			return false;
	}
	
}