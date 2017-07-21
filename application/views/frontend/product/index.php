<div class="features_items">
	<div class="title-product"><h2><?=$this->title_detail?></h2></div>
	<?php 
	// print_r($rows);
		foreach($rows as $row) {
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
	<div class="clearfix"></div>
	<div class="text-center"><?php echo $this->pagination->create_links();?></div>
</div>
<div class="clear"></div>

