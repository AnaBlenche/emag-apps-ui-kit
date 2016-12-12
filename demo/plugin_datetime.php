<!DOCTYPE html>
<html lang="en" class="js">
<head>
        <title>Plugins - eMAG Apps UI KIT</title>
        <?php include_once "modules/_mod_meta.php"?>

        <!-- PLUGIN: DateRangePicker -->
        <link rel="stylesheet" href="../dist/plugins/daterangepicker/daterangepicker.css">

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
                                <p><b>DateTime</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                <section id="summernoteStandard" class="pad-top-40">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="show-panel">
                                <div class="show-panel-body">
                                    <h4 class="text-primary"><strong>DateRangePicker.js</strong></h4>
                                    <p><strong>Standard install</strong></p>
                                    <p>You can familiarize yourself with more options and settings by checking out <a href="http://www.daterangepicker.com/" target="_blank">http://www.daterangepicker.com/</a></p>
                                </div>
                                <div class="">
                                    <div class="show-panel-body">
                                        <form>
                                            <fieldset>
                                                <legend class="sr-only">DateRangePicker example form</legend>
                                                <div data-showcase="example">
                                                    <div class="form-group">
                                                        <label for="daterangepicker_standard" class="control-label">Standard</label>
                                                        <div class="input-group">
                                                            <input type="text" id="daterangepicker_standard" class="form-control" value="" />
                                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                        <form>
                                            <fieldset>
                                                <legend class="sr-only">example form</legend>
                                                <div data-showcase="example">
                                                    <div class="form-group">
                                                        <label for="daterangepicker_standard_with_value" class="control-label">Standard with value</label>
                                                        <div class="input-group">
                                                            <input type="text" id="daterangepicker_standard_with_value" class="form-control" value="10/10/2016 - 10/30/2016" />
                                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                        <form>
                                            <fieldset>
                                                <legend class="sr-only">example form</legend>
                                                <div data-showcase="example">
                                                    <div class="form-group">
                                                        <label for="daterangepicker_standard_with_format" class="control-label">Standard with format</label>
                                                        <div class="input-group">
                                                            <input type="text" id="daterangepicker_standard_with_format" class="form-control" value="" />
                                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                        <form>
                                            <fieldset>
                                                <legend class="sr-only">example form</legend>
                                                <div data-showcase="example">
                                                    <div class="form-group">
                                                        <label for="daterangepicker_standard_with_predefined_intervals" class="control-label">Standard with predefined intervals</label>
                                                        <div class="input-group">
                                                            <input type="text" id="daterangepicker_standard_with_predefined_intervals" class="form-control" value="" />
                                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                        <form>
                                            <fieldset>
                                                <legend class="sr-only">example form</legend>
                                                <div data-showcase="example">
                                                    <div class="form-group">
                                                        <label for="daterangepicker_standard_with_predefined_intervals_no_calendar" class="control-label">Standard with predefined intervals whitout calendars</label>
                                                        <div class="input-group">
                                                            <input type="text" id="daterangepicker_standard_with_predefined_intervals_no_calendar" class="form-control" value="" />
                                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
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

        <!-- SCRIPTS:Start -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write("<script src=\"../dist/js/lib/jquery-1.11.3.min.js\">"+"<"+"/script>")</script>

        <!-- PLUGIN: moment.js -->
        <script src="../dist/plugins/datetimepicker/moment.2.10.6.min.js"></script>
        <!-- PLUGIN: DateRangePicker -->
        <script src="../dist/plugins/daterangepicker/daterangepicker.min.js"></script>

        <script src="../dist/js/main_script.js"></script>
        <script src="../dist/js/demo_helpers.js"></script>
        <!-- SCRIPTS:End -->

        <!-- DOCUMENT-READY:Start -->
        <script type="text/javascript">
            $(document).ready(function () {
                console.log('Ready, Captain!');


                demoHelpers();  // Require demo_helpers.js

                $('#daterangepicker_standard').daterangepicker();
                $('#daterangepicker_standard_with_value').daterangepicker();
                $('#daterangepicker_standard_with_format').daterangepicker({
                    timePicker: true,
                    timePicker24Hour: true,
                    locale: {
                        format: "YYYY-MM-DD HH:mm"
                    }
                });
                $('#daterangepicker_standard_with_predefined_intervals').daterangepicker({
                    alwaysShowCalendars: true,
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()]
                    },
                    locale: {
                        format: 'YYYY-MM-DD'
                    }
                });$('#daterangepicker_standard_with_predefined_intervals_no_calendar').daterangepicker({
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()]
                    },
                    locale: {
                        format: 'YYYY-MM-DD'
                    }
                });
            });
        </script>
        <!-- DOCUMENT-READY:End -->


</body>
</html>
