<?php
class singleblog extends CI_Controller
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
 }
 function show($id){
$data['blogs'] = $this->user_model->get_blog_details($id);
$this->load->view('singleblog_view', $data); 
}

}
?>