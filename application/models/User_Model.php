<?php

class User_Model extends CI_Model {

	public function __construct(){
		parent::__construct(); //call constructor in parent class
		$this->load->database(); //load the database
	} //end constructor

	//function to insert a complete user record all updated info contained in $user 
	public function insertUser($User){
		$flag = false;
		$this->db->insert('User',$User);
		$affectedRows = $this->db->affected_rows();
		if($affectedRows==0){
			$flag = false;
		}else{
			$flag= true;
		}
		return $flag;
	}

public function getUser($UserName,$password){
   $this->db->where('UserName',$UserName); 
   $this->db->where('password',$password); 
   $resultSet = $this->db->get('User');
    
    if($resultSet->num_rows() > 0) {
        
        $row= $resultSet->row_array();
        return $row;
            
    }
    
    else
        return null;
    
    
    
}
	
  public function SaveContact($contact){
		$flag = false;
		$this->db->insert('contactus',$contact);
		$affectedRows = $this->db->affected_rows();
		if($affectedRows==0){
			$flag = false;
		}else{
			$flag= true;
		}
		return $flag;
	}  
    
    
    
    
    
    
    public function getUserByID($userid) {                           
		      
$resultSet = $this->db->get_where('user',array('userid'=>$userid)); //get resultSet
		if ($resultSet->num_rows() > 0) {
			$row = $resultSet->row_array();   //return matching row from DB to controller
			return $row;
        }//end if
        else
            return null;
	}

	//function to update a complete user record all updated info contained in $user 
	public function updateUser($user) {
		//return true/false depending on whether the update was successful or not
        if ($this->db->where('UserID', $user['UserID']) && $this->db->update('user',$user))
            return true;
        else 
            return false;
    }



	
	}
?>