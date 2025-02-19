<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_main extends CI_Controller {

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
	public function visi()
	{
		$data['page'] = 'tentang';
		$data['keywords'] = "Visi & Misi - MA Ma'arif NU Musi Rawas";
		$data['description'] = "Visi MA Ma'arif NU di Kabupaten Musi Rawas adalah Unggul, Tafaqquh Fiddin, Rohmatan Lil 'alamin, Akhlaqul Karimah, Idial SDM, Maju Dalam Wawasan Kebangsaan";
		$data['pop'] = $this->model_app->view_limit_data('berita','5')->result_array();
		$this->template->load('template','visi',$data);
	}
	
	public function struktur()
	{
		$data['page'] = 'struktur';
		$data['keywords'] = "Struktur - MA Ma'arif NU Musi Rawas";
		$data['description'] = "Struktur Madrasah Aliyah Ma'arif NU di Kabupaten Musi Rawas 2024 / 2025";
		$data['pop'] = $this->model_app->view_limit_data('berita','5')->result_array();
		$this->template->load('template','struktur',$data);
	}
	
	public function sejarah()
	{
		$data['page'] = 'tentang';
		$data['keywords'] = "Sejarah - MA Ma'arif NU Musi Rawas";
		$data['description'] = "Madrasah Aliyah Ma'arif NU di Kabupaten Musi Rawas, Sumatera Selatan berdiri pada 18 April 2019";
		$data['pop'] = $this->model_app->view_limit_data('berita','5')->result_array();
		$this->template->load('template','sejarah',$data);
	}
	
	public function ppd()
	{
		$data['page'] = 'ppdb';
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
	public function ppdb()
	{
		$data['page'] = 'ppdb';
		$data['keywords'] = "PPDB - MA Ma'arif NU Musi Rawas";
		$data['description'] = "Selamat Datang Di web PPDB Online. Aplikasi Penerimaan Peserta didik baru Tahun Pelajaran 2025/2026 MA Ma'arif NU Musi Rawas.";
		$data['pop'] = $this->model_app->view_limit_data('berita','5')->result_array();
		$this->template->load('template','ppdb',$data);
	}
	
		public function artikel()
	{
		if (isset($_POST['submit'])){
		$config['upload_path'] = 'assets/tugas/';
		$config['allowed_types'] = 'docx|doc';
		$config['max_size'] = '100000'; // kb
		$this->load->library('upload', $config);
		$this->upload->do_upload('tugas');
		$foto=$this->upload->data();
		
		$dat =array(
		"kelas"=>$this->input->post('kelas'),
		"nama"=>$this->input->post('nama'),
		"file"=>($foto['file_name']),
		);
		//print_r ($dat);die();
		$this->model_app->insert('artikel',$dat);
		}
		$data['page'] = 'Artikel';
		$data['keywords'] = "Tugas Artikel - MA Ma'arif NU Musi Rawas";
		$data['description'] = "Tugas Artikel Kelas XII MA Ma'arif NU Musi Rawas";
		$data['pop'] = $this->model_app->view_limit_data('berita','5')->result_array();
		$this->template->load('template','artikel',$data);
		
	}
	
		public function kontak()
	{
		$data['page'] = 'Kontak Kami';
		$data['keywords'] = "Kontak Kami - MA Ma'arif NU Musi Rawas";
		$data['description'] = "Kontak MA Ma'arif NU Musi Rawas";
		$data['pop'] = $this->model_app->view_limit_data('berita','5')->result_array();
		$this->template->load('template','kontak',$data);
		
	}
}
