<?php
    $user_login = $this->session->userdata('user_login');
?>
<div class="header-section">
    <!--toggle button start-->
    <a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
    <!--toggle button end-->

    <!--notification menu start -->
    <div class="menu-right">
        <div class="user-panel-top">  	
            <div class="profile_details_left">
                <ul class="nofitications-dropdown">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>

                        <ul class="dropdown-menu">
                            <li>
                                <div class="notification_header">
                                    <h3>You have 3 new messages</h3>
                                </div>
                            </li>
                            <li><a href="#">
                                    <div class="user_img"><img src="<?=backend_url();?>images/1.png" alt=""></div>
                                    <div class="notification_desc">
                                        <p>Lorem ipsum dolor sit amet</p>
                                        <p><span>1 hour ago</span></p>
                                    </div>
                                    <div class="clearfix"></div>	
                                </a></li>
                            <li class="odd"><a href="#">
                                    <div class="user_img"><img src="<?=backend_url();?>images/1.png" alt=""></div>
                                    <div class="notification_desc">
                                        <p>Lorem ipsum dolor sit amet </p>
                                        <p><span>1 hour ago</span></p>
                                    </div>
                                    <div class="clearfix"></div>	
                                </a></li>
                            <li><a href="#">
                                    <div class="user_img"><img src="<?=backend_url();?>images/1.png" alt=""></div>
                                    <div class="notification_desc">
                                        <p>Lorem ipsum dolor sit amet </p>
                                        <p><span>1 hour ago</span></p>
                                    </div>
                                    <div class="clearfix"></div>	
                                </a></li>
                            <li>
                                <div class="notification_bottom">
                                    <a href="#">See all messages</a>
                                </div> 
                            </li>
                        </ul>
                    </li>
                    <li class="login_box" id="loginContainer">
                        <div class="search-box">
                            <div id="sb-search" class="sb-search">
                                <form>
                                    <input class="sb-search-input" placeholder="Enter your search term..." id="search" type="search">
                                    <input class="sb-search-submit" value="" type="submit">
                                    <span class="sb-icon-search"> </span>
                                </form>
                            </div>
                        </div>
                        <!-- search-scripts -->
                        <script src="<?=backend_url();?>js/classie.js"></script>
                        <script src="<?=backend_url();?>js/uisearch.js"></script>
                        <script>
                            new UISearch(document.getElementById('sb-search'));
                        </script>
                        <!-- //search-scripts -->
                    </li>
                    <li class="login_box" id="loginContainer">
                        <a href="<?=base_url('index.html');?>" target='_blank'><i class="fa fa-share" aria-hidden="true"></i>Vào trang web</a>
                        <!-- //search-scripts -->
                    </li>
                   
                    		   							   		
                    <div class="clearfix"></div>	
                </ul>
            </div>
            <div class="profile_details">		
                <ul>
                    <li class="dropdown profile_details_drop">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <div class="profile_img">	
                                <span style="background:url(<?=base_url('upload/user/thumbnail/'.$user['image']);?>) center center no-repeat; background-size:100%;"> </span> 
                                <div class="user-name">
                                    <p><?=$user_login['username'];?><span>Administrator</span></p>
                                </div>
                                <i class="lnr lnr-chevron-down"></i>
                                <i class="lnr lnr-chevron-up"></i>
                                <div class="clearfix"></div>	
                            </div>	
                        </a>
                        <ul class="dropdown-menu drp-mnu">
                            <li> <a href="<?=base_url('acp/user/edit/'.$user_login['user_id'])?>"><i class="fa fa-cog"></i> Settings</a> </li> 
                            <li> <a href="<?=base_url('acp/user/show/'.$user_login['user_id'])?>"><i class="fa fa-user"></i>Profile</a> </li> 
                            <li> <a href="<?=base_url('acp/logout')?>"><i class="fa fa-sign-out"></i> Logout</a> </li>
                            <li><a href="<?=base_url('acp/cache/detete');?>">Delete cache</a>
                        <!-- //search-scripts --></li>
                        </ul>
                    </li>
                    <div class="clearfix"> </div>
                </ul>
            </div>		
            <div class="clearfix"></div>
        </div>
    </div>
    <!--notification menu end -->
</div>
