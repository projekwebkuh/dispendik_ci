<div class="page-content p-5" id="content">
        <button id="sidebarCollapse" type="button" class="btn btn-dark" style="background-color: #404B58; margin-top:-60px; margin-left: 0px;"><i class="fa fa-bars"></i>
            Toggle</button>


        <!-- Section Pembungkus konten caraousel atau top page -->
        <section>
            <h5 class="titlepop">BERITA TERPOPULER</h5>
            <!-- Bagian ariq buat caraousel, -->
            <div>
                <div class="owl-wrapper">
                    <div class="owl-carousel owl-theme">
                        <?php 
                        $headline = $this->utama_model->headline(0,3);
                        $no=1;
                        foreach ($headline->result_array() as $row){
                            if ($no==1){ $active = 'active';}else{ $active= '';}
                                if ($row['image_berita'] ==''){ $foto_slide ='';} else{ $foto_slide = $row ['image_berita'];}
                                $tgl_post = $row['tgl_berita'];
                echo    "<div class='item $active' style='width:376px; height: 270px;'>
                                <img style='height: 270px; overflow:hidden;' src='".base_url()."assets/foto_berita/$foto_slide'>
                                <div class='hover-news'>
                                    <div class='inner-hover pt-5'>
                                        <span class='date'>$tgl_post</span>
                                        <h6 class='judulcarausel'><a href='".base_url()."utama/detail/$row[judul_seo]' style='color:white;'>$row[judul_berita]</a></h6>
                                        <p class='kategori'>$row[nama_kategori]</p>
                                    </div>
                                </div>
                            </div>";
                        }
                        ?>

                     </div>
                </div>
                    <!-- tutup caraousel -->
        </section>