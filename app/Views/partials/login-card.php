<section class="hero-wrap hero-wrap-2 js-fullheight"
    style="background-image: url('<?= base_url('assets/images/car-1.png') ?>');"
    data-stellar-background-ratio="0.5">

    <div class="overlay"></div>

    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs">
                    <span class="mr-2">
                        <a href="<?= base_url() ?>">
                            Home <i class="ion-ios-arrow-forward"></i>
                        </a>
                    </span>
                    <span>
                        Login <i class="ion-ios-arrow-forward"></i>
                    </span>
                </p>

                <h1 class="mb-3 bread">Login</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-6">

                <div class="bg-white p-5 rounded shadow">

                    <div class="text-center mb-4">
                        <h3>Masuk ke Akun</h3>
                        <p class="text-muted">
                            Login untuk mengelola pemesanan rental mobil Anda
                        </p>
                    </div>

                    <form action="<?= base_url('auth/login') ?>" method="post">

                        <?= csrf_field() ?>

                        <div class="form-group">
                            <label>Email</label>
                            <input
                                type="email"
                                name="email"
                                class="form-control"
                                placeholder="Masukkan email"
                                required>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input
                                type="password"
                                name="password"
                                class="form-control"
                                placeholder="Masukkan password"
                                required>
                        </div>

                        <div class="form-group">
                            <button
                                type="submit"
                                class="btn btn-primary btn-block py-3">
                                Login
                            </button>
                        </div>

                    </form>

                    <hr>

                    <div class="text-center">
                        <p>
                            Belum punya akun?
                            <!-- <a href="<?= base_url('register') ?>"> -->
                                <a href="#"></a>
                                Daftar Sekarang
                            </a>
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>