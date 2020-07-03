<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Adminpage extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('administrator');
        }
        $this->load->model('berita_model');
        $this->load->model('download_model');
    }
    public function index()
    {
        $this->load->view('admin/v_thead');
        $this->load->view('admin/v_tnav');
        $this->load->view('admin/v_tsidebar');
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/v_tfooter');
    }

    public function berita()
    {

        $data["tabel"] = $this->berita_model->list_berita();
        $this->load->view('admin/v_berita', $data);
    }

    public function tambahberita()
    {
        if (isset($_POST['submit'])) {
            $this->berita_model->list_berita_tambah();
            redirect('adminpage/berita');
        } else {
            $data['tabel'] = $this->berita_model->kategori_berita();
            $this->load->view('admin/v_tambahberita.php', $data);
        }

        $this->load->view('admin/v_tfooter');
    }

    public function editberita()
    {
        $id = $this->uri->segment(3);
        if (isset($_POST['submit'])) {
            $this->berita_model->list_berita_update();
            redirect('adminpage/berita');

        }else { 
            $data['tabel'] = $this->berita_model->kategori_berita();
            $data['rows'] = $this->berita_model->list_berita_edit($id)->row_array();
            $this->load->view('admin/v_editberita.php',$data);
        }
        $this->load->view('admin/v_tfooter');
        
    }

    public function hapusberita()
    {
        $id=$this->uri->segment(3);
        $this->berita_model->berita_hapus($id);
        redirect('adminpage/berita');
    }

    // CONTROL DOWNLOAD ADMIN

    public function download()
    {
        $data["down"]=$this->download_model->download();
        $this->load->view('admin/v_download',$data);
    }

    public function tambahdownload()
    {
        if (isset($_POST['submit'])) {
            $this->download_model->download_tambah();
            redirect('adminpage/download');
        }else{
            $this->load->view('admin/v_tambahdownload');
        }
    $this->load->view('admin/v_tfooter');
    }

    public function editdownload()
    {
        $id=$this->uri->segment(3);
        if (isset($_POST['submit'])){
            $this->download_model->download_update();
            redirect('adminpage/download');
        }else{
            $data['rows']=$this->download_model->download_edit($id)->row_array();
            $this->load->view('admin/v_editdownload',$data);
        }
    }

    public function hapusdownload()
    {
        $id=$this->uri->segment(3);
        $this->download_model->download_delete($id);
        redirect('adminpage/download');
    }


}
