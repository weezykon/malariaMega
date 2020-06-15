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
                        <h4 class="page-title">All Transactions</h4>
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
                                <?php if($preorders){ ?>
                                    <table class="table table-striped table-centered mb-0">
                                        <thead>
                                            <tr>
                                                <th>Description</th>
                                                <th>Address</th>
                                                <th>Customer</th>
                                                <th>Price</th>
                                                <th>Qty</th>
                                                <th>Date</th>
                                                <!-- <th></th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($preorders as $key => $value) { 
                                                
                                            ?>
                                                <tr>
                                                    <td class="table-user">
                                                        <?= $value['pre_order'] ?>
                                                    </td>
                                                    <td class="table-user">
                                                        <?= $value['pre_address'] ?>
                                                    </td>
                                                    <td class="table-user">
                                                        <?= $value['pre_fullname'] ?>
                                                        <br>
                                                        <?= $value['pre_phone'] ?>
                                                    </td>
                                                    <td class="table-user">
                                                        ₦<?= number_format($value['pre_price']) ?>
                                                    </td>
                                                    <td class="table-user">
                                                        <?= $value['pre_quantity'] ?>
                                                    </td>
                                                    <td class="table-user">
                                                        <?= date('M j, Y', $value['pre_date']) ?>
                                                    </td>
                                                    <!-- <td class="table-user">
                                                        <a target="_blank" href="<?= base_url('admin/invoice/'.$value['t_l_reference']) ?>"><i class="dripicons-print"></i></a>
                                                    </td> -->
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                <?php }else{ ?>
                                    <h4 style="text-align: center">No On-Going Transactions</h4>
                                <?php } ?>
                            </div> <!-- end table-responsive-->
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            
        </div> <!-- container -->

    </div> <!-- content -->