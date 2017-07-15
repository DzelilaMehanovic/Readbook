<?php
class signup extends CI_Controller{
 public function __construct(){
       parent::__construct();
        $this->load->helper(array('url','html'));
        $this->load->library(array('session', 'form_validation'));
       // $this->load->database();
        $this->load->model('user_model');
        $this->load->library('mongo_db', array('activate'=>'default'),'mongo_db');
 }

    function index()
    {
        // set form validation rules
        $this->form_validation->set_rules('name', 'Name', 'trim|required|alpha|min_length[3]|max_length[30]');
        $this->form_validation->set_rules('surname', 'Surname', 'trim|required|alpha|min_length[3]|max_length[30]');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|alpha|min_length[3]|max_length[30]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');  
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        //$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[cpassword]|md5');
        //$this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required');

        // submit
        if ($this->form_validation->run() == FALSE)
        {
            // fails
            $this->load->view('signup_view');
        }
        else
        {
            //insert user details into db
            $data = array(
                'name' => $this->input->post('name'),
                'surname' => $this->input->post('surname'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'email' => $this->input->post('email'),
            );
            if ($this->user_model->insert_user_mongo($data, 'users')){
            $this->session->set_flashdata('msg','<div class="alert alert-success text-center">You are Successfully Registered! Please login to access your Profile!</div>');
                redirect('login/index');
            }
            else
            {
                // error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
                redirect('signup/index');
            }
        }
    }
}
?>