<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_user extends CI_Controller {

    public function index()
    {
        $this->load->view('v_login_user');
    }

    public function proses()
    {
        $this->load->model('login_user_model','l_user');
        $login=$this->l_user->cek_user();
        if ($login->num_rows()>0) {
            $dt_user=$login->row();
            $array = array(
                'id_pembeli' => $dt_user->id_pembeli,
                'nama' => $dt_user->nama_pembeli,
                'username' => $dt_user->username,
                'password' => $dt_user->password,
                'login_user' => true
            );
            
            $this->session->set_userdata($array);
            $data['status']=1;
            echo json_encode($data);
        } else {
            $data['status']=0;
            echo json_encode($data);
        }
    }
    public function simpan()
    {
        $this->load->model('login_user_model','l_user');
        $cek_data = $this->l_user->tambah_user();
        if ($cek_data) {
            $data['status']= 1;
            $data['keterangan']="Anda Sukses Menambah Data";
            echo json_encode($data);
        } else {
            $data['status'] = 0;
            $data['keterangan']="Anda Gagal Menambah Data";
            echo json_encode($data);            
        }
    }
}

/* End of file Login_user.php */
