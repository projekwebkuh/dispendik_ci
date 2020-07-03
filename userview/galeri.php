<section class="utama" id="utama">
            <div class="container">
                <div class="row pt-4">
                    <div class="col-lg-8">
                        <h2>Album Foto</h2>
                        <?php 
                        foreach ($gambar->result_array() as $ar){
                    echo   "<img class='responimg mt-5' src='".base_url()."assets/foto_berita/$ar[image_berita]' style='max-height: 500px; overflow:hidden;' alt=''>";
                        }
                        ?>
                    </div>