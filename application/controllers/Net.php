<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Net extends CI_Controller {

	//function __construct() {
    //    parent::__construct();
	//
	//	echo "";
    //    
    //}
	public function index()
	{
		echo "Thearayut Tancharoen";
	}
	public function get_view()
	{
		$this->load->view('home_view');
	}

	//function __destruct() {
    //    parent::__construct();
	//
	//	echo "";
    //    
	//}
	

}
