<?php 

/**
 * 
 */
class Beranda extends CI_Controller
{
	
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('beranda/index');
		$this->load->view('templates/footer');
	}
}