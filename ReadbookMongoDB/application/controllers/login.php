<?php
class login extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form','url','html'));
        $this->load->library(array('session', 'form_validation'));
       // $this->load->database();
        $this->load->model('user_model');
        $this->load->library('mongo_db', array('activate'=>'default'),'mongo_db');
    }
    public function index(){
        // get form input
        $username = $this->input->post("username");
        $password = $this->input->post("password");

        // form validation
        $this->form_validation->set_rules("username", "Username", "trim|required");
        $this->form_validation->set_rules("password", "Password", "trim|required");
        
        if ($this->form_validation->run() == FALSE)
        {
            // validation fail
            $this->load->view('login_view');
        }
        else{
            // check for user credentials
            $uresult = $this->user_model->get_user($username, $password);
            if (count($uresult) > 0){
        foreach ($uresult as $res1){ 
                // set session
            $sess_data = array('login' => TRUE,
                 'uusername' => $res1['username'],
                 'uid' => $res1['_id'],
                   'uname' => $res1['name'],
                    'usurname' => $res1['surname'],
                     'upassword' => $res1['password'],
                      'uemail' => $res1['email']
                  );
        }

                $this->session->set_userdata($sess_data);
                redirect("home");

//$this->load->view('home_view');
}
        
            else
            {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Wrong Username or Password!</div>');
                redirect('login/index');
            }
        }
      
    }
}