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
                        <h4 class="page-title">Navs</h4>
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
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($navs as $key => $value) { ?>
                                            <tr>
                                                <td class="table-user">
                                                    <?= $value['h_name'] ?>
                                                </td>
                                                <td class="table-action">
                                                    <?php if ($value['h_submenu'] == 0) { ?>
                                                        <a href="<?= base_url('admin/nav/enable/'.$value['h_rand']) ?>" class="btn btn-info"> Enable SubMenu</a>
                                                    <?php }else{ ?>
                                                        <a href="<?= base_url('admin/nav/disable/'.$value['h_rand']) ?>" class="btn btn-danger"> Disable SubMenu</a>
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