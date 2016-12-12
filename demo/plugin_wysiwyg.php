<!DOCTYPE html>
<html lang="en" class="js">
    <head>

        <title>Plugins - eMAG Apps UI KIT</title>
        <?php include_once "modules/_mod_meta.php"?>
        
        <!-- PLUGIN: Summernote -->
        <link rel="stylesheet" href="../dist/plugins/summernote/summernote.css">
        
        <?php include_once "modules/_mod_top_include.php"?>

    </head>
    <body>
        <?php include_once "modules/_mod_browser_upgrade.php"?>

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
                                            <p><b>Wysiwyg editor</b></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <section id="summernoteStandard" class="pad-top-40">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="show-panel ">
                                            <div class="show-panel-body">
                                                <h4 class="text-primary"><strong>Summernote.js</strong></h4>
                                                <p><strong>Standard install</strong></p>
                                                <p>You can familiarize yourself with more options and settings by checking out <a href="http://summernote.org/" target="_blank">summernote.org</a></p>
                                                <div class="pad-top-40">
                                                    <div class="row">
                                                        <div class="col-lg-10 col-lg-offset-1">
                                                            <div id="summernote1">This is the infamous summernote. Check it out!</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="show-panel ">
                                            <div class="show-panel-body">
                                                <p><strong>Air mode</strong></p>
                                                <p>You can familiarize yourself with more options and settings by checking out <a href="http://summernote.org/" target="_blank">summernote.org</a></p>
                                                <div class="pad-sep-40">
                                                    <div class="row">
                                                        <div class="col-lg-10 col-lg-offset-1">
                                                            <div id="summernote2">
                                                                <p>Bacon ipsum dolor amet laborum ullamco reprehenderit qui ut voluptate officia turducken corned beef andouille sint. Non consequat chicken shank ball tip, incididunt esse nostrud. Nostrud dolore ut veniam andouille pork belly. Turkey shankle magna pig aliquip. Fugiat bresaola tempor pork alcatra t-bone exercitation aliqua esse. Nisi flank pork chop t-bone aute non corned beef dolor doner quis sint. Fatback ut tongue leberkas eu pancetta nisi.</p>
                                                                <p>Ex bresaola landjaeger biltong labore. In pariatur consectetur, dolore pork rump ribeye. Beef adipisicing occaecat, excepteur brisket officia fatback porchetta id alcatra elit pastrami reprehenderit labore. Excepteur rump shank enim cupidatat biltong t-bone hamburger eu. Fatback meatloaf flank ut eu, officia meatball.</p>
                                                                <p>Irure ground round tempor, sed flank meatball incididunt cillum pork loin landjaeger picanha beef ribs. Tri-tip commodo beef ribs ea irure quis nostrud andouille beef biltong picanha shoulder sunt pork loin. Pork belly ribeye labore, corned beef tri-tip nulla id sausage pork loin biltong consequat. Pariatur dolore deserunt eiusmod pig velit rump. Rump flank beef ribs, consectetur sirloin salami pariatur sausage ground round dolor sunt. Aute jerky ribeye lorem, in pig reprehenderit aliquip pork sunt picanha ut doner.</p>
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

        <script src="../dist/plugins/tether/tether.min.js"></script>

        <script src="../dist/plugins/summernote/summernote.min.js"></script>
        
        <script src="../dist/js/main_script.js"></script>
        <script src="../dist/js/demo_helpers.js"></script>
        <!-- SCRIPTS:End -->

        <!-- DOCUMENT-READY:Start -->
        <script type="text/javascript">               
            $(document).ready(function () {
                console.log('Ready, Captain!');

                demoHelpers();  // Require demo_helpers.js

                $('#summernote1').summernote({
                    minHeight: 300,
                    maxHeight: 600
                });
                $('#summernote2').summernote({
                    airMode: true
                });
            });
        </script>
        <!-- DOCUMENT-READY:End -->

    </body>
</html>