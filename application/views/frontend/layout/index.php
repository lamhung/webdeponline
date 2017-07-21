<!DOCTYPE html PUBLIC>
<html lang="vi" itemscope itemtype="http://schema.org/WebPage">
<head>
   	<?php $this->load->view('frontend/layout/head_meta');?>
    <?php $this->load->view('frontend/layout/head_css');?>

</head>
<body>
	
            	
	<div id="wrapper">
		<?php $this->load->view('frontend/layout/header');?>
		<?php if($this->controller == 'home') {?>
			<?php $this->load->view('frontend/layout/slider');?>
		<?php } ?>
		<section>
			<?php if($this->controller != 'home') {?>
			<div class="container">
				<div class="row">
					<div class="col-sm-12 padding-right">
						<?php $this->load->view($tmp);?>
					</div>
					
				</div>
			</div>
			<?php }else {?>
				
				<?php $this->load->view($tmp);?>
				
			<?php } ?>
		</section>
		<?php $this->load->view('frontend/layout/footer.php');
			$this->load->view('frontend/layout/addon/chat_facebook.php');
		?>
	</div>
	<div class="modal fade " id='myModal' role="dialog">
	</div>

	<?php $this->load->view('frontend/layout/head_js');?>
	  <!-- Modal -->
  	<script type="text/javascript">
  		$(document).ready(function(){
  			$(".btn-dangky").click(function(){
  				var id = $(this).attr('data-id')
  				add_contact(id);
  			})
  		})
		function add_contact(id) {
			$.ajax({
				type : 'POST',
				url : 'dat-hang',
				data : {id :id},
				success : function(result) {
					// alert(result);
					$('#myModal').html(result);
				}
			});
		}
	</script>
</body>
</html>