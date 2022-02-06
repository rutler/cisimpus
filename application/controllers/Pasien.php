<?php 

/**
 * 
 */
class Pasien extends CI_Controller
{
	// public function __construct(){
 //         parent::__construct();
 //         $this->load->database();
 //         //panggil database untuk semua mthod dalam autoload
 //     }
	
	public function index()
	{
		$this->load->model('Pasien_model');
		$data['pasien'] = $this->Pasien_model->getAllPasien();
		$this->load->view('templates/header');
		$this->load->view('pasien/index', $data);
		$this->load->view('templates/footer');
	}

	public function pasienRinap()
	{
		$this->load->model('Pasien_model');
		$data['pasien'] = $this->Pasien_model->getAllPasienRinap();
		$this->load->view('templates/header');
		$this->load->view('pasien/pasienRinap', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{

	}

}