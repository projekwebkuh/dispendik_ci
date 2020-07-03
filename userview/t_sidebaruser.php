
    <!-- Section pembungkus vertikal navbar -->
    <section>
        <!-- Header Vertical navbar -->
        <div class="vertical-nav" id="sidebar" style="background-color: #404B58;">
            <div class="py-4 px-3 mb-4" style="background-color: #404B58;">
                <div class="media d-flex align-items-center" style="padding-top: 30px"><img src="http://dispendik-gresik.net/template/dispendik/images/logo.png">
                </div>
            </div>
            <!-- Isi vertical Navbar -->
            <div class="navertical">
                <ul class="nav flex-sm-column">
                <li class="nav-item">
                        <a href="<?= base_url(''); ?>"> Beranda</a>
                    </li>
                    <div class="drop">
                      <button class="dropbtn">Profil
                        <i class="fas fa-chevron-circle-right"></i>
                      </button>
                      <div class="drop-item">
                        <a href="<?= base_url('utama/visimisi'); ?>">Visi dan Misi</a>
                        <a href="<?= base_url('utama/struktur'); ?>">Struktur Organisasi</a>
                        <a href="<?= base_url('utama/profil'); ?>">Profil</a>
                      </div>
                    </div>
                    <li class="nav-item">
                        <a href="<?= base_url('utama'); ?>"> Berita</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('utama/download'); ?>"> Download</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('utama/galeri'); ?>"> Galeri Foto</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('utama/hubungi'); ?>"> Hubungi Kami</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('#'); ?>"> Pengumuman</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('#'); ?>"> Pelayanan</a>
                    </li>
                    <footer class="pt-3 text-white" style="text-align: center;">
                        <h6>SOCIAL MEDIA</h6>
                        <ul class="sosmed">
                            <li><i class="fab fa-3x fa-facebook-square"></i></li>
                            <li><i class="fab fa-3x fa-twitter-square"></i></li>
                            <li><i class="fab fa-3x fa-instagram"></i></li>
                            <p>Copyright 2020 Dinas Pendidikan Kabupaten Gresik</p>
                        </ul>
                    </footer>
                </ul>
            </div>
        </div>
    </section>