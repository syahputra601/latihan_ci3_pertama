<?php
class Test extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Memuat helper URL
        $this->load->helper('url');
        // Load model User_model
        $this->load->model('User_model');
        $this->load->model('Test_model');
        date_default_timezone_set("Asia/Jakarta");
    }

    // Fungsi untuk menampilkan daftar pengguna
    public function index() {
        $data['users'] = $this->Test_model->get_users();  // Ambil data pengguna dari model
        $data['test1'] = $this->Test_model->get_user_test();
        $data['dateNow'] = date('Y-m-d');//date('Y-m-d H:i:s')
		$data['timeNow'] = date('H:i:s');
        $data['datetimeNow'] = date('Y-m-d H:i:s');

        // Muat tampilan dan kirim data
        $this->load->view('home_v1', $data);
    }

    function test_alert(){
        $data_alert = $this->input->post('test_btn_alert');
        // print_r($data_alert);die();
        echo "<script>alert('Test Alert Pertama! ".$data_alert." ')</script>";
        redirect('test', 'refresh');
    }

    public function create(){
        $this->load->view('test_create_user');
    }

    public function store(){
        $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email')
        );
        $var = $this->Test_model->insert_users($data);
        // print_r($var);die();
        if($var == 1){
            // print_r(11);die();
            echo "<script>alert('Data sudah ada!!!')</script>";
            redirect('test', 'refresh');
        }else{
            // print_r(2);die();
            echo "<script>alert('Sukses simpan data!!!')</script>";
            redirect('test', 'refresh');
        }
        // print_r($var);die();
        // redirect('test');
    }

    public function update($id){
        $data = array(
            'name' => $this->input->post('nmae'),
            'email' => $this->input->post('email')
        );
        $this->Test_model->update_user($id, $data);
        redirect('test');
    }

    public function edit($id){
        $data['user'] = $this->Test_model->get_user($id);
        $this->load->view('edit_user', $data);
    }

    public function delete($id){
        $this->Test_model->delete_user($id);
        // redirect('test');
        echo "<script>alert('Sukses Hapus data!!!')</script>";
            redirect('test', 'refresh');
    }

}
?>
