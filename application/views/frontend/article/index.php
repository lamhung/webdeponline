<div class="features_items">
	<div class="title-product"><h2><?=$this->title_detail?></h2></div>

	<?php 
	// print_r($rows);
		foreach($rows as $row) {
			$row = $this->article_model->convert_data($row);
	?>
		<div class="wp-product col-md-3 col-sm-4 col-xs-6 col-my-50">
			<div class="box-product">
				<div class="img-product overlay-product">
					
				<img src='<?=base_url()?>upload/article/270x270x1x80/<?=$row['image']?>' alt='<?=$row['name']?>' >
					<div class='over-lay'><a href='<?=$row['link']?>' target='_blank'></a></div>
				</div>
				<div class='box-name-product'>
					<h3><a href='<?=$row['link']?>' target='_blank'><?=$row['name']?></a></h3>
				</div>
			</div>
		</div>
	<?php } ?>
	<div class="clearfix"></div>
	<div class="text-center"><?php echo $this->pagination->create_links();?></div>
</div>