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
            <small>Manajemen Berita</small>
        </h1>
        <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i> Dashboard</li>
            <li>Manajemen Berita</li>
            <li class="active">Berita</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Semua Berita</h3>
                            <a href=" <?= base_url('adminpage/tambahberita'); ?>" class="pull-right btn btn-primary btn-sm">Tambah Berita +</a>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul berita</th>
                                        <th>Kategori</th>
                                        <th>Tgl posting</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <!-- Tempat mengisi tabel -->
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($tabel->result_array() as $row) {
                                        $kategori = $row['nama_kategori'];
                                        $tgl_post = $row['tgl_berita'];
                                        echo "<tr>
                                            <td>$no</td>
                                            <td>$row[judul_berita]</td>
                                            <td>$kategori</td>
                                            <td>$tgl_post</td>
                                            <td>
                                                <center>
                                                <a class='btn btn-success btn-xs' title='Edit Data' href='" . base_url() . "adminpage/editberita/$row[id_berita]'><span class='glyphicon glyphicon-edit'></span></a>
                                                <a class='btn btn-danger btn-xs' title='Delete Data' href='".base_url()."adminpage/hapusberita/$row[id_berita] '><span class='glyphicon glyphicon-remove'></span></a>
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
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include "v_tfooter.php"; ?>