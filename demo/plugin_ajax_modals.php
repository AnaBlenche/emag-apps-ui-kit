<!DOCTYPE html>
<html lang="en" class="js">
    <head>
        <title>JS Components - eMAG Apps UI KIT</title>
        <?php include_once "modules/_mod_meta.php"?>
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
                                        <p><b>AJAX Modals</b></p>
                                    </div>
                                 </div>
                            </div>
                        </div>
                        <section id="summernoteStandard" class="pad-top-40">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="show-panel">
                                        <div class="show-panel-body">
                                            <h4 class="text-primary"><strong>eMAG Apps UI KIT - AJAX Modals</strong></h4>
                                            <p><strong>Works great with the standard Bootstrap version</strong></p>
                                            <div class="pad-sep-20">
                                                <button id="ajax_modal_start" type="button" class="btn btn-primary">Show me an ajax modal.</button>
                                            </div>
                                        </div>
                                        <div class="show-panel-example">                                       
                                            <div class="show-panel-footer">
                                                <pre class="language-javascript">
                                                    <code class="language-javascript">
var modalTest = new PhotonModal({
    id: 'testModal',
    title: 'This is an AJAX modal',
    useAjax: true,
    ajaxModalParams: {
        method: 'POST',
        url: '/emag-apps-ui-kit/demo/plugin_ajax_modals_modal_content.html'
    },
    size: 'default',
    type: 'preview',
    buttons: {
        save: {
            label: 'Save',
            class: 'btn-success',
            closeModal: true
        },
        cancel: {
            label: 'Cancel',
            class: 'btn-default',
            closeModal: true
        }
    }
}); 
                                                    </code>
                                                </pre>
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

        <!-- POPUPS:Start -->
        <div id="popSpace"></div>
        <!-- POPUPS:End -->
        
        <!-- SCRIPTS:Start -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write("<script src=\"../dist/js/lib/jquery-1.11.3.min.js\">"+"<"+"/script>")</script>
        <script src="../dist/js/main_script.js"></script>
        <script src="../dist/js/demo_helpers.js"></script>
        <!-- SCRIPTS:End -->

        <!-- DOCUMENT-READY:Start -->
        <script type="text/javascript">
            var modalTest = new PhotonModal({
                id: 'testModal',
                title: 'This is an AJAX modal',
                useAjax: true,
                ajaxModalParams: {
                    method: 'POST',
                    url: '/emag-apps-ui-kit/demo/plugin_ajax_modals_modal_content.html'
                },
                size: 'default',
                type: 'preview',
                buttons: {
                    save: {
                        label: 'Save',
                        class: 'btn-success',
                        closeModal: true
                    },
                    cancel: {
                        label: 'Cancel',
                        class: 'btn-default',
                        closeModal: true
                    }
                }
            });

            $(document).ready(function () {
                console.log('Ready, Captain!');

                demoHelpers();  // Require demo_helpers.js

                $('#ajax_modal_start').on('click', function(){
                    modalTest.show();
                });
            });
        </script>
        <!-- DOCUMENT-READY:End -->

    </body>
</html>