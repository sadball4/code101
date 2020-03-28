<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		echo "Home";
    }
    public function get()
    {
        echo "Thearayuts";
    }
    public function input()
    {
        echo "input";
    }
    public function map()
    {
        echo "map1<br>";
        $this->index();
        echo "<br>map2";
    }
}
