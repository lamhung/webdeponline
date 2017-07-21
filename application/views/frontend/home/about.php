<div class="container_about">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-5 col-xs-12 shine">
				<img src="thumb.php?src=upload/single_post/<?=$row_about['image']?>&w=350&h=200&zc=1&q=80" alt='<?=$row_about['name']?>' class='img-responsive'>
				<div class="over_lay"></div>
			</div>
			<div class="col-md-7 col-sm-7 col-xs-12 desc-about">
				<h3><a href="gioi-thieu.html"><?=$row_about['name']?></a></h3>
				<?=character_limiter(nl2br($row_about['description']),500);?>
			</div>
		</div>
	</div>
</div>