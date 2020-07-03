<?php
class Utama_model extends CI_Model
{
    public function berita_utama($as,$bs){
        return $this->db->query("SELECT a.*, b.nama_kategori FROM berita a LEFT JOIN kategori b ON a.id_kategori=b.id_kategori ORDER BY a.id_berita DESC LIMIT $as, $bs");
    }
    public function headline($as, $bs){
        return $this->db->query("SELECT a.*, b.nama_kategori FROM berita a LEFT JOIN kategori b ON a.id_kategori=b.id_kategori where a.headline='Y' ORDER BY a.id_berita DESC LIMIT $as, $bs");
    }

    public function berita_detail($id){
        return $this->db->query("SELECT * FROM berita a LEFT JOIN kategori c ON a.id_kategori=c.id_kategori where a.id_berita='".$this->db->escape_str($id)."' OR a.judul_seo='".$this->db->escape_str($id)."'");
    }

    public function hitungdownload(){
        return $this->db->query("SELECT * FROM download");
    }

    public function updatehits($file){
        return $this->db->query("UPDATE download set hits=hits+1 where nama_file='".$this->db->escape_str($file)."'");
    }

    public function gambar(){
        return $this->db->query("SELECT * FROM berita");
    }
}
