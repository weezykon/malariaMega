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
                            <button  data-toggle="modal" data-target="#info-banner-modal" class="btn btn-info">Create Banner</button>
                        </div>
                        <h4 class="page-title">Homepage Banners</h4>
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
                                <table class="table table-striped table-centered mb-0">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Heading</th>
                                            <th>Subtitle</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($banners as $key => $value) { ?>
                                            <tr>
                                                <td class="table-user">
                                                    <img src="<?= base_url($value['hb_image_url'])?>" />
                                                </td>
                                                <td class="table-user">
                                                    <?= $value['hb_title'] ?>
                                                </td>
                                                <td class="table-user">
                                                    <?= $value['hb_subtitle'] ?>
                                                </td>
                                                <td class="table-user">
                                                    <?php if($value['hb_active'] == 1) { ?>
                                                        <a target="_new" href="<?= $value['hb_link'] ?>" class="btn btn-info">View <i class="mdi mdi-eye"></i></a>
                                                        <a href="<?= base_url('admin/banner/delete/'.$value['hb_rand']) ?>" class="btn btn-danger"><i class="mdi mdi-trash-can-outline"></i></a>
                                                    <?php }else{ ?>
                                                        <a href="<?= base_url('admin/banner/restore/'.$value['hb_rand']) ?>" class="btn btn-danger">Restore <i class="mdi mdi-undo"></i></a>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div> <!-- end table-responsive-->
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
            <?= form_open_multipart('admin/banner/create') ?>
                <div class="modal-header modal-colored-header bg-info">
                    <h4 class="modal-title" id="info-header-modalLabel">Create Banner</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Banner Image <b>( Image Dimension - 600x315 )</b></label>
                        <input name="userfile" type="file" class="form-control" required="" />
                    </div>
                    <div class="form-group">
                        <label>Banner Title</label>
                        <input name="hb_title" type="text" class="form-control" required="" />
                    </div>
                    <div class="form-group">
                        <label>Banner Sub Title</label>
                        <input name="hb_subtitle" type="text" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Banner Link</label>
                        <input name="hb_link" type="text" class="form-control" required="" />
                    </div>
                    <div class="form-group">
                        <label>Banner Button text</label>
                        <input name="hb_button" type="text" class="form-control" required="" />
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