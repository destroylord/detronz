<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
        $data['bradcum'] = 'Visi & Misi';

		$this->load->view('templates/header');
		$this->load->view('templates/nav');
		$this->load->view('templates/bradcam_area', $data);
		$this->load->view('about/visi');
		$this->load->view('templates/footer');
	}
}