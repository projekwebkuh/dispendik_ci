<?php
include "v_thead.php";
include "v_tnav.php";
include "v_tsidebar.php";
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Manajemen Download</small>
        </h1>
        <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i> Dashboard</li>
            <li>Manajemen Media</li>
            <li class="active">Download</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Semua Download</h3>
                            <a href=" <?= base_url('adminpage/tambahdownload'); ?>" class="pull-right btn btn-primary btn-sm">Tambah data +</a>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Nama File</th>
                                        <th>Tgl posting</th>
                                        <th>Hits</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <!-- Tempat mengisi tabel -->
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($down->result_array() as $row) {
                                        $tgl = $row['tgl_post'];
                                echo    "<tr>
                                            <td>$no</td>
                                            <td>$row[judul]</td>
                                            <td><a title='$row[nama_file]' target='_BLANK' href='".base_url()."assets/files/$row[nama_file]'>$row[nama_file]</a></td>
                                            <td>$tgl</td>
                                            <td>$row[hits] kali</td>

                                            <td>
                                                <center>
                                                <a class='btn btn-success btn-xs' title='Edit Data' href='" . base_url() . "adminpage/editdownload/$row[id_download]'><span class='glyphicon glyphicon-edit'></span></a>
                                                <a class='btn btn-danger btn-xs' title='Delete Data' href='".base_url()."adminpage/hapusdownload/$row[id_download] '><span class='glyphicon glyphicon-remove'></span></a>
                                                </center>
                                            </td>
                                        </tr>";
                                        $no++;
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
    </section>
</div>

<?php include "v_tfooter.php"; ?>