<section id="slider">
	<div id="wowslider-container1">
		<div class="ws_images">
			<ul>
				<?php 
					foreach($rows_slider as $k => $row) {
				?>
				<li>
					<a href="<?=$row['link']?>">
						<img src='<?=base_url()?>upload/photo/1349x460x1x80/<?=$row['image']?>' alt='<?=$row['name']?>' >
					</a>
				</li>
				<?php  }?>
			</ul>
		</div>
		<div class="ws_script" style="position:absolute;left:-99%;display: none"><a href="http://wowslider.com">http://wowslider.com/</a> by WOWSlider.com v8.7</div>
		<div class="ws_shadow"></div>
	</div>	
</section>