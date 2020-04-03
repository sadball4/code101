<?php 
class User_model extends CI_Model {

    //--------------  form address --------------//

    public function add_save_database($data){
        $this->db->insert('my_db',$data); //db ใช้เรียก database แล้วใช้คำสั่ง insert ในการเพิ่มข้อมูล
    }

    public function get_2(){
        $query_2 = $this->db->get('my_db'); //select * from user_db;
        $row_2 = $query_2->num_rows();
        if($row_2 == 0){
            return false; // ถ้าค่าของข้อมูลว่างเปล่าให้แสดงออก false แล้วกลับไปตรวจสอบใหม่
        }

        return $query_2; // ถ้าไม่เข้าเงื่อนไขเท่ากับ 0 ให้แสดงข้อมูลออกมา

    }

    public function get_by_add_2($tel){
        $this->db->where('tel',$tel);
       $query_2 = $this->db->get('my_db');
       $row_2 = $query_2->num_rows();
       if($row_2 != 1){
           return false;
       }

       return  $query_2->row_array();


    } 

    public function updatesave_2(){
        $data_2 = array(
            'name' => $this->input->post('name'),
            'add'  => $this->input->post('address'),
            'tel'  => $this->input->post('tel'),
            'email'   => $this->input->post('email'),
            'facebook' =>$this->input->post('facebook'),
            'line' =>$this->input->post('line')

        );
        $this->db->where('tel',$this->input->post('main_tel'));
        $this->db->set($data_2);
        $this->db->update('my_db');
        return true;
    }

    public function delete_2($tel){
        //delete 
        $this->db->where('tel',$tel); // where username = '$username'
        $this->db->delete('my_db');  // นำค่ามา delete

        return true;

    }

    //--------------  form Username --------------//

    public function add_save_database2($data){
        $this->db->insert('user_db',$data); //db ใช้เรียก database แล้วใช้คำสั่ง insert ในการเพิ่มข้อมูล
    }

    public function get(){
        $query = $this->db->get('user_db'); //select * from user_db;
        $row = $query->num_rows();
        if($row == 0){
            return false; // ถ้าค่าของข้อมูลว่างเปล่าให้แสดงออก false แล้วกลับไปตรวจสอบใหม่
        }

        return $query; // ถ้าไม่เข้าเงื่อนไขเท่ากับ 0 ให้แสดงข้อมูลออกมา

    }

    public function delete($username){
        //delete 
        $this->db->where('username',$username); // where username = '$username'
        $this->db->delete('user_db');  // นำค่ามา delete

        return true;

    }
 
    public function get_by_username($username){
        $this->db->where('username',$username);
       $query = $this->db->get('user_db');
       $row = $query->num_rows();
       if($row != 1){
           return false;
       }

       return  $query->row_array();


    } 

    public function updatesave(){
        $data = array(
            'username' => $this->input->post('username'),
            'password'  => $this->input->post('password'),
            'name'  => $this->input->post('name'),
            'age'   => $this->input->post('age'),
            'birthday' =>$this->input->post('birthday')
        );
        $this->db->where('username',$this->input->post('main_username'));
        $this->db->set($data);
        $this->db->update('user_db');
        return true;
    }


}
?>