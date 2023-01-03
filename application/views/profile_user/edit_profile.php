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
				<!-- <li class="nav-item search no-arrow">
					<a class="btn dropdown-toggle parent" href="<?= base_url('user/search') ?>">
						<i class="fas fa-search fa-fw"></i> Search
					</a>
				</li> -->
			</ul>
			<!-- Navbar Search -->
			<form action="<?= base_url('user/search') ?>" method="POST" class="d-flex nav-search" role="search">
				<input class="form-control" type="search" name="keyword" placeholder="Cari postingan atau pengguna"
					autocomplete="off" aria-label="Search">
				<button class="btn" type="submit" name="submit" value="Cari"><i
						class="fas fa-search fa-fw"></i></button>
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
		<h2>Edit Profile</h2>
		<p><?= $this->session->flashdata('editSuccess'); ?></p>
		<div class="line"></div>
		<div class="form">
			<form action="<?= base_url('profile/edit') ?>" method="POST" enctype="multipart/form-data">
				<label for="email" hidden>Email</label>
				<input type="text" id="email" name="email" value="<?= $user['email']; ?>" hidden>
				<div class="profile-edit">
					<?= $this->session->flashdata('gagalEdit'); ?>
					<div class="foto-profile">
						<img src="<?= base_url('assets/img/profile/') . $user['image'] ?>" alt="your-profile"
							id="image-1">
						<img src="<?= base_url('assets/img/profile/') . $user['image'] ?>" alt="your-profile"
							id="outputImage">
						<a id="del" onclick="delImage('#image','#outputImage')" type="button"><i class="fas fa fa-times"
								style="font-size: 25px;"></i></a>
					</div>
					<div class="btn-profile-edit">
						<label for="image">Ubah Foto Profile</label>
						<input type="file" name="image" id="image" hidden>
					</div>
				</div>
				<label for="email">Email</label>
				<input type="text" id="email" name="email" value="<?= $user['email']; ?>" disabled readonly>
				<?= $this->session->flashdata('usernameGagal'); ?>
				<label for="username">Username</label>
				<?= form_error('username', '<small class = "text-danger pl-3">', '</small>'); ?>
				<input value="<?= $user['username'] ?>" type="text" id="username" name="username"
					placeholder="<?= $user['username']; ?>">
				<span>Deskripsi</span>
				<textarea name="moto" id="moto" cols="30" rows="5"
					placeholder="Tulis deskripsi mu disini"><?= $user['moto'] ?></textarea>
				<small id="remaining">Maksimal 50 karakter</small>
				<div class="btn">
					<button type="submit">Update</button>
				</div>
			</form>
		</div>
	</div>
</div>
