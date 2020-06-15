<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <a class="btn btn-info" href="<?= base_url('doctor/test') ?>">Perform Test</a>
                        </div>
                        <h4 class="page-title">Tests Taken</h4>
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
                                                <th>Patient</th>
                                                <th>Malaria</th>
                                                <th>Test Result</th>
                                                <th>Drugs</th>
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
                                                        <?= $value['patient']['m_p_firstname'] ?>
                                                        <?= $value['patient']['m_p_lastname'] ?>
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