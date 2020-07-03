<?php
class Berita_model extends CI_Model
{

    public function kategori_berita()
    {
        return $this->db->query("SELECT * FROM kategori ORDER BY id_kategori DESC");
    }

    public function list_berita()
    {
        return $this->db->query("SELECT a.*, b.nama_kategori FROM berita a LEFT JOIN kategori b ON a.id_kategori=b.id_kategori ORDER BY a.id_berita DESC");
    }

    public function list_berita_tambah()
    {
        $config['upload_path'] = 'assets/foto_berita';
        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
        $config['max_size'] = '3000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('e');
        $hasil = $this->upload->data();

        if ($hasil['file_name'] == '') {
            $datadb = array(
                'id_kategori' => $this->db->escape_str($this->input->post('idkat')),
                'judul_berita' => $this->db->escape_str($this->input->post('judul')),
                'judul_seo' => seo_judul($this->input->post('judul')),
                'headline' => $this->db->escape_str($this->input->post('headline')),
                'isi_berita' => $this->input->post('isiberita'),
                'tgl_berita' => date('Y-m-d')
            );
        } else {
            $datadb = array(
                'id_kategori' => $this->db->escape_str($this->input->post('idkat')),
                'judul_berita' => $this->db->escape_str($this->input->post('judul')),
                'judul_seo' => seo_judul($this->input->post('judul')),
                'headline' => $this->db->escape_str($this->input->post('headline')),
                'isi_berita' => $this->input->post('isiberita'),
                'image_berita' => $hasil['file_name'],
                'tgl_berita' => date('Y-m-d')
            );
        }
        $this->db->insert('berita', $datadb);
    }

    public function list_berita_edit($id){
        return $this->db->query("SELECT * FROM berita WHERE id_berita='$id'");
    }

    public function list_berita_update(){
        $config['upload_path'] = 'assets/foto_berita/';
        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
        $config['max_size'] = '3000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('e');
        $hasil=$this->upload->data();
        if ($hasil['file_name'] == '') {
            $datadb = array(
                'id_kategori' => $this->db->escape_str($this->input->post('idkat')),
                'judul_berita' => $this->db->escape_str($this->input->post('judul')),
                'judul_seo' => seo_judul($this->input->post('judul')),
                'headline' => $this->db->escape_str($this->input->post('headline')),
                'isi_berita' => $this->input->post('isiberita'),
                'tgl_berita' => date('Y-m-d')
            );
        } else {
            $datadb = array(
                'id_kategori' => $this->db->escape_str($this->input->post('idkat')),
                'judul_berita' => $this->db->escape_str($this->input->post('judul')),
                'judul_seo' => seo_judul($this->input->post('judul')),
                'headline' => $this->db->escape_str($this->input->post('headline')),
                'isi_berita' => $this->input->post('isiberita'),
                'image_berita' => $hasil['file_name'],
                'tgl_berita' => date('Y-m-d')
            );
        }
        $this->db->where('id_berita',$this->input->post('id'));
        $this->db->update('berita',$datadb);
    }

    public function berita_hapus($id){
        return $this->db->query("DELETE FROM berita WHERE id_berita='$id'");
    }
}
