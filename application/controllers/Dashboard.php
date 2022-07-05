<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('login')!=true){
            
            redirect(base_url('index.php/login'),'refresh');
            
        } 
            
 }
    

    public function index()
    {
        $data['konten']='home';
        $this->load->view('template',$data);
    }

    public function v_profil()
    {
       $data['konten']="v_profil";
       $this->load->view('template',$data, FALSE);
    }

    public function v_form()
    {
       $data['konten']="v_form";
       $this->load->view('template',$data, FALSE);
    }

    public function v_tables()
    {
       $data['konten']="v_tables";
       $this->load->view('template',$data, FALSE);
    }

    public function v_media()
    {
       $data['konten']="v_media";
       $this->load->view('template',$data, FALSE);
    }

    public function kategori()
    {
       $data['konten']="kategori";
       $this->load->view('template',$data, FALSE);
    }

    public function v_barang()
    {
       $data['konten']="v_barang";
       $this->load->view('template',$data, FALSE);
    }    

    public function v_pembeli()
    {
       $data['konten']="v_pembeli";
       $this->load->view('template',$data, FALSE);
    }  
    
}

/* End of file Controllername.php */
