<?php
class books extends CI_Controller
{
 public function __construct(){
        parent::__construct();
        $this->load->helper(array('form','url','html'));
        $this->load->library(array('session', 'form_validation'));
       // $this->load->database();
        $this->load->model('user_model');
        $this->load->library('mongo_db', array('activate'=>'default'),'mongo_db');
 }
 
 function index() {

if (isset($_POST['searchBN'])){
$bname = $_POST['bookNameS'];
$data['books'] = $this->user_model->read_booksBN($bname);
$this->load->view('books_view', $data);
}


else if (isset($_POST['searchAN'])){
$aname = $_POST['authorNameS'];
$data['books'] = $this->user_model->read_booksAN($aname);
$this->load->view('books_view', $data);
}


else if (isset($_POST['searchBC'])){
$bcategory = $_POST['bookCategoryS'];
$data['books'] = $this->user_model->read_booksBC($bcategory);
$this->load->view('books_view', $data);
}

else if (isset($_POST['searchAll'])){
$data['books']  = $this->user_model->read_books();
$this->load->view('books_view', $data);
}


else{
$data['books']  = $this->user_model->read_books();
$this->load->view('books_view', $data);
}

}
}
?>