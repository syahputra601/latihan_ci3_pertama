<?php
class User_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Fungsi untuk mengambil semua data pengguna
    public function get_users() {
        $query = $this->db->get('users');  // Ambil semua data dari tabel 'users'
        return $query->result();  // Kembalikan hasil sebagai array objek
    }

    public function get_user_test(){
        $query = $this->db->query("SELECT id, CONCAT(name, ' - ', email) as name_email from users where id = '3' ");
        return $query->result();
    }

    // Menyimpan data user baru
    public function insert_users($data) {
        return $this->db->insert('users', $data);
    }

    // Mengambil data user berdasarkan ID
    public function get_user($id) {
        $query = $this->db->get_where('users', array('id' => $id));
        return $query->row();
    }

    // Mengupdate data user berdasarkan ID
    public function update_user($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('users', $data);
    }

    // Menghapus data user berdasarkan ID
    public function delete_user($id) {
        return $this->db->delete('users', array('id' => $id));
    }

}
?>
