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
                            <?php if ($pop['pop_active'] == 0) { ?>
                                <a href="<?= base_url('admin/popup/enable') ?>" class="btn btn-info"> Enable</a>
                            <?php }else{ ?>
                                <button class="btn btn-info" data-toggle="modal" data-target="#info-popup-modal"><i class="dripicons dripicons-preview"></i> Change Image</button>
                                <a href="<?= base_url('admin/popup/disable') ?>" class="btn btn-danger"> Disable</a>
                            <?php } ?>
                        </div>
                        <h4 class="page-title">Popup Image</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <!-- Contents -->
            <div class="row">
                <div class="col-xl-12">
                    <?php if ($this->session->flashdata('message')) {?>
                        <div class="alert alert-<?=$this->session->flashdata('status')?> alert-dismissible show text-center margin-bottom-1x">
                            <span class="alert-close" data-dismiss="alert"></span>
                            <i class="icon-ban"></i>&nbsp;&nbsp;
                            <!-- <strong><?php if ($this->session->flashdata('status') == 'danger') {echo 'Oops';} else {echo 'Success';}?>:</strong> -->
                                <?=$this->session->flashdata('message');?>
                        </div>
                    <?php }?>
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive-sm">
                                <img src="<?= base_url($pop['pop_image'])?>" width="300px" />
                            </div> <!-- end table-responsive-->
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            
        </div> <!-- container -->

    </div> <!-- content -->


<div id="info-popup-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="info-header-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="<?= base_url('admin/popup/update') ?>" enctype="multipart/form-data">
                <div class="modal-header modal-colored-header bg-info">
                    <h4 class="modal-title" id="info-header-modalLabel">Change Image</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <input name="userfile" type="file" class="form-control" required="" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info">Upload </button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>