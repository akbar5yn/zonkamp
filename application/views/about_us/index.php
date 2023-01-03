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
				<li><a class="dropdown-item" href="<?= base_url('profile/index/') ?>"><i
							class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
						Profile
					</a>
				</li>
				<li><a class="dropdown-item logout" href="<?= base_url('auth/logout') ?>" type="button"
						data-bs-toggle="modal" data-bs-target="#logoutModal">
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

<!-- Mian Content -->

<div class="container container-about-us">
	<div class="about-us-second">
		<div class="profile-image">
			<img src="<?= base_url('assets/') ?>img/akbar.svg" alt="akbar">
		</div>
		<div class="profile-desc">
			<div class="about-team">
				<div class="name">
					<h2>Akbar Pratama Suryamin</h2>
					<p class="role">Product Manager / Programmer</p>
				</div>
				<div class="desc">
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio sapiente placeat amet adipisci
						quo ratione corrupti debitis nobis eaque veritatis obcaecati, consectetur aliquid commodi
						recusandae quaerat consequuntur iste. Error, facilis.</p>
				</div>
				<div class="media">
					<button class="btn" data-bs-toggle="modal" data-bs-target="#akbar">Play Video</button>
					<div class="profile-sosmed second-sosmed">
						<ul>
							<li>
								<a href="" class="wa">
									<img src="<?= base_url('assets/') ?>img/fb-icon.svg" alt="wa">
								</a>
							</li>
							<li>
								<a href="" class="instagram">
									<img src="<?= base_url('assets/') ?>img/ig-icon.svg" alt="wa">
								</a>
							</li>
							<li>
								<a href="" class="github">
									<img src="<?= base_url('assets/') ?>img/github-icon.svg" alt="wa">
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="profile-sosmed first-sosmed">
			<ul>
				<li>
					<a href="" class="wa">
						<img src="<?= base_url('assets/') ?>img/fb-icon.svg" alt="wa">
					</a>
				</li>
				<li>
					<a href="" class="instagram">
						<img src="<?= base_url('assets/') ?>img/ig-icon.svg" alt="wa">
					</a>
				</li>
				<li>
					<a href="" class="github">
						<img src="<?= base_url('assets/') ?>img/github-icon.svg" alt="wa">
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="about-us-second">
		<div class="profile-image second-img">
			<img src="<?= base_url('assets/') ?>img/jindan-profile.png" alt="jindan">
		</div>
		<div class="profile-sosmed first-sosmed">
			<ul>
				<li>
					<a href="" class="wa">
						<img src="<?= base_url('assets/') ?>img/fb-icon.svg" alt="wa">
					</a>
				</li>
				<li>
					<a href="" class="instagram">
						<img src="<?= base_url('assets/') ?>img/ig-icon.svg" alt="wa">
					</a>
				</li>
				<li>
					<a href="" class="github">
						<img src="<?= base_url('assets/') ?>img/github-icon.svg" alt="wa">
					</a>
				</li>
			</ul>
		</div>

		<div class="profile-desc">
			<div class="about-team">
				<div class="name">
					<h2>Mohammad Jindan Dubbay Al Faresh</h2>
					<p class="role">Computer Graphic / Designer</p>
				</div>
				<div class="desc">
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio sapiente placeat amet adipisci
						quo ratione corrupti debitis nobis eaque veritatis obcaecati, consectetur aliquid commodi
						recusandae quaerat consequuntur iste. Error, facilis.</p>
				</div>
				<div class="media">
					<button class="btn" data-bs-toggle="modal" data-bs-target="#jindan">Play Video</button>
					<div class="profile-sosmed second-sosmed">
						<ul>
							<li>
								<a href="" class="wa">
									<img src="<?= base_url('assets/') ?>img/fb-icon.svg" alt="wa">
								</a>
							</li>
							<li>
								<a href="" class="instagram">
									<img src="<?= base_url('assets/') ?>img/ig-icon.svg" alt="wa">
								</a>
							</li>
							<li>
								<a href="" class="github">
									<img src="<?= base_url('assets/') ?>img/github-icon.svg" alt="wa">
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="profile-image first-img">
			<img src="<?= base_url('assets/') ?>img/jindan-profile.png" alt="jindan">
		</div>
	</div>
	<div class="about-us-second">
		<div class="profile-image">
			<img src="<?= base_url('assets/') ?>img/habib-profile.png" alt="habib">
		</div>
		<div class="profile-desc">
			<div class="about-team">
				<div class="name">
					<h2>Habib Aditiya Julianto</h2>
					<p class="role">System Analyst</p>
				</div>
				<div class="desc">
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio sapiente placeat amet adipisci
						quo ratione corrupti debitis nobis eaque veritatis obcaecati, consectetur aliquid commodi
						recusandae quaerat consequuntur iste. Error, facilis.</p>
				</div>
				<div class="media">
					<button class="btn" data-bs-toggle="modal" data-bs-target="#habib">Play Video</button>
					<div class="profile-sosmed second-sosmed">
						<ul>
							<li>
								<a href="" class="wa">
									<img src="<?= base_url('assets/') ?>img/fb-icon.svg" alt="wa">
								</a>
							</li>
							<li>
								<a href="" class="instagram">
									<img src="<?= base_url('assets/') ?>img/ig-icon.svg" alt="wa">
								</a>
							</li>
							<li>
								<a href="" class="github">
									<img src="<?= base_url('assets/') ?>img/github-icon.svg" alt="wa">
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="profile-sosmed first-sosmed">
			<ul>
				<li>
					<a href="" class="wa">
						<img src="<?= base_url('assets/') ?>img/fb-icon.svg" alt="wa">
					</a>
				</li>
				<li>
					<a href="" class="instagram">
						<img src="<?= base_url('assets/') ?>img/ig-icon.svg" alt="wa">
					</a>
				</li>
				<li>
					<a href="" class="github">
						<img src="<?= base_url('assets/') ?>img/github-icon.svg" alt="wa">
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="about-us-second">
		<div class="profile-image second-img">
			<img src="<?= base_url('assets/') ?>img/syawal-profile.png" alt="syawal">
		</div>
		<div class="profile-sosmed first-sosmed">
			<ul>
				<li>
					<a href="" class="wa">
						<img src="<?= base_url('assets/') ?>img/fb-icon.svg" alt="wa">
					</a>
				</li>
				<li>
					<a href="" class="instagram">
						<img src="<?= base_url('assets/') ?>img/ig-icon.svg" alt="wa">
					</a>
				</li>
				<li>
					<a href="" class="github">
						<img src="<?= base_url('assets/') ?>img/github-icon.svg" alt="wa">
					</a>
				</li>
			</ul>
		</div>

		<div class="profile-desc">
			<div class="about-team">
				<div class="name">
					<h2>Syawal Syaputra</h2>
					<p class="role">Multimedia Specialist</p>
				</div>
				<div class="desc">
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio sapiente placeat amet adipisci
						quo ratione corrupti debitis nobis eaque veritatis obcaecati, consectetur aliquid commodi
						recusandae quaerat consequuntur iste. Error, facilis.</p>
				</div>
				<div class="media">
					<button class="btn" data-bs-toggle="modal" data-bs-target="#syawal">Play Video</button>
					<div class="profile-sosmed second-sosmed">
						<ul>
							<li>
								<a href="" class="wa">
									<img src="<?= base_url('assets/') ?>img/fb-icon.svg" alt="wa">
								</a>
							</li>
							<li>
								<a href="" class="instagram">
									<img src="<?= base_url('assets/') ?>img/ig-icon.svg" alt="wa">
								</a>
							</li>
							<li>
								<a href="" class="github">
									<img src="<?= base_url('assets/') ?>img/github-icon.svg" alt="wa">
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="profile-image first-img">
			<img src="<?= base_url('assets/') ?>img/syawal-profile.png" alt="syawal">
		</div>
	</div>
	<!-- Footer -->
	<div class="preview-web">
		<h2>Abous Us</h2>
		<p class="desc-prev">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque quibusdam, aspernatur,
			amet, atque facilis dolore cum aliquid nam consequatur earum magni eveniet iure dolorum iusto beatae officia
			libero exercitationem culpa ab. Repellat quasi voluptatem similique dolores eum ex cumque et doloremque
			nobis deleniti, rem nostrum suscipit. Ut at beatae quasi.</p>
		<div class="prev-img">
			<img src="<?= base_url('assets/') ?>about_us/team-zon.png" alt="zonkamp" data-bs-toggle="modal"
				data-bs-target="#footer">
		</div>
	</div>
</div>

<!-- Modal video Akbar-->
<div class="modal fade" id="akbar" tabindex="-1" aria-labelledby="outputModal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-logout">
		<div class="modal-content modal-about-us">

			<div class="modal-body justify-content-between">
				<h5>Akbar Pratama Suryamin</h5>
				<button type="button" class="btn-close close-akbar" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-footer">
				<video controls id="v-akbar" class="video-about"
					src="<?= base_url('assets/') ?>about_us/Akbar.mp4"></video>
			</div>
		</div>
	</div>
</div>
<!-- End modal -->

<!-- Modal video Jindan-->
<div class="modal fade" id="jindan" tabindex="-1" aria-labelledby="outputModal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-logout">
		<div class="modal-content modal-about-us">

			<div class="modal-body justify-content-between">
				<h5>Akbar Pratama Suryamin</h5>
				<button type="button" class="btn-close close-jindan" data-bs-dismiss="modal"
					aria-label="Close"></button>
			</div>
			<div class="modal-footer">
				<video controls id="v-jindan" class="video-about"
					src="<?= base_url('assets/') ?>about_us/Jindan.mp4"></video>
			</div>
		</div>
	</div>
</div>
<!-- End modal -->

<!-- Modal video Habib-->
<div class="modal fade" id="habib" tabindex="-1" aria-labelledby="outputModal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-logout">
		<div class="modal-content modal-about-us">

			<div class="modal-body justify-content-between">
				<h5>Akbar Pratama Suryamin</h5>
				<button type="button" class="btn-close close-habib" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-footer">
				<video controls id="v-habib" class="video-about"
					src="<?= base_url('assets/') ?>about_us/Habib.mp4"></video>
			</div>
		</div>
	</div>
</div>
<!-- End modal -->

<!-- Modal video Syawal-->
<div class="modal fade" id="syawal" tabindex="-1" aria-labelledby="outputModal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-logout">
		<div class="modal-content modal-about-us">

			<div class="modal-body justify-content-between">
				<h5>Akbar Pratama Suryamin</h5>
				<button type="button" class="btn-close close-syawal" data-bs-dismiss="modal"
					aria-label="Close"></button>
			</div>
			<div class="modal-footer">
				<video controls id="v-syawal" class="video-about"
					src="<?= base_url('assets/') ?>about_us/Syawal.mp4"></video>
			</div>
		</div>
	</div>
</div>
<!-- End modal -->

<!-- Modal video footer-->
<div class="modal fade" id="footer" tabindex="-1" aria-labelledby="outputModal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-logout">
		<div class="modal-content modal-about-us">

			<div class="modal-body justify-content-between">
				<h5>Team Zona Kampus</h5>
				<button type="button" class="btn-close close-footer" data-bs-dismiss="modal"
					aria-label="Close"></button>
			</div>
			<div class="modal-footer">
				<video controls id="v-footer" class="video-about"
					src="<?= base_url('assets/') ?>about_us/zonkamp.mp4"></video>
			</div>
		</div>
	</div>
</div>
<!-- End modal -->
