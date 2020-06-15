<style>
    .page-title-right {
        float: none;
        margin-bottom: 25px
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
                <div class="col-sm-9">
                    <?php $name = str_replace(" ", "-", $product['p_name']); ?>
                    <p class="page-title" style="line-height: 35px; padding: 20px 0;"><?= $product['p_name'] ?> <br> ₦<?= number_format($product['p_price']) ?></p>
                </div>
                <div class="col-sm-9">
                    <div class="page-title-right">
                        <a href="<?= base_url('admin/products') ?>" class="btn btn-secondary"><i class="dripicons dripicons-chevron-left"></i> Back</a>
                        <?php if ($product['p_featured'] == 0) { ?>
                            <a href="<?= base_url('admin/product/feature/'.$product['p_rand']) ?>" class="btn btn-info" ><i class="dripicons dripicons-star"></i> Feature</a>
                        <?php }else{ ?>
                            <a href="<?= base_url('admin/product/feature/'.$product['p_rand']) ?>" class="btn btn-danger" ><i class="dripicons dripicons-cross"></i> Remove Feature</a>
                        <?php } ?>
                        <a target="_new" href="<?= base_url('product/'.$name) ?>" class="btn btn-warning"><i class="dripicons dripicons-preview"></i> View</a>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#info-image-modal"><i class="dripicons dripicons-photo"></i> Add Image</button>
                        <button class="btn btn-success" data-toggle="modal" data-target="#info-stock-modal"><i class="dripicons dripicons-clipboard"></i> Update Stock</button>
                        <button class="btn btn-info" data-toggle="modal" data-target="#info-product-modal"><i class="dripicons dripicons-preview"></i> Edit</button>
                        <a href="<?= base_url('admin/product/delete/'.$product['p_rand']) ?>" class="btn btn-danger" ><i class="dripicons dripicons-trash"></i> Delete</a>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <!-- Contents -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4 col-md-4"><b>Stock at Hand:</b> <?= $stock ?></div>
                                <div class="col-sm-4 col-md-4"><b>Category:</b> <?= $product['p_c_name'] ?></div>
                                <div class="col-sm-4 col-md-4"><b>Brand:</b> <?= $product['b_name'] ?></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 col-md-4"><b>Barcode:</b> <?= $product['p_barcode'] ?></div>
                                <div class="col-sm-4 col-md-4"><b>Colors:</b> <?= $product['p_colors'] ?></div>
                                <div class="col-sm-4 col-md-4"><b>Date:</b><?php if ($product['p_date']) { ?> <?= date('M j, Y', $product['p_date']) ?><?php }   ?></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12"><?= $product['p_description'] ?></div>
                            </div>
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            
            <div class="row">
                <?php if($images){ foreach ($images as $key => $value) { ?>
                    <div class="col-4">
                        <div class="card-deck-wrapper" style="margin:10px;">
                            <div class="card-deck">
                                <div class="card d-block">
                                    <img style="width: 200px;height: 200px;" class="card-img-top" src="<?= $value['p_i_image_url'] ?>" alt="<?= $product['p_name'] ?>">
                                    <a href="<?= base_url('admin/image/delete/'.$value['p_i_rand'].'/'.$product['p_rand']) ?>" class="btn btn-danger"><i class="mdi mdi-trash-can-outline"></i></a>
                                </div> <!-- end card-->
                            </div> <!-- end card-deck-->
                        </div> <!-- end card-deck-wrapper-->
                    </div> <!-- end col-->
                <?php } } ?>
            </div>
        </div> <!-- container -->

    </div> <!-- content -->


<!-- Modals -->
<!-- Edit Product -->
<div id="info-product-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="info-header-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="POST" action="<?= base_url('admin/product/update') ?>">
                <div class="modal-header modal-colored-header bg-info">
                    <h4 class="modal-title" id="info-header-modalLabel">Update Product</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label class="label label-default">Product Name</label>
                            <input type="text" name="p_name" value="<?= $product['p_name'] ?>" class="form-control" />
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="label label-default">Barcode</label>
                            <input type="text" name="p_barcode" value="<?= $product['p_barcode'] ?>" class="form-control" />
                            <input type="hidden" name="p_rand" value="<?= $product['p_rand'] ?>" />
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="label label-default">Product Price </label>
                            <input type="number" name="p_price" value="<?= $product['p_price'] ?>" class="form-control" />
                            <?php if($product['p_discount'] == 1) { ?>
                                <input type="checkbox" value="0" name="p_discount"> Disable Discount
                            <?php }else{ ?>
                                <input type="checkbox" value="1" name="p_discount"> Enable Discount
                            <?php }?>
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="label label-default">Color(s)</label>
                            <textarea class="form-control" name="p_colors" rows="2"><?= $product['p_colors'] ?></textarea>
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="label label-default">Product Category</label>
                            <select class="form-control" name="p_category" required="">
                                <?php foreach ($categories as $key => $category) { ?>
                                    <option value="<?= $category['p_c_rand'] ?>" <?php if($category['p_c_rand'] === $product['p_category']){echo "selected='selected'";} ?>><?= $category['p_c_name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="label label-default">Description</label>
                            <textarea id="summernote-basic" name="p_description"><?= $product['p_description'] ?></textarea>
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
<!-- Update Product Stock -->
<div id="info-stock-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="info-header-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="<?= base_url('admin/product/updatestock') ?>">
                <div class="modal-header modal-colored-header bg-info">
                    <h4 class="modal-title" id="info-header-modalLabel">Add Stock</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label class="label label-default">Action</label>
                            <select class="form-control" name="action" required="">
                                <option value="add">+ Increase</option>
                                <option value="minus">- Decrease</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="label label-default">Stock</label>
                            <input type="number" name="stock" required="" class="form-control" />
                            <input type="hidden" name="product" value="<?= $product['p_rand'] ?>" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info">Add Stock </button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- Update Product Stock -->
<div id="info-image-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="info-header-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title m-t-0">Product Image Upload</h4>
                            <form action="<?= base_url('admin/product/uploadimage') ?>/<?= $product['p_rand'] ?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input name="userfile[]" id="userfile" type="file" multiple="" required="" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label ttv-qty-label">Color</label>
                                    <select class="form-control select-input" name="p_i_color">
                                        <?php foreach ($colors as $key => $value) { ?>
                                            <option value="<?= $value ?>"><?= $value ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-success" type="submit">Upload Image(s)</button>
                                </div>
                            </form>
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card-->
                </div>
                <!-- end col-->
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>