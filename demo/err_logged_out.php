<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Logout - eMAG Apps UI KIT</title>
        <?php include_once "modules/_mod_meta.php"?>
        <?php include_once "modules/_mod_top_include.php"?>
    </head>
    <body>
        <?php include_once "modules/_mod_browser_upgrade.php"?>
        
        <!-- HEADER:Start -->
            <?php include_once "modules/_mod_header_simple.php"?>
        <!-- HEADER:End -->

        <!-- PAGE:Start -->
        
            <div class="main-container" id="main-container">
                <div class="main-container-inner">
                
                <!-- SIDEBAR:Start -->
                <!-- SIDEBAR:End -->

                <!-- CONTENT:Start -->
                <div class="main-content">
                    <div class="page-content">
                        <div class="jumbotron">
                            <h1>Logged out.</h1>
                            <p>You have been automatically logged out of your account. Your station was inactive for more than <strong>15 minutes</strong> and we care deeply about your privacy.</p>
                            <div class="pad-sep-20">
                                <a href="authentication.php" type="button" class="btn btn-default">Log back in</a>
                                <a href="index.php" class="btn btn-default"><span>Go to homepage</span></a>
                            </div>
                        </div>                                 
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
        <script src="../dist/js/main_script.js"></script>
        <script src="../dist/js/demo_helpers.js"></script>
        <!-- SCRIPTS:End -->

        <!-- DOCUMENT-READY:Start -->
        <script type="text/javascript">               
            $(document).ready(function () {
                console.log('Ready, Captain!');
            });
        </script>
        <!-- DOCUMENT-READY:End -->

    </body>
</html>