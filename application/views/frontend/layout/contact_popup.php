
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title tex-center" style="text-transform: uppercase">Bạn muốn đăng ký <?=$row_hosting['name']?></h4>
        <p class="text-danger tex-center">*-- Vui lòng điền đầy đủ thông tin --*</p>
      </div>
      <div class="modal-body">
          <div class="col-sm-12">
          <div class="contact-form">
            
              <form method="post" action='lien-he.html' name="contact-form" class="contact-form row" id="main-contact-form" enctype="multipart/form-data">
                    <input type="hidden" placeholder="Name"  class="form-control" name="id" value="<?=$row_hosting['id']?>" >
                    <div class="form-group col-md-12 <?php if (form_error('name')) echo 'has-error'; ?>">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                          <input type="text" placeholder="Name"  class="form-control" name="name" value="<?php echo set_value('name', $row['name']) ?>" required>
                          
                        </div>
                        <?php echo form_error('name', "<small class='help-block'>", '</small>'); ?>
                    </div>
                    <div class="form-group col-md-12 <?php if (form_error('phone')) echo 'has-error'; ?>">
                      <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-phone-square" aria-hidden="true"></i></span>
                          <input type="text" placeholder="Phone"  class="form-control" name="phone" value="<?php echo set_value('phone', $row['phone']) ?>" required>
                     </div>
                      <?php echo form_error('phone', "<small class='help-block'>", '</small>'); ?>
                      
                    </div>
                    <div class="form-group col-md-12 <?php if (form_error('phone')) echo 'has-error'; ?>">
                      <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                          <input type="email" placeholder="Email" class="form-control" name="email" value="<?php echo set_value('email', $row['email']) ?>" required>
                      </div>
                        <?php echo form_error('email', "<small class='help-block'>", '</small>'); ?>
                    </div>
                    <div class="form-group col-md-12 <?php if (form_error('title')) echo 'has-error'; ?>">
                      <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-bars" aria-hidden="true"></i></span>
                          <input type="text" placeholder="Title"  class="form-control" name="title"  value="<?php echo set_value('title', $row['title']);?>" required>
                        </div>
                         <?php echo form_error('title', "<small class='help-block'>", '</small>'); ?>
                    </div>
                    <div class="form-group col-md-12">
                        <textarea placeholder="ý kiến" rows="2" class="form-control"  id="message" name="content" value="<?php echo set_value('content', $row['content']);?>"></textarea>
                    </div>                        
                    <div class="form-group col-md-12">
                        <input type="submit" value="Submit" class="btn btn-danger " name="submit">
                        <input type="reset" value="Reset" class="btn btn-primary " name="reset">
                    </div>
                    <div class="clear"></div> 
                </form>
              </div>
            </div>
        <div class="clear"></div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>