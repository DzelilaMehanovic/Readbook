<?php
class contactus extends CI_Controller
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
 $this->load->view('contactus_view');

    		if(isset($_POST['contact'])){
        // set form validation rules
        $this->form_validation->set_rules('name', 'Name', 'trim|required|alpha|min_length[3]|max_length[30]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('content', 'Content', 'trim|required|min_length[3]');

 // submit
        if ($this->form_validation->run() == FALSE){
            // fails
            $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Your message has not been sent. Please enter minimum 3 characters for name, valid email and message has to contain at least 3 characters. </div>');
              redirect('contactus');
              $this->index();
            //  $this->load->view('contactus_view');
        }
        else{
        $data = array(
                'name' => $this->input->post('name'),
                'phone'=>$this->input->post('phone'),
                'email' => $this->input->post('email'),
                'content' => $this->input->post('content'),
            );
		$this->user_model->insert_email($data);
		$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Your email is sent successfully</div>');
       redirect('contactus');
       $this->index();
    }

}

}
}
?>