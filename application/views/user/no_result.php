<!-- Halaman Utama -->

<!-- Navbar -->
<nav class="navbar navbar-expand-lg nav-background sticky-top">

    <div class="container-fluid">
        <a class="navbar-brand logo d-flex mx-0" href="#">
            ZonaKampus
        </a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <!-- Navbar item beranda -->
            <ul class="slide navbar-nav beranda me-auto mb-2 mb-lg-0">
                <li class="nav-item beranda no-arrow">
                    <a class="btn dropdown-toggle parent" href="<?= base_url('user/index/') ?>" role="button" aria-expanded="false">
                        Beranda
                    </a>
                </li>
                <li class="nav-item kategori dropdown no-arrow">
                    <a class="btn dropdown-toggle parent" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Kategori
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="<?= base_url('kategori/tipsAndTrik/') ?>">Tips & Trik</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?= base_url('kategori/seputarTutorial/') ?>">Seputar
                                Tutorial</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?= base_url('kategori/trending/') ?>">Trending</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item no-arrow">
                    <a class="btn dropdown-toggle parent" href="<?= base_url('welcome/about_us/') ?>" role="button" aria-expanded="false">
                        About us
                    </a>
                </li>
            </ul>

        </div>

        <!-- Navbar profile -->
        <div class="nav-item dropdown no-arrow profile">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="mr-2 d-lg-inline"><?= $user['username']; ?></span>
                <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image'] ?>">
            </a>

            <ul class="dropdown-menu dropdown-menu-end profile-menu">
                <li><a class="dropdown-item" href="<?= base_url('profile/index/') ?>"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                    </a>
                </li>
                <li><a class="dropdown-item logout" href="<?= base_url('auth/logout') ?>" type="button" data-bs-toggle="modal" data-bs-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Log Out
                    </a>
                </li>
            </ul>
        </div>
        <div class="menu-toggle">
            <input type="checkbox">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</nav>
<!-- End Navbar -->

<div class="container-fluid main-content">
    <!-- Modal -->
    <!-- Modal logout -->
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="outputModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-logout">
            <div class="modal-content">
                <div class="modal-body">
                    <h5>Konfirmasi Logout</h5>
                </div>
                <div class="modal-footer">
                    <a href="<?= base_url('auth/logout') ?>"><button type="button" class="btn btn-logout">Ya</button></a>
                    <button type=" button" class="btn btn-cancel" data-bs-dismiss="modal">Tidak</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal -->

    <div class="row">
        <!-- Left Content -->
        <div class="col-sm-8 kolom-content">
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
            <!-- <?= $this->session->flashdata('success'); ?> -->


            <div class="row people-content g-0">
                <!-- Navbar Search -->
                <form action="<?= base_url('user/search') ?>" method="POST" class="d-flex nav-search" role="search">
                    <input class="form-control" type="search" id="form-cari" name="keyword" placeholder="Cari postingan atau pengguna" autocomplete="off" aria-label="Search">
                    <input class="btn cari" type="submit" name="submit"></input>
                </form>

                <!-- Kategori -->
                <div class="result-kategori">
                    <ul>
                        <li>
                            <a href="">Postingan</a>
                        </li>
                        <li>
                            <a href="">Pengguna</a>
                        </li>
                    </ul>
                </div>
                <?php if (empty($search)) : ?>
                    <?php redirect('user/no_result') ?>
                <?php endif ?>
                <div class="no-result justify-content-center mt-5 mb-5 d-flex w-100">
                    <img src="<?= base_url('assets/') ?>img/no-result.svg" alt="">
                </div>
            </div>
        </div>
        <!-- Right Content -->
        <div class="col-sm-4 side-content">
            <div class="btn-posting">
                <a href="<?= base_url('upload/index/') ?>" class="btn container posting" type="submit" style="font-size: 50px;">
                    <h3>Ayo Segera posting</h3>
                    <i class="fas fa-file-archive fa-fw"></i>
                </a>
            </div>
            <!-- Rekomendasi -->
            <div class="container rekomendasi">
                <h4>Rekomendasi</h4>
            </div>
            <div class="right-content ">
                <?php foreach ($videos as $rekomen) : ?>
                    <div class="row ">
                        <div class="col-sm-6 video">
                            <video controls>
                                <source src="<?= $rekomen->content_link ?>" />
                            </video>
                        </div>
                        <div class="col-sm-6 judul">
                            <div class="judul-content">
                                <hp><?= $rekomen->judul ?></hp>
                            </div>
                            <div class="nama-date">
                                <p><?= $rekomen->username ?></p>
                                <ul>
                                    <li>kategori</li>
                                </ul>
                            </div>
                            <div class="date">
                                <p class="date"><?= $rekomen->create_at ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

</div>