<div class="container">
	<div class="doitac-slider">
      <?php 
       	foreach($rows_doitac as $row) { 
      ?>
      <div class=" ">
        <div class="doitac_img">
          <a href="<?=$row['link']?>" target="_blank">
            <img src='<?=base_url()?>upload/photo/170x100x2x80/<?=$row['image']?>' alt='<?=$row['name']?>' >
          </a>
        </div>
      </div>
      <?php } ?>
    </div>
</div>
<footer id="footer">
	<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="box-footer">
							<h2>Giới thiệu webdeponline</h2>
							<div class="content_footer">
								<?=character_limiter(nl2br($row_about['description']),200);?>
							</div>
							<div class="logo_footer">
								<a href="<?=base_url();?>"><img src='<?=base_url()?>upload/photo/360x80x2x80/<?=$rows_logo[0]['image']?>' alt='<?=$row_setting['name']?>' ></a>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="box-footer">
							<h2>Liên hệ với chúng tôi</h2>
							<div class="content_footer">
								<?=$rows_footer['content'];?>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="box-footer">
							<h2>Fanpage book</h2>
							<!-- facebook -->
							<div id="fb-root"></div>
							<script>(function(d, s, id) {
							 var js, fjs = d.getElementsByTagName(s)[0];
							 if (d.getElementById(id)) return;
							 js = d.createElement(s); js.id = id;
							 js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
							 fjs.parentNode.insertBefore(js, fjs);
							}(document, 'script', 'facebook-jssdk'));</script>
							<div class="fb-page" data-href="<?php echo $row_setting["facebook"]?>"  data-tabs="timeline" data-width="300" data-height="170" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div></div>
							<!-- facebook -->
						</div>
					
					
				</div>
			</div>
		</div>
	</div><!-- /footer-widget -->
	<div class="clear"></div>
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<p class="text-center">Copyright &copy; 2017 <?=$row_setting['name']?> All rights reserved.</p>
				
			</div>
		</div>
	</div>
</footer>

<script type="text/javascript">
  $(document).ready(function() {
   
    $(".doitac-slider").slick({
      arrows:false,
      slidesToShow: 6,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 3000,
      nextArrow : '<button type="button" class="button-right button" ></button>',
      prevArrow : '<button type="button" class=" button-left button"></button>',
      responsive: [
     
     
      {
        breakpoint: 1000,
        settings: {
          slidesToShow: 6,
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
          slidesToShow: 3,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      }

      ]
    });
  });
</script>