<style>
    .job__details__user-edit{
        width: 100% !important;
    }
</style>
<div class="content-page">
    <div class="content">

        <!-- Topbar Start -->
        <?php require_once 'partials/topbar.php';?>
        <!-- end Topbar -->

        <!-- Start Content-->
        <div class="container-fluid">
            
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <button  data-toggle="modal" data-target="#info-product-modal" class="btn btn-info">New Opening</button>
                        </div>
                        <h4 class="page-title">Openings</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <!-- Contents -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive-sm">
                                <div class="row">
                                    <?php foreach ($careers as $key => $career) {
                                        $words = strip_tags($career['rc_text']);
                                    ?>
                                        <div class="col-md-6">
                                            <div class="card text-xs-center border">
                                                <div class="card-header">
                                                    <h4><?= $career['rc_title'] ?></h4>
                                                </div>
                                                <div class="card-body">
                                                    <?php echo substr($words,0, 200) ?>
                                                </div>
                                                <div class="card-footer text-muted">
                                                    <a href="<?= base_url('admin/opening/delete/'.$career['rc_rand']) ?>" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                </div>
                                            </div> <!-- end card-->
                                        </div>
                                    <?php } ?>
                                </div>
                            </div> <!-- end table-responsive-->
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            
        </div> <!-- container -->

    </div> <!-- content -->


<!-- Modals -->
<!-- Add Brand -->
<div id="info-product-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="info-header-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="POST" action="<?= base_url('admin/opening/create') ?>">
                <div class="modal-header modal-colored-header bg-info">
                    <h4 class="modal-title" id="info-header-modalLabel">New Opening</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label class="label label-default">Job Title</label>
                            <input type="text" name="rc_title" placeholder="Job Title" class="form-control" />
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="label label-default">Job Location</label>
                            <input type="text" name="rc_location" placeholder="Job Location" class="form-control" />
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="label label-default">Job Description</label>
                            <textarea id="summernote-basic" name="rc_text"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info">Create</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>