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

                                <form method="post" action="<?= base_url('doctor/test') ?>">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="password">Patient</label>
                                                <select class="form-control" name="m_t_patient">
                                                    <?php foreach ($patients as $key => $value) { ?>
                                                        <option value="<?= $value['m_p_id'] ?>"><?= $value['m_p_firstname'] .' '. $value['m_p_lastname'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Fever</label>
                                                <input type="range" min="1" max="10" name="m_t_fever" value="1" class="slider form-control-range" id="myRange">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Headache</label>
                                                <input type="range" min="1" max="10" name="m_t_headache" value="1" class="slider form-control-range" id="myRange">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Nausea</label>
                                                <input type="range" min="1" max="10" name="m_t_nausea" value="1" class="slider form-control-range" id="myRange">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Vomiting</label>
                                                <input type="range" min="1" max="10" name="m_t_vomitting" value="1" class="slider form-control-range" id="myRange">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Weakness</label>
                                                <input type="range" min="1" max="10" name="m_t_weakness" value="1" class="slider form-control-range" id="myRange">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Dizzyness</label>
                                                <input type="range" min="1" max="10" name="m_t_dizzyness" value="1" class="slider form-control-range" id="myRange">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Pain</label>
                                                <input type="range" min="1" max="10" name="m_t_pain" value="1" class="slider form-control-range" id="myRange">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Appetite</label>
                                                <input type="range" min="1" max="10" name="m_t_appetite" value="1" class="slider form-control-range" id="myRange">
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