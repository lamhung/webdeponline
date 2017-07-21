<div class="features_items">
	<div class="title-product"><h2><?=$this->title_detail?></h2></div>
	<?php 
		foreach($rows as $row) {
			$row = $this->article_model->convert_data($row);
	?>
	<div class="first-item-news col-md-6 col-sm-12  col-xs-12 wow fadeInUp">
        <div class="first-item-news-wrap transition_all1" >
            <div class="img shine padding0 col-md-4 col-sm-4 col-xs-4">
              <a href="<?=base_url();?>chi-tiet-tin-tuc/<?=$row['site_title']?>.html"><img src="<?=$row['image_']?>" alt="<?=$row['name'];?>" title="<?=$row['name'];?>"></a>
              <div class="over_lay"><a href="#"></a></div>
            </div>
            <div class="desc col-md-8 col-sm-8 col-xs-8">
              <div>
                <h3><a href="<?=base_url();?>chi-tiet-tin-tuc/<?=$row['site_title']?>.html" ><?=character_limiter($row['name'],50)?></a></h3>
                <div class="date"><i class="fa fa-calendar" aria-hidden="true"></i> <?=date('d-m-Y h:i:s A',$row['created'])?> - <i class="fa fa-eye" aria-hidden="true"> </i> </div>
                <div class="desc_cont"><?=character_limiter($row['description'],70)?></div>
                
              </div>
            </div>
            <div class="clear"></div>
        </div>
      </div>
	<?php } ?>
	<div class="clearfix"></div>
	<div class="text-center"><?php echo $this->pagination->create_links();?></div>
</div>