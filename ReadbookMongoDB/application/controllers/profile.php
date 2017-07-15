<?php
class profile extends CI_Controller
{
	public function __construct(){
        parent::__construct();
        $this->load->helper(array('form','url','html'));
        $this->load->library(array('session', 'form_validation'));
       // $this->load->database();
        $this->load->model('user_model');
        $this->load->library('mongo_db', array('activate'=>'default'),'mongo_db');
	}
	
	function index(){
//$result['id']= $this->session->userdata('uid');
$result['uname']= $this->session->userdata('uname');
//echo $result['uname'];
$this->load->view('profile_view');
}



}