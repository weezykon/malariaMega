        <style>
            .h-min-screen {
                height: 100vh;
            }

            .bg-image {
                background-image: url(<?= base_url('assets/medication-pills-isolated-on-purple-background-3683116.jpg') ?>);
                background-position: center;
                background-size: cover;
            }

            .flex-form {
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .row {
                width: 100%;
            }
        </style>
        <div class="row h-min-screen">
            <div class="col-md-4 bg-image"></div>
            <div class="col-md-8 flex-form">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="card">

                            <!-- Logo -->
                            <div class="card-header pt-4 pb-4 text-center bg-primary">
                                <a href="<?= base_url() ?>">
                                    <span style="color: #fff;font-size: 34px;text-transform: uppercase;">Malaria</span>
                                </a>
                            </div>

                            <div class="card-body p-4">

                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center mt-0 font-weight-bold">Join Us</h4>
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
                                <form method="post" action="<?= base_url('register') ?>">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="firstname">First Name</label>
                                                <input class="form-control" type="text" name="m_p_firstname" required="" placeholder="First Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="lastname">Last Name</label>
                                                <input class="form-control" type="text" name="m_p_lastname" required="" placeholder="Last Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Gender</label>
                                                <select class="form-control" name="m_p_gender">
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="emailaddress">Email address</label>
                                                <input class="form-control" type="email" name="m_p_email" required="" placeholder="Email">
                                            </div>

                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input class="form-control" type="password" required="" name="m_p_password" placeholder="Password">
                                            </div>

                                            <div class="form-group">
                                                <label for="age">Age</label>
                                                <input class="form-control" type="number" required="" name="m_p_age" placeholder="Age">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary" type="submit"> Register </button>
                                    </div>

                                </form>

                                <div class="form-group mb-0 text-center">
                                    Already a member<a class="btn btn-link" href="<?= base_url('login') ?>">Log in</a>
                                </div>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                    </div> <!-- end col -->
                </div>
            </div>
        </div>
        </div>

        </div>
        <!-- END wrapper -->


        <div class="rightbar-overlay"></div>
        <!-- /Right-bar -->

        <!-- bundle -->
        <script src="<?= base_url('assets/admin/js/app.min.js') ?>"></script>

        <!-- third party js -->
        <script src="<?= base_url('assets/admin/js/vendor/Chart.bundle.min.js') ?>"></script>
        <script src="<?= base_url('assets/admin/js/vendor/jquery-jvectormap-1.2.2.min.js') ?>"></script>
        <script src="<?= base_url('assets/admin/js/vendor/jquery-jvectormap-world-mill-en.js') ?>"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="<?= base_url('assets/admin/js/pages/demo.dashboard.js') ?>"></script>
        <!-- end demo js-->

        <!-- SUMMERNOTE js -->
        <script src="<?= base_url('assets/admin/js/vendor/summernote-bs4.min.js') ?>"></script>

        <!-- SUMMERNOTE demo -->
        <script src="<?= base_url('assets/admin/js/pages/demo.summernote.js') ?>"></script>


        <!-- Dropzone js -->
        <script src="<?= base_url('assets/admin/js/vendor/dropzone.min.js') ?>"></script>

        <!-- File upload js -->
        <script src="<?= base_url('assets/admin/js/ui/component.fileupload.js') ?>"></script>

        <!-- Chart -->
        </body>

        </html>