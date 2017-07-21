<div class="blog-post-area">
	<h2 class="title text-center">Tin tức</h2>

	<div class="single-blog-post">
		<h3><?=$row_detail['name']?></h3>
		<div class="post-meta">
			<ul>
				<li><i class="fa fa-clock-o"></i><?=date('h:i A', $row_detail['created'])?></li>
				<li><i class="fa fa-calendar"></i><?=date('d:m:Y', $row_detail['created']) ?></li>
			</ul>
			<span>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
			</span>
		</div>
		<h4><?=$row_detail['description']?></h4>
		<div><?=$row_detail['content']?></div>
	</div>
</div>
<div class="features_items">
	<h2 class="title text-center">Tin tức khác</h2>
	<?php 
		foreach($rows_other as $row) {
			$row = $this->post_model->convert_data($row);
	?>
	<div class="first-item-news col-md-6 col-sm-6 col-xsm-6 col-xs-12 wow fadeInUp">
        <div class="first-item-news-wrap transition_all1" >
            <div class="img shine padding0 col-md-4 col-sm-6 col-xs-12">
              <a href="<?=base_url();?>chi-tiet-tin-tuc/<?=$row['site_title']?>.html"><img src="<?=$row['image_']?>" alt=""></a>
              <div class="over_lay"><a href="#"></a></div>
            </div>
            <div class="desc">
              <div>
                <h3><a href="<?=base_url();?>chi-tiet-tin-tuc/<?=$row['site_title']?>.html"><?=$row['name']?></a></h3>
                <div class="date"><i class="fa fa-calendar" aria-hidden="true"></i> <?=date('d-m-Y h:i:s A',$row['created'])?> - <i class="fa fa-eye" aria-hidden="true"> </i> </div>
                <div class="desc_cont"><?=character_limiter($row['description'],100)?></div>
                
              </div>
            </div>
            <div class="clear"></div>
        </div>
      </div>
	<?php } ?>
	<div class="clearfix"></div>
	<div class="text-center"><?php echo $this->pagination->create_links();?></div>
</div>