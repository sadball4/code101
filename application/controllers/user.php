<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('user_model'); //เอาไฟล์ user_model มาจาก model ที่สร้างไว้
    }


    public function addform(){
        $this->load->view('user/addform_view');
    }


    public function add_save_form(){
        $data_insert = array(
            'name' => $this->input->post('name'),
            'add'  => $this->input->post('address'),
            'tel'  => $this->input->post('tel'),
            'email'   => $this->input->post('email'),
            'facebook' =>$this->input->post('facebook'),
            'line' =>$this->input->post('line') //สร้างตัวแปบค่าที่ส่งมา


        );
        

        $this->user_model->add_save_database($data_insert); //เรียกใช้ function add_save_database // function add_save_database ใช้คำสั่ง insert ข้อมูลเข้าฐานข้อมูล แล้วเรียก array data_insert นำข้อมูลที่ส่งมาจาก form มาใส่

        echo "<br>OK";
        

    }

    public function addform2(){
        $this->load->view('user/addform_view_2');
    }


    public function add_save_form2(){
        $data_insert = array(
            'username' => $this->input->post('username'),
            'password'  => $this->input->post('password'),
            'name'  => $this->input->post('name'),
            'age'   => $this->input->post('age'),
            'birthday' =>$this->input->post('birthday')


        );
        
        $this->user_model->add_save_database2($data_insert); //เรียกใช้ function add_save_database // function add_save_database ใช้คำสั่ง insert ข้อมูลเข้าฐานข้อมูล แล้วเรียก array data_insert นำข้อมูลที่ส่งมาจาก form มาใส่

        echo "<br>OK";        

    }
    
    public function get(){
        $data['data_user']=$this->user_model->get();
        $this->load->view('user/get_view',$data);

    }
}