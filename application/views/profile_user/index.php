<nav class="navbar navbar-expand-lg nav-background">
	<div class="layer"></div>
	<img class="background" src="<?= base_url('assets/') ?>img/banner.jpg" alt="background">
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
				<!-- <li class="nav-item search no-arrow">
                    <a class="btn dropdown-toggle parent" href="<?= base_url('user/search') ?>">
                        <i class="fas fa-search fa-fw"></i> Search
                    </a>
                </li> -->
			</ul>
			<!-- Navbar Search -->
			<form action="<?= base_url('user/search') ?>" method="POST" class="d-flex nav-search" role="search">
				<input class="form-control" type="search" name="keyword" placeholder="Cari postingan atau pengguna" autocomplete="off" aria-label="Search">
				<button class="btn" type="submit" name="submit" value="Cari"><i class="fas fa-search fa-fw"></i></button>
			</form>
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

<section class="profile-user">
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
	<div class="img-profile">
		<img src="<?= base_url('assets/img/profile/') . $user['image'] ?>" alt="" class="img-thumb img-thumbnail">
	</div>
	<div class="profile-desc">
		<h2 class="nama"><?= $user['username']; ?></h2>
		<div class="status">
			<p class="desc">Mulai bergabung pada tanggal <?= $user['created_at'] ?> <br> <?= $user['moto'] ?>
			<p class="ttl-post">Total postingan <?= $total_video ?></p>
			</p>
		</div>
		<!-- <p class="ttl-post">30 Postingan</p> -->
	</div>
	<div class="settings">
		<button class="btn-setting dropdown-toggle parent" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
			Settings
		</button>
		<ul class="dropdown-menu menu-setting">
			<li>
				<a class="dropdown-item" href="<?= base_url('profile/edit/') ?>">Edit Profile</a>
			</li>
			<li>
				<a class="dropdown-item" href="">Black Mode</a>
			</li>
			<li>
				<a class="dropdown-item" href="<?= base_url('auth/logout') ?>" type="button" data-bs-toggle="modal" data-bs-target="#logoutModal">Logout</a>
			</li>
		</ul>
	</div>
</section>

<section class="content-galery container-fluid" id="aboutus">

	<div class="row row-video">
		<div class="modal-edit" data-modaledit="<?= $this->session->flashdata('editSuccess'); ?>"></div>
		<div class="modal-delete" data-modaldelete="<?= $this->session->flashdata('delsuccess'); ?>"></div>
		<!-- <?= $this->session->flashdata('delsuccess'); ?> -->
		<?php foreach ($videoUser as $video) : ?>
			<div class="frame-video col-sm-4 onmodal" data-bs-toggle="modal" data-bs-target="#videoModal" data-delcontent="<?= base_url('profile/del_video/') ?><?= $video->id_content ?>" data-idcontent="<?= base_url('profile/edit_video/') ?><?= $video->id_content ?>" data-avatar="<?= base_url('assets/img/profile/') . $video->image ?>" data-username="<?= $video->username ?>" data-date="<?= $video->create_at ?>" data-content="<?= $video->content_link ?>" data-judul="<?= $video->judul ?>" data-desc="<?= $video->desc_content ?>">
				<video src="<?= $video->content_link ?>"></video>
			</div>
			<!-- Tampil Modal -->
			<div class="modal fade" id="videoModal" tabindex="-2" aria-labelledby="outputModal" aria-hidden="true">
				<div class="modal-dialog modal-xl modal-dialog-video">
					<div class="modal-content modal-content-video">
						<div class="row people-content g-0">
							<!-- Content User -->
							<div class="contaier user-parent">
								<div class="row user">
									<div class="col-md-auto img-profile">
										<a class="nav-link user-img" href="#" role="button" aria-expanded="false">
											<img class="img-profile rounded-circle" id="avatar-modal" src="">
										</a>
										<a id="id-content" href=""></a>
									</div>
									<div class="col-md-auto name-profile">
										<a href="">
											<div class="">
												<h4 class="mr-2 d-lg-inline name" id="username"></h4>
											</div>
											<p class="mr-2 d-lg-inline time" id="date"></p>
										</a>
									</div>
									<div class="col-md-auto btn-action">
										<ul class="nav-item kategori dropdown dropdown-menu-end  no-arrow">
											<a class="btn dropdown-toggle parent" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
												<i class="fas fa-ellipsis-h"></i>
											</a>
											<ul class="dropdown-menu">
												<li>
													<a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#delVideo">Hapus Postingan</a>
												</li>
												<li>
													<a id="editlink" href="#" class="dropdown-item">Edit Postingan</a>
												</li>
											</ul>
										</ul>
									</div>
								</div>
							</div>
							<!-- Content Video -->
							<div class="col-md-7 content-parent">
								<div class="container video">
									<video id="content-model" src="" controls>
									</video>
								</div>
							</div>
							<!-- Deskripsi -->
							<div class="col-md-5 content-coment">
								<h5 class="card-title" id="judul"></h5>
								<p class="desc" id="desc"></p>
								<!-- Coment user -->
								<div class="card-body">
									<div class="container box-coment">
										<div class="row user-coment">
											<div class="col-md-auto img-profile">
												<a class="nav-link user-img" href="#" role="button" aria-expanded="false">
													<img class="img-profile rounded-circle" src="<?= base_url('assets/') ?>img/undraw_profile.svg">
												</a>
											</div>
											<div class="col-md-auto name-profile">
												<a href="" class="descmodaluser">
													<div class="nama">
														<h4 class="mr-2 d-lg-inline name"><?= $user['username']; ?></h4>
													</div>
													<p class="mr-2 d-lg-inline time">5 menit yang lalu</p>
												</a>
											</div>
										</div>
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab obcaecati,
											necessitatibus quas nulla quam ea eveniet quia reprehenderit unde deleniti
											laudantium voluptas accusamus nesciunt dolorum possimus, nihil dolores! Ea,
											cum.</p>
									</div>
									<div class="container box-coment">
										<div class="row user-coment">
											<div class="col-md-auto img-profile">
												<a class="nav-link user-img" href="#" role="button" aria-expanded="false">
													<img class="img-profile rounded-circle" src="<?= base_url('assets/') ?>img/undraw_profile.svg">
												</a>
											</div>
											<div class="col-md-9 name-profile">
												<a href="" class="descmodaluser">
													<div class="nama">
														<h4 class="mr-2 d-lg-inline name"><?= $user['username']; ?></h4>
													</div>
													<p class="mr-2 d-lg-inline time">5 menit yang lalu</p>
												</a>
											</div>
										</div>
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab obcaecati,
											necessitatibus quas nulla quam ea eveniet quia reprehenderit unde deleniti
											laudantium voluptas accusamus nesciunt dolorum possimus, nihil dolores! Ea,
											cum.</p>
									</div>
								</div>
								<div class="container input-comment">
									<form class="d-flex comment" role="">
										<input class="form-control" type="text" placeholder="Masukan Comment" aria-label="Comment">
										<button class="btn-comment" type="submit"><i class="fas fa-paper-plane fa-fw"></i></button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->
			<!-- Modal Delete -->
			<div id="delVideo" class="modal fade" tabindex="-1" aria-labelledby="outputModal" aria-hidden="true">
				<div class="modal-dialog modal-dialog-logout">
					<div class="modal-content">
						<div class="modal-body">
							<h5>Konfirmasi Hapus</h5>
						</div>
						<div class="modal-footer">
							<!-- <a href="<?= base_url('profile/hapus_video/') ?><?= $video->id_content ?>"> -->
							<a id="delcontent" href="">
								<button type="button" class="btn btn-logout">Ya</button>
							</a>
							<button type=" button" class="btn btn-cancel" data-bs-dismiss="modal">Tidak</button>
						</div>
					</div>
				</div>
			</div>
			<!-- End modal -->
		<?php endforeach; ?>
	</div>



</section>