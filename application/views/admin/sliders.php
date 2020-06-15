<style>
    .sli{
        font-size: 15px;
        display: flex;
        align-items: center;
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
                            <button  data-toggle="modal" data-target="#info-banner-modal" class="btn btn-info">Create Slider</button>
                        </div>
                        <h4 class="page-title">Sliders</h4>
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
                            <div class="row">
                                <?php foreach ($sliders as $key => $value) { ?>
                                    <div class="col-sm-6">
                                        <img src="<?= base_url($value['sl_image_url'])?>" width="100%" height="80%" />
                                        <a href="<?= base_url('admin/slider/delete/'.$value['sl_rand']) ?>" class="btn btn-danger"><i class="mdi mdi-trash-can-outline"></i></a>
                                    </div><!-- end table-responsive-->
                                <?php } ?>
                            </div>
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            
        </div> <!-- container -->

    </div> <!-- content -->

    
<!-- Modals -->
<!-- Add Brand -->
<div id="info-banner-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="info-header-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <?= form_open_multipart('admin/slider/create') ?>
                <div class="modal-header modal-colored-header bg-info">
                    <h4 class="modal-title" id="info-header-modalLabel">Create Slider</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Image <b>( Image Dimension - 1440x555 )</b></label>
                        <input name="userfile" type="file" class="form-control" required="" />
                    </div>
                    <div class="form-group">
                        <label>Slider Link</label>
                        <div class="row">
                            <div class="col-sm-4 sli">
                                <?= base_url() ?>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="sl_link" required="" /> 
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Button Text</label>
                        <input type="text" class="form-control" name="sl_text" required="" /> 
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info">Submit</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>