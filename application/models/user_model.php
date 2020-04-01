<?php 
class User_model extends CI_Model {

    public function add_save_database($data){
        $this->db->insert('my_db',$data); //db ใช้เรียก database แล้วใช้คำสั่ง insert ในการเพิ่มข้อมูล
    }
    public function add_save_database2($data){
        $this->db->insert('user_db',$data); //db ใช้เรียก database แล้วใช้คำสั่ง insert ในการเพิ่มข้อมูล
    }
    public function get(){
        $query = $this->db->get('user_db'); //select * from user_db;
        $row = $query->num_rows();
        if($row == 0){
            return false;
        }

        return $query;

    }

}
?>