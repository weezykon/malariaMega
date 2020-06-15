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
                            <a target="_blank" href="<?= base_url('admin/pages/create') ?>" class="btn btn-info">Create Product</a>
                        </div>
                        <h4 class="page-title">Pages</h4>
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
                                <?php if($pages){ ?>
                                    <table class="table table-striped table-centered mb-0">
                                        <thead>
                                            <tr>
                                                <th>Page Name</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($pages as $key => $value) { 
                                                
                                            ?>
                                                <td>
                                                    <td class="table-user">
                                                        <?= $value['pg_name'] ?>
                                                    </td>
                                                    <td class="table-user">
                                                        <a class="btn btn-danger" href="<?= base_url('admin/page/delete/'.$value['pa_rand']) ?>">Delete</a>
                                                    </td>
                                                </td>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                <?php }else{ ?>
                                    <h4 style="text-align: center">No Pages</h4>
                                <?php } ?>
                            </div> <!-- end table-responsive-->
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            
        </div> <!-- container -->

    </div> <!-- content -->