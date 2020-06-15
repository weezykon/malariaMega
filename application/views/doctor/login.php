<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card">

                    <!-- Logo -->
                    <div class="card-header pt-4 pb-4 text-center bg-primary">
                        <a href="<?= base_url() ?>">
                            <span style="color: #fff;font-size: 34px;text-transform: uppercase;">Doctor</span>
                        </a>
                    </div>

                    <div class="card-body p-4">

                        <div class="text-center w-75 m-auto">
                            <h4 class="text-dark-50 text-center mt-0 font-weight-bold">Sign In</h4>
                            <p class="text-muted mb-4">Enter your email address and password to access portal.</p>
                        </div>

                        <?php if ($this->session->flashdata('message')) { ?>
                            <div class="alert alert-<?= $this->session->flashdata('status') ?> alert-dismissible show text-center margin-bottom-1x">
                                <span class="alert-close" data-dismiss="alert"></span>
                                <i class="icon-ban"></i>&nbsp;&nbsp;
                                <!-- <strong><?php if ($this->session->flashdata('status') == 'danger') {
                                                    echo 'Oops';
                                                } else {
                                                    echo 'Success';
                                                } ?>:</strong> -->
                                <?= $this->session->flashdata('message'); ?>
                            </div>
                        <?php } ?>
                        <form method="post" action="<?= base_url('doctor/login') ?>">

                            <div class="form-group">
                                <label for="emailaddress">Email address</label>
                                <input class="form-control" type="email" name="m_d_email" required="" placeholder="Enter your email">
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" required="" name="m_d_password" placeholder="Enter your password">
                            </div>

                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary" type="submit"> Log In </button>
                            </div>

                        </form>
                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>