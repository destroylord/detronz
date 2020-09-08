<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
        $data['bradcum'] = 'Contact us';

		$this->load->view('templates/header');
		$this->load->view('templates/nav');
		$this->load->view('templates/bradcam_area', $data);
		$this->load->view('about/contact');
		$this->load->view('templates/footer');
	}
}