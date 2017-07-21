<script type="text/javascript">
    $(document).ready(function(){
      $('#menu-top ul li').hover(function(){
        $(this).find('ul:first').css({visibility: "visible", opacity: 1}).slideDown(300); 
      }, function(){
        $(this).find('ul:first').css({visibility: "hidden"}).hide(300); 
      });
    });
</script>
<div  id="menu-top">
	<div class="mainmenu pull-right">
		<ul class="menu">
			<li><a href="index.html" class="active">Trang chủ</a></li>
			<li><a href="<?=base_url();?>gioi-thieu.html">Giới thiệu</i></a></li>
			<li><a href="<?=base_url();?>thiet-ke-web.html">Thiết kế web</a>
				<ul  class="sub-menu">
				<?php 
					foreach($rows_product_list as $row) {
				?>
					<li><a href="thiet-ke-web/<?=$row['site_title']?>.html"><?=$row['name']?></a>
				<?php } ?>
				
				</ul>
			</li>
			<li><a href="<?=base_url();?>hosting.html">Hosting</a></li>
			<li><a href="<?=base_url();?>domain.html">Domain</a></li>
			<li><a href="<?=base_url();?>tin-tuc.html">Tin tức</a></li> 
			<li><a href="<?=base_url();?>lien-he.html">Liên hệ</a></li>
			
		</ul>
	</div>
</div>
<?php $this->load->view('frontend/layout/addon/menu_mobi');?>