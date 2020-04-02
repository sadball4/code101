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
        
        redirect('user/get');


    }
    
    public function get(){
        $data['data_user']=$this->user_model->get();//เรียกใช้ model ที่ชื่อว่า user_model แล้วเรียกใช้ function get
        $this->load->view('user/get_view',$data);
    }

    public function delete($username){          //รับค่า username
        $this->user_model->delete($username);   

        redirect('user/get');
    }
    

    public function update($username){
        $data['data_user'] = $this->user_model->get_by_username($username); //เรียกใช้ function get_by_username จาก model user_model เรียกข้อมูล ของ  username แล้วเอามาเก็บไวใน $data
        $this->load->view('user/update_view',$data);// แล้วส่งไปที่หน้า update_view

    }

    public function updatesave(){
        $this->user_model->updatesave();

        redirect('user/get');

    }
}