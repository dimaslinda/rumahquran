<body>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('<?= base_url(); ?>assets/img/bg-01.jpg');">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="post" action="<?= base_url(); ?>auth">
                    <span class="login100-form-logo">
                        <img src="<?= base_url(); ?>assets/img/logo.png" alt="" style="width: 83%;">
                    </span>

                    <span class="login100-form-title p-b-34 p-t-27">
                        Log in
                    </span>
                    <?= $this->session->flashdata('message'); ?>
                    <div class="wrap-input100">
                        <input class="input100" type="text" name="username" placeholder="Username" value="<?= set_value('username'); ?>">
                        <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>

                    <div class="wrap-input100">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>
                </form>
                <hr>
                <div class="text-center">
                    <a href="#" class="small">Forgot Password?</a>
                </div>
            </div>
        </div>
    </div>
    <div id="dropDownSelect1"></div>