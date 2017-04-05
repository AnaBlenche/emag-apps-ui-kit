<!DOCTYPE html>
<html lang="en" class="js">
<head>

        <title>jQGrid - eMAG Apps UI KIT</title>
        <?php include_once "modules/_mod_meta.php"?>

        <link rel="stylesheet" href="../dist/plugins/jqgrid/ui.jqgrid.min.css" data-dependency-name="jqgrid_css">
        <link rel="stylesheet" href="../dist/plugins/drop/drop.min.css" data-dependency-name="drop_css">

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
                    <div class="container-fluid">
                        <p>eMAG Apps UI KIT</p>
                        <p><b>jQGrid</b></p>
                    </div>
                </div>

                <section  class="pad-top-40">
                    <div class="show-panel code-example">
                        <div class="show-panel-body code-example">
                            <h2><strong>jqGrid</strong></h2>

                            <div class="row">
                                <div class="col-sm-12 mg-top-20">
                                    <div class="alert alert-info no-margin-bottom" role="alert">
                                        <p><i class="fa fa-info-circle"></i>Based on: <a href="http://www.trirand.com/blog/" target="_blank" class="alert-link">jQGrid Documentation</a></p>
                                    </div>
                                </div>
                            </div>

                            <a href="#" name="jqGrid-basic" class="title-anchor">&nbsp;</a>

                            <div class="code-container">
                                <div class="row code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>jqGrid basic</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#jqgrid_basic" aria-expanded="false" aria-controls="jqgrid_basic"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="jqgrid_basic">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#jqgrid_basic_html_source" aria-controls="jqgrid_basic_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#jqgrid_basic_js_source" aria-controls="jqgrid_basic_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#jqgrid_basic_css_source" aria-controls="jqgrid_basic_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="jqgrid_basic_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="jqgrid_basic_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="jqgrid_basic_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,jqgrid_css,jqgrid_source,jqgrid_locale_en_source,listing_dummy_data,jqgrid_basic_init,jquery_ui_source,stickykit_source,tether_source,drop_source,drop_css">
                                            <table id="grid_table" class="table table-bordered"></table>
                                            <div id="grid_pager"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="#" name="jqGrid-with-sticky-panels" class="title-anchor">&nbsp;</a>

                            <div class="code-container">
                                <div class="row code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>jqGrid with sticky panels</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#jq_with_sticky" aria-expanded="false" aria-controls="jq_with_sticky"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="jq_with_sticky">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#jq_with_sticky_html_source" aria-controls="jq_with_sticky_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#jq_with_sticky_js_source" aria-controls="jq-basic_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#jq_with_sticky_css_source" aria-controls="jq-basic_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="jq_with_sticky_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="jq_with_sticky_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="jq_with_sticky_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,jqgrid_css,jqgrid_source,jqgrid_locale_en_source,listing_dummy_data,jqgrid_with_sticky_init,jquery_ui_source,stickykit_source,tether_source,drop_source,drop_css">
                                            <table id="grid_table_sticky" class="table table-bordered"></table>
                                            <div id="grid_pager_sticky"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="#" name="jqGrid-with-column-chooser" class="title-anchor">&nbsp;</a>

                            <div class="code-container">
                                <div class="row code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>jqGrid with column chooser</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#jq_with_column_chooser" aria-expanded="false" aria-controls="jq_with_column_chooser"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="jq_with_column_chooser">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#jq_with_column_chooser_html_source" aria-controls="jq_with_column_chooser_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#jq_with_column_chooser_js_source" aria-controls="jq_with_column_chooser_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#jq_with_column_chooser_css_source" aria-controls="jq_with_column_chooser_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="jq_with_column_chooser_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="jq_with_column_chooser_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="jq_with_column_chooser_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,jqgrid_css,jqgrid_source,jqgrid_locale_en_source,listing_dummy_data,jqgrid_with_column_chooser_init,jquery_ui_source,stickykit_source,tether_source,drop_source,drop_css">
                                            <div class="pad-top-20 pad-btm-20 clearfix">
                                                <button type="button" id="grid_table_column_chooser_button" class="btn btn-primary pull-right">
                                                    Select columns <i class="fa fa-caret-down" aria-hidden="true"></i>
                                                </button>
                                            </div>

                                            <table id="grid_table_column_chooser" class="table table-bordered"></table>
                                            <div id="grid_pager_column_chooser"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="#" name="jqGrid-with-selectable-rows" class="title-anchor">&nbsp;</a>

                            <div class="code-container">
                                <div class="row code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>jgGrid with selectable rows</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#jq_with_selectable_rows" aria-expanded="false" aria-controls="jq_with_selectable_rows"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="jq_with_selectable_rows">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#jq_with_selectable_rows_html_source" aria-controls="jq_with_selectable_rows_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#jq_with_selectable_rows_js_source" aria-controls="jq_with_selectable_rows_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#jq_with_selectable_rows_css_source" aria-controls="jq_with_selectable_rows_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="jq_with_selectable_rows_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="jq_with_selectable_rows_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="jq_with_selectable_rows_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,jqgrid_css,jqgrid_source,jqgrid_locale_en_source,listing_dummy_data,jqGrid_with_selectable_rows_init,jquery_ui_source,stickykit_source,tether_source,drop_source,drop_css">
                                            <div class="pad-top-20 pad-btm-20">
                                                <button type="button" class="btn btn-primary btn-sm check_rows" >Get rows</button>
                                            </div>

                                            <table id="grid_table_with_selectable_rows" class="table table-bordered"></table>
                                            <div id="grid_pager_with_selectable_rows"></div>

                                            <div class="pad-top-20">
                                                <button type="button" class="btn btn-primary btn-sm check_rows" >Get rows</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="#" name="jqGrid-ierarchical-elements-tree" class="title-anchor">&nbsp;</a>

                            <div class="code-container">
                                <div class="row code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>jqGrid with ierarchical elements (Tree)</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#jq_with_ierarchical_elements" aria-expanded="false" aria-controls="jq_with_ierarchical_elements"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="jq_with_ierarchical_elements">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#jq_with_ierarchical_elements_html_source" aria-controls="jq_with_ierarchical_elements_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#jq_with_ierarchical_elements_js_source" aria-controls="jq_with_ierarchical_elements_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#jq_with_ierarchical_elements_css_source" aria-controls="jq_with_ierarchical_elements_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="jq_with_ierarchical_elements_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="jq_with_ierarchical_elements_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="jq_with_ierarchical_elements_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,jqgrid_css,jqgrid_source,jqgrid_locale_en_source,jqGrid_with_ierarchical_elements_init,jquery_ui_source,stickykit_source,tether_source,drop_source,drop_css">
                                            <table id="grid_table_with_hierarchy" class="table table-bordered"></table>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="#" name="jqGrid-with-subgrid" class="title-anchor">&nbsp;</a>

                            <div class="code-container">
                                <div class="row code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>jqGrid with subgrid</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#jq_with_subgrid" aria-expanded="false" aria-controls="jq_with_subgrid"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="jq_with_subgrid">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#jq_with_subgrid_html_source" aria-controls="jq_with_subgrid_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#jq_with_subgrid_js_source" aria-controls="jq_with_subgrid_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#jq_with_subgrid_css_source" aria-controls="jq_with_subgrid_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="jq_with_subgrid_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="jq_with_subgrid_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="jq_with_subgrid_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,jqgrid_css,jqgrid_source,jqgrid_locale_en_source,listing_dummy_data,jqGrid_with_subgrid_init,jquery_ui_source,stickykit_source,tether_source,drop_source,drop_css">
                                            <table id="grid_table_with_subgrid" class="table table-bordered"></table>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="#" name="jqGrid-with-inline-editing" class="title-anchor">&nbsp;</a>

                            <div class="code-container">
                                <div class="row code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>jqGrid with inline editing</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#jq_with_inline_editing" aria-expanded="false" aria-controls="jq_with_inline_editing"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="jq_with_inline_editing">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#jq_with_inline_editing_html_source" aria-controls="jq_with_inline_editing_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#jq_with_inline_editing_js_source" aria-controls="jq_with_inline_editing_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#jq_with_inline_editing_css_source" aria-controls="jq_with_inline_editing_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="jq_with_inline_editing_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="jq_with_inline_editing_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="jq_with_inline_editing_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,jqgrid_css,jqgrid_source,jqgrid_locale_en_source,listing_dummy_data,jqGrid_with_inline_editing_init,jquery_ui_source,stickykit_source,tether_source,drop_source,drop_css">
                                            <table id="grid_table_with_inline_edit" class="table table-bordered"></table>
                                            <div id="grid_pager_with_inline_edit"></div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="#" name="jqGrid-with-actions" class="title-anchor">&nbsp;</a>

                            <div class="code-container">
                                <div class="row code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>jqGrid with actions</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#jq_with_actions" aria-expanded="false" aria-controls="jq_with_actions"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="jq_with_actions">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#jq_with_actions_html_source" aria-controls="jq_with_actions_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#jq_with_actions_js_source" aria-controls="jq_with_actions_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#jq_with_actions_css_source" aria-controls="jq_with_actions_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="jq_with_actions_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="jq_with_actions_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="jq_with_actions_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,jqgrid_css,jqgrid_source,jqgrid_locale_en_source,listing_dummy_data,jqGrid_with_actions_init,jquery_ui_source,stickykit_source,tether_source,drop_source,drop_css">
                                            <table id="grid_table_with_actions" class="table table-bordered"></table>
                                            <div id="grid_pager_with_actions"></div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="#" name="jqGrid-with-data-formatters" class="title-anchor">&nbsp;</a>

                            <div class="code-container">
                                <div class="row code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>jqGrid with data formatters</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#jq_with_data_formatters" aria-expanded="false" aria-controls="jq_with_data_formatters"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="jq_with_data_formatters">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#jq_with_data_formatters_html_source" aria-controls="jq_with_data_formatters_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#jq_with_data_formatters_js_source" aria-controls="jq_with_data_formatters_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#jq_with_data_formatters_css_source" aria-controls="jq_with_data_formatters_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="jq_with_data_formatters_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="jq_with_data_formatters_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="jq_with_data_formatters_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,jqgrid_css,jqgrid_source,jqgrid_locale_en_source,jqGrid_with_data_formatters_init,jquery_ui_source,stickykit_source,tether_source,drop_source,drop_css">
                                            <div class="pad-top-20">
                                                <table id="grid_with_formatter_table" class="table table-bordered"></table>
                                                <div id="grid_with_formatter_pager"></div>
                                            </div>
                                            <div class="pad-top-20">
                                                <table id="grid_with_formatter_2_table" class="table table-bordered"></table>
                                                <div id="grid_with_formatter_2_pager"></div>
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

<!-- POPUPS:Start -->
<div data-dependency-name="pop_space">
    <div id="pop_space"></div>
</div>
<!-- POPUPS:End -->

<!-- SCRIPTS:Start -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" data-dependency-name="jquery"></script>
<script>window.jQuery || document.write("<script src=\"../dist/js/lib/jquery-1.11.3.min.js\">"+"<"+"/script>")</script>

<!-- PLUGIN: PRISM: This plugin helps display demo code. Don't add it everywhere -->
<script src="../dist/plugins/prism/prism.min.js"></script>

<script src="../dist/js/lib/jquery-ui.1.11.4.min.js" data-dependency-name="jquery_ui_source"></script>
<script src="../dist/plugins/jqgrid/i18n/grid.locale-en.js" data-dependency-name="jqgrid_locale_en_source"></script>
<script src="../dist/plugins/jqgrid/jquery.jqGrid.min.js" data-dependency-name="jqgrid_source"></script>
<script src="../dist/plugins/stickyKit/stickyKit.min.js" data-dependency-name="stickykit_source"></script>
<script src="../dist/plugins/tether/tether.min.js" data-dependency-name="tether_source"></script>
<script src="../dist/plugins/drop/drop.min.js" data-dependency-name="drop_source"></script>
<script src="../dist/js/main_script.min.js" data-dependency-name="main_script"></script>
<script src="../dist/js/demo_helpers.js"></script>
<!-- SCRIPTS:End -->

<!-- DOCUMENT-READY:Start -->
<script type="text/javascript">
    $(document).ready(function () {
        demoHelpers();  // Require demo_helpers.js
        showPageCode();
    });
</script>

<script type="text/javascript" data-dependency-name="listing_dummy_data">
        function getListingDummyData() {

            var dataSet = [
                {
                    "id": "1",
                    "firstname": "Tony",
                    "lastname": "Stark",
                    "username": "ironman",
                    "jobtype": "Philantropist",
                    "codename": "Iron Man",
                    "spirit_animal": "Tiger"
                },
                {
                    "id": "2",
                    "firstname": "Bruce",
                    "lastname": "Banner",
                    "username": "hulk_smash",
                    "jobtype": "Doctor",
                    "codename": "The Hulk",
                    "spirit_animal": "Gorilla"
                },
                {
                    "id": "3",
                    "firstname": "Thor",
                    "lastname": "Odinson",
                    "username": "thehammer",
                    "jobtype": "God",
                    "codename": "Thor",
                    "spirit_animal": "Lion"
                },
                {
                    "id": "4",
                    "firstname": "Clinton",
                    "lastname": "Barton",
                    "username": "hawkyey",
                    "jobtype": "Archer",
                    "codename": "Hawkeye",
                    "spirit_animal": "Hawk"
                },
                {
                    "id": "5",
                    "firstname": "Steven",
                    "lastname": "Rogers",
                    "username": "rogerthat",
                    "jobtype": "Captain",
                    "codename": "Captain America",
                    "spirit_animal": "Eagle"
                },
                {
                    "id": "6",
                    "firstname": "Natalia",
                    "lastname": "Romanova",
                    "username": "notawidow",
                    "jobtype": "Event planner",
                    "codename": "Black Widow",
                    "spirit_animal": "Spider"
                },
                {
                    "id": "7",
                    "firstname": "Henry",
                    "lastname": "Pym",
                    "username": "goliath",
                    "jobtype": "Unemployed",
                    "codename": "Ant-Man",
                    "spirit_animal": "Dog"
                },
                {
                    "id": "8",
                    "firstname": "Luke",
                    "lastname": "Charles",
                    "username": "tchiao",
                    "jobtype": "Self-employed",
                    "codename": "Black Panther",
                    "spirit_animal": "Jaguar"
                },
                {
                    "id": "9",
                    "firstname": "Victor",
                    "lastname": "Shade",
                    "username": "imallseeing",
                    "jobtype": "Self-employed",
                    "codename": "The Vision",
                    "spirit_animal": "Dolphin"
                },
                {
                    "id": "10",
                    "firstname": "Monica",
                    "lastname": "Rambeau",
                    "username": "photon",
                    "jobtype": "Self-employed",
                    "codename": "Captain Marvel",
                    "spirit_animal": "Mustang"

                }
            ];

            return dataSet;
        }
</script>

<script type="text/javascript" data-dependency-name="jqgrid_basic_init">


    $(document).ready(function () {

        var listingParameters = {
            table: '#grid_table',
            pager: '#grid_pager',
            datatype: 'jsonstring',
            caption: 'Listing caption',
            datastr: getListingDummyData(),
            styleUI : "Bootstrap",
            colModel: [
                { label: 'First Name', name: 'firstname', key: true, width: "100" },
                { label: 'Last Name', name: 'lastname' },
                { label: 'Username', name: 'username' },
                { label: 'Hobby', name: 'jobtype' },
                { label: 'Nickname', name: 'codename' },
                { label: 'Spiritual Animal', name: 'spirit_animal' }
            ]
        };

        new PhotonJqGrid(listingParameters).init();

        /*

        $("#grid_table").jqGrid({
            datastr: getListingDummyData(),
            datatype: "jsonstring",
            styleUI : "Bootstrap",
            colModel: [
                { label: 'First Name', name: 'firstname', key: true, width: "100" },
                { label: 'Last Name', name: 'lastname' },
                { label: 'Username', name: 'username' },
                { label: 'Hobby', name: 'jobtype' },
                { label: 'Nickname', name: 'codename' },
                { label: 'Spiritual Animal', name: 'spirit_animal' }
            ],
            viewrecords: true,
            shrinkToFit: true,
            autoResizing: { compact: true },
            autowidth: true,
            width: 'auto',
            height: '100%',
            rowNum: 30,
            loadonce: true, // this is just for the demo
            pager: "#grid_pager"
        });
         */

    });





</script>

<!-- DOCUMENT-READY:End -->
</body>
</html>