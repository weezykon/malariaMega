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
                            <button class="btn btn-info" data-toggle="modal" data-target="#info-menu-modal">Add Sub-Menu Link</button>
                        </div>
                        <h4 class="page-title">Sub Menus</h4>
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
                                <table class="table table-striped table-centered mb-0">
                                    <thead>
                                        <tr>
                                            <th>Parent</th>
                                            <th>Name</th>
                                            <th>Link</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($subs as $key => $value) { ?>
                                            <tr>
                                                <td class="table-user">
                                                    <?= $value['parent']['h_name'] ?>
                                                </td>
                                                <td class="table-user">
                                                    <?= $value['s_name'] ?>
                                                </td>
                                                <td class="table-user">
                                                    <?= $value['s_link'] ?>
                                                </td>
                                                <td class="table-action">
                                                    <?php if($value['parent']['h_name'] !== 'More'){ ?>
                                                        <a href="<?= base_url('admin/submenu/delete/'.$value['s_rand']) ?>" class="action-icon"> <i class="mdi mdi-delete"></i></a>
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

    
<!-- Update Product Stock -->
<div id="info-menu-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="info-header-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="<?= base_url('admin/submenu/add') ?>">
                <div class="modal-header modal-colored-header bg-info">
                    <h4 class="modal-title" id="info-header-modalLabel">Add Sub Menu</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-sm-6 col-sm-offset-3">
                            <label class="label label-default">Select Parent</label>
                            <select class="form-control" name="s_header" required="">
                                <?php foreach ($navs as $key => $nav) { ?>
                                    <option value="<?= $nav['h_rand'] ?>"><?= $nav['h_name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group col-sm-6 col-sm-offset-3">
                            <label class="label label-default">Name</label>
                            <input type="text" name="s_name" required="" class="form-control" />
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="label label-default">Link</label>
                            <b>Paste Link</b><input type="text" placeholder="link" name="s_link" required="" class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info">Save </button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>