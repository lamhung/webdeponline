<header id="header" >
	<!--header-->
	<div class="header_top"><!--header_top-->
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<div class="contactinfo">
						<ul class="">
							<li><a href="#"><i class="fa fa-phone"></i> <?=$row_setting['hotline']?></a></li>
							<li><a href="#"><i class="fa fa-envelope"></i> <?=$row_setting['email']?></a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-xs-12">
					<div class="pull-right">
						<ul class="">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div><!--/header_top-->
	<div class="header_bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="logo">
						<a href="<?=base_url();?>">
							<img src='<?=base_url()?>upload/photo/360x80x2x80/<?=$rows_logo[0]['image']?>' alt='<?=$row_setting['name']?>' >
						</a>
					</div>
				</div>
				<div class="col-md-8 col-sm-8 col-xs-12 padding0">
					<?php $this->load->view('frontend/layout/menu_top');?>
				</div>
			</div>
		</div>
	</div>
	
</header>


<script type="text/javascript">
    $(document).ready(function(){
      $(window).scroll(function(){
        var cach_top = $(window).scrollTop();
        if(cach_top >= 183){
        	$('.header_bottom').addClass('header_bottom_scroll');
          	$('.header_bottom').css({position: 'fixed', top: '0px',left:'0px',right:'0px', zIndex:9999});
        }else{
        	$('.header_bottom').removeClass('header_bottom_scroll');
          	$('.header_bottom').css({position: 'relative', top: '0px'});
        }
      });
    });
  </script> 