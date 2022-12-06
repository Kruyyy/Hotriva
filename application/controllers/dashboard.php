<?php

class Dashboard extends CI_Controller{
	
	public function index()
	{
		$data['kamar'] = $this->kamar->tampil_data()->result();
		$this->load->view('Templates/Header');
		$this->load->view('Templates/Sidebar');
		$this->load->view('Dashboard', $data);
		$this->load->view('Templates/Footer');
	}
}