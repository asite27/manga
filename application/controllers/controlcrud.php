
<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');
//CONTOHCRUD
class controlcrud extends CI_Controller{

    public function index()
    { 
    $data = $this->db->query("SELECT * FROM tbl_dokter"); 
    foreach ($data->result_array() as $dokter) {
        echo "ID Dokter : ".$dokter['id_dokter']."<br/>";
        echo "Nama Dokter : ".$dokter['nama']."<br/>";
        echo "Spesialis : ".$dokter['spesialis']."<br/>";
        # code...
    }
    }
}
