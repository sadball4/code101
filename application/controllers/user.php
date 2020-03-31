<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
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
        
        $this->load->model('user_model'); //เอาไฟล์ user_model มาจาก model ที่สร้างไว้

        $this->user_model->add_save_database($data_insert); //เรียกใช้ function add_save_database // function add_save_database ใช้คำสั่ง insert ข้อมูลเข้าฐานข้อมูล แล้วเรียก array data_insert นำข้อมูลที่ส่งมาจาก form มาใส่

        echo "<br>OK";
        

    }
}