<!DOCTYPE HTML>
<html>
    <head>
        <title>Webbanhang</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Easy Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- Bootstrap Core CSS -->
        <link href="<?= backend_url(); ?>css/bootstrap.min.css" rel='stylesheet' type='text/css' />
        <!-- Custom CSS -->
        <link href="<?= backend_url(); ?>css/style.css" rel='stylesheet' type='text/css' />
        <!-- Graph CSS -->
        <link href="<?= backend_url(); ?>css/font-awesome.css" rel="stylesheet"> 
        <!-- jQuery -->
        <!-- lined-icons -->
        <link rel="stylesheet" href="c<?= backend_url(); ?>ss/icon-font.min.css" type='text/css' />
        <!-- //lined-icons -->
        <!-- chart -->
        <script src="<?= backend_url(); ?>js/Chart.js"></script>
        <!-- //chart -->
        <!--animate-->
        <link href="<?= backend_url(); ?>css/animate.css" rel="stylesheet" type="text/css" media="all">
        <script src="<?= backend_url(); ?>js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
        <!--//end-animate-->
        <!----webfonts--->
        <link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
        <!---//webfonts---> 
        <!-- Meters graphs -->
        <script src="<?= backend_url(); ?>js/jquery-1.10.2.min.js"></script>
        <!-- Placed js at the end of the document so the pages load faster -->
        <style type="text/css">
            .has_error {color: #B72626!important;margin-bottom: 5px;text-align: center;}
        </style>
    </head> 

    <body class="sign-in-up">
        <section>
            <div id="page-wrapper" class="sign-in-wrapper">
                <div class="graphs">
                    <div class="sign-in-form">
                        <div class="sign-in-form-top">
                            <p><span>Sign In to</span> <a href="index.html">Admin</a></p>
                        </div>
                        <div class="signin">
                            <div class="signin-rit">
                                <span class="checkbox1">
                                    <label class="checkbox"><input type="checkbox" name="checkbox" checked="">Forgot Password ?</label>
                                </span>
                                <p><a href="#">Click Here</a> </p>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="has_error"> <?php echo $msg = isset($msg) ? $msg : ""

                                    ?> </div>
                            
                            <form action="" method="post" name="form-login">
                                <div class="log-input">
                                    <div class="log-input-left">
                                        <?php echo form_error('username', "<small class='has_error'>", '</small>'); ?>
                                        <input type="text" name ="username" id="username" class="user" value="<?php echo set_value('username',"");?>" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                    this.value = 'Email address:';
                                                }"/>
                                        
                                    </div>
                                    <span class="checkbox2">
                                        <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i></label>
                                        
                                    </span>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="log-input">
                                    <div class="log-input-left">
                                        <?php echo form_error('password', "<small class='has_error'>", '</small>'); ?>
                                        <input type="password" name="password" id="password" class="lock" value="" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                    this.value = 'Email address:';}"/>
                                        
                                    </div>
                                    <span class="checkbox2">
                                        <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i></label>
                                    </span>
                                    <div class="clearfix"> </div>
                                </div>
                                <input type="submit" name="submit" value="Login to your account">
                            </form>	 
                        </div>
                        <div class="new_people">
                            <h4>For New People</h4>
                            <p>Having hands on experience in creating innovative designs,I do offer design 
                                solutions which harness.</p>
                            <a href="sign-up.html">Register Now!</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--footer section start-->
            <footer>
                <p>&copy 2015 Easy Admin Panel. All Rights Reserved | Design by <a href="#" target="_blank">LÂM HƯNG</a></p>
            </footer>
            <!--footer section end-->
        </section>

        <script src="<?= backend_url(); ?>js/jquery.nicescroll.js"></script>
        <script src="<?= backend_url(); ?>js/scripts.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="<?= backend_url(); ?>js/bootstrap.min.js"></script>
    </body>
</html>