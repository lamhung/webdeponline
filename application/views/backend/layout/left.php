<div class="left-side sticky-left-side" style="overflow: hidden;" tabindex="5000">

    <!--logo and iconic logo start-->
    <div class="logo">
        <h1><a href="<?= base_url('acp');?>">Easy <span>Admin</span></a></h1>
    </div>
    <div class="logo-icon text-center">
        <a href="<?= base_url('acp');?>"><i class="lnr lnr-home"></i> </a>
    </div>
    <!--logo and iconic logo end-->
    <div class="left-side-inner">

        <!--sidebar nav start-->
        <ul class="nav nav-pills nav-stacked custom-nav">
            <li class="active"><a href="<?= base_url('acp');?>"><i class="fa fa-home" aria-hidden="true"></i><span>Trang chủ</span></a></li>
            <li class="menu-list <?php if($this->input->get('type') == 'product' || $this->input->get('type') == 'hosting') echo 'nav-active'?>">
                <a href="#"><i class="fa fa-th" aria-hidden="true"></i>
                    <span><?=$this->lang->line('left_product')?></span></a>
                <ul class="sub-menu-list">
                    <li><a href="<?=base_url('acp/product_category?type=product');?>" class="<?php if($this->type == 'product' && $this->controller == 'product_category') echo 'active'?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i><?=$this->lang->line('left_category')?></a></li>
                    <?php /*
                    <li><a href="<?=base_url('acp/category_list?type=product');?>" class="<?php if($this->type == 'product' && $this->controller == 'category_list') echo 'active'?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i><?=$this->lang->line('left_category')?> 1</a></li>
                    <li><a href="<?=base_url('acp/category_cat?type=product');?>" class="<?php if($this->type == 'product' && $this->controller == 'category_cat') echo 'active'?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i><?=$this->lang->line('left_category')?> 2</a></li>
                    <li><a href="<?=base_url('acp/product?type=product');?>" class="<?php if($this->type == 'product' && $this->controller == 'product') echo 'active'?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i><?=$this->lang->line('left_product')?></a></li> */?>
                    <li><a href="<?=base_url('acp/product?type=hosting');?>" class="<?php if($this->type == 'hosting' && $this->controller == 'product') echo 'active'?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Hosting</a></li>
                </ul>
            </li>
            <li class="menu-list <?php if($this->input->get('type') == 'article') echo 'nav-active'?>">
                <a href="#"><i class="fa fa-th" aria-hidden="true"></i>
                    <span>Thiết kế web</span></a>
                <ul class="sub-menu-list">
                    <li><a href="<?=base_url('acp/article_list?type=article');?>" class="<?php if($this->type == 'article' && $this->controller == 'article_list') echo 'active'?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Danh mục thiết kế web</a></li>
                    <!-- <li><a href="<?=base_url('acp/article_cat?type=article');?>" class="<?php if($this->type == 'article' && $this->controller == 'article_cat') echo 'active'?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i><?=$this->lang->line('left_category')?> 2</a></li> -->
                    <li><a href="<?=base_url('acp/article?type=article');?>" class="<?php if($this->type == 'article' && $this->controller == 'article') echo 'active'?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Thiết kế web</a></li>
                     
                </ul>
            </li>
            <li class="menu-list <?php if($this->controller == 'photo') echo 'nav-active'?>">
                <a href="#"><i class="fa fa-picture-o" aria-hidden="true"></i>
                    <span>Photo</span></a>
                <ul class="sub-menu-list">
                    <li><a href="<?=base_url('acp/photo?type=banner');?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Banner</a></li>
                    <li><a href="<?=base_url('acp/photo?type=logo');?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Logo</a></li>
                    <li><a href="<?=base_url('acp/photo?type=slider');?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Slider</a></li>
                    <li><a href="<?=base_url('acp/photo?type=doitac');?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Đối tác</a></li>
                </ul>
            </li>
            <li class="menu-list <?php if($this->input->get('type') == 'about' || $this->input->get('type') == 'domain' || $this->input->get('type') == 'ykien' || $this->input->get('type') == 'news') echo 'nav-active'?>">
                <a href="#"><i class="fa fa-file-archive-o" aria-hidden="true"></i>
                    <span>Bài viết</span></a>
                <ul class="sub-menu-list">
                    <li><a href="<?=base_url('acp/single_post/edit?type=about');?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Giới thiệu</a></li>
                    <li><a href="<?=base_url('acp/single_post/edit?type=domain');?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Mua tên miền</a></li>
                    <li><a href="<?=base_url('acp/article?type=ykien');?>" class="<?php if($this->type == 'ykien' && $this->controller == 'article') echo 'active'?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Ý kiến khách hàng</a></li>
                    <li><a href="<?=base_url('acp/article?type=news');?>" class="<?php if($this->type == 'news' && $this->controller == 'article') echo 'active'?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Tin tức</a></li>
                    
                </ul>
            </li>
            <li class="menu-list <?php if($this->controller == 'config' || ($this->controller == 'single_post' && ($this->input->get('type') == 'footer' || $this->input->get('type') == 'contact') )) echo 'nav-active'?>"">
                <a href="#"><i class="fa fa-cogs" aria-hidden="true"></i>
                    <span>Cấu hình</span></a>
                <ul class="sub-menu-list">
                    <li><a href="<?=base_url('acp/config/edit');?>">Cấu hình chung</a> </li>
                    <li><a href="<?=base_url('acp/single_post/edit?type=footer');?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Footer</a></li>
                    <li><a href="<?=base_url('acp/single_post/edit?type=contact');?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Nội dung liên hệ</a></li>
                </ul>
            </li>
            <li class="menu-list">
                <a href="#"><i class="fa fa-user-circle" aria-hidden="true"></i>
                    <span>Tài khoản</span></a>
                <ul class="sub-menu-list">
                    <li><a href="<?=base_url('acp/user');?>">User</a> </li>
                    <li><a href="widgets.html">khách hàng</a></li>
                </ul>
            </li>
            <li class="menu-list">
                <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>
                    <span>Thông tin liên hệ</span></a>
                <ul class="sub-menu-list">
                    <li><a href="<?=base_url('acp/contact');?>">Liên hệ</a> </li>
                </ul>
            </li>
        </ul>
        <!--sidebar nav end-->
    </div>
</div>