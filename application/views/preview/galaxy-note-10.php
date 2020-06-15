<style>
    .legal {
        width: 100%;
        border-top: 1px solid #eee;
        min-height: 200px;
    }

    .section {
        width: 100%;
        min-height: 200px;
        padding: 10vh 0;
        text-align: center;
        color: #000;
        background: #fff;
    }

    .black-section {
        background: #000;
        color: #fff;
    }

    .bg-section p {
        color: #fff;
    }

    .white-section {
        width: 100%;
        min-height: 200px;
        padding: 10vh 0;
        text-align: center;
        color: #000;
        background: #fff;
    }

    .summary {
        width: 100%;
        min-height: 250px;
        padding-top: 5vh;
        text-align: center;
        color: #636363;
    }

    .c_tit-type4 {
        font-size: 32px;
        line-height: 40px;
        font-weight: 800;
    }

    .c_tit-type4 {
        color: #000;
    }

    .c_desc-type1 {
        font-size: 20px;
        line-height: 30px;
    }

    .light-gradient2 {
        background: -moz-linear-gradient(0, #f7f1f5 0, #fef6f3 100%);
        background: -webkit-gradient(linear, 0, color-stop(0, F7F1F5), color-stop(100%, fef6f3));
        background: -webkit-linear-gradient(0, #f7f1f5 0, #fef6f3 100%);
        background: -o-linear-gradient(0, #f7f1f5 0, #fef6f3 100%);
        background: -ms-linear-gradient(0, #f7f1f5 0, #fef6f3 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FEF6F3', endColorstr='#F7F1F5');
        background: linear-gradient(0, #f7f1f5 0, #fef6f3 100%);
    }

    .white-section .small-g-p-small {
        color: #000;
    }

    .ttvtab-title-wrapper {
        border: 0;
    }

    .row-60 {
        width: 70%;
        margin: auto;
        padding: 30px 50px;
        border-radius: 20px;
        margin-bottom: 10vh;
        margin-top: 10vh;
    }

    .summary-card {
        box-sizing: border-box;
        padding: 0 12px;
        text-align: center;
        height: 14.44444vw;
        padding-top: 4.02778vw;
    }

    .text-center {
        text-align: center;
    }

    .border-left {
        border-left: 1px solid #dadada;
    }

    .margin-top {
        margin-top: 15vh;
    }

    .footer-summary {
        width: 100%;
        min-height: 35vh;
        text-align: center;
        color: #636363;
        background: #fcfcfc;
    }

    .footer-summary .ma-g-p {
        color: #636363;
    }

    .preview-nav {
        height: 55px;
        font-size: 12px;
        background: #fff;
        color: #1f2324;
        border-top: 1px solid #eee;
        border-bottom: 2px solid #eee;
    }

    .heading {
        height: 50px;
        line-height: 50px;
        font-size: 20px;
        transform: translateX(20px);
        -webkit-transform: translateX(20px);
        -ms-transform: translateX(20px);
        font-family: 'SamsungSharpSans';
        font-weight: bold;
        float: left;
        top: 0;
    }

    .order-button {
        display: inline-block;
        width: 170px;
        height: 55px;
        line-height: 51px;
        background: #0074c2;
        color: #fff;
        border-radius: 0;
        -webkit-border-radius: 0;
        font-family: 'SamsungSharpSans';
        font-size: 14px;
        font-weight: bold;
        padding: 0 10px;
        text-align: center;
        vertical-align: middle;
        box-sizing: border-box;
        float: right;
    }

    .order-button:hover {
        color: #fff;
    }

    .summary-card p {
        margin-bottom: 0;
    }

    .banner_full__title {
        font-size: 38px;
    }

    .fit-div {
        position: absolute;
        width: 50%;
        color: #fff;
        padding-top: 5%;
    }

    .fit-div .ma-g {
        padding: 0px;
    }

    .fit-div .ma-g-p {
        color: #fff;
        text-align: left;
    }

    .c_summary {
        margin: 0 auto;
        text-align: center;
        font-size: 36px;
        line-height: 52px;
        letter-spacing: -0.006em;
    }

    .c_desc {
        font-weight: bold !important;
        font-size: 66px;
        line-height: 84px;
    }

    .c_cate {
        padding-bottom: 40px;
        font-weight: bold !important;
        font-size: 20px;
        line-height: 26px;
        text-transform: uppercase;
        letter-spacing: .12em;
    }

    .charge-bg {
        background: url("<?= base_url('assets/image/galaxy-note10_highlight_design-power_end.jpg') ?>");
        background-repeat: no-repeat;
        min-height: 600px;
        background-position: center;
        background-size: cover;
        color: #fff;
    }

    .white-text {
        color: #fff;
    }

    .c_tit-type1 {
        font-size: 28px;
        line-height: 42px;
    }

    .num-info li {
        float: left;
    }

    .margin-left {
        margin-left: 40px;
    }

    .num-info span {
        display: block;
        font-size: 14px;
        font-weight: bold !important;
        letter-spacing: .05em;
    }

    .num-info strong {
        display: block;
        margin: 5px 0;
        font-size: 40px;
        font-weight: bold !important;
    }

    .laptop-bg {
        background: #f7f1f5;
        background-image: url("<?= base_url('assets/image/galaxy-note10_highlights_perfomance_laptop.png') ?>");
        /* fallback */
        background-image: url("<?= base_url('assets/image/galaxy-note10_highlights_perfomance_laptop.png') ?>"), linear-gradient(0, #f7f1f5 0, #f7f1f5 100%);
        background-repeat: no-repeat;
        min-height: 600px;
        background-position: right;
        background-size: 50%;
    }

    @media(max-width: 550px) {
        .row-60 {
            width: 100%;
            margin: auto;
            padding: 30px 10px;
            border-radius: 20px;
            margin-bottom: 10vh;
            margin-top: 10vh;
        }
        .c_summary {
            margin: 0 auto;
            text-align: center;
            font-size: 26px;
            line-height: 42px;
            letter-spacing: -0.006em;
        }
        .c_desc {
            font-weight: bold !important;
            font-size: 46px;
            line-height: 54px;
        }
        .c_tit-type1 {
            font-size: 20px;
            line-height: 32px;
        }
    }

    @media screen and (max-width: 380px) and (min-width: 300px) {
        .row-60 {
            width: 100%;
            margin: auto;
            padding: 30px 10px;
            border-radius: 20px;
            margin-bottom: 10vh;
            margin-top: 10vh;
        }
    }

    @media screen and (max-width: 800px) and (min-width: 700px) {
        .row-60 {
            width: 100%;
            margin: auto;
            padding: 30px 10px;
            border-radius: 20px;
            margin-bottom: 10vh;
            margin-top: 10vh;
        }
    }

    @media screen and (max-width: 1100px) and (min-width: 900px) {}

    @media screen and (max-width: 1300px) and (min-width: 1200px) and (max-height: 950px) and (min-height: 900px) {}
</style>
<link rel="stylesheet" href="<?= base_url('assets/animate.css') ?>">
<div class="preview-nav">
    <h1 class="heading">Galaxy Note 10 | 10+</h1>
    <a href="./" class="order-button buy"><span>BUY NOW</span></a>
</div>
<div class="container">
    <div class="row">
        <img src="<?= base_url('assets/image/note.png') ?>" width="100%" style="margin-top:-5px;" />
    </div>
    <div class="row row-60 light-gradient2">
        <div class="col-md-7">
            <p class="c_tit-type4">Save up to $600 on the Galaxy Note10 with trade-in of an eligible device.</p>
            <p class="c_desc-type1">Limited time offer. Terms, conditions and exclusions may apply.</p>
        </div>
        <div class="col-md-5 text-center">
            <img src="<?= base_url('assets/image/tradein-d.png') ?>" alt="">
        </div>
    </div>

    <div class="row row-60">
        <p class="c_summary">The Galaxy Note10 isn't just a new smartphone. It's a gaming console. A film studio. It's a computer with an intelligent pen—and it's all in one device.</p>
    </div>

    <div class="row row-60 text-center">
        <p class="c_cate">Performance</p>
        <h3 class="c_desc"><span>More power.</span> <span>More speed.</span> <span class="storage">More storage.</span></h3>
    </div>

    <div class="row row-60 charge-bg">
        <div class="col-sm-12 col-md-5">
            <h4 class="c_tit-type1">Hours of power from minutes of charge</h4>
            <p class="c_desc-type1 white-text">No time is the right time to be caught without a charge, so the Galaxy Note10's cutting-edge battery intelligence ensures you won't be left powerless. And Super Fast Charging gets you back to 100% super fast.</p>
            <small>*All-day battery only available on Galaxy Note10+ LTE model.</small>
        </div>
    </div>

    <div class="row row-60">
        <div class="col-md-4">
            <h4 class="c_tit-type1">Right-now fast.</h4>
        </div>
        <div class="col-md-8">
            <p class="c_desc-type1">You'll download photos and videos, stream content, even game online in the busiest of places at incredible speeds with a powerful processor and the 2.0Gbps LTE connection of Galaxy Note10. Or take it up a notch with Note10+ 5G's built-in HyperFast 5G chip.</p>
        </div>
    </div>

    <div class="row row-60">
        <div class="col-md-12">
            <ul class="num-info">
                <li class="ram margin-left">
                    <span>PROCESSOR</span>
                    <strong>7nm</strong>
                    <span>&nbsp;</span>
                </li>
                <li class="ram margin-left">
                    <span>RAM</span>
                    <strong>8GB</strong>
                    <span>on Galaxy Note10</span>
                </li>
                <li class="ram margin-left">
                    <span>RAM</span>
                    <strong>12GB</strong>
                    <span>on Galaxy Note10+</span>
                    <span>on Galaxy Note10+ 5G</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="row row-60">
        <img src="<?= base_url('assets/image/galaxy-note10_highlights_perfomance_fast_l.jpg') ?>" width="100%" style="margin-top:-5px;border-radius: 30px;" />
    </div>

    <div class="row row-60 laptop-bg">
        <div class="col-sm-12 col-md-6">
            <h4 class="c_tit-type1">Laptop storage without the laptop</h4>
            <p class="c_desc-type1">With massive internal memory and external storage up to an additional 1TB, the Note10 series takes mobile memory to massive levels.</p>

            <ul class="num-info" role="presentation">
                <li role="presentation">
                    <span>GALAXY NOTE10</span>
                    <br>
                    <span>INTERNAL STORAGE:</span>
                    <strong>256GB</strong>
                </li>
            </ul>

            <ul class="num-info" role="presentation">
                <li role="presentation">
                    <span>GALAXY NOTE10+<br>GALAXY NOTE10+ 5G</span>
                    <br>
                    <span>INTERNAL STORAGE:</span>
                    <strong>256GB | 512GB&nbsp;</strong>
                    <span style="white-space: nowrap;">PLUS UP TO AN ADDITIONAL</span>
                    <strong>1TB</strong>
                    <span>VIA MICROSD CARD<sup><a class="click_sup" href="#desc-section" title="See disclaimer">4</a></sup></span>
                </li>
            </ul>
        </div>
    </div>

    <div class="row row-60 text-center">
        <p class="c_cate">Design</p>
        <h3 class="c_desc"><span>More screen, less in the way</span></h3>
    </div>

    <div class="row">
        <img src="<?= base_url('assets/image/galaxy-note10_highlight_design_end.jpg') ?>" width="100%" style="margin-top:-5px;" />
    </div>

    <div class="row row-60">
        <div class="col-md-4">
            <h4 class="c_tit-type1">Add background bokeh effects to your videos.</h4>
        </div>
        <div class="col-md-8">
            <p class="c_desc-type1">Adjust the blur and add bokeh effects to give your videos stunning depth in every frame.</p>
        </div>
    </div>

    <div class="row row-60">
        <img src="<?= base_url('assets/image/galaxy-note10_highlights_camera_bokeh_end_lowband.jpg') ?>" width="100%" style="margin-top:-5px;border-radius:30px" />
    </div>

    <div class="row row-60">
        <div class="col-md-4">
            <h4 class="c_tit-type1">Like a pro-grade studio in your pocket.</h4>
        </div>
        <div class="col-md-8">
            <p class="c_desc-type1">Note10 gives you camera essentials like Dual Aperture, Ultra-wide Camera, Live Focus and Scene Optimizer.</p>
        </div>
    </div>

    <div class="row row-60">
        <img src="<?= base_url('assets/image/galaxy-note10_highlights_camera_multi1.jpg') ?>" width="100%" style="margin-top:-5px;border-radius:30px" />
    </div>

    <div class="row row-60 text-center">
        <p class="c_cate">Package</p>
        <h3 class="c_desc"><span>All you need is in the box</span></h3>
    </div>

    <div class="row row-60">
        <div class="col-md-4">
            <h4 class="c_tit-type1">You're good to go with all the essentials.</h4>
        </div>
        <div class="col-md-8">
            <p class="c_desc-type1">Unbox what you need to start your Galaxy Note10 and Note10+ experience right, like new Type-C earphones and spare S Pen tips.</p>
        </div>
    </div>

    <div class="row row-60">
        <img src="<?= base_url('assets/image/galaxy-note10_design_package-none_cover-lte.jpg') ?>" width="100%" style="margin-top:-5px;border-radius:30px" />
    </div>

    <div class="row row-60 text-center">
        <p class="c_cate">ACCESSORIES</p>
        <h3 class="c_desc"><span>Take your Galaxy Note10 and Note10+ even further</span></h3>
    </div>

    <div class="row row-60">
        <img src="<?= base_url('assets/image/galaxy-note10_highlights_acc_b_l.jpg') ?>" width="100%" style="margin-top:-5px;border-radius:30px" />
    </div>
</div>
<script src="<?= base_url('assets/wow.js') ?>"></script>
<script>
    new WOW().init();
</script>