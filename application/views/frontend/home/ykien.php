<div class="container-ykien">
	<div class="overlay-kien">
		<div class="container ">
			
			<h2 class='title-ykien'>Ý kiến khách hàng</h2>
			
			<div class="row">
				<div class="slick_ykien">
				<?php foreach($rows_ykien as $row) { 
					$row = $this->article_model->convert_data($row);
				?>
					<div class="wp-ykien col-md-3 col-sm-4 col-xs-6 col-my-50">
						<div class="box-ykien">
							<div class="img-ykien xoay_y">
                <img src='<?=base_url()?>upload/article/145x145x1x80/<?=$row['image']?>' alt='<?=$row['name']?>' >
							</div>
							<div class='box-desc-ykien'>
								<div><?=character_limiter($row['description'],120)?></div>
							</div>
						</div>
					</div>
				<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
  $(document).ready(function() {
   
    $(".slick_ykien").slick({
      arrows:false,
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 3000,
      nextArrow : '<button type="button" class="button-right button" ></button>',
      prevArrow : '<button type="button" class=" button-left button"></button>',
      responsive: [
     
     
      {
        breakpoint: 1140,
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
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 580,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }

      ]
    });
  });
</script>