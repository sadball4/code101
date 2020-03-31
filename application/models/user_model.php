<?php 
class User_model extends CI_Model {

    public function add_save_database($data){
        $this->db->insert('my_db',$data); //db ใช้เรียก database แล้วใช้คำสั่ง insert ในการเพิ่มข้อมูล
    }
}
?>