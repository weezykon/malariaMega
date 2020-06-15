<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Perform Test</h4>
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
                                <h3>
                                <?php foreach ($patients as $key => $value) {
                                    if($value['m_p_id'] === $test['m_t_patient']) {
                                        echo $value['m_p_firstname'] .' '. $value['m_p_lastname'] .' '. $test['m_t_result'];
                                    }
                                } ?>
                                </h3>
                                <form method="post" action="<?= base_url('doctor/drug') ?>">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="password">Choose Drug</label>
                                                <select class="form-control" name="m_t_drugs[]" multiple>
                                                    <?php foreach ($drugs as $key => $value) { ?>
                                                        <option value="<?= $value['m_dg_name'] ?>"><?= $value['m_dg_name'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary" type="submit"> Submit </button>
                                    </div>

                                </form>
                            </div> <!-- end table-responsive-->
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>

        </div> <!-- container -->

    </div> <!-- content -->