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
                        $headline = $this->utama_model->berita_utama(0,3);
                        foreach ($headline->result_array() as $row) {
                            $isi_berita = strip_tags($row['isi_berita']); 
                            $isi = substr($isi_berita,0,200); 
                            $isi = substr($isi_berita,0,strrpos($isi," "));
                            $tgl_post = $row['tgl_berita'];
                            if ($row['image_berita'] ==''){ $foto='';}else{ $foto =$row['image_berita'];}
                        
                echo   "<div class='card bg-transparent mt-2'>
                            <div class='card-img'>
                                <img class='responimg' src='".base_url()."assets/foto_berita/".$foto."' style='max-height: 400px; overflow:hidden;' alt=''>
                                <span class='date2'>$tgl_post</span>
                            </div>
                            <div class='blog-content'>
                                <h5><a href='".base_url()."utama/detail/$row[judul_seo]' style='color:black;'>".$row['judul_berita']."</a></h5>
                                    <p>".$isi."</p>
                                    <a style='color:black;' href='".base_url()."utama/detail/$row[judul_seo]'>Continue
                                        Reading...</a>
                            </div>
                        </div>";                        } ?>
                    </div>

                        

<?php                
include "t_infouser.php";
include "t_footuser.php";
?>
