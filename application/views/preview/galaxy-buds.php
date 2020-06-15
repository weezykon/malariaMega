<style>
    .legal{
        width:100%;
        border-top: 1px solid #eee;
        min-height: 200px;
    }
    .section{
        width:100%;
        min-height: 200px;
        padding: 10vh 0;
        text-align:center;
        color: #fff;
        background: #000;
    }
    .black-section{
        background:#000;
        color:#fff;
    }
    .bg-section{
        background: url(<?= base_url('assets/image/ae-feature-the-next-generation-galaxy-buds-145009713.png') ?>);
        color: #ffff;
        min-height: 150vh;
        background-position: top;
        background-size: contain;
        background-repeat: no-repeat;
        width:100%;
        text-align:center;
        padding-top: 10vh;
    }
    .bg-second-section{
        margin-top:80vh;
        background:#000;
        min-height:850px;
    }
    .bg-section p{
        color:#fff;
    }
    .white-section{
        width:100%;
        min-height: 200px;
        padding: 10vh 0;
        text-align:center;
        color: #000;
        background: #fff;
    }
    .summary{
        width:100%;
        min-height: 250px;
        padding-top: 5vh;
        text-align:center;
        color: #636363;
    }
    .ma-g{
        font-size: 56px;
        line-height: 1.14;
        padding: 0px 118px;
        width: 75%;
        margin: auto;
        text-align: center;
    }
    .ma-g-a{
        font-size: 46px;
        line-height: 1.14;
        padding: 0px 118px;
        width: 70%;
        margin: auto;
        text-align: center;
    }
    .ma-g-small{
        font-size: 30px;
        line-height: 1.14;
        padding: 0px 118px;
        width: 70%;
        margin: auto;
        text-align: center;
    }
    .ma-g-p{
        font-size: 18px;
        padding-top: 36px;
        line-height: 1.78;
        width: 80%;
        margin: auto;
        text-align: center;
        color:#fff;
        margin-bottom: 5vh;
    }
    .white-section .ma-g-p{
        color:#000;
    }
    .battery-ma-g-small{
        font-size: 30px;
        line-height: 1.14;
        padding-left: 20%;
        width: 90%;
        text-align:left;
    }
    .battery-ma-g-p{
        font-size: 18px;
        line-height: 1.78;
        padding-left: 20%;
        width: 90%;
        text-align: left;
    }
    .battery-ma-g-p-small{
        padding-left: 20%;
        width: 90%;
        text-align: left;
        font-size: 85%;
    }
    .small-g-p-small{
        width: 70%;
        text-align: center;
        font-size: 85%;
        margin: auto;
        color: #fff;
    }
    .white-section .small-g-p-small{
        color:#000;
    }
    .ttvtab-title-wrapper{
        border:0;
    }
    .row-80{
        width:80%;
        margin:auto;
    }
    .summary-card{
        box-sizing: border-box;
        padding: 0 12px;
        text-align: center;
        height: 14.44444vw;
        padding-top: 4.02778vw;
    }
    .border-left{
        border-left: 1px solid #dadada;
    }
    .margin-top{
        margin-top:15vh;
    }
    .footer-summary{
        width: 100%;
        min-height: 35vh;
        text-align: center;
        color: #636363;
        background: #fcfcfc;
    }
    .footer-summary .ma-g-p{
        color: #636363;
    }
    .preview-nav{
        height:55px;
        font-size: 12px;
        background: #1f2324;
        color: #fff;
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
    .summary-card p{
        margin-bottom:0;
    }
    .banner_full__title{
        font-size:38px;
    }
    .fit-div{
        position: absolute;
        width: 50%;
        color: #fff;
        padding-top: 5%;
    }
    .fit-div .ma-g {
        padding: 0px;
    }
    .fit-div .ma-g-p{
        color:#fff;
        text-align:left;
    }
    @media(max-width: 550px){
        .fit-div .ma-g-p{
            color:#fff;
            font-size:10px;
        }
        .banner_full__title{
            font-size:28px;
        }
        .ma-g{
            font-size: 20px;
            line-height: 1.1;
            padding: 10px;
            width: 100%;
            text-align: center;
        }
        .ma-g-a{
            font-size: 26px;
            line-height: 1.14;
            padding: 10px;
            width: 100%;
            text-align: center;
        }
        .ma-g-small{
            font-size: 20px;
            line-height: 1.14;
            padding: 10px;
            width: 100%;
            text-align: center;
        }
        .ma-g-p{
            font-size: 13px;
            padding: 0 20px;
            line-height: 1.78;
            width: 100%;
            text-align: center;
        }
        .battery-ma-g-small{
            font-size: 20px;
            line-height: 1.14;
            padding: 0%;
            width: 100%;
            text-align:left;
        }
        .battery-ma-g-p{
            font-size: 13px;
            line-height: 1.78;
            padding: 0%;
            width: 100%;
            text-align: left;
        }
        .battery-ma-g-p-small{
            padding: 0%;
            width: 100%;
            text-align: left;
            font-size: 85%;
            line-height: 1;
        }
        .summary-card {
            box-sizing: border-box;
            padding: 10px;
            text-align: center;
            height: 95px;
            margin: 0;
        }
        .small-g-p-small{
            width: 90%;
            text-align: center;
            font-size: 85%;
        }
        .heading{
            font-size: 15px !important;
        }
        .bg-section{
            padding-top:2vh;
            min-height:130px;
        }
        .bg-second-section {
            margin-top: 25vh;
        }
    }
    @media screen and (max-width: 380px) and (min-width: 300px) {
        .bg-second-section {
            margin-top: 22vh;
        }
    }
    @media screen and (max-width: 800px) and (min-width: 700px) {
        .bg-section{
            padding-top:2vh;
            min-height:130px;
        }
        .ma-g{
            padding:0;
        }
        .bg-second-section {
            margin-top: 30vh;
        }
    }
    @media screen and (max-width: 1100px) and (min-width: 900px) {
        .bg-section{
            padding-top:2vh;
            min-height:130px;
        }
        .ma-g{
            padding:0;
        }
        .bg-second-section {
            margin-top: 40vh;
        }
    }
    @media screen and (max-width: 1300px) and (min-width: 1200px) and (max-height: 950px) and (min-height: 900px) {
        .bg-second-section {
            margin-top: 65vh;
        }
    }
</style>
<link rel="stylesheet" href="<?= base_url('assets/animate.css') ?>">
<div class="preview-nav">
    <h1 class="heading">Galaxy Buds</h1>
    <a href="./" class="order-button buy" ><span>BUY NOW</span></a>
</div>
<div class="summary">  
    <div class="col-sm-3 col-xs-6 summary-card">
        <img src="<?= base_url('assets/image/ae-galaxy-buds-r170-145723550.svg') ?>" width="20%" />
        <p class="card__desc">Connectivity (Connect via Bluetooth)</p>
    </div>
    <div class="col-sm-3 col-xs-6 summary-card border-left">
        <img src="<?= base_url('assets/image/ae-galaxy-buds-r170-146316040.svg') ?>" width="20%" />
        <p class="card__desc">Quick pairing out of the box</p>
    </div>
    <div class="col-sm-3 col-xs-6 summary-card border-left">
        <img src="<?= base_url('assets/image/ae-galaxy-buds-r170-146316042.svg') ?>" width="20%" />
        <p class="card__desc">Fuller sound to get you really moving</p>
    </div>
    <div class="col-sm-3 col-xs-6 summary-card border-left">
        <img src="<?= base_url('assets/image/ae-galaxy-buds-r170-145723620.svg') ?>" width="20%" />
        <p class="card__desc">Android & iOS compatible</p>
    </div>
</div>
<div class="bg-section">  
    <h2 class="ma-g">The next generation Galaxy Buds</h2>
    <p class="ma-g-p">They’re not just great for listening, they’re amazing for being heard too.</p>
    <div class="bg-second-section">
        <div class="col-sm-6" style="padding:0;">
            <img src="<?= base_url('assets/image/ae-feature-quickpairing-outof-the-box-145009709_001.png') ?>" width="100%"/>
        </div>
        <div class="col-sm-6" style="padding-top: 10%;">
            <h2 class="battery-ma-g-small">Quick pairing out of the box</h2>
            <p class="battery-ma-g-p">Just pop open and pair. Galaxy Buds work right out of the box, connecting with your Galaxy devices in an instant via Bluetooth to get you up to the beat and well on your way.</p>
            <p class="battery-ma-g-p-small">* The connection pop-up window will appear only on Samsung mobile devices running Android 7.1.1 or lager that the SmartThings app installed. If the pop-up window does not appear, update the SmartThings app to the latest version. * This feature may vary by device, OS and depend on usage environment (Condition). * GUI of this feature is subject to change without prior notice. * Images and UX simulated.</p>
        </div>
    </div>
    <div class="black-section">  
        <h2 class="ma-g">Fuller sound to get you really moving. </h2>
        <p class="ma-g-p">Acoustic specialists sound by AKG have tuned Galaxy Buds to deliver incredibly rich, High Resolution live sound – dropping you front row at the gig, even when you’re not there.</p>
        <img src="<?= base_url('assets/image/ae-feature-fuller-sound-to-getyou-really-moving--145009701.png') ?>" width="100%"/>
    </div>
</div>
<div class="white-section">
    <div class="margin-top">
        <h2 class="ma-g">Pocketable slim design on the go</h2>
        <p class="ma-g-p">Slip them in your pocket and go. Galaxy Buds feature a newly refined design that makes them so compact they fit in comfortably with the rest of your belongings. They also come in standard color options that blend right in to your daily routine.</p>
        <img src="<?= base_url('assets/image/ae-feature-pocketable-slim-designon-the-go-145009705.png') ?>" width="100%"/>
        <p class="small-g-p-small"> * Color options may vary by country</p>
    </div>
    <div class="margin-top">
        <h2 class="ma-g">Get your voice across clearly</h2>
        <p class="ma-g-p">Our next-generation adaptive dual microphone technology makes background noise a thing of the past. Galaxy Buds recognize your surroundings, switching between inner and outer mics to keep unnecessary noise out of your conversation.</p>
        <img src="<?= base_url('assets/image/ae-feature-get-your-voice-across-clearly-145009697.png') ?>" width="100%"/>
    </div>
    <div class="margin-top">
        <h2 class="ma-g">Tuned into what surrounds you</h2>
        <p class="ma-g-p">Stay in tune with the world around you. Galaxy Buds let you quickly shift your focus to your surroundings without taking them off, so you’ll never miss what’s coming and going.</p>
        <img src="<?= base_url('assets/image/ae-feature-tuned-intowhat-surrounds-you-145009693.png') ?>" width="100%"/>
    </div>
    <div class="fit-div">
        <h2 class="ma-g">Fit to keep up and stay with you</h2>
        <p class="ma-g-p">Galaxy Buds carry an innovative design introducing ergonomics and incredibly advanced, lightweight materials for a 24/7 fit. This revolutionary slim fit keeps them snug within your ears during all types of activity.</p>
    </div>
    <img src="<?= base_url('assets/image/ae-feature-fit-to-keep-upand-stay-with-you-145009695.png') ?>" width="100%"/>
</div>
<div class="white-section">
    <h2 class="ma-g">Charge up and stay immersed</h2>
    <p class="ma-g-p">All the while, Buds high-efficiency micro-battery will keep you immersed in your favorite tunes for up to 6 hours on a single charge. And when you’re done, Galaxy Buds connect to device-to-device wireless power-share compatible Galaxy devices. So, your Buds are always ready to go.</p>
    <img src="<?= base_url('assets/image/ae-feature-charge-up-and-stay-immersed-145009703.png') ?>" width="100%"/>
</div>
<div class="footer-summary">  
    <div class="col-sm-6 col-xs-6 summary-card">
        <p class="ma-g-p">Bluetooth v5.0 (LE up to 2 Mbps)</p>
        <p class="card__desc">Bluetooth Version</p>
    </div>
    <div class="col-sm-6 col-xs-6 summary-card">
        <p class="ma-g-p">Android 5.0 ↑ , 1.5GB ↑</p>
        <p class="card__desc">Compatible Specification of Smartphone</p>
    </div>
    <div class="col-sm-6 col-xs-6 summary-card">
        <p class="ma-g-p">Accelerometer, Hall Sensor, Proximity Sensor</p>
        <p class="card__desc">Sensors</p>
    </div>
    <div class="col-sm-6 col-xs-6 summary-card">
        <p class="ma-g-p">6</p>
        <p class="card__desc">Earbud Weight (g)</p>
    </div>
</div>
<script src="<?= base_url('assets/wow.js') ?>"></script>
<script>
    new WOW().init();
</script>