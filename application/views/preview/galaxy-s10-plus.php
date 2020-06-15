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
        width:80%;
        margin:auto;
        padding-bottom:10vh;
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
        font-size: 48px;
        line-height: 60px;
        color: #fff;
        width: 70%;
    }
    small{
        color:#747474;
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
    @media(max-width: 550px){
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
            font-size: 23px;
            line-height: 36px;
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
    }
</style>
<link rel="stylesheet" href="<?= base_url('assets/animate.css') ?>">
<div class="preview-nav">
    <h1 class="heading">Galaxy S10e | S10 | S10+</h1>
    <a href="./" class="order-button buy" ><span>BUY NOW</span></a>
</div>
<div class="legal">
    <div class="row">
        <img src="<?= base_url('assets/image/galaxy-s10_highlight_kv_l.png') ?>" width="100%" style="margin-top:-5px;"/>
    </div>
    <section>
        <div class="view wow bounceInUp" data-wow-duration="2s" data-wow-delay="1s">
            <p style="margin-bottom:10vh;">The result of 10 years of pioneering mobile firsts, Galaxy&nbsp;S10e, S10, and S10+ introduce the next generation of mobile innovation.</p>
            <p class="">Galaxy&nbsp;S10e, S10, and S10+. The next generation of Galaxy has arrived.</p>
        </div>
    </section>
    <section>
        <div class="section-70">
            <iframe width="100%" height="486" src="https://www.youtube.com/embed/ZCfgkIyD9g0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <!-- <div id="carouselExampleIndicators7" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators7" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators7" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators7" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <iframe width="100%" height="486" src="https://www.youtube.com/embed/ZCfgkIyD9g0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="item">
                        <iframe width="100%" height="486" src="https://www.youtube.com/embed/o_c_MmkAtKA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="item">
                        <iframe width="100%" height="486" src="https://www.youtube.com/embed/sbQZ0Mrpp80" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators7" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators7" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div> -->
        </div>
    </section>
    <section style="margin-top:10vh;">
        <div class="section-70">
            <div class="row">
                <div class="col-sm-2">
                    <span class="rot">Design</span>
                </div>
                <div class="col-sm-10">
                    <p class="c_tit-type2" style="">The phone that doesn’t just stand out, it stands apart</p>
                </div>
            </div>
        </div>
    </section>
    <section style="min-height:500px;">
        <div class="stand-out-right">
            <img src="<?= base_url('assets/image/galaxy-s10_highlight_design-display.jpg') ?>" width="100%" />
        </div>
        <div class="stand-out-left">
            <p><span style="color:#fff;">Completely redesigned to remove interruptions from your view.</span> No notch, no distractions. Precise laser cutting, on-screen security, and a Dynamic AMOLED that's easy on the eyes make the Infinity-O Display the most innovative Galaxy screen yet.</p>
        </div>
    </section>
    <section style="min-height:540px;" class="wow bounceInUp" data-wow-duration="2s" data-wow-delay="1s">
        <div class="left-block">
            <img src="<?= base_url('assets/image/galaxy-s10_highlight_design-security.png') ?>" width="100%" />
        </div>
        <div class="right-block security-info">
            <p><span style="color:#fff;">Simply touch the glass to unlock.</span> We've moved security from the back of the phone to the front, fusing the Ultrasonic Fingerprint directly into the screen.</p>
            <small>*Only available on Galaxy S10 and S10+.</small>
        </div>
    </section>
    <section style="min-height:440px;" class="wow bounceInUp" data-wow-duration="1s" data-wow-delay="1s">
        <div class="section-80" style="min-height:440px;">
            <div class="left-block info">
                <p class=""><strong style="color:#fff;">The next generation <br> takes shape</strong></p>
                <small>*Model and color availability may vary by country or carrier.</small>
            </div>
            <div class="right-block phone">
                <div class="image-one wow slideInLeft mobile"><img src="<?= base_url('assets/image/galaxy-s10e_highlight_intro-size_l.png') ?>" class="" data-wow-duration="4s" data-wow-delay="4s" /></div>
                <div class="image-two wow slideInLeft mobile"><img src="<?= base_url('assets/image/galaxy-s10_highlight_intro-size_l.png') ?>" class="" data-wow-duration="3s" data-wow-delay="3s" /></div>
                <div class="image-three wow slideInLeft mobile"><img src="<?= base_url('assets/image/galaxy-s10-plus_highlight_intro-size_l.png') ?>" class="" data-wow-duration="2s" data-wow-delay="2s" /></div>
                <img src="<?= base_url('assets/image/galaxy-s10e_highlight_intro-size_l.png') ?>" class="image-one wow slideInLeft web" data-wow-duration="4s" data-wow-delay="4s" />
                <img src="<?= base_url('assets/image/galaxy-s10_highlight_intro-size_l.png') ?>" class="image-two wow slideInLeft web" data-wow-duration="3s" data-wow-delay="3s" />
                <img src="<?= base_url('assets/image/galaxy-s10-plus_highlight_intro-size_l.png') ?>" class="image-three wow slideInLeft web" data-wow-duration="2s" data-wow-delay="2s" />
            </div>
        </div>
    </section>
    <section style="position:relative;z-index:100;margin-top:10vh;min-height:250px;">
        <div class="section-70">
            <div class="row">
                <div class="col-sm-2">
                    <span class="rot">Camera</span>
                </div>
                <div class="col-sm-10">
                    <p class="c_tit-type2" style="">The next generation camera doesn't need you to be a pro</p>
                </div>
            </div>
            <div class="row">
                <p class="full-kit"><span style="color:#fff;">A full kit of lenses built right in.</span> <br>
                The multi-camera puts pro-grade<br> cameras in your pocket to make your <br>photos, selfies, and videos <br>effortlessly epic and instantly <br>shareable.</p>
            </div>
            <div class="row">
                <p class="full-kit"><span style="color:#fff;">Capture the wider world.</span>
                Use the Ultra <br>Wide Camera to take stunning, cinematic photos with a 123 degree field of vision.</p>
            </div>
            <div class="row">
                <img src="<?= base_url('assets/image/galaxy-s10_highlight_camera-picture_l.jpg') ?>" width="100%" class="full-kit-image"/>
                <small class="full-kit-small">*Image captured with Galaxy S10+ with simulated action for illustration purposes. Feature also available on Galaxy S10 and S10e.</small>
            </div>
            <div class="row">
                <p class="full-kit"><span style="color:#fff;">A smarter camera for better photos.</span>
                The <br>intelligent camera helps you shoot stunning photos by suggesting <br>image compositions and automatically optimizing your camera settings <br>to the scene.</p>
            </div>
            <div class="row camera-assi">
                <img src="<?= base_url('assets/image/galaxy-s10_highlight_camera-assistant_after.png') ?>" width="100%" class="full-kit-image"/>
                <small class="full-kit-small">*Image captured with Galaxy S10+ with simulated overlay for illustration purposes. Feature also available on Galaxy S10 and S10e.</small>
            </div>
        </div>
    </section>
    <section class="wow bounceInUp" style="margin-top:10vh;min-height:250px;">
        <div class="section-70">
            <div class="row">
                <div class="col-sm-2">
                    <span class="rot">Performance</span>
                </div>
                <div class="col-sm-10">
                    <p class="c_tit-type2" style="">Next generation performance for a generation that can’t wait</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <p class="full-power"><span style="color:#fff;">Power is yours to share.</span>
                    Wireless PowerShare gives you the ability to share your power with other devices. And Fast Wireless Charging 2.0 gets your phone back to 100%, faster.</p>
                </div>
                <div class="col-sm-6">
                    <img src="<?= base_url('assets/image/galaxy-s10_highlight_performance-power_phone_l.png') ?>" width="100%" class="full-kit-image"/>
                </div>
            </div>
            <div class="row stream-share wow bounceInUp">
                <div class="col-sm-7">
                    <img src="<?= base_url('assets/image/galaxy-s10_highlight_performance-connection.png') ?>" width="100%"/>
                </div>
                <div class="col-sm-5">
                    <p class="full-stream"><span style="color:#fff;">Stream and share, wherever life takes you.</span>
                    Intelligent Wi-Fi reaches faster speeds with Wi-Fi 6, connecting reliably and securely even on public networks.  And it seamlessly switches to LTE to hit incredible data speeds up to 2.0Gbps.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="row wow bounceInUp" style="margin-top:10vh">
        <div class="col-sm-6">
            <div class="gamer">
                <p class="gamer-kit"><span style="color:#fff;">A total game changer.</span>
                We've engineered both hardware and software to give you performance-enhanced gaming without lag.</p>
                <small class="gamer-kit-small">*Image simulated for illustration purposes.</small>
                <p class="gamer-kit" style="font-size: 16px;line-height: 1.75;">© 2019 Epic Games, Inc. Epic Games, Fortnite, and their logos are trademarks or registered trademarks of Epic Games in the USA (Reg. U.S. Pat & Tm. Off.) and elsewhere. All rights reserved.</p>
            </div>
        </div>
        <div class="col-sm-6">
        <img src="<?= base_url('assets/image/galaxy-s10_highlight_performance-changer.png') ?>" width="100%"/>
        </div>
    </div>
    <section class="" style="position:relative;z-index:100;margin-top:10vh;min-height:250px;">
        <div class="section-70">
            <div class="row">
                <div class="col-sm-2">
                    <span class="rot">Intelligence</span>
                </div>
                <div class="col-sm-10">
                    <p class="c_tit-type2" style="">The phone that adapts to you so you don’t have to adapt to it</p>
                </div>
            </div>
            <div class="row wow bounceInUp">
                <div class="col-sm-6">
                    <img src="<?= base_url('assets/image/galaxy-s10_highlight_intelligence-adapting_light_l.jpg') ?>" width="100%" />
                </div>
                <div class="col-sm-6">
                    <p class="full-kit"><span style="color:#fff;">Continuously working to keep you one step ahead. </span>
                    Intelligence and advanced hardware learn how you use your phone, adapting to last longer and run more efficiently, giving you peak performance throughout your day.</p>
                </div>
            </div>
            <div class="row wow bounceInUp">
                <div class="col-sm-6">
                    <p class="full-kit"><span style="color:#fff;">Helpful AI makes your daily life run smoother.</span>
                    Bixby Routines suggests frequently used apps and tasks based on time or location to develop a naturally smart experience — just for you.</p>
                </div>
                <div class="col-sm-6">
                    <img src="<?= base_url('assets/image/galaxy-s10_highlight_intelligence-connection_l.png') ?>" width="100%" />
                    <img src="<?= base_url('assets/image/galaxy-s10_highlight_intelligence-connection_02_l.png') ?>" width="100%" />
                </div>
            </div>
        </div>
    </section>
    <section class="" style="position:relative;z-index:100;margin-top:10vh;min-height:250px;">
        <div class="section-70">
            <div class="row">
                <div class="col-sm-2">
                    <span class="rot">Accessories</span>
                </div>
                <div class="col-sm-10">
                    <p class="c_tit-type2" style="">Galaxy S10e, S10, and S10+ are just the beginning</p>
                    <small>*Product colors may vary depending on country, region, and carrier.</small>
                </div>
            </div>
            <div class="row wow bounceInUp">
                <img src="<?= base_url('assets/image/galaxy-s10_highlight_acc_l.png') ?>" width="100%" />
            </div>
        </div>
    </section>
</div>
<section style="padding:20px;">
    <small>
        *All specifications and descriptions provided herein may be different from the actual specifications and descriptions for the product. Samsung reserves the right to make changes to this document and the product described herein, at anytime, without obligation on Samsung to provide notification of such change. All functionality, features, specifications, GUI and other product information provided in this document including, but not limited to, the benefits, design, pricing, components, performance, availability, and capabilities of the product are subject to change without notice or obligation. The contents within the screen are simulated images and are for demonstration purposes only.
    </small>
    <div id="desc-section" style="margin-top:5vh;">
        <ol data-title="See disclaimer">
            <li>Measured diagonally, Galaxy&nbsp;S10e's screen size is 5.8” in the full rectangle and 5.6” with accounting for the rounded corners; Galaxy&nbsp;S10's screen size is 6.1" in the full rectangle and 6.0" with accounting for the rounded corners; and Galaxy&nbsp;S10+'s screen size is 6.4" in the full rectangle and 6.3" with accounting for the rounded corners; actual viewable area is less due to the rounded corners and camera hole.</li>
            <li>Accuracy of intelligent camera may differ depending on shooting conditions including multiple subjects, low light conditions, being out of focus, or moving subjects.</li>
            <li>Wireless PowerShare limited to Samsung or other brand smartphones with WPC Qi wireless charging, such as Galaxy&nbsp;S9, S9+, S8, S8+, S8 Active, S7, S7 edge, S7 Active, S6, S6 edge, S6 Active, S6 edge+, Note9, Note8, Note FE, Note5, and wearables such as Galaxy Watch Active, Gear Sport, Gear S3, Galaxy Watch, and Galaxy Buds. May not work with certain accessories, covers, or other brand devices. May affect call reception or data services, depending on your network environment.</li>
            <li>Based on results from Samsung lab tests, Galaxy&nbsp;S10 series may be charged about 27% faster wirelessly than Galaxy&nbsp;S9. Charging time varies depending on the specific model (Galaxy&nbsp;S10e, S10, and S10+). Only available with Wireless Charger Duo Pad. Sold separately. Actual charging speed may also vary depending on the actual usage, charging conditions, and other factors.</li>
            <li>Fast Wireless Charging 2.0 currently available with Wireless Charger Duo Pad (where indicated on pad) and other devices that support 10W+ wireless charging. Wireless charger requires power connection. Recommend using genuine Samsung branded power cord and/or travel adapter for use of third party items may cause damage to the Wireless Charger Duo Pad or a decrease in charging speed.</li>
            <li>Faster than previous Wi-Fi protocols. WI-FI 6 support may not be available depending on the country or region you live in.</li>
            <li>Actual speed may vary depending on the country, carrier, and user environment.</li>
        </ol>
    </div>
</section>
<script src="<?= base_url('assets/wow.js') ?>"></script>
<script>
    new WOW().init();
</script>