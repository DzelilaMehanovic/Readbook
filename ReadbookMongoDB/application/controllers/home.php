<?php
class home extends CI_Controller
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
$this->load->view('home_view');
}
 function logout(){
  // destroy session
        $data = array('login' => '', 'uname' => '', 'uid' => '');
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
  redirect('home');
 }
}
?>