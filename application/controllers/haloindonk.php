<?php
defined('BASEPATH') or exit('No Direct Script Access Allowed');

class haloindonk extends CI_Controller{

    public function index()
    {
        $this->load->view('profill');
    }
    public function hai()
    {
        echo'Whatsup';
    }
    public function haii($nama)
    {
        echo'Haihai ' .$nama;
    } 
}