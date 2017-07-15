<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
	
	//insert user into collection
	function insert_user_mongo($data, $collection){
	    return  $this->mongo_db->insert($collection, $data);	
		}

	//check username and password for login
	function get_user($username, $pwd){
	return $this->mongo_db->get_where('users', array('username' => $username, 'password'=>$pwd));
	}

	//update user information
	function update_user($data){  
		$updated = $this->mongo_db->where('username', $this->session->userdata('uusername'))->set($data)->update('users');
    }

	//read books
	function read_books(){
		return $this->mongo_db->get('books');
	}

    //read single book
	function get_book_details($id){
		return $this->mongo_db->where(array('id' => $id))->get('books');
    }

    //read blogs
	function read_blogs(){
		return $this->mongo_db->get('blog');
	}

    //read single blog
	function get_blog_details($id){
		return $this->mongo_db->where(array('id' => $id))->get('blog');
    }

    //read books with specific name
    function read_booksBN($bname){
    	return $this->mongo_db->like('name', $bname)->get('books');
		//return $this->mongo_db->get_where('books', array('name' => $bname));
	}

    //read books with specific author
    function read_booksAN($aname){
		return $this->mongo_db->get_where('books', array('author' => $aname));
	}

	 //read books from specific category
    function read_booksBC($bcategory){
		return $this->mongo_db->get_where('books', array('category' => $bcategory));
	}

	//add single book into cart
	function get_book_by_id($id){
		return $this->mongo_db->where(array('id' => $id))->get('books');
	}

	//read books
	function read_cart($currUser){
		return $this->mongo_db->get_where('cart', array('userID' => $currUser));
	}

	//write to cart
	function write_to_cart($data){
     	return  $this->mongo_db->insert('cart', $data);	
	}

	//remove all from cart for specific user
    function empty_cart($currUser){
 		$this->mongo_db->delete_all('cart', $data = array('userID' => $currUser));
    }

	//submit order into table 'purchased'
	function submit_order($currUser){
		$query = $this->mongo_db->get_where('cart', array('userID' => $currUser));
        foreach ($query as $row) {
          $this->mongo_db->insert('purchased', $row);
    	}
    }

    function insert_email($data){
    	 return  $this->mongo_db->insert('contact', $data);
    }


}
?>