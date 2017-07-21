<a class="menu_rp" href="#menu"></a>
<nav id="menu">
	<ul id="nav">
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
</nav>