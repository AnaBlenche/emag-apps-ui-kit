<!DOCTYPE html>
<html lang="en" class="js">
    <head>
        <title>Plugins - eMAG Apps UI KIT</title>
        <?php include_once "modules/_mod_meta.php"?>
        <link rel="stylesheet" href="../dist/plugins/magnific/magnific.css">
        <?php include_once "modules/_mod_top_include.php"?>
    </head>
    <body>
        <?php include_once "modules/_mod_browser_upgrade.php"?>

        <!-- HEADER:Start -->
        <?php include_once "modules/_mod_header.php"?>
        <!-- HEADER:End -->
        <!-- PAGE:Start -->
            <div class="main-container" id="main-container">
                <div class="main-container-inner">
                <!-- SIDEBAR:Start -->
                <?php include_once "modules/_mod_sidebar.php"?>
                <!-- SIDEBAR:End -->
                <!-- CONTENT:Start -->
                <div class="main-content">
                    <div class="page-content">
                        <div class="jumbotron content-header">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="container-fluid">
                                        <p>eMAG Apps UI KIT</p>
                                        <p><b>Image gallery</b></p>
                                    </div>
                                 </div>
                            </div>
                        </div>
                        <section id="summernoteStandard" class="pad-top-40">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="show-panel">
                                        <div class="show-panel-body">
                                            <h4 class="text-primary"><strong>Magnific.js</strong></h4>
                                            <p><strong>Standard install</strong></p>
                                            <p>You can familiarize yourself with more options and settings by checking out <a href="http://dimsemenov.com/plugins/magnific-popup/" target="_blank">http://dimsemenov.com/plugins/magnific-popup/</a></p>
                                        </div>
                                        <div class="show-panel-example">
                                            <div class="show-panel-body">
                                                <div class="pad-top-40">
                                                    <div class="row">
                                                        <div class="col-lg-10 col-lg-offset-1" data-showcase="example">
                                                            <div id="default_magnific" class="zoom-gallery zg-grid">
                                                                <a href="img/photo-1.jpg" data-source="https://unsplash.com/photos/4jcFu1byopQ" title="by Davide Ragusa">
                                                                    <img src="img/photo-1.jpg" alt="gallery-image">
                                                                </a>
                                                                <a href="img/photo-4.jpg" data-source="https://unsplash.com/photos/BeIvjuz6k2k" title="by Adrian Pelletier">
                                                                    <img src="img/photo-4.jpg" alt="gallery-image">
                                                                </a>
                                                                <a href="img/photo-5.jpg" data-source="https://unsplash.com/photos/DjlKxYFJlTc" title="by Elliott Engelmann">
                                                                    <img src="img/photo-5.jpg" alt="gallery-image">
                                                                </a>
                                                                <a href="img/photo-6.jpg" data-source="http://www.gettyimages.com/license/484398332" title="by Carl Court">
                                                                    <img src="img/photo-6.jpg" alt="gallery-image">
                                                                </a>
                                                                <a href="img/photo-7.jpg" data-source="http://www.volvooceanrace.com/en/home.html" title="Volvo Ocean Race/Team Vestas Wind/2015">
                                                                    <img src="img/photo-7.jpg" alt="gallery-image">
                                                                </a>
                                                                <a href="img/photo-8.gif" data-source="https://www.youtube.com/watch?v=o0u4M6vppCI" title="'Shia LaBeouf' Live - Rob Cantor">
                                                                    <img src="img/photo-8.gif" alt="gallery-image">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="show-panel">
                                        <div class="show-panel-example">
                                            <div class="show-panel-body">
                                                <p><strong>All AJAX</strong></p>
                                                <p>Sometimes, you may want to surprise your audience.</p>
                                                <div class="pad-sep-40">
                                                    <div class="row">
                                                        <div class="col-lg-10 col-lg-offset-1 text-center">
                                                            <a href="img/photo-2.jpg" id="btnajax_magnific" class="btn btn-primary">Show me an image of a house.</a><br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="show-panel">
                                        <div class="show-panel-example">
                                            <div class="show-panel-body">
                                                <p><strong>Youtube/Vimeo/etc. embeds</strong></p>
                                                <p>Sometimes, you may want to surprise your audience.</p>
                                                <div class="pad-sep-40">
                                                    <div class="row">
                                                        <div class="col-lg-10 col-lg-offset-1 text-center">
                                                            <a href="https://www.youtube.com/watch?v=HgzGwKwLmgM" id="youtube_magnific" class="btn btn-primary">Open YouTube video</a><br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>                                        
                    </div>
                </div>
                <!-- CONTENT:End -->
                <!-- FOOTER:Start -->
                <?php include_once "modules/_mod_footer.php"?>
                <!-- FOOTER:End -->
                </div>
            </div>
        <!-- PAGE:End -->
        
        <!-- SCRIPTS:Start -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write("<script src=\"../dist/js/lib/jquery-1.11.3.min.js\">"+"<"+"/script>")</script>
        
        <!-- PLUGIN: Magnific popup -->
        <script src="../dist/plugins/magnific/magnific.min.js"></script>
        
        <script src="../dist/js/main_script.js"></script>
        <script src="../dist/js/demo_helpers.js"></script>
        <!-- SCRIPTS:End -->

        <!-- DOCUMENT-READY:Start -->
        <script type="text/javascript">               
            $(document).ready(function () {
                console.log('Ready, Captain!');

                demoHelpers();  // Require demo_helpers.js

                $('#default_magnific').magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    closeOnContentClick: false,
                    closeBtnInside: false,
                    mainClass: 'mfp-with-zoom mfp-img-mobile',
                    image: {
                        verticalFit: true,
                        titleSrc: function (item) {
                            return item.el.attr('title') + ' &middot; <a class="image-source-link" href="' + item.el.attr('data-source') + '" target="_blank">image source</a>';
                        }
                    },
                    gallery: {
                        enabled: true
                    },
                    zoom: {
                        enabled: true,
                        duration: 300, // don't foget to change the duration also in CSS
                        opener: function (element) {
                            return element.find('img');
                        }
                    }
                });

                $('#btnajax_magnific').magnificPopup({
                    type: 'image',
                    closeOnContentClick: true,
                    image: {
                        verticalFit: true
                    }

                });
                $('#youtube_magnific').magnificPopup({
                    //disableOn: 700,
                    type: 'iframe',
                    mainClass: 'mfp-fade',
                    removalDelay: 160,
                    preloader: false,
                    fixedContentPos: false
                });
            });
        </script>
        <!-- DOCUMENT-READY:End -->
        
    </body>
</html>