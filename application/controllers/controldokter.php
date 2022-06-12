<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class controldokter extends CI_Controller{

    public function index()
    { 
        $this->load->model('doktermodel');
        $data=$this->doktermodel->Getdokter();
        foreach ($data as $dokter) {
        echo "ID Dokter : ".$dokter['id_dokter']."<br/>";
        echo "Nama Dokter : ".$dokter['nama']."<br/>";
        echo "Spesialis : ".$dokter['spesialis']."<br/>";
        # code...
    }
    }
}
