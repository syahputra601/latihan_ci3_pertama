<?php
class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Memuat helper URL
        $this->load->helper('url');
        // Load model User_model
        $this->load->model('User_model');
    }

    // Fungsi untuk menampilkan daftar pengguna
    public function index() {
        $data['users'] = $this->User_model->get_users();  // Ambil data pengguna dari model

        // Muat tampilan dan kirim data
        $this->load->view('user_list', $data);
    }

    // Menambahkan user baru
    public function create() {
        // print_r('test');die();
        $this->load->view('create_user');
    }

    public function store() {
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email')
        );
        $this->User_model->insert_users($data);
        // $this->User _model->insert_user($data);
        redirect('user');
    }

    // Mengedit data user
    public function edit($id) {
        $data['user'] = $this->User_model->get_user($id);
        $this->load->view('edit_user', $data);
    }

    public function update($id) {
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email')
        );
        $this->User_model->update_user($id, $data);
        redirect('user');
    }

    // Menghapus data user
    public function delete($id) {
        $this->User_model->delete_user($id);
        redirect('user');
    }

}
?>
