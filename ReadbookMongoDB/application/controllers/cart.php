<?php
class cart extends CI_Controller
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
#if(null!=$this->session->userdata('uid')){
$currUser = $this->session->userdata('uid');
$data['books'] = $this->user_model->read_cart($currUser);    
$this->load->view('cart_view', $data);	
#}
}

 function add($id){
$link = $_SERVER['REQUEST_URI'];
$id = explode('/', $link);
$id = $id[5];
$currUser = $this->session->userdata('uid');


if(isset($_POST['addCart'])){
$books = $this->user_model->get_book_by_id($id);
/*$dataid = $this->user_model->getBookID($id);
$dataprice = $this->user_model->getBookPrice($id);
$dataname = $this->user_model->getBookName($id);*/
//insert user details into db
foreach($books as $product) {
$idata = array(
                'bookID' => $product['id'],
                'bookPrice' => $product['price'], 
                'bookName' => $product['name'],
                'userID'=>$this->session->userdata('uid'),
);
}
$this->user_model->write_to_cart($idata);
}
redirect('cart');
$this->index();	 
}

	function submit(){
$currUser = $this->session->userdata('uid');
$this->user_model->submit_order($currUser); 
$this->user_model->empty_cart($currUser);
redirect('cart');
$this->index();
}

function removeAllCart(){
$currUser = $this->session->userdata('uid');
$this->user_model->empty_cart($currUser);
redirect('cart');
$this->index();

}





}
?>