<div class="container">
	<div class="title-product">
		<h2>Các gói hosting</h2>
	</div>
	<div class="row">
		<div class="slick_hosting">
		<?php 
		foreach($rows_hosting as $row) { 
			$row = $this->product_model->convert_data($row);
		?>
		<div class="wp-hosting col-md-3 col-sm-4 col-xs-6 col-my-50">
			<div class="box-hosting">
				<h2 class="title-hosting">
					<a href="javascript:"><?=$row['name']?></a>
				</h2>
				<div class="price-hosting">
					<p><?=number_format($row['price'],0)?></p>
					<span>VNĐ/ 1 tháng</span>
				</div>
				<div class="sub-title-hosting ">
					<?=$row['dungluong']?> MB dung lượng
				</div>
				<div class="sub-title-hosting gray">
					<?=$row['bangthong']?> GB băng thông
				</div>
				<div class="sub-title-hosting">
					Miễn phí khởi tạo
				</div>
				<div class="sub-title-hosting gray">
					Sao lưu hàng tuần
				</div>
				<div class="sub-title-hosting">
					Hỗ trợ 24/7
				</div>
				<div class="sub-title-hosting gray">
					Thanh toán 12 tháng
				</div>
				<a href="javascript:add_contact(<?=$row['id']?>)" class='btn btn-danger btn-dangky' data-toggle="modal" data-target="#myModal" data-id="<?=$row['id']?>">Đăng ký</a>
			</div>
		</div>
		<?php } ?>
		</div>
	</div>
</div>
<div class="clear40"></div>
<script type="text/javascript">
  $(document).ready(function() {
   
    $(".slick_hosting").slick({
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