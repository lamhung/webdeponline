<?php 
		
?>

<div class="recommended_items"><!--recommended_items-->
	<h2 class="title text-center">Sản phẩm nổi bật</h2>
	<div id="" >
		<div class="">
			<div class="slick_product">
			<?php foreach($rows_hl as $row) { 
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
							
						</div>
					</div>
				</div>
			<?php } ?>
			</div>
		<!-- <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
			<i class="fa fa-angle-left"></i>
		</a>
		<a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
			<i class="fa fa-angle-right"></i>
		</a> -->			
	</div>
</div><!--/recommended_items-->
<script type="text/javascript">
	$(document).ready(function(){

		$('.slick_product').slick({
			// vertical:true,
		// infinite: true,
		arrows : false,
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