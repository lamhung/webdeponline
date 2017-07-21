<div class="container">
	<div class="title-product">
		<h2>Các dự án đã thực hiện</h2>
	</div>
	<div class="row">
		<?php foreach($rows_hl as $row) { 
			$row = $this->article_model->convert_data($row);
		?>
		<div class="wp-product col-md-3 col-sm-4 col-xs-6 col-my-50">
			<div class="box-product">
				<div class="img-product overlay-product">
					<img src='<?=base_url()?>upload/article/270x270x1x80/<?=$row['image']?>' alt='<?=$row['name']?>' >
					<div class='over-lay'><a href='<?=$row['link']?>' target='_blank'></a></div>
				</div>
				<div class='box-name-product'>
					<h3><a href='<?=$row['link']?>' target='_blank'><?=$row['name']?> </a></h3>
				</div>
			</div>
		</div>
		<?php }?>
	</div>
</div>
<div class="clear20"></div>