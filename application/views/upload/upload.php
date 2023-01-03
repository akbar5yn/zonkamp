<!-- Navbar -->
<nav class="navbar navbar-expand-lg nav-background">

	<div class="container-fluid">
		<a class="navbar-brand logo d-flex mx-0" href="#">
			ZonaKampus
		</a>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			<!-- Navbar item beranda -->
			<ul class="slide navbar-nav beranda me-auto mb-2 mb-lg-0">
				<li class="nav-item beranda no-arrow">
					<a class="btn dropdown-toggle parent" href="<?= base_url('user/index/') ?>" role="button"
						aria-expanded="false">
						Beranda
					</a>
				</li>
				<li class="nav-item kategori dropdown no-arrow">
					<a class="btn dropdown-toggle parent" href="#" role="button" data-bs-toggle="dropdown"
						aria-expanded="false">
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
					<a class="btn dropdown-toggle parent" href="<?= base_url('welcome/about_us/') ?>" role="button"
						aria-expanded="false">
						About us
					</a>
				</li>
			</ul>
			<!-- Navbar Search -->
			<form class="d-flex nav-search" role="search">
				<input class="form-control" type="search" placeholder="Cari postingan atau pengguna"
					aria-label="Search">
				<button class="btn" type="submit"><i class="fas fa-search fa-fw"></i></button>
			</form>
		</div>

		<!-- Navbar profile -->
		<div class="nav-item dropdown no-arrow profile">
			<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				<span class="mr-2 d-lg-inline"><?= $user['username']; ?></span>
				<img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image'] ?>">
			</a>

			<ul class="dropdown-menu dropdown-menu-end profile-menu">
				<li><a class="dropdown-item" href="<?= base_url('profile/index') ?>"><i
							class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
						Profile
					</a>
				</li>
				<li><a class="dropdown-item" href="<?= base_url('auth/logout') ?>" type="button" data-bs-toggle="modal"
						data-bs-target="#logoutModal">
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

<div class="container">
	<!-- Modal -->
	<!-- Modal logout -->
	<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="outputModal" aria-hidden="true">
		<div class="modal-dialog modal-dialog-logout">
			<div class="modal-content">
				<div class="modal-body">
					<h5>Konfirmasi Logout</h5>
				</div>
				<div class="modal-footer">
					<a href="<?= base_url('auth/logout') ?>"><button type="button"
							class="btn btn-logout">Ya</button></a>
					<button type=" button" class="btn btn-cancel" data-bs-dismiss="modal">Tidak</button>
				</div>
			</div>
		</div>
	</div>
	<!-- End modal -->
	<div class="judul">
		<h2>posting</h2>
		<div class="line"></div>
		<div class="form">
			<div class="flash-data" data-flashdata="<?= $this->session->flashdata('failed'); ?>"></div>

			<form action="<?= base_url('upload/upload_video') ?>" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="id_user" id="" value="<?= $user['id_user'] ?>">
				<label for="fname">Judul</label>
				<input type="text" id="fname" name="judul" placeholder="Masukan Judul.." required>
				<label for="subject">Konten</label>
				<div class="kotak-upload">
					<label id="form" for="uploadVideo" class="video-up">
						<input name="video" id="uploadVideo" type="file" class="file_multi_video" accept="video/*"
							value="<?= set_value('video') ?>" size="20">
						<i class="fas fa-2x fa-plus-square"></i>
					</label>
					<small>Max size: 20MB <br> File type: mp4</small>
					<a id="del" onclick="delVideo('#uploadVideo','#outputVideo')" type="button"
						style="display: none;"><i class="fas fa fa-times" style="font-size: 25px;"></i></a>
				</div>
				<div id="form" class="result-video">
					<!-- <source src="mov_bbb.mp4" id="outputVideo"> -->
					<div class="bungkus-video" id="bungkus">
						<i class="fas fa-3x fa-play-circle"></i>
						<video class="result" style="display: none;" controls id="outputVideo">
						</video>
					</div>
				</div>
				<textarea id="subject" name="desc_content" placeholder="Write something.."
					style="height:200px"></textarea>
				<label for="country">Pilih Kategori </label>
				<select id="country" name="id_kategori">
					<?php foreach ($kategori as $category) : ?>
					<option value="<?= $category->id ?>"><?= $category->kategori ?></option>
					<?php endforeach; ?>
				</select>
				<div class="btn">
					<button type="submit">Send your Content</button>
				</div>
			</form>
		</div>
	</div>
</div>
