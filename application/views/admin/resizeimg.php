<html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rifugio Resizer</title>
        <link rel="icon" href="https://sesnigeria.com/assets/image/favicon.png" sizes="32x32">
        <link rel=stylesheet type=text/css href="<?= base_url('assets/resize/assets/css/reset.css')?>">
        <link rel=stylesheet type=text/css href="<?= base_url('assets/resize/assets/css/style.css')?>">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,800,900" rel="stylesheet">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-108152855-1"></script>
    </head>

    <body>
        <section class="section1">
            <div class="data">
                <img src="https://sesnigeria.com/assets/image/samsung-logo-blue.svg" height="30">
                <br>
                <h1><b>Rifugio Image Resize Tool</b></h1>
                <br>
                <button type="button" id="upload_widget_opener">Upload Image</button>
                <a class="button-inverse" download="edited-image.png" id="download">Download Image</a>
                <img id="img" style="margin-left: auto;margin-right: auto;display:block;">
            </div>
        </section>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
        <script src="<?= base_url('assets/resize/node_modules/blueimp-file-upload/js/vendor/jquery.ui.widget.js')?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/resize/node_modules/blueimp-file-upload/js/jquery.iframe-transport.js')?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/resize/node_modules/blueimp-file-upload/js/jquery.fileupload.js')?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/resize/node_modules/cloudinary-jquery-file-upload/cloudinary-jquery-file-upload.js')?>"
            type="text/javascript"></script>
        <script src="https://widget.cloudinary.com/global/all.js" type="text/javascript"></script>
        <script src="<?= base_url('assets/resize/assets/js/main.js')?>" type="text/javascript"></script>
    </body>

</html>