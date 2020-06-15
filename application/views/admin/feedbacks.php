<style>
    .job__details__user-edit{
        width: 100% !important;
    }
    .rating { 
        border: none;
        float: left;
    }

    .rating > input { display: none; } 
    .rating > label:before { 
        margin: 5px;
        font-size: 1em;
        font-family: FontAwesome;
        display: inline-block;
        content: "\f005";
    }

    .rating > .half:before { 
        content: "\f089";
        position: absolute;
    }

    .rating > label { 
        color: #ddd; 
        float: right; 
    }

    /***** CSS Magic to Highlight Stars on Hover *****/

    .rating > input:checked ~ label, /* show gold star when clicked */
    .rating:not(:checked) > label:hover, /* hover current star */
    .rating:not(:checked) > label:hover ~ label { color: #1328a0;  } /* hover previous stars in list */

    .rating > input:checked + label:hover, /* hover current star when changing rating */
    .rating > input:checked ~ label:hover,
    .rating > label:hover ~ input:checked ~ label, /* lighten current selection */
    .rating > input:checked ~ label:hover ~ label { color: #0b1b75;  } 
</style>
<link href="<?= base_url('assets/catalog/view/javascript/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css" />
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
                        <h4 class="page-title">Feedbacks</h4>
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
                                    <?php foreach ($feedbacks as $key => $feedback) {
                                        $feedback['f_rating'] = (float)$feedback['f_rating'];
                                    ?>
                                        <div class="col-md-6">
                                            <div class="card text-xs-center border">
                                                <div class="card-header">
                                                    <h4><?= $feedback['u_firstname'] .' '. $feedback['u_lastname'] ?></h4>
                                                </div>
                                                <div class="card-body">
                                                    <?= $feedback['f_comment'] ?>
                                                </div>
                                                <div class="card-footer text-muted">
                                                    <div style="display: grid;justify-content: center;">
                                                        <div class="rating">
                                                            <input type="radio" id="star5" <?php if($feedback['f_rating'] === 5){echo 'checked';} ?> disabled="disabled" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                                            <input type="radio" id="star4half" <?php if($feedback['f_rating'] >= 4.5){echo 'checked';} ?> disabled="disabled" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                                            <input type="radio" id="star4" <?php if($feedback['f_rating'] >= 4){echo 'checked';} ?> disabled="disabled" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                                            <input type="radio" id="star3half" <?php if($feedback['f_rating'] >= 3.5){echo 'checked';} ?> disabled="disabled" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                                            <input type="radio" id="star3" <?php if($feedback['f_rating'] >= 3){echo 'checked';} ?> disabled="disabled" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                                            <input type="radio" id="star2half" <?php if($feedback['f_rating'] >= 2.5){echo 'checked';} ?> disabled="disabled" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                                            <input type="radio" id="star2" <?php if($feedback['f_rating'] >= 2){echo 'checked';} ?> disabled="disabled" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                                            <input type="radio" id="star1half" <?php if($feedback['f_rating'] >= 1.5){echo 'checked';} ?> disabled="disabled" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                                            <input type="radio" id="star1" <?php if($feedback['f_rating'] >= 1){echo 'checked';} ?> disabled="disabled" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                                            <input type="radio" id="starhalf" <?php if($feedback['f_rating'] >= 0.5){echo 'checked';} ?> disabled="disabled" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end card-->
                                        </div>
                                    <?php } ?>
                                </div>
                            </div> <!-- end table-responsive-->
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            
        </div> <!-- container -->

    </div> <!-- content -->