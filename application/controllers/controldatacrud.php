
<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class controldatacrud extends CI_Controller{
    public function index() 
    {
        $this->load->model('datamodel'); 
        $data = $this->datamodel->Getdokter('tbl_dokter'); 
        $data = array('data' => $data); 
        $this->load->view('data_view', $data);
    
    }


    //Create
    public function add_data()
    { 
        $this->load->view('form_add'); 
    }

        public function Insert()
        { 
        $this->load->model('datamodel');
        $data = array( 
                'id_dokter'=>$this->input->post('id_dokter'), 
                'nama'=>$this->input->post('nama'), 
                'spesialis'=>$this->input->post('spesialis') 
            ); 

            $data = $this->datamodel->Insert('tbl_dokter', $data); 
            redirect(base_url('controldatacrud'),'refresh');
        } 
    

    //DELETE
    public function delete_data($id_dokter){ 
        $id_dokter = array('id_dokter'=>$id_dokter); 
        $this->load->model('datamodel'); 
        $this->datamodel->delete('tbl_dokter',$id_dokter); 
        redirect(base_url('controldatacrud'),'refresh'); 
    }

    // //UPDATEinimodelnya
    // public function GetWhere($table, $data){ 
    //     $res=$this->db->get_where($table, $data); 
    //     return $res->result_array();
    // }
    
    //EDIT
    public function edit_data($id_dokter){ 
        $this->load->model('datamodel'); 
        $dokter = $this->datamodel->GetWhere('tbl_dokter',array('id_dokter' => $id_dokter)); 
        $data = array( 
            'id_dokter' => $dokter[0]['id_dokter'], 
            'nama' => $dokter[0]['nama'], 
            'spesialis' => $dokter[0]['spesialis'], 
        );

        $this->load->view('form_edit', $data);
    }

    //update
    public function update_data(){
        $id_dokter = $_POST['id_dokter']; 
        $nama = $_POST['nama']; 
        $spesialis = $_POST['spesialis']; 
        $data = array( 
            'id_dokter'=>$id_dokter, 
            'nama'=>$nama, 
            'spesialis'=>$spesialis 
        ); 

        $where = array('id_dokter'=>$id_dokter); 
        $this->load->model('datamodel'); 
        $res = $this->datamodel->update('tbl_dokter',$table, $data, $where); 
        if ($res>0){     
            redirect(base_url('controldatacrud'),'refresh');
        }
    }
}

