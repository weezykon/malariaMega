
                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <?= date('Y') ?> © Rifugio
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

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

    <script>
        // Edit Brand modal;
        $('#edit-brand-modal').on('show.bs.modal', function(e) {
            // Rand
            var b_rand = $(e.relatedTarget).data('b_rand');
            $(e.currentTarget).find('input[name="b_rand"]').val(b_rand);
            // Name
            var b_name = $(e.relatedTarget).data('b_name');
            $(e.currentTarget).find('input[name="b_name"]').val(b_name);
        });

        // Edit Brand modal;
        $('#edit-category-modal').on('show.bs.modal', function(e) {
            // Rand
            var p_c_rand = $(e.relatedTarget).data('p_c_rand');
            $(e.currentTarget).find('input[name="p_c_rand"]').val(p_c_rand);
            // Name
            var p_c_name = $(e.relatedTarget).data('p_c_name');
            $(e.currentTarget).find('input[name="p_c_name"]').val(p_c_name);
        });

        // Edit Mail modal;
        $('#info-edit-mail-modal').on('show.bs.modal', function(e) {
            // Rand
            var m_rand = $(e.relatedTarget).data('m_rand');
            $(e.currentTarget).find('input[name="m_rand"]').val(m_rand);
            // Name
            var m_text = $(e.relatedTarget).data('m_text');
            $(e.currentTarget).find('textarea[name="m_text"]').val(m_text);
            console.log(m_text);
        });

    </script>

</html>