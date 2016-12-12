<!DOCTYPE html>
<html lang="en" class="js">
<head>
    <title>JS Components - eMAG Apps UI KIT</title>
    <?php include_once "modules/_mod_meta.php"?>

    <link rel="stylesheet" href="../dist/plugins/fancytree/fancytree.css">

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
                                <p><b>Fancytree</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                <section id="fancytreeStandardId" class="pad-top-40">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="show-panel">
                                <div class="show-panel-body">
                                    <h4 class="text-primary"><strong>Fancytree.js</strong></h4>
                                    <p><strong>Used for displaying categories, subcategories and products</strong></p>
                                    <p>You can familiarize yourself with more options and settings by checking out <a href="https://github.com/mar10/fancytree" target="_blank">https://github.com/mar10/fancytree</a></p>
                                </div>
                                <hr/>
                                <div class="show-panel-body">
                                    <p><strong>Fancytree inpage example</strong></p>
                                    <div class="pad-sep-20">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div id="tree">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="show-panel">
                                <div class="show-panel-body">
                                    <div class="form-group">
                                        <label for="category_treeDefault">Category tree</label>
                                        <div class="hide-with-opacity">
                                            <select id="category_tree_default" multiple="multiple">
                                                <option value=""></option>
                                                <option value="31">Software</option>
                                                <option value="175">Antivirus</option>
                                                <option value="221">Sisteme de operare</option>
                                                <option value="225">Aplicatii desktop OEM</option>
                                                <option value="226" selected="selected">Medii de dezvoltare OEM</option>
                                                <option value="227" selected="selected">Sisteme de operare server OEM</option>
                                                <option value="228">Aplicatii server OEM</option>
                                                <option value="340">Clienti server OEM</option>
                                                <option value="222">Office & Aplicatii Desktop</option>
                                                <option value="229">Sisteme de operare Retail</option>
                                                <option value="230">Aplicatii desktop Retail</option>
                                                <option value="231">Medii de dezvoltare Retail</option>
                                                <option value="232">Sisteme de operare server Retail</option>
                                                <option value="233">Aplicatii server Retail</option>
                                                <option value="274">Documentatii Retail</option>
                                                <option value="344">Clienti server retail</option>
                                                <option value="361">Editare foto-video</option>
                                                <option value="1512">AC</option>
                                                <option value="1513">Photo DSLR</option>
                                                <option value="378">Aparate foto D-SLR</option>
                                                <option value="407">Accesorii aparate foto DSLR si Mirrorless</option>
                                                <option value="443">Kit curatare DSLR</option>
                                                <option value="1117">Aparate foto Mirrorless</option>
                                                <option value="1514">Photo Compact</option>
                                                <option value="54">Aparate foto compacte</option>
                                                <option value="1517">AV & HiFi</option>
                                                <option value="80">Videoproiectoare</option>
                                                <option value="117">DVD & Blu-Ray Playere</option>
                                                <option value="408">Audio HI-FI</option>
                                                <option value="204">Playere & Receivere</option>
                                                <option value="539">Amplificatoare</option>
                                                <option value="540">Playere</option>
                                                <option value="542">Boxe</option>
                                                <option value="635">Sisteme audio wireless</option>
                                                <option value="1061">Pick-Up</option>
                                                <option value="1150">Accesorii Audio Hi-Fi</option>
                                                <option value="467">Mediaplayere</option>
                                                <option value="1133">Home Audio</option>
                                                <option value="113">Sisteme Home Cinema</option>
                                                <option value="124">Sisteme audio</option>
                                                <option value="162">Radiocasetofoane</option>
                                                <option value="1140">Docking</option>
                                                <option value="1534">Other Products</option>
                                            </select>
                                        </div>
                                        <div class="input-group input-group-no-separation">
                                            <div class="form-control" id="id_category_tree_default"></div>
                                            <span class="input-group-addon">
                                                <i class="fa fa-sitemap"></i>
                                            </span>
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

        <!-- POPUPS:Start -->
        <div id="popSpace"></div>
        <!-- POPUPS:End -->

    </div>
</div>
    
        <!-- SCRIPTS:Start -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write("<script src=\"../dist/js/lib/jquery-1.11.3.min.js\">"+"<"+"/script>")</script>

        <script src="../dist/js/lib/jquery-ui.1.11.4.min.js"></script>
        <script src="../dist/plugins/fancytree/fancytree.js"></script>

        <script src="../dist/js/main_script.js"></script>
        <script src="../dist/js/demo_helpers.js"></script>
        <!-- SCRIPTS:End -->

        <!-- DOCUMENT-READY:Start -->
        <script type="text/javascript">

        window.fancytreeContent = [{
            "key": 31,
            "title": "Software",
            "children": [{"key": 175, "title": "Antivirus", "children": [], "folder": true}, {
                "key": 221,
                "title": "Sisteme de operare",
                "children": [{"key": 225, "title": "Aplicatii desktop OEM", "children": []}, {
                    "key": 226,
                    "title": "Medii de dezvoltare OEM",
                    "children": []
                }, {"key": 227, "title": "Sisteme de operare server OEM", "children": []}, {
                    "key": 228,
                    "title": "Aplicatii server OEM",
                    "children": []
                }, {"key": 340, "title": "Clienti server OEM", "children": []}],
                "folder": true
            }, {
                "key": 222,
                "title": "Office & Aplicatii Desktop",
                "children": [{"key": 229, "title": "Sisteme de operare Retail", "children": []}, {
                    "key": 230,
                    "title": "Aplicatii desktop Retail",
                    "children": []
                }, {"key": 231, "title": "Medii de dezvoltare Retail", "children": []}, {
                    "key": 232,
                    "title": "Sisteme de operare server Retail",
                    "children": []
                }, {"key": 233, "title": "Aplicatii server Retail", "children": []}, {
                    "key": 274,
                    "title": "Documentatii Retail",
                    "children": []
                }, {"key": 344, "title": "Clienti server retail", "children": []}],
                "folder": true
            }, {"key": 361, "title": "Editare foto-video", "children": []}],
            "folder": true
        }, {"key": 1512, "title": "AC", "children": []}, {
            "key": 1513,
            "title": "Photo DSLR",
            "children": [{"key": 378, "title": "Aparate foto D-SLR", "children": []}, {
                "key": 407,
                "title": "Accesorii aparate foto DSLR si Mirrorless",
                "children": [{"key": 443, "title": "Kit curatare DSLR", "children": []}],
                "folder": true
            }, {"key": 1117, "title": "Aparate foto Mirrorless", "children": []}],
            "folder": true
        }, {
            "key": 1514,
            "title": "Photo Compact",
            "children": [{"key": 54, "title": "Aparate foto compacte", "children": []}],
            "folder": true
        }, {
            "key": 1517,
            "title": "AV & HiFi",
            "children": [{"key": 80, "title": "Videoproiectoare", "children": []}, {
                "key": 117,
                "title": "DVD & Blu-Ray Playere",
                "children": []
            }, {
                "key": 408,
                "title": "Audio HI-FI",
                "children": [{"key": 204, "title": "Playere & Receivere", "children": []}, {
                    "key": 539,
                    "title": "Amplificatoare",
                    "children": []
                }, {"key": 540, "title": "Playere", "children": []}, {
                    "key": 542,
                    "title": "Boxe",
                    "children": []
                }, {"key": 635, "title": "Sisteme audio wireless", "children": []}, {
                    "key": 1061,
                    "title": "Pick-Up",
                    "children": []
                }, {"key": 1150, "title": "Accesorii Audio Hi-Fi", "children": []}],
                "folder": true
            }, {"key": 467, "title": "Mediaplayere", "children": []}, {
                "key": 1133,
                "title": "Home Audio",
                "children": [{"key": 113, "title": "Sisteme Home Cinema", "children": []}, {
                    "key": 124,
                    "title": "Sisteme audio",
                    "children": []
                }, {"key": 162, "title": "Radiocasetofoane", "children": []}, {
                    "key": 1140,
                    "title": "Docking",
                    "children": []
                }],
                "folder": true
            }],
            "folder": true
        }, {"key": 1534, "title": "Other Products", "children": [], "folder": true}];

        window.fancytreeContentSelectOnlyLeafs = [{
            "key": 31,
            "title": "Software",
            "hideCheckbox": true,
            "children": [{"key": 175, "title": "Antivirus", "children": [], "folder": true}, {
                "key": 221,
                "title": "Sisteme de operare",
                "children": [{"key": 225, "title": "Aplicatii desktop OEM", "children": []}, {
                    "key": 226,
                    "title": "Medii de dezvoltare OEM",
                    "children": []
                }, {"key": 227, "title": "Sisteme de operare server OEM", "children": []}, {
                    "key": 228,
                    "title": "Aplicatii server OEM",
                    "children": []
                }, {"key": 340, "title": "Clienti server OEM", "children": []}],
                "folder": true
            }, {
                "key": 222,
                "title": "Office & Aplicatii Desktop",
                "children": [{"key": 229, "title": "Sisteme de operare Retail", "children": []}, {
                    "key": 230,
                    "title": "Aplicatii desktop Retail",
                    "children": []
                }, {"key": 231, "title": "Medii de dezvoltare Retail", "children": []}, {
                    "key": 232,
                    "title": "Sisteme de operare server Retail",
                    "children": []
                }, {"key": 233, "title": "Aplicatii server Retail", "children": []}, {
                    "key": 274,
                    "title": "Documentatii Retail",
                    "children": []
                }, {"key": 344, "title": "Clienti server retail", "children": []}],
                "folder": true
            }, {"key": 361, "title": "Editare foto-video", "children": []}],
            "folder": true
        }, {"key": 1512, "title": "AC", "children": []}, {
            "key": 1513,
            "title": "Photo DSLR",
            "hideCheckbox": true,
            "children": [{"key": 378, "title": "Aparate foto D-SLR", "children": []}, {
                "key": 407,
                "title": "Accesorii aparate foto DSLR si Mirrorless",
                "children": [{"key": 443, "title": "Kit curatare DSLR", "children": []}],
                "folder": true
            }, {"key": 1117, "title": "Aparate foto Mirrorless", "children": []}],
            "folder": true
        }, {
            "key": 1514,
            "title": "Photo Compact",
            "hideCheckbox": true,
            "children": [{"key": 54, "title": "Aparate foto compacte", "children": []}],
            "folder": true
        }, {
            "key": 1517,
            "title": "AV & HiFi",
            "hideCheckbox": true,
            "children": [{"key": 80, "title": "Videoproiectoare", "children": []}, {
                "key": 117,
                "title": "DVD & Blu-Ray Playere",
                "children": []
            }, {
                "key": 408,
                "title": "Audio HI-FI",
                "children": [{"key": 204, "title": "Playere & Receivere", "children": []}, {
                    "key": 539,
                    "title": "Amplificatoare",
                    "children": []
                }, {"key": 540, "title": "Playere", "children": []}, {
                    "key": 542,
                    "title": "Boxe",
                    "children": []
                }, {"key": 635, "title": "Sisteme audio wireless", "children": []}, {
                    "key": 1061,
                    "title": "Pick-Up",
                    "children": []
                }, {"key": 1150, "title": "Accesorii Audio Hi-Fi", "children": []}],
                "folder": true
            }, {"key": 467, "title": "Mediaplayere", "children": []}, {
                "key": 1133,
                "title": "Home Audio",
                "children": [{"key": 113, "title": "Sisteme Home Cinema", "children": []}, {
                    "key": 124,
                    "title": "Sisteme audio",
                    "children": []
                }, {"key": 162, "title": "Radiocasetofoane", "children": []}, {
                    "key": 1140,
                    "title": "Docking",
                    "children": []
                }],
                "folder": true
            }],
            "folder": true
        }, {"key": 1534, "title": "Other Products", "children": [], "folder": true}];

        var modalContent =
            "<div class='row'>" +
                "<div class='col-lg-12'>" +
                    "<div>" +
                        "<label for='exampleInputEmail1'>Search an item</label>" +
                        "<input type='text' class='form-control'>" +
                    "</div>" +
                "</div>" +
            "</div>" +
            "<div class='row'>" +
                "<div class='col-lg-4'>" +
                    "<div class='checkbox'>" +
                        "<label>" +
                            "<input type='checkbox'> Hide unmatched " +
                        "</label>" +
                    "</div>" +
                "</div>" +
                "<div class='col-lg-5'>" +
                    "<div class='checkbox'>" +
                        "<label>" +
                            "<input type='checkbox'> Hierarchical multi-selection " +
                        "</label>" +
                    "</div>" +
                "</div>" +
            "</div>" +
            "<div class='row'>" +
                "<div class='col-lg-12'>" +
                    "<div id='modalTree'></div>" +
                "</div>" +
            "</div>";

            $(document).ready(function () {
                console.log('Ready, Captain!');
                demoHelpers();  // Require demo_helpers.js

                //Fancytree inits
                $("#tree").fancytree({
                    icon: false,
                    checkbox: true,
                    source: fancytreeContent
                });

                TreeTypeObject = $("#id_category_tree_default").TreeType({
                    treeData: fancytreeContent,
                    selectId: "category_tree_default",
                    modalTitle: 'Select',
                    modalResetLabel: 'Reset',
                    modalCancelLabel: 'Cancel',
                    modalOkLabel: 'Select',
                    textUnmatched: 'Hide unmatched',
                    textSelectHierarchy: 'Hierarchical multi-selection',
                    noResults: 'No results found',
                    textSelected: 'selected',
                    searchPlaceholder: 'Search'
                });
            });
        </script>
        <!-- DOCUMENT-READY:End -->

</body>
</html>