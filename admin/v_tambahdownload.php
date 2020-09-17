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
                            <h3 class="box-title">Tambah data baru</h3>
                            <div class="box-body">';
                            $atributes = array ('class'=>'form-horizontal','role'=>'form');
                            echo form_open_multipart('adminpage/tambahdownload',$atributes);
                            echo   '<div class="col-md-12">
                                        <table class="table table-condensed table-bordered">
                                        <tbody>
                                            <input type="hidden" name="id" value="">
                                            <tr><th width="120px" scope="row">Judul</th>    <td><input type="text" class="form-control" name="jdl" required></td></tr>
                                            <tr><th scope="row">Pilih File</th>           <td><input type="file" class="form-control" name="b" required></td></tr>

                                        </tbody>
                                        </table>
                                    </div>';
                        echo    '<div class="box-footer">
                                    <button type="submit" name="submit" class="btn btn-primary">Tambahkan</button>
                                    <a href="'.base_url().$this->uri->segment(1).'/download"><button type="button" class="btn btn-default pull-right">Cancel</button></a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>';
?>