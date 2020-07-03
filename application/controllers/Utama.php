<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Utama extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('utama_model');
        $this->load->model('download_model');
    }
    public function index()
    {
        $data['title'] = 'Dinas Pendidikan Kabupaten Gresik';
        $this->load->view('userview/t_berandauser', $data);

    }

    public function detail()
    {
        $ids = $this->uri->segment(3);
        $dat = $this->db->query("SELECT * FROM berita where judul_seo='$ids' OR id_berita='$ids'");
        $row = $dat->row();
        $total = $dat->num_rows();
		if ($total == 0) {
			redirect('utama');
        }
        $data['record'] = $this->utama_model->berita_detail($ids)->row_array();
        $data['title'] = $row->judul_berita;
        $this->load->view('userview/t_beritadetail',$data);
    }

    public function visimisi(){
        $data['title'] = 'Dinas Pendidikan Kabupaten Gresik';
        $this->load->view('userview/t_headuser', $data);
        $this->load->view('userview/t_sidebaruser', $data);
        $this->load->view('userview/t_caruser', $data);
        $this->load->view('userview/visi', $data);
        $this->load->view('userview/t_infouser', $data);
        $this->load->view('userview/t_footuser', $data);
    }

    public function struktur(){
        $data['title'] = 'Dinas Pendidikan Kabupaten Gresik';
        $this->load->view('userview/t_headuser', $data);
        $this->load->view('userview/t_sidebaruser', $data);
        $this->load->view('userview/t_caruser', $data);
        $this->load->view('userview/struktur', $data);
        $this->load->view('userview/t_infouser', $data);
        $this->load->view('userview/t_footuser', $data);
    }

    public function profil(){
        $data['title'] = 'Dinas Pendidikan Kabupaten Gresik';
        $this->load->view('userview/t_headuser', $data);
        $this->load->view('userview/t_sidebaruser', $data);
        $this->load->view('userview/t_caruser', $data);
        $this->load->view('userview/profil', $data);
        $this->load->view('userview/t_infouser', $data);
        $this->load->view('userview/t_footuser', $data);
    }

    public function download(){
        $data['title'] = 'Dinas Pendidikan Kabupaten Gresik';
        $data["vdown"] = $this->utama_model->hitungdownload();
        $this->load->view('userview/download', $data);
    }


    public function galeri(){
        $data['title'] = 'Dinas Pendidikan Kabupaten Gresik';
        $data['gambar'] = $this->utama_model->gambar();
        $this->load->view('userview/t_headuser', $data);
        $this->load->view('userview/t_sidebaruser', $data);
        $this->load->view('userview/t_caruser', $data);
        $this->load->view('userview/galeri', $data);
        $this->load->view('userview/t_infouser', $data);
        $this->load->view('userview/t_footuser', $data);
    }

    public function hubungi(){
        $data['title'] = 'Dinas Pendidikan Kabupaten Gresik';
        $this->load->view('userview/t_headuser', $data);
        $this->load->view('userview/t_sidebaruser', $data);
        $this->load->view('userview/t_caruser', $data);
        $this->load->view('userview/hubungi', $data);
        $this->load->view('userview/t_infouser', $data);
        $this->load->view('userview/t_footuser', $data);
    }
}
