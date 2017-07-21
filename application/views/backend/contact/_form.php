<!--<script src="<?php //echo base_url('vendor/ckeditor/ckeditor.js') ?>"></script>-->

<script type="text/javascript" src="<?php echo vendor_url().'jquery_form/jquery.form.js';?>"></script>


<form class="form-horizontal" enctype="multipart/form-data" method="post" autocomplete="on">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 grid_box1">
            <!-- Form group-->
            <div class="form-group <?php if (form_error('name')) echo 'has-error'; ?>">
                <label for="name" class="col-sm-2 control-label "><?=$this->lang->line('user_fullname'); ?></label>
                <div class="col-sm-8">
                    <input class="form-control1" name="name" id="name" placeholder="Enter Name" type="text" value="<?php echo set_value('name', $row['name']) ?>">
                    <?php echo form_error('name', "<small class='help-block'>", '</small>'); ?>
                </div>
            </div><!-- /Form group-->
            <div class="form-group <?php if (form_error('phone')) echo 'has-error'; ?>">
                <label for="phone" class="col-sm-2 control-label "><?=$this->lang->line('user_phone'); ?></label>
                <div class="col-sm-8">
                    <input class="form-control1" name="phone" id="phone" placeholder="Enter phone" type="text" value="<?php echo set_value('phone', $row['phone']) ?>">
                    <?php echo form_error('phone', "<small class='help-block'>", '</small>'); ?>
                </div>
            </div><!-- /Form group-->
            <div class="form-group <?php if (form_error('email')) echo 'has-error'; ?>">
                <label for="email" class="col-sm-2 control-label "><?=$this->lang->line('user_email'); ?></label>
                <div class="col-sm-8">
                    <input class="form-control1" name="email" id="email" placeholder="Enter email" type="text" value="<?php echo set_value('email', $row['email']) ?>">
                    <?php echo form_error('email', "<small class='help-block'>", '</small>'); ?>
                </div>
            </div><!-- /Form group-->
            <div class="form-group <?php if (form_error('title')) echo 'has-error'; ?>">
                <label for="title" class="col-sm-2 control-label "><?=$this->lang->line('title'); ?></label>
                <div class="col-sm-8">
                    <input class="form-control1" name="title" id="title" placeholder="Enter Title" type="text" value="<?php echo set_value('title', $row['title']) ?>">
                    <?php echo form_error('title', "<small class='help-block'>", '</small>'); ?>
                </div>
            </div><!-- /Form group-->
            <div class="form-group">
                <label for="content" class="col-sm-2 control-label"><?=$this->lang->line('content');?></label>
                <div class="col-sm-10">
                    <textarea name="content" id="textarea_ckeditor" cols="90" rows="20" class="form-control1 ">
                        <?php echo set_value('content', $row['content']) ?>
                    </textarea>
                    <!-- <fieldset style="border:1px solid #CCC;" dir="rtl" >
                        <legend style="font-size:14px;  padding:0 10px 0 10px;"> Chỉ tải lên các hình có định dạng là <strong>jpg | png | gif</strong> và không vượt quá 5MB</legend>
                        <iframe name="image_iframe" id="image_iframe" width="100%" scrolling="yes" frameborder="0" style="min-height:200px" src="<?php echo base_url('acp/image?table_name=post&table_id='.$row['id'].'&type=post');?>"></iframe>
                     </fieldset> -->
                </div>
            </div><!-- /Form group-->
            <div class="form-group ">
                <label for="sort_order" class="col-sm-2 control-label"><?php echo $this->lang->line('sort_order') ?></label>
                <div class="col-sm-8">
                    <input class="form-control1" name="sort_order" id="sort_order" placeholder="Enter Sort Order" value="<?php echo set_value('sort_order', $row['sort_order']) ?>" type="text">
                </div>
            </div><!-- /Form group-->
           
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <button class="btn btn_5  btn-danger" type="submit" name="submit" value="submit"><?php echo $this->lang->line('btn_add') ?></button>
                    <button class="btn btn_5  btn-default" type="reset">Reset</button>
                </div>
            </div>
        </div>
    </div>
</form>



