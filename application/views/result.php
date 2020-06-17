<style>
    .badge {
        text-transform: uppercase !important;
    }
</style>
<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Test Result</h4>
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
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password" class="badge badge-info">Doctor</label>
                                            <h4><?= $doctor['m_d_firstname'] ?> <?= $doctor['m_d_lastname'] ?></h4>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password" class="badge badge-info">Result</label> <br>
                                            <?php
                                                if($test['m_t_malaria']) {
                                                    echo "<label class='badge badge-danger'>Positive</label>";
                                                } else {
                                                    echo "<label class='badge badge-success'>Negative</label>";
                                                }
                                            ?>
                                            <h4><?= $test['m_t_result'] ?></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 10vh;">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Fever</label><br>
                                            <?php
                                                if($test['m_t_fever'] == 'high') {
                                                    echo "<label class='badge badge-danger'>high</label>";
                                                } else if($test['m_t_fever'] == 'mid') {
                                                    echo "<label class='badge badge-warning'>mid</label>";
                                                } else {
                                                    echo "<label class='badge badge-success'>Low</label>";
                                                }
                                            ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Headache</label><br>
                                            <?php
                                                if($test['m_t_headache'] == 'high') {
                                                    echo "<label class='badge badge-danger'>high</label>";
                                                } else if($test['m_t_headache'] == 'mid') {
                                                    echo "<label class='badge badge-warning'>mid</label>";
                                                } else {
                                                    echo "<label class='badge badge-success'>Low</label>";
                                                }
                                            ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nausea</label><br>
                                            <?php
                                                if($test['m_t_nausea'] == 'high') {
                                                    echo "<label class='badge badge-danger'>high</label>";
                                                } else if($test['m_t_nausea'] == 'mid') {
                                                    echo "<label class='badge badge-warning'>mid</label>";
                                                } else {
                                                    echo "<label class='badge badge-success'>Low</label>";
                                                }
                                            ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Vomiting</label><br>
                                            <?php
                                                if($test['m_t_vomitting'] == 'high') {
                                                    echo "<label class='badge badge-danger'>high</label>";
                                                } else if($test['m_t_vomitting'] == 'mid') {
                                                    echo "<label class='badge badge-warning'>mid</label>";
                                                } else {
                                                    echo "<label class='badge badge-success'>Low</label>";
                                                }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Weakness</label><br>
                                            <?php
                                                if($test['m_t_weakness'] == 'high') {
                                                    echo "<label class='badge badge-danger'>high</label>";
                                                } else if($test['m_t_weakness'] == 'mid') {
                                                    echo "<label class='badge badge-warning'>mid</label>";
                                                } else {
                                                    echo "<label class='badge badge-success'>Low</label>";
                                                }
                                            ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Dizzyness</label><br>
                                            <?php
                                                if($test['m_t_dizzyness'] == 'high') {
                                                    echo "<label class='badge badge-danger'>high</label>";
                                                } else if($test['m_t_dizzyness'] == 'mid') {
                                                    echo "<label class='badge badge-warning'>mid</label>";
                                                } else {
                                                    echo "<label class='badge badge-success'>Low</label>";
                                                }
                                            ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Pain</label><br>
                                            <?php
                                                if($test['m_t_pain'] == 'high') {
                                                    echo "<label class='badge badge-danger'>high</label>";
                                                } else if($test['m_t_pain'] == 'mid') {
                                                    echo "<label class='badge badge-warning'>mid</label>";
                                                } else {
                                                    echo "<label class='badge badge-success'>Low</label>";
                                                }
                                            ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Appetite</label><br>
                                            <?php
                                                if($test['m_t_appetite'] == 'high') {
                                                    echo "<label class='badge badge-danger'>high</label>";
                                                } else if($test['m_t_appetite'] == 'mid') {
                                                    echo "<label class='badge badge-warning'>mid</label>";
                                                } else {
                                                    echo "<label class='badge badge-success'>Low</label>";
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-0 text-center">
                                    <a class="btn btn-primary" href="<?= base_url() ?>"> <i class="dripicons-arrow-left"></i> Go Back </a>
                                </div>
                            </div> <!-- end table-responsive-->
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>

        </div> <!-- container -->

    </div> <!-- content -->