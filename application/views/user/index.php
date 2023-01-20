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

		<!-- Navbar profile -->
		<div class="nav-item dropdown no-arrow profile">
			<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				<span class="mr-2 d-lg-inline">
					<?= $user['username']; ?>
				</span>
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

<!-- Content Menu -->
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

			<?php rsort($videos);
			foreach ($videos as $video) : ?>
				<div class="row people-content g-0">
					<!-- Content User -->
					<div class="contaier user-parent">
						<div class="row user">
							<div class="col-md-auto img-profile">
								<a class="nav-link user-img" href="#" role="button" aria-expanded="false">
									<img id="avatar" class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $video->image ?>">
								</a>
							</div>
							<div class="col-md-auto name-profile">
								<a href="">
									<div class="nama">
										<h4 class="mr-2 d-lg-inline name">
											<?= $video->username ?>
										</h4>
									</div>
									<p class="mr-2 d-lg-inline time"><?= $video->create_at ?></p>
								</a>
							</div>
						</div>
					</div>
					<!-- Content Video -->
					<div class="col-md-7 content-parent">
						<div class="container video">
							<video class="onmodal" data-bs-toggle="modal" data-bs-target="#videoModal" data-avatar="<?= base_url('assets/img/profile/') . $video->image ?>" data-username="<?= $video->username ?>" data-date="<?= $video->create_at ?>" data-content="<?= $video->content_link ?>" data-judul="<?= $video->judul ?>" data-desc="<?= $video->desc_content ?>">
								<source src="<?= $video->content_link ?>">
							</video>
						</div>
					</div>
					<!-- Deskripsi -->
					<div class="col-md-5 content-coment">
						<h5 class="card-title onmodal" class="onmodal" data-bs-toggle="modal" data-bs-target="#videoModal" data-avatar="<?= base_url('assets/img/profile/') . $video->image ?>" data-username=" <?= $video->username ?>" data-date="<?= $video->create_at ?>" data-content="<?= $video->content_link ?>" data-judul="<?= $video->judul ?>" data-desc="<?= $video->desc_content ?>">
							<?= $video->judul ?>
						</h5>
						<p class="desc">
							<?= $video->desc_content ?>
						</p>
						<!-- Coment user -->
						<div class="card-body">
							<?php foreach ($comments as $comment) : ?>
								<?php if ($video->id_content == $comment->id_content) : ?>
									<div class="container box-coment" data-idcontent="<?= $comment->id_content ?>">
										<div class="row user-coment">
											<div class="col-md-auto img-profile">
												<a class="nav-link user-img" href="#" role="button" aria-expanded="false">
													<img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $comment->image ?>">
												</a>
											</div>
											<div class="col-md-9 name-profile">
												<a href="">
													<div class="nama">
														<h4 class="mr-2 d-lg-inline name" id="">
															<?= $comment->username ?>
														</h4>
													</div>
													<p class="mr-2 d-lg-inline time"><?= $comment->date ?></p>
												</a>
											</div>
										</div>
										<p>
											<?= $comment->komentar ?>
										</p>
									</div>
								<?php endif; ?>
							<?php endforeach; ?>
						</div>
						<div class=" container input-comment">
							<!-- form comment -->
							<form class="d-flex comment" role="" action="<?= base_url('user/comment') ?>" method="POST">
								<input type="hidden" name="id_content" id="" value="<?= $video->id_content ?>">
								<input type="hidden" name="id_user" id="" value="<?= $user['id_user'] ?>">
								<input class="form-control" type="text" name="komentar" id="komentar" placeholder="Masukan Comment" aria-label="Comment">
								<button class="btn-comment" type="submit" data-idcontent="<?= $video->id_content ?>">
									<i class=" fas fa-paper-plane fa-fw"></i>
								</button>
							</form>
							<!-- form like -->
							<form action="<?= base_url('user/like') ?>" method="POST">
								<div class="like-section">
									<input type="hidden" name="id_content" id="" value="<?= $video->id_content ?>">
									<input type="hidden" name="id_user" id="" value="<?= $user['id_user'] ?>">
									<button class="btn like" id=""><i class="fas fa-thumbs-up"></i></button>
									<span id="total-like" class="total-like"><?= $like ?></span>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- Modal video -->
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
										</div>
										<div class="col-md-auto name-profile">
											<a href="">
												<div class="nama">
													<h4 class="mr-2 d-lg-inline name" id="username"></h4>
												</div>
												<p class="mr-2 d-lg-inline time" id="date"></p>
											</a>
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
										<?php foreach ($comments as $comment) : ?>
											<?php if ($video->id_content == $comment->id_content) : ?>

												<div class="container box-coment" data-idcontent="<?= $comment->id_content ?>">
													<div class="row user-coment">
														<div class="col-md-auto img-profile">
															<a class="nav-link user-img" href="#" role="button" aria-expanded="false">
																<img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $comment->image ?>">
															</a>
														</div>
														<div class="col-md-9 name-profile">
															<a href="">
																<div class="nama">
																	<h4 class="mr-2	 d-lg-inline name" id="">
																		<?= $comment->username ?>
																	</h4>
																</div>
																<p class="mr-2 d-lg-inline time"><?= $comment->date ?></p>
															</a>
														</div>
													</div>
													<p>
														<?= $comment->komentar ?>
													</p>
												</div>
											<?php endif; ?>
										<?php endforeach; ?>
										<div class="container box-coment">
											<div class="row user-coment">
												<div class="col-md-auto img-profile">
													<a class="nav-link user-img" href="#" role="button" aria-expanded="false">
														<img class="img-profile rounded-circle" src="<?= base_url('assets/') ?>img/undraw_profile.svg">
													</a>
												</div>
												<div class="col-md-9 name-profile">
													<a href="">
														<div class="nama">
															<h4 class="mr-2 d-lg-inline name">
																<?= $user['username']; ?>
															</h4>
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
													<a href="">
														<div class="nama">
															<h4 class="mr-2 d-lg-inline name">
																<?= $user['username']; ?>
															</h4>
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
										<form class="d-flex comment" role="" action="<?= base_url('user/comment') ?>" method="POST">]
											<input type="hidden" name="id_user" id="" value="<?= $user['id_user'] ?>">
											<input class="form-control" type="text" placeholder="Masukan Comment" aria-label="Comment">
											<button class="btn-comment" type="submit"><i class="fas fa-paper-plane fa-fw"></i></button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- end modal -->
			<?php endforeach; ?>

		</div>
		<!-- Right Content -->
		<div class="col-sm-4 side-content">
			<div class="btn-posting">
				<a href="<?= base_url('upload/index/') ?>" class="btn container posting" type="submit" style="font-size: 50px;">
					<h3>Ayo Segera posting</h3>
					<img src="<?= base_url('assets/') ?>img/posting-icon.png" alt="">
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
								<hp>
									<?= $rekomen->judul ?>
								</hp>
							</div>
							<div class="nama-date">
								<p><?= $rekomen->username ?></p>
								<ul>
									<li>kategori</li>
								</ul>
							</div>
							<div class="date">
								<p class="date">
									<?= $rekomen->create_at ?>
								</p>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>