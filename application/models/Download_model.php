<?php
class Download_model extends CI_Model
{
    public function download(){
        return $this->db->query("SELECT * FROM download ORDER BY id_download DESC");
    }

    public function download_tambah(){
        $config['upload_path']='assets/files/';
        $config['allowed_types'] = 'gif|jpg|png|zip|rar|pdf|doc|docx|ppt|pptx|xls|xlsx|txt';
        $config['max_size'] = '25000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('b');
        $hasil = $this->upload->data();
            if ($hasil['file_name']=='') {
                $datadb = array('judul'=>$this->db->escape_str($this->input->post('jdl')),
                                'tgl_post'=>date('Y-m-d'),
                                'hits'=>'0');
            }else{
                $datadb = array('judul'=>$this->db->escape_str($this->input->post('jdl')),
                                'nama_file'=>$hasil['file_name'],
                                'tgl_post'=>date('Y-m-d'),
                                'hits'=>'0');
            }
        $this->db->insert('download',$datadb);
    }

    public function download_edit($id)
    {
        return $this->db->query("SELECT * FROM download where id_download='$id'");
    }
    public function download_update()
    {
        $config['upload_path']='assets/files/';
        $config['allowed_types'] = 'gif|jpg|png|zip|rar|pdf|doc|docx|ppt|pptx|xls|xlsx|txt';
        $config['max_size'] = '25000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('b');
        $hasil = $this->upload->data();
            if ($hasil['file_name']=='') {
                $datadb = array('judul'=>$this->db->escape_str($this->input->post('jdl')),
                                'tgl_post'=>date('Y-m-d'),
                                'hits'=>'0');
            }else{
                $datadb = array('judul'=>$this->db->escape_str($this->input->post('jdl')),
                                'nama_file'=>$hasil['file_name'],
                                'tgl_post'=>date('Y-m-d'),
                                'hits'=>'0');
            }
        $this->db->where('id_download',$this->input->post('id'));
        $this->db->update('download',$datadb);
    }

    public function download_delete($id)
    {
        $this->db->query("DELETE FROM download WHERE id_download='$id'");
    }
}