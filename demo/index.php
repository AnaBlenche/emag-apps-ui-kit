<!DOCTYPE html>
<html lang="en" class="js">
<head>

    <title>Start - eMAG Apps UI KIT</title>
    <?php include_once "modules/_mod_meta.php"?>
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
                                <p><b>Start</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                <section id="overview" class="pad-top-40">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="show-panel">
                                <div class="show-panel-body">
                                    <h2><strong>Overview</strong></h2>
                                    <p><strong>A short description about what's it like to work with eMAG Apps UI KIT:</strong></p>
                                    <div class="pad-sep-20">
                                        <ol>
                                            <li>
                                                <h4 class="text-primary">Based on Bootstrap 3.3.5.</h4>
                                                <p>
                                                    Our open source UI KIT is based on the Bootstrap architecture. If you're
                                                    not familiarized with it, check-out their stuff from getbootstrap.com Aside
                                                    from the elements provided by Bootstrap, it comes with its own set of
                                                    unique components, styling and useful plugins that you can use in your
                                                    project.
                                                </p>
                                                <br>
                                                <p><strong>Features:</strong></p>
                                                <ol>
                                                    <li>
                                                        <p>Keeping it light with an average page weight of 500Kb.</p>
                                                    </li>
                                                    <li>
                                                        <p>W3C Compliant</p>
                                                    </li>
                                                    <li>
                                                        <p>WCAG 2.0 Compliant</p>
                                                    </li>
                                                    <li>
                                                        <p>Average page-load time of 1s</p>
                                                    </li>
                                                </ol>
                                                <br>
                                            </li>
                                            <li>
                                                <h4 class="text-primary">Working with Grunt.js</h4>
                                                <p><strong>Installing Grunt:</strong></p>
                                                <p>To install Grunt, you must first download and install <a href="https://nodejs.org/en/" target="_blank"><u>node.js</u></a> (which includes npm). Believe it or not, npm stands for <b>node packaged modules</b> and is a way to manage development dependencies through node.js.</p>
                                                <p>Once you've installed node.js, open up the command line in the root directory.</p>
                                                <p>Install grunt-cli globally by running <code>npm install -g grunt-cli</code>.</p>
                                                <p>Afterwards run <code>npm install</code> for npm to look  at the <b>package.json</b> file and automatically install the necessary local dependencies listed there.</p>
                                                <p>When completed, you'll be able to run the various Grunt commands provided from the command line.</p>
                                                <br>
                                                <p><strong>Available Grunt commands:</strong></p>
<pre>
<code class="language-bash" data-lang="bash">
    grunt styles            - CSS distribution task
    grunt scripts           - JS distribution task
    grunt plugin_styles     - Generate plugin styles
    grunt plugin_scripts    - Generate plugin scripts
    grunt default           - Generate main styles and scripts
</code>
</pre>
                                                <br>
                                            </li>
                                            <li>
                                                <h4 class="text-primary">Working with eMAG Apps UI KIT's folder structure:</h4>
                                                <br>
                                                <p>Once downloaded, unzip the compressed folder to find the three main folders:</p>
<pre>
<code class="language-bash" data-lang="bash">
    eMAG Apps UI KIT/
    |
    ├── data/
    │   ├── scripts/
    |   |   ├── base/
    |   |   |   └── custom/
    |   |   └── lib/
    │   ├── styles/
    |   |   ├── base/
    |   |   |   └── custom/
    |   |   └── lib/
    |   └── plugins/
    |
    ├── dist/
    │   ├── css/
    |   |   ├── flags/
    |   |   ├── fonts/
    |   |   ├── icons/
    |   |   ├── img/
    |   |   └── lib/
    │   ├── js/
    |   |   └── lib/
    |   └── plugins/
    |
    └── examples/
    └── modules/
</code>
</pre>
                                                <br>
                                            </li>
                                            <li>
                                                <h4 class="text-primary">Precompiled files (dist)</h4>
                                                <br>
                                                <ul>
                                                    <li>css - Main style CSS files.
                                                        <ul>
                                                            <li>flags - Countries flags as SVG file on 1:1 and 4:3 ratio.</li>
                                                            <li>fonts - Fonts files used in eMAG Apps UI KIT.</li>
                                                            <li>icons - Icons used in eMAG Apps UI KIT (created by eMag and from other libraries).</li>
                                                            <li>img - Images used in demo pages.</li>
                                                            <li>lib - Styles required by libraries used in eMAG Apps UI KIT.</li>
                                                        </ul>
                                                    </li>
                                                    <li>js - Main JS script files.
                                                        <ul>
                                                            <li>lib - Libraries' JS files.</li>
                                                        </ul>
                                                    </li>
                                                    <li>plugins - Plugins used in eMAG Apps UI KIT (CSS and JS files).</li>
                                                </ul>
                                                <br>
                                            </li>
                                            <li>
                                                <h4 class="text-primary">eMAG Apps UI KIT source code (data)</h4>
                                                <br>
                                                <ul>
                                                    <li>scripts - JS files.
                                                        <ul>
                                                            <li>base - Main JS files.
                                                                <ul>
                                                                    <li>custom - Custom wrappers over certain plugins.</li>
                                                                </ul>
                                                            </li>
                                                            <li>lib - Libraries' JS files.</li>
                                                        </ul>
                                                    </li>
                                                    <li>styles - LESS files.
                                                        <ul>
                                                            <li>base - Main style LESS files
                                                                <ul>
                                                                    <li>custom - Custom wrappers' LESS files.</li>
                                                                </ul>
                                                            </li>
                                                            <li>lib - Libraries' LESS files.</li>
                                                        </ul>
                                                    </li>
                                                    <li>plugins - Plugins used in eMAG Apps UI KIT (LESS and JS files).</li>
                                                </ul>
                                                <br>
                                            </li>
                                            <li>
                                                <h4 class="text-primary">License</h4>
                                                <br>
                                                <p>eMAG Apps UI KIT is released under the <a href="https://github.com/eMAGTechLabs/PhotonPowerUIKit/blob/master/LICENSE" target="_blank">MIT license</a>, this means:</p>

                                                <p><b>You can</b></p>
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <i class="fa fa-money" aria-hidden="true"></i> Comercial Use
                                                        <ul>
                                                            <li>
                                                                You may use the work commercially.<br><br>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-pencil" aria-hidden="true"></i> Modify
                                                        <ul>
                                                            <li>
                                                                You may make changes to the work.<br><br>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-share-alt" aria-hidden="true"></i> Distribute
                                                        <ul>
                                                            <li>
                                                                You may distribute the compiled code and/or source.<br><br>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-file-text-o" aria-hidden="true"></i> Sublicense
                                                        <ul>
                                                            <li>
                                                                You may incorporate the work into something that has a more restrictive license.<br><br>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-lock" aria-hidden="true"></i> Private Use
                                                        <ul>
                                                            <li>
                                                                You may use the work for private use.<br><br>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <p><b>You cannot</b></p>
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Hold Liable
                                                        <ul>
                                                            <li>
                                                                The work is provided "as is". You may not hold the author liable.<br><br>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <p><b>You must</b></p>
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <i class="fa fa-copyright" aria-hidden="true"></i> Include Copyright
                                                        <ul>
                                                            <li>
                                                                You must include the copyright notice in all copies or substantial uses of the work.<br><br>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-file-text-o" aria-hidden="true"></i> Include License
                                                        <ul>
                                                            <li>
                                                                You must include the license notice in all copies or substantial uses of the work.<br><br>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>

                                                <p>The full eMAG Apps UI KIT license can be found in <a href="https://github.com/eMAGTechLabs/PhotonPowerUIKit/blob/master/LICENSE" target="_blank">project repository</a>.</p>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="gettingStarted" class="pad-top-40">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="show-panel">
                                <div class="show-panel-body">
                                    <h2><strong>Getting started</strong></h2>
                                    <p><strong>There are a couple of ways to install eMAG Apps UI KIT:</strong></p>
                                    <div class="pad-sep-20">
                                        <ol>
                                            <li>
                                                <p>The easiest way to install is to add the following css line in the head of your webpage:</p>
                                                <pre>&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;examplepath/to/main_style.css&quot;&gt;</pre>
                                                <p>And the following javascript files before the end <code>&lt;/body&gt;</code> tag:</p>
                                                        <pre>&lt;script src=&quot;https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js&quot;&gt;&lt;/script&gt;
&lt;script&gt;window.jQuery || document.write(&quot;&lt;script src=\&quot;../dist/js/lib/jquery-1.11.3.min.js\&quot;&gt;&quot;+&quot;&lt;&quot;+&quot;/script&gt;&quot;)&lt;/script&gt;
&lt;script src=&quot;../dist/js/main_script.min.js&quot;&gt;&lt;/script&gt;</pre>
                                                <div class="alert alert-info" role="alert">
                                                    <i class="fa fa-info-circle"></i> You've guessed it! Much like Boostrap, eMAG Apps UI KIT requires jQuery to run.
                                                </div>
                                                <br>
                                            </li>
                                            <li>
                                                <p>You can <a href="https://github.com/eMAGTechLabs/PhotonPowerUIKit" target="_blank">download the latest release</a> from GitHub.</p>
                                                <br>
                                            </li>
                                            <li>
                                                <p>You can also clone the <a href="https://github.com/eMAGTechLabs/PhotonPowerUIKit" target="_blank">Git repository</a> by running the following command:</p>
                                                <pre>[sudo] git clone https://github.com/eMAGTechLabs/emag-apps-ui-kit.git</pre>
                                            </li>
                                        </ol>
                                    </div>
                                    <div class="alert alert-info" role="alert">
                                        <i class="fa fa-info-circle"></i> Be W3C compliant and everything will be alright!
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
<script src="../dist/js/main_script.js"></script>
<script src="../dist/js/demo_helpers.js"></script>
<!-- SCRIPTS:End -->

<!-- DOCUMENT-READY:Start -->
<script type="text/javascript">
    $(document).ready(function () {
        console.log('Ready, Captain!');

        demoHelpers();  // Require demo_helpers.js
    });
</script>
<!-- DOCUMENT-READY:End -->

</body>
</html>