<style>
    .legal{
        width:100%;
        border-top: 1px solid #eee;
        min-height: 200px;
    }
    .section{
        width:100%;
        min-height: 200px;
        margin: 15vh 0;
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
    .ttvtab-title-wrapper{
        border:0;
    }
    .row-80{
        width:80%;
        margin:auto;
    }
    @media(max-width: 550px){
        .ma-g{
            font-size: 30px;
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
            padding: 20px;
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
    }
</style>
<link rel="stylesheet" href="<?= base_url('assets/animate.css') ?>">
<div class="legal">
    <img src="<?= base_url('assets/image/Galaxy-A305070-Family_Lifestyle-KV.png') ?>" width="100%"/>
</div>
<div class="section">  
    <h2 class="ma-g">The next generation Galaxy A. Built for the era of live.</h2>
    <p class="ma-g-p">Introducing the all-new Galaxy A. It’s a full lineup that’s built specifically for you. Featuring a revolutionary camera that gives you the power to capture the world as you live it. Designed with an incredibly immersive screen to let you experience the world like never before. Powered with a battery to give you the freedom to live. Secured with Samsung Knox built to protect your privacy.</p>
</div>
<div class="section">  
    <h2 class="ma-g-a">Meet the new Galaxy A.</h2>
    <div class="ttvtab-title-wrapper">
        <div id="featuredid" class="ttvtab-pagination-wrapper ttv-pagination-wrapper active ">
            <div class="ttvtab-featured-pagination ttvtab-pagination active" style="display: block;"></div>
            <div class="ttvtab-featured-pagination ttvtab-pagination active" style="display: block;">
                <div class="ttvtab-featured-pagination-next-pre-btn ttvcms-next-pre-btn">
                    <div class="ttvtab-featured-product-prev" data-parent="ttvcmstab-featured-product"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                    <div class="ttvtab-featured-product-next" data-parent="ttvcmstab-featured-product"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="ttvtab-product-list-wrapper">
        <div id="ttvcmstab-featured-product" class="ttvcmstab-product ttvtab-featured-product ttvcmstab-product-detail active ">
            <div class="products owl-theme owl-carousel ttvproduct-wrapper-content-box ttvall-tab-product-block ttvtab-featured-product">
                <?php if($phones){ 
                    foreach ($phones as $key => $phone) {
                        $name = str_replace(" ", "-", $phone['p_name']);
                ?>
                    <div class='item'>
                        <article class="ttvtab-first-product product-miniature js-product-miniature ttvall-product-wrapper-info-box">
                            <div class="thumbnail-container">
                                <div class="ttvproduct-wrapper grid">
                                    <div class="ttvproduct-image">
                                        <a href="<?= base_url('product/'.$name) ?>" class="product-thumbnail"><img src="<?= $phone['first_img'] ?>" alt="<?= $phone['p_name'] ?>"><img class="ttvproduct-hover-img" src="<?= $phone['second_img'] ?>" alt="<?= $phone['p_name'] ?>"></a>
                                        <div class="ttvproduct-hover-btn-wrapper">
                                            <div class="ttvproduct-hover-btn">
                                                <div class="ttvproduct-cart-btn">
                                                    <a data-button-action="add-to-cart" href="<?= base_url('product/'.$name) ?>" class="btn btn-primary add-to-cart ttvproduct-add-to-cart"  title="Buy Now" data-link-action="Buy Now" data-toggle="ttvtooltip" data-placement="top" data-html="true" data-original-title="Buy Now"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="ttvproduct-add-to-cart-label">Add
                                                                                        to Cart</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div calss="ttvproduct-info-box-wrapper">
                                        <div class="product-description">
                                            <div class="ttvproduct-name">
                                                <div class="product-title">
                                                    <a href="<?= base_url('product/'.$name) ?>">
                                                        <h6 class="font-600"><?= $phone['p_name'] ?></h6>
                                                        <span class="price font-800">₦<?= number_format($phone['p_price']) ?></span>
                                                        <button class="btn btn-default"> Buy Now </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                <?php } } ?>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <h2 class="ma-g">Capture more than selfies.</h2>
    <img src="<?= base_url('assets/image/camera_01_1440.png') ?>" width="100%"/>
</div>
<div class="section">  
    <h2 class="ma-g-small">Ultra Wide Camera means you don’t miss any action.</h2>
    <p class="ma-g-p">Whether you’re shooting close up or super wide, you get picture perfect images that will make your friends drool. The Ultra Wide Camera gives you a wide range and depth to capture the world around you.</p>
</div>
<div class="section">
    <div class="row-80">
        <img src="<?= base_url('assets/image/camera_02_ultrawide_1440.png') ?>" width="100%"/>
    </div>
</div>
<div class="section">  
    <h2 class="ma-g-small">Depth detection doesn’t let the background get in the way.</h2>
    <p class="ma-g-p">The new depth and blur camera feature helps draw the attention where it matters most. Front and center.</p>
</div>
<div class="section">
    <img src="<?= base_url('assets/image/camera_03_1440.png') ?>" width="100%"/>
    <small >*Image simulated for illustration purposes.<br>
    *Available functions may vary by Galaxy A model. For details, please visit the model's product page.</small>
</div>
<div class="section">
    <h2 class="ma-g">A screen that brings everything to life.</h2>
    <img src="<?= base_url('assets/image/screen_01_1440.png') ?>" width="100%"/>
</div>
<div class="section">
    <h2 class="ma-g">The power to support your always-on life.</h2>
    <img src="<?= base_url('assets/image/battery_01_1440.png') ?>" width="100%"/>
</div>
<div class="section">
    <div class="col-sm-6">
        <img src="<?= base_url('assets/image/battery_02_1440.png') ?>" width="100%"/>
    </div>
    <div class="col-sm-6" style="padding-top: 10%;">
        <h2 class="battery-ma-g-small">A battery that means you’re never out of touch.</h2>
        <p class="battery-ma-g-p">Whether you’re playing the latest RPG or streaming your favorite shows, the powerful battery is big enough to help you stay on top of your game. Stay live, stay connected longer.</p>
        <p class="battery-ma-g-p-small">*Battery capacity varies by Galaxy A model. Actual battery life varies by network environment, features and apps used, frequency of calls and messages, number of times charged, and many other factors.</p>
    </div>
</div>
<script src="<?= base_url('assets/wow.js') ?>"></script>
<script>
    new WOW().init();
</script>
<script type="text/javascript">
    /*******************************tabproduct*******************************/
    var mobileViewSize = 991;

    $(document).ready(function () {
        /********************** Start Tab js *****************************/
        $('.tab-index').click(function (e) {
            $id = $(this).attr('data-tab-data');
            $paging = $(this).attr('data-tab-paging');
            $('.tab-index').removeClass('active');

            $('.ttvcmstab-product').removeClass('active');
            $('.ttvtab-pagination').removeClass('active');

            $('.ttvcmstab-product').hide();
            $('.ttvtab-pagination').hide();

            $(this).addClass('active');
            $('#' + $id).addClass('active').fadeIn('500');
            $('.' + $paging + '-pagination').addClass('active').show();
        });

        $('.ttvcmstab-product.active').fadeIn();
        $('.ttvtab-pagination.active').fadeIn();


        /********************** End Tab js *****************************/

        /****************** Start Tab Product Slider Js *******************************************/
        var owlClass = [
            //['slider className','navigation nextClass','navigation prevClass']
            ['.ttvtab-featured-product .ttvproduct-wrapper-content-box', '.ttvtab-featured-product-next', '.ttvtab-featured-product-prev'], ['.ttvtab-new-product .ttvproduct-wrapper-content-box', '.ttvtab-new-product-next', '.ttvtab-new-product-prev'], ['.ttvtab-special-product .ttvproduct-wrapper-content-box', '.ttvtab-special-product-next', '.ttvtab-special-product-prev'], ['.ttvtab-best-seller-product .ttvproduct-wrapper-content-box', '.ttvtab-best-seller-product-next', '.ttvtab-best-seller-product-prev'],];

        for (var i = 0; i < owlClass.length; i++) {
            var owl = $(owlClass[i][0]).owlCarousel({
                loop: false, dots: false, nav: false, responsive: {
                    0: { items: 1 }, 320: { items: 1, slideBy: 1 }, 576: { items: 2, slideBy: 1 }, 768: { items: 2, slideBy: 1 }, 992: { items: 3, slideBy: 1 }, 1200: { items: 4, slideBy: 1 }, 1600: { items: 4, slideBy: 1 }, 1800: { items: 4, slideBy: 1 }
                }
            });

            $(owlClass[i][1]).on('click', function (e) {
                e.preventDefault();
                $('#' + $(this).attr('data-parent') + ' .owl-nav .owl-next').trigger('click');
            });
            $(owlClass[i][2]).on('click', function (e) {
                e.preventDefault();
                $('#' + $(this).attr('data-parent') + ' .owl-nav .owl-prev').trigger('click');
            });

            $('#featuredid').insertAfter('#ttvcmstab-featured-product .ttvtab-featured-product');
            $('#newid').insertAfter('#ttvcmstab-new-product .ttvtab-new-product');
            $('#bestid').insertAfter('#ttvcmstab-best-seller-product .ttvtab-best-seller-product');
            $('#specialid').insertAfter('#ttvcmstab-special-product .ttvtab-special-product');
        }
        /****************** End Tab Product Slider Js *******************************************/
        /****************** Start Single Products Slider Js *******************************************/
        var swiperClass = [
            //['slider className','navigation nextClass','navigation prevClass','paging className']
            ['.ttvcmsfeatured-product .ttvfeatured-product-wrapper', '.ttvcmsfeatured-next', '.ttvcmsfeatured-prev', '.ttvcmsfeatured-product'], ['.ttvcmsnew-product .ttvnew-product-wrapper', '.ttvcmsnew-next', '.ttvcmsnew-prev', '.ttvcmsnew-product'], ['.ttvcmsspecial-product .ttvspecial-product-wrapper', '.ttvcmsspecial-next', '.ttvcmsspecial-prev', '.ttvcmsspecial-product'], ['.ttvcmsbest-seller-product .ttvbest-seller-product-wrapper', '.ttvcmsbest-seller-next', '.ttvcmsbest-seller-prev', '.ttvcmsbest-seller-product'],];

        for (var i = 0; i < swiperClass.length; i++) {
            $(swiperClass[i][0]).owlCarousel({
                loop: false, dots: false, nav: false, responsive: {
                    0: { items: 1 }, 320: { items: 1, slideBy: 1 }, 576: { items: 2, slideBy: 1 }, 768: { items: 2, slideBy: 1 }, 992: { items: 3, slideBy: 1 }, 1200: { items: 4, slideBy: 1 }, 1600: { items: 4, slideBy: 1 }, 1800: { items: 4, slideBy: 1 }
                },
            });

            $(swiperClass[i][1]).on('click', function (e) {
                e.preventDefault();
                $('.' + $(this).attr('data-parent') + ' .owl-nav .owl-next').trigger('click');
            });
            $(swiperClass[i][2]).on('click', function (e) {
                e.preventDefault();
                $('.' + $(this).attr('data-parent') + ' .owl-nav .owl-prev').trigger('click');
            });
            $(swiperClass[i][3] + ' .ttv-pagination-wrapper').insertAfter(swiperClass[i][3] + ' .ttvproduct-wrapper-content-box');
        }
        /****************** End Single Product Sliders Js *******************************************/

    });
</script>