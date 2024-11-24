<?php

Class Test2 extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }

    public function index(){
        $this->load->view('home_v1');
    }

}

?>