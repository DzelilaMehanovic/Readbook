<?php
class editprofile extends CI_Controller
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
        // set form validation rules
        $this->form_validation->set_rules('ename', 'Name', 'trim|required|alpha|min_length[3]|max_length[30]');
        $this->form_validation->set_rules('esurname', 'Surname', 'trim|required|alpha|min_length[3]|max_length[30]');
        $this->form_validation->set_rules('eusername', 'Username', 'trim|required|alpha|min_length[3]|max_length[30]');
        $this->form_validation->set_rules('epassword', 'Password', 'trim|required');  
        $this->form_validation->set_rules('eemail', 'Email', 'trim|required|valid_email');

        // submit
        if ($this->form_validation->run() == FALSE) {
            // fails
            $this->load->view('editprofile_view');
        }
        else{
           $username = $this->input->post('eusername');
            $password = $this->input->post('epassword');
            //edit user details into db
            $dataE = array(
                //'id'=> $this->session->userdata('uid'),
                'name' => $this->input->post('ename'),
                'surname' => $this->input->post('esurname'),
                'username' => $this->input->post('eusername'),
                'password' => $this->input->post('epassword'),
                'email' => $this->input->post('eemail'),
            );

        $this->user_model->update_user($dataE);       
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
               redirect('profile');
           }
            
            else{
                // error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
                redirect('profile');
            }//else
        }

    }
}
?>