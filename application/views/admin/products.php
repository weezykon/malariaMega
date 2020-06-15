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
                            <button  data-toggle="modal" data-target="#info-product-modal" class="btn btn-info">Create Product</button>
                        </div>
                        <h4 class="page-title">Products</h4>
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
                                            <th>Stock</th>
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
                                                <td class="table-user">
                                                    <?= $value['stock'] ?>
                                                </td>
                                                <td class="table-action">
                                                    <a href="<?= base_url('admin/product/'.$value['p_rand']) ?>" class="btn btn-info">View <i class="dripicons dripicons-chevron-right"></i></a>
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
<div id="info-product-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="info-header-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="POST" action="<?= base_url('admin/product/create') ?>">
                <div class="modal-header modal-colored-header bg-info">
                    <h4 class="modal-title" id="info-header-modalLabel">Create Product</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label class="label label-default">Product Name</label>
                            <input type="text" name="p_name" required="" placeholder="Product Name" class="form-control" />
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="label label-default">Product Price</label>
                            <input type="number" name="p_price" required="" placeholder="Product Price" class="form-control" />
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="label label-default">Product Brand</label>
                            <select class="form-control" name="p_brand" required="">
                                <?php foreach ($brands as $key => $brand) { ?>
                                    <option value="<?= $brand['b_rand'] ?>"><?= $brand['b_name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="label label-default">Product Category</label>
                            <select class="form-control" name="p_category" required="">
                                <?php foreach ($categories as $key => $category) { ?>
                                    <option value="<?= $category['p_c_rand'] ?>"><?= $category['p_c_name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="label label-default">Stock</label>
                            <input type="number" name="p_stock" placeholder="Stock at Hand" class="form-control" />
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="label label-default">Barcode</label>
                            <input type="text" name="p_barcode" placeholder="Barcode" class="form-control" />
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="label label-default">Color(s)</label>
                            <textarea class="form-control" name="p_colors" placeholder="Metallic Copper, Ocean Blue, Midnight Black" rows="2"></textarea>
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="label label-default">Description</label>
                            <textarea id="summernote-basic" name="p_description"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info">Next</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>