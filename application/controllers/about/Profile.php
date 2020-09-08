<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
        $data['bradcum'] = 'Profile Perusahaan';

		$this->load->view('templates/header');
		$this->load->view('templates/nav');
		$this->load->view('templates/bradcam_area', $data);
		$this->load->view('about/profile');
		$this->load->view('templates/footer');
	}
}