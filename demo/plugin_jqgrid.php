<!DOCTYPE html>
<html lang="en" class="js">
<head>

        <title>jQGrid - eMAG Apps UI KIT</title>
        <?php include_once "modules/_mod_meta.php"?>
        
        <link rel="stylesheet" href="../dist/plugins/jqgrid/ui.jqgrid.css">
        <link rel="stylesheet" href="../dist/plugins/drop/drop.css">

        <?php include_once "modules/_mod_top_include.php"?>

</head>

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
                                <p><b>jQGrid</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                <section id="jqgridStandard" class="pad-top-40">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="show-panel">
                                <div class="show-panel-body">
                                    <p><strong>Based on: </strong><a href="http://www.trirand.com/blog/" target="_blank" class="link">jQGrid Documentation</a></p>

                                    <table id="grid_table" class="table table-bordered"></table>
                                    <div id="grid_pager"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> <!-- #jqgridStandard -->

                <section id="jqgridWithFormmaters" class="pad-top-20">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="show-panel">
                                <div class="show-panel-body">
                                    <table id="grid_with_formatter_table" class="table table-bordered"></table>
                                    <div id="grid_with_formatter_pager"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> <!-- #jqgridWithFormmaters -->
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

<!-- PLUGIN: PRISM: This plugin helps display demo code. Don't add it everywhere -->
<script src="../dist/plugins/prism/prism.min.js"></script>

<script src="../dist/plugins/jqgrid/i18n/grid.locale-en.js"></script>
<script src="../dist/plugins/jqgrid/jquery.jqGrid.js"></script>
<script src="../dist/plugins/tether/tether.min.js"></script>
<script src="../dist/plugins/drop/drop.min.js"></script>

<script src="../dist/js/main_script.js"></script>

<script src="../dist/js/demo_helpers.js"></script>
<!-- SCRIPTS:End -->

<!-- DOCUMENT-READY:Start -->
<script type="text/javascript">
    $(document).ready(function() {
        console.log('Ready, Captain!');

        demoHelpers();  // Require demo_helpers.js

        showcasing(); //Requires demo_helpers.js, prism.min.js and prism.min.css

        function getListingDummyData() {

            var status1 = '{"label": "Live", "labelClass": "label-success", "tooltip": "Default tooltip"}';
            var status2 = '{"label": "Deleted", "labelClass": "label-danger", "tooltip": "Danger tooltip", "tooltipType": "danger"}';
            var status3 = '{"label": "Warning", "labelClass": "label-warning", "tooltip": "Warning tooltip", "tooltipType": "warning"}';
            var status4 = 'Inactive';

            var actions1 = [
                {
                    icon: 'fa-pencil',
                    attr: {
                        title: 'Edit'
                    },
                    group: 0
                },
                {
                    icon: 'fa-trash',
                    attr: {
                        title: 'Delete'
                    },
                    group: 0
                },
                {
                    icon: 'fa-ellipsis-h',
                    attr: {
                        title: 'More actions'
                    },
                    group: 0,
                    dropdown: [
                        {
                            icon: 'fa-square',
                            label: 'Action 1',
                            attr: {
                                title: 'Action 1'
                            }
                        },
                        {
                            icon: 'fa-square',
                            label: 'Action 2',
                            attr: {
                                title: 'Action 2'
                            }
                        },
                        {
                            icon: 'fa-square',
                            label: 'Action 3',
                            attr: {
                                title: 'Action 3'
                            }
                        },
                        {
                            icon: 'fa-square',
                            label: 'Action 4',
                            attr: {
                                title: 'Action 4'
                            }
                        },
                        {
                            icon: 'fa-square',
                            label: 'Action 5',
                            attr: {
                                title: 'Action 5'
                            }
                        }
                    ]
                },
            ];
            var actions2 = [
                {
                    icon: 'fa-pencil',
                    attr: {
                        title: 'Edit'
                    },
                    group: 0
                },
                {
                    icon: 'fa-trash',
                    attr: {
                        title: 'Delete'
                    },
                    group: 0
                },
                {
                    label: 'Special action',
                    attr: {
                        title: 'Special action'
                    }
                }
            ];
            var actions3 = [
                {
                    icon: 'fa-pencil',
                    attr: {
                        title: 'Edit'
                    },
                    group: 0
                },
                {
                    icon: 'fa-trash',
                    attr: {
                        title: 'Delete'
                    },
                    group: 1
                },
                {
                    label: 'Action',
                    attr: {
                        title: 'Action'
                    },
                    group: 1
                }
            ];
            var actions4 = '[' +
                '{' +
                    '"icon": "fa-pencil",' +
                    '"attr": {' +
                        '"title": "Edit"' +
                    '}' +
                '},' +
                '{' +
                    '"icon": "fa-trash",' +
                    '"attr": {' +
                        '"title": "Delete"' +
                    '}' +
                '}' +
            ']';

            var data = {
                'page': '1',
                'records': '6',
                'rows': [
                    { 'name': 'Lorem ipsum dolor sit amet', 'status': status1, 'platform': 'google.ro', 'products': '0', 'actions': actions1 },
                    { 'name': 'Name', 'status': status1, 'platform': 'google.ro', 'products': '23.232', 'actions': actions1 },
                    { 'name': 'Name', 'status': status2, 'platform': 'google.ro', 'products': '560.032', 'actions': actions2 },
                    { 'name': 'Name', 'status': status3, 'platform': 'google.hu', 'products': '88.932', 'actions': actions2 },
                    { 'name': 'Name', 'status': status4, 'platform': 'google.bg', 'products': '76.999', 'actions': actions3 },
                    { 'name': 'Name', 'status': status4, 'platform': 'google.bg', 'products': '76.999', 'actions': actions4 }
                ]
            };
            return data;
        }

        var listingParameters = {
            table: '#grid_table',
            pager: '#grid_pager',
            datatype: 'jsonstring',
            caption: 'Listing caption',
            datastr: getListingDummyData(),
            colNames: [
                'Name',
                'Status',
                'Platform',
                'Available products',
                'Actions'
            ],
            colModel: [
                {name: 'name', index: 'name', width: 2, sortable: false},
                {name: 'status', index: 'status', width: 1, sorttype: "text", formatter: PhotonDataFormatter.badgeAndTooltip },
                {name: 'platform', index: 'platform', width: 1, sorttype: "text"},
                {name: 'products', index: 'products', width: 2, sorttype: "text"},
                {name: 'actions', index: 'actions', width: 2, sortable: false, formatter: PhotonDataFormatter.actionsButtons }
            ],
            gridComplete: function() {
                addMoreActions('#grid_table');
                $('#grid_table .label-with-tooltip').tooltip();
            },
        };

        new PhotonJqGrid(listingParameters).init();

        function getListingWithFormatterDummyData() {
            var data = {
                'page': '1',
                'records': '6',
                'rows': [
                    {
                        'id': '0',
                        'notAvailable': 'String value',
                        'dateTime': '2016-07-29 11:53:59',
                        'date': '2016-07-29',
                        'time': '11:53:59',
                        'userEmail': 'john.doe@emag.ro',
                        'country': 'RO',
                        'countryCode': 'ro'
                    },
                    {
                        'id': 1,
                        'notAvailable': '',
                        'dateTime': ['2016-07-29', '11:53:59'],
                        'date': ['2016-07-29'],
                        'time': ['11:53:59'],
                        'userEmail': '{"email": "john.doe@emag.ro"}',
                        'country': '{"country": "RO", "countryCode": "ro"}'
                    },
                    {
                        'id': null,
                        'notAvailable': null,
                        'dateTime': '{"date": "2016-07-29", "time": "11:53:59"}',
                        'date': '{"date": "2016-07-29"}',
                        'time': '{"time": "11:53:59"}',
                        'userEmail': '{"user": "John Doe","email": "john.doe@emag.ro"}',
                        'country': '{"country": "GB", "countryCode": "gb"}'
                    },
                    {
                        /** 'id': 3, */
                        /** 'notAvailable': 'String value', */
                        /** 'dateTime': '2016-07-29 11:53:59', */
                        /** 'date': '2016-07-29', */
                        /** 'time': '11:53:59', */
                        /** 'userEmail': 'john.doe@emag.ro', */
                        /** 'country': 'RO' */
                    },
                    {
                        'id': 4,
                        'notAvailable': ['array val 1', 'array val 2'],
                        'dateTime': {date: '2016-07-29', time: '11:53:59'},
                        'date': {date: '2016-07-29'},
                        'time': {time: '11:53:59'},
                        'userEmail': {displayname: 'John Doe', email: 'john.doe@emag.ro'},
                        'country': {country: 'RO', countryCode: 'ro'}
                    },
                    {
                        'id': 5,
                        'notAvailable': 1024,
                        'dateTime': 1024,
                        'date': 1024,
                        'time': 1024,
                        'userEmail': 1024,
                        'country': 1024
                    }
                ]
            };

            return data;
        }

        var listingWithFormatterParameters = {
            table: '#grid_with_formatter_table',
            pager: '#grid_with_formatter_pager',
            datatype: 'jsonstring',
            caption: 'jqGrid with data formatters',
            datastr: getListingWithFormatterDummyData(),
            colNames: [
                'id',
                'notAvailable',
                'dateTime',
                'date',
                'time',
                'userEmail',
                'country'
            ],
            colModel: [
                {name: 'id', index: 'id', sortable: false, width: 1, formatter: PhotonDataFormatter.id },
                {name: 'notAvailable', index: 'notAvailable', sortable: false, width: 3, formatter: PhotonDataFormatter.notAvailable },
                {name: 'dateTime', index: 'dateTime', sortable: false, width: 3, formatter: PhotonDataFormatter.dateTime },
                {name: 'date', index: 'date', sortable: false, width: 2, formatter: PhotonDataFormatter.date },
                {name: 'time', index: 'time', sortable: false, width: 2, formatter: PhotonDataFormatter.time },
                {name: 'userEmail', index: 'userEmail', sortable: false, width: 3, formatter: PhotonDataFormatter.userEmail },
                {name: 'country', index: 'country', sortable: false, width: 1, formatter: PhotonDataFormatter.country }
            ]
        };

        new PhotonJqGrid(listingWithFormatterParameters).init();

    });
</script>
<!-- DOCUMENT-READY:End -->
</body>
</html>