<?php
class singlebook extends CI_Controller
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
$data['books'] = $this->user_model->get_book_details($id);
$this->load->view('book_view', $data); 
}
}
?>