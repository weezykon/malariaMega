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
                            <button  data-toggle="modal" data-target="#info-mail-modal" class="btn btn-info">Create Mail</button>
                        </div>
                        <h4 class="page-title">Mails</h4>
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
                                    <?php foreach ($mails as $key => $mail) {
                                        $words = strip_tags($mail['m_text']);
                                        $type = str_replace('_', ' ', $mail['m_type']);
                                    ?>
                                        <div class="col-md-6">
                                            <div class="card text-xs-center border">
                                                <div class="card-header">
                                                    <h4><?= $type ?></h4>
                                                </div>
                                                <div class="card-body">
                                                    <?php echo substr($words,0, 200) ?>
                                                </div>
                                                <div class="card-footer text-muted">
                                                    <button class="btn btn-info" data-toggle="modal" data-m_rand="<?php echo $mail['m_rand']; ?>" data-m_text="<?php echo $mail['m_text']; ?>" data-target="#info-edit-mail-modal"><i class="mdi mdi-eye"></i> Edit</button>
                                                    <a href="<?= base_url('admin/mail/delete/'.$mail['m_rand']) ?>" class="btn btn-danger"> <i class="mdi mdi-delete"></i></a>
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
<div id="info-mail-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="info-header-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="POST" action="<?= base_url('admin/mail/create') ?>">
                <div class="modal-header modal-colored-header bg-info">
                    <h4 class="modal-title" id="info-header-modalLabel">Create Mail</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label class="label label-default">Mail Type</label>
                            <select name="m_type" class="form-control" required="required">
                                <option value="transaction_confirmed">Transaction Confirmed</option>
                                <option value="transaction_dispatched">Transaction Dispatched</option>
                                <option value="transaction_delivered">Transaction Delivered</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="label label-default">Message</label>
                            <textarea class="form-control" name="m_text" required="required"></textarea>
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


<div id="info-edit-mail-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="info-header-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="POST" action="<?= base_url('admin/mail/update') ?>">
                <div class="modal-header modal-colored-header bg-info">
                    <h4 class="modal-title" id="info-header-modalLabel">Edit Mail</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label class="label label-default">Message</label>
                            <textarea class="form-control" name="m_text" id="m_text"></textarea>
                            <input type="hidden" name="m_rand" class="form-control" id="m_rand" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info">Update</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>