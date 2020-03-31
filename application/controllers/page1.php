<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page1 extends CI_Controller {
	public function index()
	{
		$this->load->view('page1');
    }
    public function page2()
	{
		$this->load->view('page2');
    }
    public function page3()
	{
		$this->load->view('page3');
    }


}
