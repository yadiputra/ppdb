<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		if (isset($_POST['submit'])){
		$config['upload_path'] = 'assets/foto/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = '5000'; // kb
		$this->load->library('upload', $config);
		$this->upload->do_upload('foto');
		$foto=$this->upload->data();
		//print_r ($foto['file_name']);die();
		$dat =array(
		"tgl_up"=>date('Y-m-d'),
		"user_up"=>"Admin",
		"title"=>$this->input->post('judul'),
		"seo"=>seo_title($this->input->post('judul')),
		"img"=>($foto['file_name']),
		"detail"=>$this->input->post('detail'),
		"status"=>"1",
		);
		
		$this->model_app->insert('berita',$dat);
		}
		$data['pop'] = $this->model_app->view_limit_data('berita','5')->result_array();
		$this->template->load('template1','admin/berita',$data);
		
	}
	
	
	
	public function ppdb()
	{
		
		$dat =array(
		"nama_depan"=>$this->input->post('nama_depan'),
		"nama_belakang"=>$this->input->post('nama_belakang'),
		"jenis_kelamin"=>$this->input->post('jenis_kelamin'),
		"tempat_lahir"=>$this->input->post('tempat_lahir'),
		"tgl_lahir"=>$this->input->post('tgl_lahir'),
		"agama"=>$this->input->post('agama'),
		"status"=>$this->input->post('status'),
		"anak_ke"=>$this->input->post('anak_ke'),
		"asal_slkh"=>$this->input->post('asal_slkh'),
		"nm_ayah"=>$this->input->post('nm_ayah'),
		"pekerjaan_ayah"=>$this->input->post('pekerjaan_ayah'),
		"nm_ibu"=>$this->input->post('nm_ibu'),
		"pekerjaan_ibu"=>$this->input->post('pekerjaan_ibu'),
		"alamat_ortu"=>$this->input->post('alamat_ortu'),
		);
		//print_r ($dat);die();
		$this->model_app->insert('ppbd',$dat);
		$data['keywords'] = "PPDB - MA Ma'arif NU Musi Rawas";
		$data['description'] = "Selamat Datang Di web PPDB Online. Aplikasi Penerimaan Peserta didik baru Tahun Pelajaran 2025/2026 MA Ma'arif NU Musi Rawas.";
		
		$data['pop'] = $this->model_app->view_limit_data('berita','5')->result_array();
		$this->template->load('template','ppdb',$data);
	}
}
