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
                        <h4 class="page-title">On-Going Transactions</h4>
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
                                <?php if($transactions){ ?>
                                    <table class="table table-striped table-centered mb-0">
                                        <thead>
                                            <tr>
                                                <th>Description</th>
                                                <th>Address</th>
                                                <th>Customer</th>
                                                <th>Price</th>
                                                <th>Qty</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($transactions as $key => $value) { 
                                                if ($value['t_l_status'] == 'pending') {
                                                    $badge = 'info';
                                                    $actions = array('confirmed','dispatched','delivered');
                                                } else if ($value['t_l_status'] == 'confirmed') {
                                                    $badge = 'secondary';
                                                    $actions = array('dispatched','delivered');
                                                } else if ($value['t_l_status'] == 'dispatched') {
                                                    $badge = 'warning';
                                                    $actions = array('delivered');
                                                }else{
                                                    $badge = 'danger';
                                                }
                                                
                                            ?>
                                                <tr>
                                                    <td class="table-user">
                                                        <?= $value['t_l_description'] ?>
                                                    </td>
                                                    <td class="table-user">
                                                        <?= $value['customer']['u_address'] ?>
                                                        <br>
                                                        <b>Delivery Location: <?= $value['t_l_delivery'] ?></b>
                                                    </td>
                                                    <td class="table-user">
                                                        <?= $value['customer']['u_firstname'] ?> <?= $value['customer']['u_lastname'] ?>
                                                        <br>
                                                        <?= $value['customer']['u_phone'] ?>
                                                    </td>
                                                    <td class="table-user">
                                                        ₦<?= number_format($value['t_l_amount_paid']) ?>
                                                    </td>
                                                    <td class="table-user">
                                                        <?= $value['t_l_quantity'] ?>
                                                    </td>
                                                    <td class="table-user">
                                                        <?= date('M j, Y', $value['t_l_date']) ?>
                                                    </td>
                                                    <td class="table-user">
                                                        <?php if($value['t_l_insured']){ ?>
                                                            <label class="badge badge-success">Insured - <?= $value['t_l_insured_type'] ?></label>
                                                        <?php } ?>
                                                        <label class="badge badge-<?= $badge ?>"><?= ucfirst($value['t_l_status']) ?></label>
                                                    </td>
                                                    <td class="table-user">
                                                        <button type="button" class="btn btn-<?= $badge ?> dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Update <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <?php foreach ($actions as $key => $action) { ?>
                                                                <a class="dropdown-item" href="<?= base_url('admin/transaction/status/'. $action.'/'.$value['t_l_reference']) ?>"><?= ucfirst($action) ?></a>
                                                            <?php } ?>
                                                        </div>
                                                    </td>
                                                    <td class="table-user">
                                                        <a target="_blank" href="<?= base_url('admin/invoice/'.$value['t_l_reference']) ?>"><i class="dripicons-print"></i></a>
                                                    </td>
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