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
                        <h4 class="page-title">Applications</h4>
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
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Opening</th>
                                            <th>Resume</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($applications as $key => $value) { ?>
                                            <tr>
                                                <td class="table-user">
                                                    <?= $value['ra_name'] ?>
                                                </td>
                                                <td class="table-user">
                                                    <?= $value['ra_email'] ?>
                                                </td>
                                                <td class="table-user">
                                                    <?= $value['ra_phone'] ?>
                                                </td>
                                                <td class="table-user">
                                                    <?= $value['rc_title'] ?>
                                                </td>
                                                <td class="table-action">
                                                    <a target="_blank" href="<?= base_url($value['ra_resume']) ?>" class="btn btn-info">Download</a>
                                                    <a href="<?= base_url('admin/application/delete/'.$value['ra_rand']) ?>" class="btn btn-danger">Delete <i class="mdi mdi-trash-can-outline"></i></a>
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