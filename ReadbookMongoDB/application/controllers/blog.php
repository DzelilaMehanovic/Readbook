<?php
class blog extends CI_Controller
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
 $data['blogs'] = $this->user_model->read_blogs();
$this->load->view('blog_view', $data);
 }

}
?>