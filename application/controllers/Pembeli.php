<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembeli extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('login')!=true){
            
            redirect(base_url('index.php/login'),'refresh');
            
        } 
            
 }
 
    public function index()
    {
        $data['konten']="v_pembeli";
        $this->load->model('pembeli_model');
        $data['data_pembeli']=$this->pembeli_model->get_pembeli();
        $this->load->view('template', $data, FALSE);
    }

    public function simpan_pembeli()
    {
        $this->form_validation->set_rules('nama_pembeli', 'Nama Pembeli', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('no_telp', 'No Telp', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required',
        array('required' => 'SEMUA HARUS DIISI !!'));
        if ($this->form_validation->run() == TRUE) {
            $this->load->model('pembeli_model','pmbl');
            $masuk=$this->pmbl->masuk_db();
            if($masuk==true){
                $this->session->set_flashdata('pesan','Sukses masuk');
            }
            else{
                $this->session->set_flashdata('pesan', 'gagal masuk');            
            }
            
            redirect(base_url('index.php/pembeli'),'refresh');
            
        } else {
            $this->session->set_flashdata('pesan', validation_errors());
            redirect(base_url('index.php/pembeli'),'refresh');
            
        }
    }

    public function get_detail_pembeli($id_pembeli='')
    {
        $this->load->model('pembeli_model');
        $data_detail=$this->pembeli_model->detail_pembeli($id_pembeli);
        echo json_encode($data_detail); 
    }
    public function update_pembeli()
    {
        $this->form_validation->set_rules('nama_pembeli', 'Nama Pembeli', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('no_telp', 'No Telp', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        

        
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('pesan', validation_errors());
            
            redirect(base_url('index.php/pembeli'),'refresh');   
        } else {
            $this->load->model('pembeli_model');
            $proses_update=$this->pembeli_model->update_pembeli();
            if($proses_update){
                $this->session->set_flashdata('pesan', 'sukses update');        
            } else {
                $this->session->set_flashdata('pesan', 'gagal update');
            }      
            redirect(base_url('index.php/pembeli'),'refresh');
            
        }
        
    }

    public function hapus_pembeli($id_pembeli)
    {
        $this->load->model('pembeli_model');
        $proses_delete = $this->pembeli_model->hapus_pembeli($id_pembeli);

        if ($proses_delete == TRUE) {
        $this->session->set_flashdata('pesan', 'Sukses Hapus Data');
            
        } else {
            $this->session->set_flashdata('pesan', 'Gagal Hapus Data');
            
        }

        redirect(base_url('index.php/pembeli'),'refresh');
        
    }
}

/* End of file Controllername.php */
