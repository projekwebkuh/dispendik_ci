<?php 
include "t_headuser.php";
include "t_sidebaruser.php";
include "t_caruser.php";
?>

        <section class="utama" id="utama">
            <div class="container">
                <div class="row pt-4">
                    <!-- kolom untuk isi berita -->
                    <div class="col-lg-8">
                        <?php 
                        $tgl_post = $record['tgl_berita'];
                echo   "<h2>$record[judul_berita]</h2>
                        <small>$tgl_post</small>
                        <small class='pull-right'>Administrator, Kategori : $record[nama_kategori]</small>
                        <hr>";
                        if ($record['image_berita'] != ''){
                    echo    "<img class='pull-left img-thumbnail' style='margin-right:7px' src='".base_url()."assets/foto_berita/".$record['image_berita']."'>";
                        }
                    echo "<p>$record[isi_berita]</p>
                    <div style='clear:both'><br></div>";
                        ?>

                    </div>




<?php 
include "t_infouser.php";
include "t_footuser.php";
?>