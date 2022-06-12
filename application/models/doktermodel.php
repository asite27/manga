<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class controlcrud extends CI_Controller{

    public function Getdokter()
    { 
        $data = $this->db->query("SELECT * FROM tbl_dokter"); 
        return $data->result_array();
    }
    }

