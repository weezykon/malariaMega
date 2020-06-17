<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Tests</h4>
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
                                <?php if(count($tests) > 0) { ?>
                                    <table class="table table-striped table-centered mb-0">
                                        <thead>
                                            <tr>
                                                <th>Doctor</th>
                                                <th>Malaria</th>
                                                <th>Test Result</th>
                                                <th>Drugs</th>
                                                <th>Date</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($tests as $key => $value) { ?>
                                                <tr>
                                                    <td class="table-user">
                                                        <?= $value['doctor']['m_d_firstname'] ?>
                                                        <?= $value['doctor']['m_d_lastname'] ?>
                                                    </td>
                                                    <td class="table-user">
                                                        <?php
                                                            if($value['m_t_malaria']) {
                                                                echo "<label class='badge badge-danger'>Positive</label>";
                                                            } else {
                                                                echo "<label class='badge badge-success'>Negative</label>";
                                                            }
                                                        ?>
                                                    </td>
                                                    <td class="table-user">
                                                        <?= $value['m_t_result'] ?>
                                                    </td>
                                                    <td class="table-user">
                                                        <?= $value['m_t_drugs'] ?>
                                                    </td>
                                                    <td class="table-user">
                                                        <?= $value['m_t_date'] ?>
                                                    </td>
                                                    <td class="table-user">
                                                        <a class="btn btn-primary" href="<?= base_url('test/'. $value['m_t_id']) ?>">View</a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                <?php } else { ?>
                                    <p style="width:100%; text-align:center;">No Drugs yet.</p>
                                <?php } ?>
                            </div> <!-- end table-responsive-->
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            
        </div> <!-- container -->

    </div> <!-- content -->