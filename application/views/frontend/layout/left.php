
<div class="left-sidebar">
	<h2>Danh mục sản phẩm</h2>
	<div id="accordian" class="panel-group category-products"><!--category-productsr-->
	<?php 
		foreach($rows_product_list as $k => $row) {
			$condition_product_cat = array('select' => 'name, site_title, id',
                        'where' => array('type' => 'product', 'list_id' => $row['id']),
                    );
        	$rows_product_cat = $this->category_cat_model->get_rows($condition_product_cat);
        	

	?>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a href="#sportswear<?=$k;?>" data-parent="#accordian" data-toggle="collapse">
					<?php if(count($rows_product_cat) >0) {?>
						<span class="badge pull-right"><i class="fa fa-plus"></i></span>
					<?php } ?>
						
					</a>
					<a href="<?=base_url()?>san-pham/<?=$row['site_title']?>.html"  >
					<?=$row['name'];?>
					</a>
				</h4>
			</div>
			<?php if(count($rows_product_cat) >0) {?>
			<div class="panel-collapse collapse" id="sportswear<?=$k;?>">
				<div class="panel-body">
					<ul>
					<?php 
						foreach($rows_product_cat as $row_cat) {
					?>
						<li><a href="<?=base_url()?>san-pham/<?=$row['site_title']?>/<?=$row_cat['site_title']?>.html"><?=$row_cat['name']?></a></li>
					<?php } ?>
					</ul>
				</div>
			</div>
			<?php } ?>
		</div>
	<?php } ?>
	</div><!--/category-products-->
	<div class="shipping text-center"><!--shipping-->
		<img alt="" src="<?=frontend_url();?>images/home/shipping.jpg">
	</div><!--/shipping-->

</div>