<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
    class Form_controller extends CI_Controller { 
    function index() { 
        $this->form_validation->set_rules('username', 'Username','required'); 
        $this->form_validation->set_rules('password', 'Password','required'); 
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required'); 
        $this->form_validation->set_rules('email', 'Email','required'); 
       
        if ($this->form_validation->run() == FALSE) 
        {
            $this->load->view('form_input'); 
        }
        else 
        {
            echo 'Validasi Sukses!';
        }
    }
}
