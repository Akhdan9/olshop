<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function dashboard ($nama, $gender) {
		$data['nama_lengkap'] = $nama;
		$data['jenkel'] = $gender;
		$this->load->view('beranda',$data);
	}
	
	public function profil(){
		$this->load->view('profil');
	}

	public function form(){
		$this->load->view('form');
	}

	public function about(){
		$this->load->view('about');
	}

	public function contact(){
		$this->load->view('contact');
	}

	public function inven(){
		$this->load->view('inven');
	}
}
