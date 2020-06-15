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
                        <h4 class="page-title">Trashed Products</h4>
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
                                            <th>Brand</th>
                                            <th>Category</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($products as $key => $value) { ?>
                                            <tr>
                                                <td class="table-user">
                                                    <?= $value['p_name'] ?>
                                                </td>
                                                <td class="table-user">
                                                    <?= $value['brand'] ?>
                                                </td>
                                                <td class="table-user">
                                                    <?= $value['category'] ?>
                                                </td>
                                                <td class="table-user">
                                                    ₦<?= number_format($value['p_price']) ?>
                                                </td>
                                                <td class="table-action">
                                                    <a href="<?= base_url('admin/product/restore/'.$value['p_rand']) ?>" class="btn btn-info">Restore <i class="mdi mdi-undo"></i></a>
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
