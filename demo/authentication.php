<!DOCTYPE html>
<html lang="en" class="js">
    <head>
        <title>Log in - eMAG Apps UI KIT</title>
        <?php include_once "modules/_mod_meta.php"?>
        <?php include_once "modules/_mod_top_include.php"?>
    </head>

    <body>

        <?php include_once "modules/_mod_browser_upgrade.php"?>

        <!-- HEADER:Start -->
        <?php include_once "modules/_mod_header_auth.php"?>
        <!-- HEADER:End -->
        
        <!-- PAGE:Start -->
            <div class="main-container" id="main-container">
                <div class="main-container-inner">
                    <!-- CONTENT:Start -->
                    <div class="main-content">
                        <div class="page-content">
                            <div id="login_box" class="auth-box">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <h2 class="auth-title">Log in</h2>
                                        <form id="user_auth">
                                            <div class="form-group">
                                                <label for="user_username" class="control-label">Username</label>
                                                <input type="text" id="user_username" name="user_username" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="user_password" class="control-label">Password</label>
                                                <input type="password" id="user_password" name="user_password" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <div class="checkbox">
                                                    <label>
                                                        <input id="user_reminder" name="user_reminder" type="checkbox"> Keep me signed in
                                                    </label>
                                                </div>
                                                <div class="form-control-static">
                                                    <small><a href="#recover_box" class="user-actions">Have you forgotten your password?</a></small>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="pull-right panel-controls">
                                                        <a href="index.php" id="special_submit" class="btn btn-primary"><span>Log in</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="form-control-static text-center">
                                    <a href="#register_box" class="user-actions">Sign up for a new account?</a>
                                </div>
                            </div>
                            <div id="recover_box" class="auth-box hidden">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <h2 class="auth-title">Reset your password</h2>
                                        <form id="user_recover_password">
                                            <div class="form-group">
                                                <label for="user_email" class="control-label">Email address</label>
                                                <input type="email" id="user_email" name="user_email" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <div class="form-control-static">
                                                    <small><a href="#login_box" class="user-actions">Take me back to Sign in.</a></small>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="pull-right panel-controls">
                                                        <a href="index.php" id="special_submit" class="btn btn-primary"><span>Confirm</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="register_box" class="auth-box hidden">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <h2 class="auth-title">Sign up</h2>
                                        <form id="user_register">
                                            <div class="form-group">
                                                <label for="user_reg_email" class="control-label">Email address</label>
                                                <input type="email" id="user_reg_email" name="user_reg_email" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="user_reg_username" class="control-label">Username</label>
                                                <input type="text" id="user_reg_username" name="user_reg_username" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="user_reg_password" class="control-label">Password</label>
                                                <input type="password" id="user_reg_password" name="user_reg_password" class="form-control">
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <label for="user_reg_dob" class="control-label">Date of birth</label>
                                                        <input type="text" id="user_reg_dob" name="user_reg_dob" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <label for="user_reg_gender" class="control-label">Gender</label>
                                                        <select id="user_reg_gender" name="user_reg_gender" class="form-control">
                                                            <option value="none">Select</option>
                                                            <option value="male">Male</option>
                                                            <option value="female">Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-control-static">
                                                    <span>By signing up you agree with our Terms and Conditions</span>
                                                </div>
                                                <div class="form-control-static">
                                                    <small><a href="#login_box" class="user-actions">Take me back to Sign in.</a></small>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="pull-right panel-controls">
                                                        <a href="index.php" id="special_submit" class="btn btn-primary"><span>Sign up</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
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
                
                $('.user-actions').on('click', function (e) {
                    e.preventDefault();
                    $('.auth-box').addClass('hidden');
                    var link = $(this).attr('href');
                    $(link).toggleClass('hidden');
                });
            });
        </script>
        <!-- DOCUMENT-READY:End -->


    </body>
</html>