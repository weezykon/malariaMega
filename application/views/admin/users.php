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
                        <h4 class="page-title">Active Users</h4>
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
                                <?php if($users){ ?>
                                    <table class="table table-striped table-centered mb-0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>No of Transactions</th>
                                                <th>Reg Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($users as $key => $value) { ?>
                                                <tr>
                                                    <td class="table-user">
                                                        <?= $value['u_firstname'] ?> <?= $value['u_lastname'] ?>
                                                    </td>
                                                    <td class="table-user">
                                                        <?= $value['u_email'] ?>
                                                    </td>
                                                    <td class="table-user">
                                                        <?= $value['u_phone'] ?>
                                                    </td>
                                                    <td class="table-user">
                                                        <?= $value['transaction'] ?>
                                                    </td>
                                                    <td class="table-user">
                                                        <?= date('M j, Y', $value['u_date']) ?>
                                                    </td>
                                                    <td class="table-user">
                                                        <?php if ($value['u_verified'] == 0) {
                                                            echo "<span class='badge badge-danger'>Not Verified</span>";
                                                        }else{
                                                            echo "<span class='badge badge-success'>Verified</span>";
                                                        } ?>
                                                    </td>
                                                    <td class="table-action">
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                <?php }else{ ?>
                                    <h4 style="text-align: center">No Users</h4>
                                <?php } ?>
                            </div> <!-- end table-responsive-->
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            
        </div> <!-- container -->

    </div> <!-- content -->