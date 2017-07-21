<?php //var_dump($rows_new);?>
<div class="features_items"><!--features_items-->
	<h2 class="title text-center">Sản phẩm mới</h2>
<?php 
	foreach($rows_new as $row) {
		$row = $this->product_model->convert_data($row);
?>
	<div class="col-sm-4">
		<div class="product-image-wrapper">
			<div class="single-products">
				<div class="productinfo text-center">
					<a href='<?=base_url();?>chi-tiet-san-pham/<?=$row['site_title'];?>.html' ><img src="<?=$row['image_']?>" alt=""></a>
					<h2>
						<?= $row['price'] > 0 ?  number_format($row['price'], 0).'VNĐ' : 'Liên hệ';?>
					</h2>
					<p><a href='<?=base_url();?>chi-tiet-san-pham/<?=$row['site_title'];?>.html' ><?=$row['name']?></a></p>
					<a href="<?=base_url()?>lien-he.html" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
				</div>
				<?php
				/*
				<div class="product-overlay">
					<div class="overlay-content">
						<h2>$56</h2>
						<p>Easy Polo Black Edition</p>
						<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
					</div>
				</div>
				*/
				?>
			</div>
			<?php
				/*
			<div class="choose">
				<ul class="nav nav-pills nav-justified">
					<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
					<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
				</ul>
			</div>
			*/ 
			?>
		</div>
	</div>
<?php } ?>
</div><!--features_items-->