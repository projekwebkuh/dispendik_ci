<?php
include "v_thead.php";
include "v_tnav.php";
include "v_tsidebar.php";
?>

<?php 
echo '<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Manajemen berita
            <small>Tambah Berita</small>
        </h1>
        <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i> Dashboard</li>
            <li>Manajemen Berita</li>
            <li class="active">Tambah Berita</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Tambah berita baru</h3>
                            <div class="box-body">';
                            $atributes = array ('class'=>'form-horizontal','role'=>'form');
                            echo form_open_multipart('adminpage/tambahberita',$atributes);
                            echo   '<div class="col-md-12">
                                        <table class="table table-condensed table-bordered">
                                        <tbody>
                                            <input type="hidden" name="id" value="">
                                            <tr><th width="120px" scope="row">Judul</th>    <td><input type="text" class="form-control" name="judul" required></td></tr>
                                            <tr><th scope="row">Kategori</th>               <td><select name="idkat" class="form-control" required>
                                                                                                <option value="" selected="selected">-Pilih kategori-</option>';
                                                                                                    foreach ($tabel->result_array() as $row) {
                                                                                                     echo "<option value='$row[id_kategori]'>$row[nama_kategori]</option>";
                                                                                                    }
                                    echo   '</td></tr> 
                                            <tr><th scope="row">Headline</th>               <td><input type="radio" name="headline" value="Y">Ya &nbsp; <input type="radio" name="headline" value="N" checked>Tidak</td></tr>
                                            <tr><th scope="row">Isi berita</th>             <td><textarea name="isiberita" class="form-control" id="editor1" style="height:320px" required></textarea></td></tr>
                                            <tr><th scope="row">Pilih Gambar</th>           <td><input type="file" class="form-control" name="e"></td></tr>

                                        </tbody>
                                        </table>
                                    </div>';
                        echo    '<div class="box-footer">
                                    <button type="submit" name="submit" class="btn btn-primary">Tambahkan</button>
                                    <a href="'.base_url().$this->uri->segment(1).'/berita"><button type="button" class="btn btn-default pull-right">Cancel</button></a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>';