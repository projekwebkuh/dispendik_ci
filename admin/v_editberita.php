<?php
include "v_thead.php";
include "v_tnav.php";
include "v_tsidebar.php";
?>

<?php
echo'<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Manajemen berita
            <small>Edit Berita</small>
        </h1>
        <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i> Dashboard</li>
            <li>Manajemen Berita</li>
            <li class="active">Edit Berita</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Edit berita Terpilih</h3>
                            <div class="box-body">';
                            $atributes = array ('class'=>'form-horizontal','role'=>'form');
                            echo form_open_multipart('adminpage/editberita',$atributes);
                        echo  "<div class='col-md-12'>
                                    <table class='table table-condensed table-bordered'>
                                        <tbody>
                                            <input type='hidden' name='id' value='$rows[id_berita]' >
                                            <tr><th width='120px' scope='row'>Judul</th>    <td><input type='text' class='form-control' name='judul' value='$rows[judul_berita]' required></td></tr>
                                            <tr><th scope='row'>Kategori</th>               <td><select name='idkat' class='form-control' required>
                                                                                                <option value='' selected='selected'>-Pilih kategori-</option>";
                                                                                                foreach ($tabel->result_array() as $row) {
                                                                                                    if ($rows['id_kategori'] == $row['id_kategori']){
                                                                                                        echo "<option value='$row[id_kategori]' selected>$row[nama_kategori]</option>";
                                                                                                      }else{
                                                                                                        echo "<option value='$row[id_kategori]'>$row[nama_kategori]</option>";
                                                                                                      }
                                                                                                } 
                                                                                                    
                                    echo   "</td></tr>
                                            <tr><th scope='row'>Headline</th>               <td>"; if ($rows['headline']=='Y'){ echo "<input type='radio' name='headline' value='Y' checked>Ya &nbsp; <input type='radio' name='headline' value='N'>Tidak"; }else{ echo "<input type='radio' name='headline' value='Y'>Ya &nbsp; <input type='radio' name='headline' value='N' checked> Tidak";} echo "</td></tr>
                                            <tr><th scope='row'>Isi berita</th>             <td><textarea id='editor1' class='form-control' name='isiberita' style='height:320px' required>$rows[isi_berita]</textarea></td></tr>
                                            <tr><th scope='row'>Pilih Gambar</th>           <td><input type='file' class='form-control' name='e'>";
                                                                                             if ($rows['image_berita'] != '') { echo "<i style='color:red'>Lihat gambar ini : </i><a target='_BLANK' href='".base_url()."assets/foto_berita/$rows[image_berita]'>$rows[image_berita]</a>"; }  echo"</td></tr>
                                        </tbody>
                                    </table>
                                </div>";
                        echo   '<div class="box-footer">
                                    <button type="submit" name="submit" class="btn btn-primary">Update berita</button>
                                    <a href="'.base_url().$this->uri->segment(1).'/berita"><button type="button" class="btn btn-default pull-right">Cancel</button></a>
                                </div>
                            </div>
                        <!-- End class body box -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>';
