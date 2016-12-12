<!DOCTYPE html>
<html lang="en" class="js">
<head>
    <title>JS Components - eMAG Apps UI KIT</title>
    <?php include_once "modules/_mod_meta.php"?>
    <?php include_once "modules/_mod_top_include.php"?>
</head>
<body>

<?php include_once "modules/_mod_browser_upgrade.php"?>

<!-- HEADER:Start -->
<?php include_once "modules/_mod_header.php" ?>
<!-- HEADER:End -->

<!-- PAGE:Start -->
<div class="main-container" id="main-container">
    <div class="main-container-inner">
        <!-- SIDEBAR:Start -->
        <?php include_once "modules/_mod_sidebar.php" ?>
        <!-- SIDEBAR:End -->
        <!-- CONTENT:Start -->
        <div class="main-content">
            <section class="page-content">
                <div class="jumbotron content-header">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="container-fluid">
                                <p>eMAG Apps UI KIT</p>
                                <p><b>JS Components</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                <section id="javascriptEnhancements" class="pad-top-40">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="show-panel">
                                <div class="show-panel-body">
                                    <h2><strong>Javascript Components</strong></h2>
                                    <p><strong>These elements need both the main stylesheet and the main javascript file
                                            in order to be displayed and function properly.</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="pad-top-20">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="show-panel ">
                                <div class="show-panel-body">
                                    <h4 class="text-primary"><strong>Modals</strong></h4>
                                    <p><strong>Default styling:</strong></p>

                                    <div class="show-example-modal" data-example-id="static-modal">
                                        <div class="modal" tabindex="-1" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><i class="fa fa-close"
                                                                                      aria-hidden="true"></i>
                                                        </button>
                                                        <h4 class="modal-title">Modal title</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Modal with form</p>
                                                        <form id="exampleForm1" action="" method="post">
                                                            <fieldset>
                                                                <legend class="sr-only">Simple form</legend>
                                                                <div class="form-group has-error">
                                                                    <label class="control-label required" for="exampleInputEmail1">Email address</label>
                                                                    <input type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1" placeholder="example@example.com" required>
                                                                    <div class="help-block">Please complete this field.</div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label required" for="exampleInputPassword1">Password</label>
                                                                    <input type="password" class="form-control" id="exampleInputPassword1" name="exampleInputPassword1" placeholder="password" required>
                                                                </div>
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="pull-left">
                                                            <div class="form-sep">
                                                                    <span
                                                                        class="required">Some fields may be required.</span>
                                                            </div>
                                                        </div>
                                                        <div class="pull-right panel-controls">
                                                            <button type="button" id="special_submit"
                                                                    class="btn btn-success"><span>Save</span>
                                                            </button>
                                                            <button type="reset" id="special_reset"
                                                                    class="btn btn-default" data-dismiss="modal">
                                                                <span>Cancel</span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <p>Modals are streamlined, but flexible, dialog prompts with the minimum required
                                        functionality and smart defaults.</p>
                                    <div class="alert alert-info">
                                        <i class="fa fa-warning fonts-up-140"></i>&nbsp;<strong>Multiple open modals not
                                            supported</strong> Be sure not to open a modal while another is still
                                        visible. Showing more than one modal at a time requires custom code.
                                    </div>
                                    <div class="alert alert-info">
                                        <i class="fa fa-warning fonts-up-140"></i>&nbsp;<strong>Modal markup
                                            placement</strong> Try to place a modal's HTML code inside the <code>&lt;div
                                            id="popSpace"&gt;&lt;div&gt;</code> in your document to avoid other
                                        components affecting the modal's appearance and/or functionality.
                                    </div>
                                </div>
                            </div>
                            <div class="show-panel ">
                                <div class="show-panel-body">
                                    <p><strong>Demo modals with different sizing:</strong></p>
                                    <div class="pad-sep-20">
                                        <div class="row">
                                            <div class="col-lg-8 col-lg-offset-2">
                                                <div class="btn-group btn-group-justified" role="group"
                                                     aria-label="...">
                                                    <div class="btn-group" role="group">
                                                        <button type="button" id="mySmallDemoModal"
                                                                class="btn btn-default" data-toggle="modal"
                                                                data-target="#myDemoModal">Small
                                                        </button>
                                                    </div>
                                                    <div class="btn-group" role="group">
                                                        <button type="button" class="btn btn-default"
                                                                data-toggle="modal" data-target="#myDemoModal">Normal
                                                        </button>
                                                    </div>
                                                    <div class="btn-group" role="group">
                                                        <button type="button" id="myLargeDemoModal"
                                                                class="btn btn-default" data-toggle="modal"
                                                                data-target="#myDemoModal">Large
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="show-panel ">
                                <div class="show-panel-body">
                                    <p><strong>Informational modals:</strong></p>
                                    <div class="pad-sep-20">
                                        <div class="row">
                                            <div class="col-lg-8 col-lg-offset-2">
                                                <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                                    <div class="btn-group" role="group">
                                                        <button type="button" class="btn btn-default info-modal-button">Info modal</button>
                                                    </div>
                                                    <div class="btn-group" role="group">
                                                        <button type="button" class="btn btn-default warning-modal-button">Warning modal</button>
                                                    </div>
                                                    <div class="btn-group" role="group">
                                                        <button type="button" class="btn btn-default error-modal-button">Error modal</button>
                                                    </div>
                                                    <div class="btn-group" role="group">
                                                        <button type="button" class="btn btn-default success-modal-button">Success modal</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="jsTooltips" class="pad-top-20">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="show-panel ">
                                <div class="show-panel-body">
                                    <h4 class="text-primary"><strong>Tooltips</strong></h4>
                                    <div class="pad-sep-40" data-showcase="example">
                                        <button type="button" class="btn btn-default" data-toggle="tooltip"
                                                data-placement="left" title="Tooltip type danger" data-type="danger">
                                            Tooltip type danger
                                        </button>
                                        <button type="button" class="btn btn-default" data-toggle="tooltip"
                                                data-placement="bottom" title="Tooltip type warning"
                                                data-type="warning">Tooltip type warning
                                        </button>
                                        <button type="button" class="btn btn-default" data-toggle="tooltip"
                                                data-placement="right" title="Tooltip type default" data-type="default">
                                            Tooltip type default
                                        </button>
                                        <button type="button" class="btn btn-default" data-toggle="tooltip"
                                                data-placement="top" title="Tooltip without type">Tooltip without type
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="jsPopovers" class="pad-top-20">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="show-panel ">
                                <div class="show-panel-body">
                                    <h4 class="text-primary"><strong>Popovers</strong></h4>
                                    <div class="pad-sep-40" data-showcase="example">
                                        <button type="button" class="btn btn-default" data-type="danger" data-toggle="popover" title="Popover title" data-placement="left" data-content="Popover type danger">Popover type danger</button>
                                        <button type="button" class="btn btn-default" data-type="warning" data-toggle="popover" title="Popover title" data-placement="top" data-content="Popover type warning">Popover type warning</button>
                                        <button type="button" class="btn btn-default" data-type="default" data-toggle="popover" title="Popover title" data-placement="bottom" data-content="Popover type default">Popover type default</button>
                                        <button type="button" class="btn btn-default" data-toggle="popover" title="Popover title" data-placement="right" data-content="Popover type danger">Popover without type</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="jsUtilities" class="pad-top-20">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="show-panel ">
                                <div class="show-panel-body">
                                    <h4 class="text-primary"><strong>Utilities:</strong></h4>
                                    <p>A couple of HTML snippets with javascript enhancements:</p>
                                    <p><strong>Upload file input type:</strong></p>
                                    <div class="pad-sep-20">
                                        <div class="row">
                                            <div class="col-lg-8 col-lg-offset-2">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" aria-label="..."
                                                               placeholder="Tell me your fathers name">
                                                        <div class="input-group-btn">
                                                            <label for="testfile3" class="btn btn-primary">
                                                                <i class="fa fa-upload"></i>
                                                                <span>Upload his picture</span>
                                                                <input type="file" name="testfile3" id="testfile3"
                                                                       class="form-input-control"
                                                                       data-multiple-caption="{count} files selected"
                                                                       multiple="">
                                                            </label>
                                                            <button class="btn btn-success" type="button">Go!</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="show-panel ">
                                <div class="show-panel-body">
                                    <p><strong>Checkboxes disguised as buttons:</strong></p>
                                    <p>Add
                                        <mark>data-toggle="buttons"</mark>
                                        to a
                                        <mark>.btn-group</mark>
                                        containing checkbox or radio inputs to enable toggling in their respective
                                        styles.
                                    </p>
                                    <div class="pad-sep-20">
                                        <div class="row">
                                            <div class="col-lg-8 col-lg-offset-2">
                                                <div class="btn-group" data-toggle="buttons">
                                                    <label class="btn btn-primary active">
                                                        <input type="checkbox" autocomplete="off" checked> Checkbox 1
                                                        (pre-checked)
                                                    </label>
                                                    <label class="btn btn-primary">
                                                        <input type="checkbox" autocomplete="off"> Checkbox 2
                                                    </label>
                                                    <label class="btn btn-primary">
                                                        <input type="checkbox" autocomplete="off"> Checkbox 3
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="show-panel ">
                                <div class="show-panel-body">
                                    <p><strong>Radio buttons disguised as regular buttons:</strong></p>
                                    <div class="pad-sep-20">
                                        <div class="row">
                                            <div class="col-lg-8 col-lg-offset-2">
                                                <div class="btn-group" data-toggle="buttons">
                                                    <label class="btn btn-primary active">
                                                        <input type="radio" name="options" id="option1"
                                                               autocomplete="off" checked> Radio 1 (preselected)
                                                    </label>
                                                    <label class="btn btn-primary">
                                                        <input type="radio" name="options" id="option2"
                                                               autocomplete="off"> Radio 2
                                                    </label>
                                                    <label class="btn btn-primary">
                                                        <input type="radio" name="options" id="option3"
                                                               autocomplete="off"> Radio 3
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
        </div>
    </div>
    <!-- CONTENT:End -->
    <!-- FOOTER:Start -->
    <?php include_once "modules/_mod_footer.php" ?>
    <!-- FOOTER:End -->
</div>
</div>
<!-- PAGE:End -->

<!-- POPUPS:Start -->
<div id="popSpace">
    <div class="modal fade" id="myDemoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="fa fa-remove"></i></span></button>
                    <h4 class="modal-title" id="myModalLabel">Standard modal</h4>
                </div>
                <div class="modal-body">
                    <h2>Suspendisse rutrum</h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class="pad-sep-20">
                        <span class="caption">Nam scelerisque nunc</span>
                    </div>
                    <p>
                        Curabitur porta non est in consectetur. Aenean ut purus volutpat, sodales sem nec, fermentum massa. Mauris tristique pellentesque ante ullamcorper aliquam. Maecenas dignissim porta turpis, interdum tempus velit aliquam ac. Morbi a risus a purus porttitor efficitur. Donec laoreet condimentum nisi nec bibendum. Sed non neque mollis, rutrum tellus ac, porttitor elit. Pellentesque sed magna nisi. Suspendisse venenatis massa quis velit fringilla, ac consequat dolor tincidunt. Etiam nec fermentum lectus, quis dignissim nunc. Quisque vel quam quis sapien ornare porta nec a purus. Nullam finibus convallis mi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                    </p>
                </div>
                <div class="modal-footer">
                    <div class="pull-right panel-controls">
                        <button class="btn btn-success" data-dismiss="modal"><span>Yeah, got it</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- SCRIPTS:Start -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write("<script src=\"../dist/js/lib/jquery-1.11.3.min.js\">"+"<"+"/script>")</script>
        
        <!-- PLUGIN: PRISM: This plugin helps display demo code. Don't add it everywhere -->
        <script src="../dist/plugins/prism/prism.min.js"></script>

        <script src="../dist/plugins/tether/tether.min.js"></script>

        <script src="../dist/js/main_script.js"></script>
        <script src="../dist/js/demo_helpers.js"></script>
        <!-- SCRIPTS:End -->

        <!-- DOCUMENT-READY:Start -->
        <script type="text/javascript">               
            $(document).ready(function () {
                console.log('Ready, Captain!');

                demoHelpers();  // Require demo_helpers.js

                //This function is just fo sho. You don't really have to include it in your app, man.
                function modalSizing() {
                    $('#mySmallDemoModal').on('click', function () {
                        var mode = $(this).data('target');
                        $(mode).find('.modal-dialog').addClass('modal-sm');
                        $('#myModalLabel').html('Standard modal - Small');
                    });
                    $('#myLargeDemoModal').on('click', function () {
                        var mode = $(this).data('target');
                        $(mode).find('.modal-dialog').addClass('modal-lg');
                        $('#myModalLabel').html('Standard modal - Large');
                    });
                    $('#myDemoModal').on('hidden.bs.modal', function (e) {
                        $(this).find('.modal-dialog').attr('class', 'modal-dialog');
                        $('#myModalLabel').html('Standard modal');
                    });
                }

                showcasing();   //Requires demo_helpers.js, prism.min.js and prism.min.css
                modalSizing();

                var dummyModalContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris auctor, tortor sit amet vulputate rhoncus, elit justo feugiat nulla, mollis aliquet lacus sapien sed justo. Etiam neque libero, mattis et aliquet sit amet, volutpat id urna. Duis vel ipsum non velit aliquam aliquet a nec odio. Cras eget aliquet ipsum.';

                var infoModal = new PhotonModal({
                    id: 'info_modal',
                    title: 'Info modal',
                    content: dummyModalContent,
                    buttons: {},
                    size: 'medium',
                    type: 'info',
                    closeOnClickOutside: false,
                    showCloseButton: true
                });

                var warningModal = new PhotonModal({
                    id: 'warning_modal',
                    title: 'Warning modal',
                    content: dummyModalContent,
                    buttons: {
                        cancel: {
                            label: 'OK',
                            class: 'btn btn-default'
                        }
                    },
                    size: 'medium',
                    type: 'warning',
                    closeOnClickOutside: false,
                    showCloseButton: false
                });

                var errorModal = new PhotonModal({
                    id: 'danger_modal',
                    title: 'Error modal',
                    content: dummyModalContent,
                    buttons: {
                        cancel: {
                            label: 'OK',
                            class: 'btn btn-default'
                        }
                    },
                    size: 'medium',
                    type: 'error',
                    closeOnClickOutside: false,
                    showCloseButton: false
                });

                var successModal = new PhotonModal({
                    id: 'success_modal',
                    title: 'Success modal',
                    content: dummyModalContent,
                    buttons: {
                        cancel: {
                            label: 'OK',
                            class: 'btn btn-default'
                        }
                    },
                    size: 'medium',
                    type: 'success',
                    closeOnClickOutside: false,
                    showCloseButton: false
                });

                $(document.body).on('click', '.info-modal-button', function () {
                    infoModal.show();
                });

                $(document.body).on('click', '.warning-modal-button', function () {
                    warningModal.show();
                });

                $(document.body).on('click', '.error-modal-button', function () {
                    errorModal.show();
                });

                $(document.body).on('click', '.success-modal-button', function () {
                    successModal.show();
                });

            });
        </script>
        <!-- DOCUMENT-READY:End -->
        
</body>
</html>