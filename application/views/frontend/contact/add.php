
<div id="contact-page" >
	<div class="title-product"><h2>Liên hệ</h2></div>
	<div class="row">
		<?php if ($this->session->flashdata('msg_error_contact')) { ?>
		<div class="alert alert-success" role="alert">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		    <strong>[Logger]</strong> <?php echo $this->session->flashdata('msg_error_contact')?>
		</div>
		<?php }?>
		<div class="col-sm-5">
			<?=$rows_contact['content'];?>
			<div class="clear"></div>
			<div class="contact-form">
				<div style="display: none" class="status alert alert-success"></div>
		    	<form method="post" name="contact-form" class="contact-form row" id="main-contact-form" enctype="multipart/form-data">
		            <div class="form-group col-md-12 <?php if (form_error('name')) echo 'has-error'; ?>">
		            	<div class="input-group">
			            	<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
			                <input type="text" placeholder="Name"  class="form-control" name="name" value="<?php echo set_value('name', $row['name']) ?>">
			                
		                </div>
		                <?php echo form_error('name', "<small class='help-block'>", '</small>'); ?>
		            </div>
		            <div class="form-group col-md-12 <?php if (form_error('phone')) echo 'has-error'; ?>">
		            	<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-phone-square" aria-hidden="true"></i></span>
			                <input type="text" placeholder="Phone"  class="form-control" name="phone" value="<?php echo set_value('phone', $row['phone']) ?>">
			           </div>
			            <?php echo form_error('phone', "<small class='help-block'>", '</small>'); ?>
			            
		            </div>
		            <div class="form-group col-md-12 <?php if (form_error('phone')) echo 'has-error'; ?>">
		            	<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
			                <input type="email" placeholder="Email" class="form-control" name="email" value="<?php echo set_value('email', $row['email']) ?>">
			            </div>
		                <?php echo form_error('email', "<small class='help-block'>", '</small>'); ?>
		            </div>
		            <div class="form-group col-md-12 <?php if (form_error('title')) echo 'has-error'; ?>">
		            	<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-bars" aria-hidden="true"></i></span>
		                	<input type="text" placeholder="Title"  class="form-control" name="title"  value="<?php echo set_value('title', $row['title']);?>">
		                </div>
		                 <?php echo form_error('title', "<small class='help-block'>", '</small>'); ?>
		            </div>
		            <div class="form-group col-md-12">
		            	<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-picture-o" aria-hidden="true"></i></span>
		                	<input class="form-control" id="file" name= 'file' type="file">
		                </div>
		                <?php
	                    	if (isset($image_error)) {
	                        	echo "<small class='help-block'>" . $image_error . '</small>';
	                    	}
	                    ?>
		            </div>
		            <div class="form-group col-md-12">
		                <textarea placeholder="ý kiến" rows="8" class="form-control"  id="message" name="content" value="<?php echo set_value('content', $row['content']);?>"></textarea>
		            </div>                        
		            <div class="form-group col-md-12">
		                <input type="submit" value="Submit" class="btn btn-danger " name="submit">
		                <input type="reset" value="Reset" class="btn btn-primary " name="reset">
		            </div>
		        </form>
			</div>
		</div>
		<div class="col-md-7">
			<?php $this->load->view('frontend/contact/map_contact.php');?>
		</div>
	</div>
	
</div>