<link rel="stylesheet" href="<?=vendor_url();?>magiczoom/magiczoomplus.css">
<script src="<?=vendor_url();?>magiczoom/magiczoomplus.js"></script>

<div class="product-details">
	<div class="col-sm-5">
		<div class="view-product">
		<a id="Zoomer" href="<?=base_url()?>upload/product/<?=$row['image']?>" class="MagicZoomPlus hinhchitiet" rel="expand-position: center; pan-zoom: false;">
			<img alt="" src="<?=$row['image_'];?>">
		</a>
		</div>
		<div data-ride="carousel" class="carousel slide" id="similar-product">
		  	<!-- Wrapper for slides -->
		    <div class="">
				<div class="slick_img">
				<a href="<?=base_url()?>upload/product/<?=$row['image']?>" rel="zoom-id: Zoomer" rev="<?=$row['image_'];?>">
					<img alt="" src="<?=$row['image_'];?>" width='100' height='60'>
				</a>
				<?php foreach($rows_img as $row_img) {?>
				  <a href="<?=base_url()?>upload/<?=$row_img['path_folder'];?>/<?=$row_img['file_name'];?>" rel="zoom-id: Zoomer" rev="<?=base_url()?>upload/<?=$row_img['path_folder'];?>/thumbnail/<?=$row_img['file_name'];?>">
				  <img alt="" src="<?=base_url()?>upload/<?=$row_img['path_folder'];?>/thumbnail/<?=$row_img['file_name'];?>" width='100' height='60'>
				  </a>
				<?php } ?>
				</div>
			</div>
		  	<!-- Controls -->
		</div>
	</div>

	<div class="col-sm-7">
		<div class="product-information"><!--/product-information-->
			<img src="<?=frontend_url();?>images/product-details/new.jpg" class="newarrival" alt="">
			<h2><?=$row['name'];?></h2>
			<p>Web ID: 1089772</p>
			<img src="<?=frontend_url();?>images/product-details/rating.png" alt="">
			<div></div>
			<span>
				<span><?= $row['price'] > 0 ?  number_format($row['price'], 0).'VNĐ' : 'Liên hệ';?></span>
				<!-- <label>Quantity:</label>
				<input value="3" type="text"> -->
				<button type="button" class="btn btn-fefault cart">
					<i class="fa fa-shopping-cart"></i>
					<a href="<?=base_url();?>lien-he.html">Add to cart</a>
				</button>
			</span>
			<div class="desc_product">
				<?=$row['description'];?>
			</div>
		</div><!--/product-information-->				
	</div>
</div> <!-- product-detail -->
<div class="category-tab shop-details-tab">
	<!--category-tab-->
	<div class="col-sm-12">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#details" data-toggle="tab">Nội dung</a></li>
			<li class=""><a href="#companyprofile" data-toggle="tab">Bình luận</a></li>
			
		</ul>
	</div>
	<div class="tab-content">
		<div class="tab-pane active " id="details">
			<?=$row['content'];?>
		</div>
		
		<div class="tab-pane" id="companyprofile">
			

			<div class="fb-comments" data-href="<?=base_url();?>chi-tiet-san-pham/<?=$row['site_title'];?>.html" data-width="100%" data-num-posts="10"></div>
		</div>
	</div>				
</div><!-- product-detail content -->

<div class="recommended_items">
	<h2 class="title text-center">recommended items</h2>
	<div data-ride="carousel" class="carousel slide" id="recommended-item-carousel">
		<div class="">
			<div class="slick_product">
			<?php foreach($rows_other as $row) { 
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
							<p><a href='<?=base_url();?>chi-tiet-san-pham/<?=$row['site_title'];?>.html' ><?=character_limiter($row['name'],30)?></a></p>
							<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
						</div>
						
					</div>
				</div>
			</div>
			<?php } ?>
			</div>
		</div>		
	</div>
</div><!-- product-detail other product -->


<script type="text/javascript">
	$(document).ready(function(){

		$('.slick_img').slick({
			// vertical:true,
		// infinite: true,
		arrows : true,
		slidesToShow: 3,
		autoplay:true,
		slidesToScroll: 1,
		responsive: [
	      {
	        breakpoint: 1000,
	        settings: {
	          slidesToShow: 3,
	          slidesToScroll: 3,
	          infinite: false,
	          dots: false
	        }
	      },
	      {
	        breakpoint: 760,
	        settings: {
	          slidesToShow: 3,
	          slidesToScroll: 2
	        }
	      },
	      {
	        breakpoint: 600,
	        settings: {
	          slidesToShow: 2,
	          slidesToScroll: 2
	        }
	      },
	      {
	        breakpoint: 480,
	        settings: {
	          slidesToShow: 1,
	          slidesToScroll: 1
	        }
	      }

	      ]
		});
	})

</script>