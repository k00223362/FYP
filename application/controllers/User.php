<?php 

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('User_Model');
        $this->load->library('session');
        $this->load->model('Notice_Model');
        $this->load->helper('html');
        $this->load->helper('url');
        
	}

	public function index() {
		//capture an array of all notices 
	$this->load->view('index');
	}
    	public function doindex() {
		$this->load->view('index');
	}
	
	public function doabout_us() {
		$this->load->view('about_us');
	}
    public function doUserArticles() {
		$data["AllNotices"] = $this->Notice_Model->getAllNotices();	
		$noticeData = array('AllNoticeData'  => $data["AllNotices"]);
		$this->session->set_userdata($noticeData);	
		$this->load->view('UserArticles');
	}
    public function doAll_Projects() {
		$this->load->view('All_Projects');
	}
	public function doRegister() {
		$this->load->view('Create_new_account');
	}
	public function handleInsert() {
		$this->load->view('User/insertUser');
	}
	   
     public function handlelogon(){
		$this->load->view("Login");
	} 
	public function logout(){
		$this->session->sess_destroy();
		$this->load->view("homePage");
	}
     public function dobirdfeeder(){
		$this->load->view("birdfeeder");
	} 
	
	public function doContact_Us() {
		$this->load->view('Contact_Us');
	}
    public function doDisqus(){
		$this->load->view("disqus");
	}
     public function doplasticboats(){
		$this->load->view("plasticboats");
	}
    public function dobottlehouse(){
		$this->load->view("bottlehouse");
	}
	public function docurrentprojects(){
		$this->load->view("currentprojects");
	} 
	public function dopastprojects(){
		$this->load->view("pastprojects");
	} 
	public function doplasticroads(){
		$this->load->view("plasticroads");
	} 
			public function getUser() {
                               
    //get customers name and password from form
     $UserName = $_GET['UserName'];
     $password = $_GET['Password'];
 
    //pass $UserName, $password to model and get back an array of user details
               
     $data['User'] = $this->User_Model->getUser($UserName,$password);
                                 
    //if a user if found, display their details
    //otherwise display an error plage with an appropriate error message
    
     if ($data['User'] != null) {
		//put user id into session - need when adding notice
			$userData = array('user'  => $data['User']);
			$this->session->set_userdata($userData);
			$user= $data['User'];
			
			//capture an array of all notices for that user
			$data["AllNotices"] = $this->Notice_Model->getNoticesByUserID($user['UserID']);	
			$noticeData = array('noticeData'  => $data["AllNotices"]);
			$this->session->set_userdata($noticeData);	
		
          	$this->load->view("usersHomePage");
                               
	}//end if
     else {
        $data['msg'] = "Not found";
        $this->load->view('msgpage', $data);
    }//end else
   
    }//end function
	
	public function RegisterUser(){
		$UserName = $_POST['UserName'];
		$password = $_POST['Password'];

		$user = array(
			"UserName"=> $_POST["UserName"],
			"Password"=>$_POST["Password"],
			"FirstName"=>$_POST["FirstName"],
			"SurName"=>$_POST["SurName"],
			"Mobile"=>$_POST["Mobile"],
			"AddressLine1"=>$_POST["AddressLine1"],
			"AddressLine2"=>$_POST["AddressLine2"],
			"AddressLine3"=>$_POST["AddressLine3"],
			"Email"=>$_POST["email"]
		);
		$flag = $this->User_Model->insertUser($user);
	if($flag){
		
			//pass $UserName, $password to model and get back an array of user details
			$data['User'] = $this->User_Model->getUser($UserName,$password);
			//if a user if found, display their details
			//otherwise display an error plage with an appropriate error message
			if ($data['User'] != null) {
				//put user id into session - need when adding notice
				$userData = array('user'  => $data['User']);
				$this->session->set_userdata($userData);
				$user= $data['User'];
				//capture an array of all notices for that user
				$data["AllNotices"] = $this->Notice_Model->getNoticesByUserID($user['UserID']);	
				$noticeData = array('noticeData'  => $data["AllNotices"]);
				$this->session->set_userdata($noticeData);	
				$this->load->view("usersHomePage");
			}
			
		}else{
			$this->handleflag($flag);
		}
	}
    
        public function ContactUs(){
		
		$contact = array(
		
			"FirstName"=>$_POST["FirstName"],
			"SurName"=>$_POST["SurName"],
			"Mobile"=>$_POST["Mobile"],
			"Email"=>$_POST["email"],
			"Message"=>$_POST["Message"]
		);
		$flag = $this->User_Model->SaveContact($contact);
	if($flag){
		
				$this->load->view("contactresponse");
			}
			
		else{
			$this->handleflag($flag);
		}
	}
	
	public function getUpdateDetails ($userid) {
       	$data['User'] = $this->User_Model->getUserByID($userid);
        if ( $data['User'] != null)
            $this->load->view('updateUserDetails', $data);
        else {
			$data['msg'] = "Error on user load";
		 	$this->load->view('msgpage', $data);
		 }
     }
    
    public function getDrillDownNotice($noticeId) {
        $data['notice'] = $this->Notice_Model->getNotice($noticeId);
        if ($data['notice']!= null)
            $this->load->view('notice/noticeDetails', $data);
        else {
            $data['msg'] ="The Notice You Searched for could not be found, please try again";
            $this->load->view('msgpage', $data);
        }//end else
    }//end getdrilldownfunction
        
      public function deleteNotice($noticeId) {
          if($this->session->userdata('user')){
          $userId = $user['UserID'];
      }
if ($this->Notice_Model->deleteNotice($noticeId)){
    $data["AllAnotices"] = $this->Notice_Model->getNoticesByUserID($user['UserID']);
    $noticeData = array('noticeData' => $data["AllNotices"]);
    $this->session->set_userdata($noticeData);
    $this->load->view('usersHomePage');
} else {
    
    
    $data['msg']="error on delete in notice";
    $this->load->view('msgpage');
}
      }
          
	public function handleflag($flag){
		if($flag){
			$data["msg"] = "update saved in database";
		}else{
			$data["msg"] = "Error in database";
		}
		$this->load->view("msgpage",$data);
	}
	
	public function saveUserDetails($userID) {
		//prepare an array of user info submitted via the POST 
        $user = array(
			"UserName"=> $_POST["UserName"],
			"Password"=>$_POST["Password"],
			"FirstName"=>$_POST["FirstName"],
			"SurName"=>$_POST["SurName"],
			"Mobile"=>$_POST["Mobile"],
			"AddressLine1"=>$_POST["AddressLine1"],
			"AddressLine2"=>$_POST["AddressLine2"],
			"AddressLine3"=>$_POST["AddressLine3"],
			"Email"=>$_POST["email"],
			"UserID"=>$userID
		);
   		//call the function in the model to do the update and get back a boolean flag	
	    //$flag holds true/false value depending on whether the update was successful or not
        $flag = $this->User_Model->updateUser($user);
		//pass $flag to function to determine whether success/failure page should be displayed
        if($flag){
			$data['User'] = $user;
			//update data in the session 
        $this->load->view("usersHomePage",$data);
		} else {
			$data['msg'] = "error on update to user details";
			$this->load->view('msgpage', $data);
		}
	}
}