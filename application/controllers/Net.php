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
	public function get()
	{
		$data['username'] = $this->input->post('username'); //รับค่า username มาแบบ array
		$data['password'] = $this->input->post('password'); //รับค่า ยฟหหไนพก มาแบบ array
		$data['name']=array('mm','asdf','jkl');
		$data['head']['data']="ok";
		$data['footer']['data']="b";
		$this->load->view('get_view',$data); // เมื่อรับค่ามาแล้วให้ส่งค่าไปที่หน้า get view ค่าที่ได้มาจะได้ username, password

		//echo $this->input->post('username');
		//echo "<br>";
		//echo $this->input->post('password');
		//echo "view_get ";
	}

	//function __destruct() {
    //    parent::__construct();
	//
	//	echo "";
    //    
	//}
	

}
