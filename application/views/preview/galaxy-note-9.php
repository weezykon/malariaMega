<style>
    .legal{
        min-height: 600px;
        background: #000000;
    }
    .tradeup h2{
        font-size: 5.27778vw;
        line-height: 1.15;
        margin-top: 15%;
    }
    .tradeup p{
        font-size: 2.22222vw;
        line-height: 35px;
    }
    .right{
        text-align:end;
    }
    .note9 {
        text-align:center;
    }
    .note9 h2{
        font-size: 36px;
        color: #fff;
        margin-top: 10vh;
        text-align: center;
    }
    .note9 img{
        width: 40%;
    }
    .fitted{
        display: inline-block;
        padding: 30px;
    }
    .margin-top{
        margin: 20px 0;
    }
    .brand-flex{
        display: flex;
        flex-wrap: wrap;
        min-height: 250px;
        justify-content: center;
        align-items: center;
    }
    a{
        color: red;
    }
    .left-block {
	    float: left;
        width: 50%;
        min-height:400px;
		height: auto;
	}
	.right-block {
	    display: block;
	    float: right;
	    width: 50%;
        min-height:400px;
		height: auto;
    }
	.info{
        display: grid;
	    justify-content: center;
	    padding: 0 10px;
	    align-content: center;
        text-align:left;
    }
    .info p{
        color: #747474;
        font-size: 24px;
        line-height: 36px;
    }
    .stand-out-left {
	    position: absolute;
        width: 30%;
        left: 20%;
        height: 500px;
	}
    .stand-out-left p{
        color: #747474;
        font-size: 24px;
        line-height: 36px;
    }
	.stand-out-right {
	    display: block;
	    float: right;
	    width: 65%;
		height: 500px;
	}
	.section::after {
	    clear: both;
	    content: "";
	    display: table;
	}
    .preview-nav{
        height:55px;
        font-size: 12px;
        background: #1f2324;
        color: #fff;
        /* padding: 5px; */
    }
    .heading{
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
    .order-button{
        display: inline-block;
        width: 170px;
        height: 55px;
        line-height: 51px;
        background: #0074c2;
        color:#fff;
        border-radius: 0;
        -webkit-border-radius: 0;
        font-family: 'SamsungSharpSans';
        font-size: 14px;
        font-weight: bold;
        padding: 0 10px;
        text-align: center;
        vertical-align: middle;
        box-sizing: border-box;
        float:right;
    }
    .order-button:hover{
        color: #fff;
    }
    .row {
        margin-right: 0;
    }
    section{
        width:100%;
        min-height: 150px;
        color:#fff;
    }
    .view {
        width:65%;
        margin:auto;
        padding-bottom:10vh;
    }
    .section-80 {
        width: 80%;
        margin: auto;
        padding-bottom: 10vh;
        text-align: center;
        margin-top: 10vh;
    }
    .section-70 {
        width:70%;
        margin:auto;
    }
    .view p{
        font-size: 48px;
        line-height: 60px;
        color: white;
    }
    .c_tit-type2 {
        font-size: 72px;
        line-height: 84px;
        color: #fff;
    }
    small{
        width: 100%;
        display: block;
        margin-top: 4vh;
        text-align: center;
        color: #fff;
    }
    .rot{
        display: inline-block;
        position: absolute;
        top: 50px;
        -webkit-transform: rotate(-90deg);
        -moz-transform: rotate(-90deg);
        transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        white-space: nowrap;
        color:#fff;
        font-size: 20px;
        line-height: 1.2;
    }
    .security-info{
        position: absolute;
        right: 10%;
        width: 40%;
        padding: 5%;
        text-align: left;
    }
    .security-info p{
        color: #747474;
        font-size: 24px;
        line-height: 36px;
    }
    .image-one{
        position: absolute;
        width: 16%;
        margin-top: 65px;
        right: 28%;
        z-index: 10;
    }
    .image-two{
        position: absolute;
        width: 17%;
        margin-top: 26px;
        right: 20%;
        z-index: 1;
    }
    .image-three{
        position: absolute;
        width: 18%;
        right: 10%;
    }
    .full-kit{
        font-size: 30px;
        line-height: 40px;
        padding-left: 80px;
        margin-top: 10vh;
        color: #747474;
    }
    .full-power{
        font-size: 30px;
        line-height: 40px;
        padding-left: 50px;
        margin-top: 10vh;
        color: #747474;
    }
    .full-stream{
        font-size: 30px;
        line-height: 40px;
        padding-left: 50px;
        color: #747474;
    }
    .full-kit-small{
        padding-left: 80px;
        margin-top: 10vh;
        color: #747474;
    }
    .web{
        display:block;
    }
    .mobile{
        display:none;
    }
    .full-kit-image{
        padding-left:80px;
        margin-top:5vh;
    }
    .camera-assi{
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-end;
    }
    .camera-assi img, .camera-assi small{
        width: 80%;
    }
    .stream-share{
        margin-top:10vh;
    }
    .gamer{
        display: grid;
        width: 70%;
        margin-left: 30%;
    }
    .gamer-kit{
        font-size: 24px;
        line-height: 36px;
        padding-left: 80px;
        margin-bottom: 5vh;
        color: #747474;
    }
    .gamer-kit-small{
        padding-left: 80px;
        color: #747474;
        margin-bottom: 3vh;
    }
    #desc-section ol li {
        font-size: 13px;
        line-height: 20px;
        color: #666;
        list-style-type: decimal !important;
        min-height: auto;
    }
    .summary{
        width:100%;
        min-height: 250px;
        padding-top: 5vh;
        text-align:center;
        color: #636363;
    }
    .summary-card{
        box-sizing: border-box;
        padding: 0 40px;
        text-align: left;
        height: 14.44444vw;
        padding-top: 4.02778vw;
    }
    .summary-card p{
        margin-bottom:0;
        color:#fff;
        font-size: 22px;
    }
    .border-left{
        border-left: 1px solid #fff;
    }
    .m_feature-text-p {
        font-size: 22px;
        line-height: 48px;
        color: #fff;
        width: 80%;
    }
    .c_cate_type1 {
        font-size: 22px;
        line-height: 36px;
    }
    .c_tit_type1{
        font-size: 46px;
        line-height: 68px;
        width: 60%;
        margin: auto;
        margin-bottom: 10vh;
    }
    .c_tit_type3{
        font-size: 26px;
        line-height: 44px;
        color:#fff;
    }
    @media(max-width: 550px){
        .c_tit_type1{
            font-size:30px;
            line-height:30px;
            width: 80%;
            margin: auto;
            margin-bottom: 5vh;
        }
        .c_tit_type3{
            font-size: 20px;
            line-height: 30px;
        }
        .c_cate_type1 {
            font-size: 15px;
            line-height: 30px;
        }
        .summary-card p{
            font-size: 12px;
        }
        .m_feature-text-p{
            font-size: 15px;
            line-height: 30px;
        }
        .margin-top{
            text-align:center;
        }
        .row {
            margin-right: 0;
            margin-left: 0;
        }
        .heading{
            font-size: 15px !important;
        }
        .left-block {
		    float: none;
		    width: 100%;
			height: auto;
		}
		.right-block {
		    display: block;
		    float: none;
		    width: 100%;
			height: auto;
		}
        .stand-out-left {
		    display: block;
            float: none;
            width: 100%;
            padding: 30px;
            position: inherit;
            height: auto;
		}
		.stand-out-right {
		    display: block;
		    float: none;
		    width: 100%;
			height: auto;
        }
        .section-80 {
            width:100%;
        }
        .section-70 {
            width:100%;
        }
        .c_tit-type2{
            font-size: 40px;
            line-height: 46px;
        }
        .rot {
            display: block;
            position: initial;
            top:0;
            -webkit-transform: none;
            -moz-transform: none;
            transform: none;
            -ms-transform: none;
            white-space: nowrap;
        }
        .stand-out-left p{
            font-size: 15px;
            line-height: 26px;
        }
        .view p{
            font-size: 15px;
            line-height: 26px;
        }
        .security-info p{
            font-size: 15px;
            line-height: 26px;
        }
        .security-info {
		    display: block;
            float: none;
            width: 100%;
            padding: 0 15px;
            position: inherit;
            height: 150px !important;
            min-height: 150px;
        }
        .image-one {
            width: 31.3333%;
            height: 100%;
            margin-top: 22px;
            right: 47%;
        }
        .image-two {
            width: 32.3333%;
            height: 100%;
            margin-top: 8px;
            right: 28%;
        }
        .image-three {
            width: 33.3333%;
            height:100%;
        }
        .phone{
            display: flex;
            flex-wrap: wrap;
            min-height: 200px !important;
        }
        .web{
            display:none;
        }
        .mobile{
            display:block;
        }
        .full-kit{
            font-size: 18px;
            line-height: 30px;
            padding-left: 20px;
            margin-top: 10vh;
            color: #747474;
        }
        .full-power{
            font-size: 18px;
            line-height: 30px;
            padding-left: 20px;
            margin-top: 10vh;
            color: #747474;
        }
        .full-kit-image{
            padding-left:0px;
        }
        .full-kit-small{
            padding: 10px;
        }
        .camera-assi img, .camera-assi small{
            width: 100%;
        }
        .gamer{
            display: grid;
            width: 100%;
            margin-left: 0%;
        }
        .gamer-kit{
            font-size: 16px;
            line-height: 25px;
            padding-left: 10px;
            margin-bottom: 3vh;
            color: #747474;
        }
        .gamer-kit-small{
            padding-left: 10px;
            color: #747474;
            margin-bottom: 3vh;
        }
        .summary-card {
            box-sizing: border-box;
            padding: 10px;
            text-align: center;
            height: 95px;
            margin: 0;
        }
    }
    @media(max-width: 800px){
        .dot{
            display:none;
        }
    }
</style>
<link rel="stylesheet" href="<?= base_url('assets/animate.css') ?>">
<div class="preview-nav">
    <h1 class="heading">Galaxy Note9</h1>
    <a href="./" class="order-button buy" ><span>BUY NOW</span></a>
</div>
<div class="legal">
    <div class="row note9">
        <h2>The new super powerful Note <br>Galaxy Note9</h2>
        <img src="<?= base_url('assets/image/galaxy-note9_overview_kv_type1_l.png') ?>" style="margin-top:5vh;"/>
    </div>
    <section>     
        <div class="summary">  
            <div class="col-sm-4 col-xs-4 summary-card">
                <p class="card__desc">One of the best phones of the year.</p>
            </div>
            <div class="col-sm-4 col-xs-4 summary-card border-left">
                <p class="card__desc">Thanks to the great S Pen stylus the Galaxy Note9 is still in a class of its own.</p>
            </div>
            <div class="col-sm-4 col-xs-4 summary-card border-left">
                <p class="card__desc">Note9 is a gaming beast.</p>
            </div>
        </div>
    </section>
    <section class="wow bounceInUp" data-wow-duration="2s" data-wow-delay="1s" style="margin-top:10vh;">
        <div class="section-70">
            <div class="row">
                <div class="col-sm-4">
                    <span class="c_tit-type2">Do what can't be done.</span>
                </div>
                <div class="col-sm-8">
                    <p class="m_feature-text-p">Galaxy Note has always put powerful technology in the hands of those who demand more. Now, the all new Galaxy Note9 surpasses even these high expectations, focusing on what matters most in today’s always-on, mobile world.</p>
                </div>
            </div>
        </div>
    </section>
    <section style="min-height:440px;" class="wow bounceInUp" data-wow-duration="1s" data-wow-delay="1s">
        <div class="section-80" style="min-height:440px;">
            <div class="">
                <img src="<?= base_url('assets/image/loadingtwo.gif') ?>" width="10%" class="dot"/>
                <h6 class="c_cate_type1">Performance</h6>
                <h2 class="c_tit_type1">The phone powerful enough to keep up with you.</h2>
                <img src="<?= base_url('assets/image/galaxy-note9_performance_visual_l.png') ?>" width="100%" class=""/>
            </div>
        </div>
    </section>
    <section style="position:relative;z-index:100;margin-top:10vh;min-height:250px;">
        <div class="section-70">
            <div class="row">
                <div class="col-sm-2">
                    <span class="dot"><img src="<?= base_url('assets/image/loadingtwo.gif') ?>" width="60%" class=""/></span>
                </div>
                <div class="col-sm-10">
                    <h6 class="c_cate_type1">Battery</h6>
                    <p class="c_tit_type3" style="">Introducing a powerful, all day battery that goes the distance on a single charge — keeping pace with your life.</p>
                </div>
            </div>
        </div>
        <img src="<?= base_url('assets/image/battery.png') ?>" width="100%" class=""/>
    </section>
    <section class="wow bounceInUp" style="margin-top:10vh;min-height:250px;">
        <div class="section-70">
            <div class="row">
                <div class="col-sm-2">
                    <span class="dot"><img src="<?= base_url('assets/image/loadingtwo.gif') ?>" width="60%" class=""/></span>
                </div>
                <div class="col-sm-10">
                    <h6 class="c_cate_type1">Storage</h6>
                    <p class="c_tit_type3" style="">Store more. Delete less. With the power of 512GB storage built in — expandable up to 512GB more — you’ll have almost a terabyte of space for what matters.</p>
                </div>
            </div>
        </div>
        <img src="<?= base_url('assets/image/galaxy-note9_storage_visual.png') ?>" width="80%" style="margin-top:10vh"/>
        <small>*Up to 512GB additional storage with external microSD card, sold separately.</small>
    </section>
    <section class="wow bounceInUp" style="margin-top:20vh;min-height:250px;text-align:center;">
        <div class="section-70">
            <div class="row">
                <div class="col-sm-2">
                    <span class="dot"><img src="<?= base_url('assets/image/loadingtwo.gif') ?>" width="60%" class=""/></span>
                </div>
                <div class="col-sm-10">
                    <h6 class="c_cate_type1"  style="text-align:left">Optimized for Gaming</h6>
                    <p class="c_tit_type3"  style="text-align:left">Level up your mobile gaming experience. The water-carbon cooling system on Galaxy Note9 sustains high performance during game time by preventing overheating of the cutting-edge processor that cuts down on lag. Plus, the AI-based performance adjuster ensures your game stays smooth, not sluggish</p>
                </div>
            </div>
        </div>
        <img src="<?= base_url('assets/image/galaxy-note9_processor_visual_phone.png') ?>" width="70%" style="margin-top:10vh"/>
        <small>*Image simulated for illustration purposes.</small>
        <small>© 2018 Epic Games, Inc. Epic Games, Fortnite, and their logos are trademarks or registered trademarks of Epic Games <br>in the USA (Reg. U.S. Pat & Tm. Off.) and elsewhere. All rights reserved..</small>
    </section>
    <section style="min-height:440px;" class="wow bounceInUp" data-wow-duration="1s" data-wow-delay="1s">
        <div class="section-80" style="min-height:440px;">
            <div class="">
                <img src="<?= base_url('assets/image/loadingtwo.gif') ?>" width="10%" class="dot"/>
                <h6 class="c_cate_type1">Camera</h6>
                <h2 class="c_tit_type1">Dual Aperture adapts like the human eye for stunning shots, day or night.</h2>
                <img src="<?= base_url('assets/image/galaxy-note9_camera_visual.png') ?>" width="100%" class=""/>
            </div>
        </div>
    </section>
    <section class="wow bounceInUp" style="margin-top:20vh;min-height:250px;text-align:center;">
        <div class="section-70">
            <div class="row">
                <div class="col-sm-2">
                    <span class="dot"><img src="<?= base_url('assets/image/loadingtwo.gif') ?>" width="60%" class=""/></span>
                </div>
                <div class="col-sm-10">
                    <h6 class="c_cate_type1" style="text-align:left">Intelligent Camera</h6>
                    <p class="c_tit_type3"  style="text-align:left">New revolutionary features make it nearly impossible to take a bad shot. The Galaxy Note9 intelligently recognizes what you’re looking at, optimizing color settings like contrast, white balance, exposure, and more. And by detecting blinks and blurs, you can reshoot while the moment's right.</p>
                </div>
            </div>
        </div>
        <img src="<?= base_url('assets/image/galaxy-note9_camera_scene_on.jpg') ?>" width="30%" style="margin-top:10vh"/>
    </section>
    <section style="min-height:440px;" class="wow bounceInUp" data-wow-duration="1s" data-wow-delay="1s">
        <div class="section-80" style="min-height:440px;">
            <div class="">
                <img src="<?= base_url('assets/image/loadingtwo.gif') ?>" width="10%" class="dot"/>
                <h6 class="c_cate_type1">Accessories</h6>
                <h2 class="c_tit_type1">Stay stylish and powered up with cases and wireless chargers.</h2>
                <img src="<?= base_url('assets/image/galaxy-note9_accessories_visual.png') ?>" width="100%" class=""/>
            </div>
        </div>
    </section>
</div>
<section style="padding:20px;">
    <small style="color:#666;text-align:left">
        *All specifications and descriptions provided herein may be different from the actual specifications and descriptions for the product. Samsung reserves the right to make changes to this document and the product described herein, at anytime, without obligation on Samsung to provide notification of such change. All functionality, features, specifications, GUI and other product information provided in this document including, but not limited to, the benefits, design, pricing, components, performance, availability, and capabilities of the product are subject to change without notice or obligation. The contents within the screen are simulated images and are for demonstration purposes only.
    </small>
    <div id="desc-section" style="margin-top:5vh;">
        <ol data-title="See disclaimer">
            <li>Estimated against the usage profile of an average/typical user. Independently assessed by Strategy Analytics between 11-24 July 2018 in USA and UK with pre-release versions of SM-N960 (128Gb). Actual battery life varies by network environment, features and apps used, frequency of calls and messages, number of times charged, and many other factors.</li>
            
            
                <li>512GB internal memory as standard. Also available in 128GB. Actual storage available may vary depending on pre-installed software.</li>
            
            <li>Turn on full screen mode in Settings to enjoy a greater view when playing.</li>
            <li>S&nbsp;Pen remote function reaches up to 10 meters in an open space. Performance subject to circumstances.</li>
            <li>Accuracy of Scene Optimizer may differ depending on shooting conditions including multiple subjects, being out of focus, or moving subjects.</li>
            <li>Accuracy of Flaw Detection may differ depending on surrounding conditions or subject.</li>
            <li>Blink and blur detection works best when there are three or fewer people in the frame, 1.5 meters or closer to the camera.</li>
            <li>Lens smudge and backlighting detection notifies once every 24 hours if flaw is detected.</li>
            <li>Some functions and user experience may differ from DeX Pad and DeX Station.</li>
        </ol>
    </div>
</section>
<script src="<?= base_url('assets/wow.js') ?>"></script>
<script>
    new WOW().init();
</script>