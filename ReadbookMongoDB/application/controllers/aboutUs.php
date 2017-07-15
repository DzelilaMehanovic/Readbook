<?php
class aboutUs extends CI_Controller
{
 public function __construct()
 {
  parent::__construct();
  $this->load->helper(array('url', 'html'));
  $this->load->library('session');
 }
 
 function index(){
   $this->load->view('about_us_view');
 }

}
?>