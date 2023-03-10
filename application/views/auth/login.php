    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block box-profile">
                                <img src="<?= base_url('assets/') ?>img/logo-zona-kampus.png" alt="">
                            </div>
                            <div class="col-lg-6 box-form">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Halaman Login</h1>
                                    </div>
                                    <?= $this->session->flashdata('message'); ?>
                                    <form class="user" method="POST" action="<?= base_url('auth') ?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Masukan alamat email" value="<?= set_value('email'); ?>">
                                            <?= form_error('email', '<small class = "text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                            <?= form_error('password', '<small class = "text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="btn-submit">
                                            <button type="submit" class="btn btn-user btn-block">
                                                Masuk
                                            </button>
                                        </div>
                                    </form>
                                    <hr class="line-btm">
                                    <div class="text-center forgot-pass">
                                        <a class="small" href="forgot-password.html">Lupa password ?</a>
                                    </div>
                                    <div class="text-center regis">
                                        <a class="small" href="<?= base_url('auth/registration/') ?>">Buat akun baru</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>