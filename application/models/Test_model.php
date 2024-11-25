<?php

Class Test_model extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function get_users(){
        $query = $this->db->get('users');
        return $query->result();
    }

    public function get_user_test(){
        $query = $this->db->query("SELECT id, CONCAT(name, '_', email) as name_email FROM users where id = '3' ");
        // echo $this->db->last_query();die();
        return $query->result();
    }

    public function insert_users($data){
        $this->db->insert('users', $data);
        $var = $this->db->affected_rows();
        return $var;
    }

    public function get_user($id){
        $query = $this->db->get_where('users', array('id' => $id));
        return $query->row();
    }

    public function update_user($id, $data){
        $this->db->where('id', $id);
        return $this->db->update('users', $data);
    }

    public function delete($id){
        return $this->db->delete('users', array('id' => $id));
    }
}

?>