<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Patients</h4>
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
                                <?php if(count($patients) > 0) { ?>
                                    <table class="table table-striped table-centered mb-0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Gender</th>
                                                <th>Age</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($patients as $key => $value) { ?>
                                                <tr>
                                                    <td class="table-user">
                                                        <?= $value['m_p_firstname'] ?>
                                                        <?= $value['m_p_lastname'] ?>
                                                    </td>
                                                    <td class="table-action">
                                                        <?= $value['m_p_phone'] ?>
                                                    </td>
                                                    <td class="table-action">
                                                        <?= $value['m_p_email'] ?>
                                                    </td>
                                                    <td class="table-action">
                                                        <?= $value['m_p_gender'] ?>
                                                    </td>
                                                    <td class="table-action">
                                                        <?= $value['m_p_age'] ?>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                <?php } else { ?>
                                    <p style="width:100%; text-align:center;">No Patients yet.</p>
                                <?php } ?>
                            </div> <!-- end table-responsive-->
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            
        </div> <!-- container -->

    </div> <!-- content -->