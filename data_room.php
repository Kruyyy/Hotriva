<?php

class Data_Room extends CI_Controller{

	public function index()
	{
		$data['kamar'] = $this->kamar->tampil_data()->result();
		$this->load->view('Templates_admin/Header');
		$this->load->view('Templates_admin/Sidebar');
		$this->load->view('admin/data_room', $data);
		$this->load->view('Templates_admin/Footer');
	}

	public function tambah_aksi()
	{
		$id_kmr         = $this->input->post('id_kamar');
		$no_kmr         = $this->input->post('Nomor_kamar');
		$tipe_kmr       = $this->input->post('tipe_kmr');
		$Status_kmr     = $this->input->post('Status_kmr');

		{

			$data = array(
				'id_kamar'    => $id_kamar,
				'Nomor_kamar' => $no_kmr,
				'tipe_kmr'    => $tipe_kmr,
				'Status_kmr'  => $Status_kmr,
			);

			$this->kamar->tambah_kamar($data, 'kamar');
			redirect('admin/data_room/index');
		}

		public function edit($id){
			$where = array('id_kamar' =>$id);
			$data['kamar'] = $this->jenis_kamar->edit_room($where, 'kamar')->result();
			$this->load->view('Templates_admin/Header');
			$this->load->view('Templates_admin/Sidebar');
			$this->load->view('admin/edit_room', $data);
			$this->load->view('Templates_admin/Footer');
		}

		public function update(){
			$id            = $this->Input->post('id');
			$id_kmr        = $this->input->post('id_kamar');
			$no_kmr        = $this->input->post('Nomor_kamar');
			$tipe_kmr      = $this->input->post('tipe_kmr');
			$Status_kmr    = $this->input->post('Status_kmr');

			$data = array(
				'id_kamar'    => $id_kamar,
				'Nomor_kamar' => $no_kmr,
				'tipe_kmr'    => $tipe_kmr,
				'Status_kmr'  => $Status_kmr,
			);

			$where = array(
				'id_kamar' => $id
			);

			$this->kamar->update_data($where,$data, 'kamar');
			redirect('admin/data_room/index');
		}
	}
}