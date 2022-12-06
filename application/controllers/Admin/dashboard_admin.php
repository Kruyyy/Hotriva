<?php

class Dashboard_admin extends CI_Controller{
	public function index()
	{
		$this->load->view('Templates_admin/Header');
		$this->load->view('Templates_admin/Sidebar');
		$this->load->view('admin/dashboard');
		$this->load->view('Templates_admin/Footer');
	}
}