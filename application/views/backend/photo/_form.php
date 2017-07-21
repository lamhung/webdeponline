<!--<script src="<?php echo base_url('vendor/ckeditor/ckeditor.js') ?>"></script>-->

<script type="text/javascript" src="<?php echo vendor_url().'jquery_form/jquery.form.js';?>"></script>


<form class="form-horizontal" enctype="multipart/form-data" method="post" autocomplete="on">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 grid_box1">

            <div class="form-group <?php if (form_error('name')) echo 'has-error'; ?>">
                <label for="name" class="col-sm-2 control-label "><?=$this->lang->line('title'); ?></label>
                <div class="col-sm-8">
                    <input class="form-control1" name="name" id="name" placeholder="Enter Name" type="text" value="<?php echo set_value('name', $row['name']) ?>">
                    <?php echo form_error('name', "<small class='help-block'>", '</small>'); ?>
                </div>
            </div><!-- /Form group-->
            <div class="form-group <?php if (form_error('link')) echo 'has-error'; ?>">
                <label for="link" class="col-sm-2 control-label ">Link</label>
                <div class="col-sm-8">
                    <input class="form-control1" name="link" id="link" placeholder="Enter Link" type="text" value="<?php echo set_value('link', $row['link']) ?>">
                    <?php echo form_error('link', "<small class='help-block'>", '</small>'); ?>
                </div>
            </div><!-- /Form group-->
            <div class="form-group <?php if (isset($image_error)) echo 'has-error'; ?>">
                <label for="focusedinput" class="col-sm-2 control-label"><?=$this->lang->line('image');?></label>
                <div class="col-sm-3">
                    <img src="<?php echo $row['image_']; ?>" width = "200"/>
                </div>
                <div class="col-sm-5">
                    <input class="form-control1" id="image" name= 'image' type="file">(Width: <?=$this->width_thumb;?>* Height :<?=$this->height_thumb;?>)
                    <?php
                    if (isset($image_error)) {
                        echo "<small class='help-block'>" . $image_error . '</small>';
                    }
                    ?>
                </div>
            </div><!-- /Form group-->   

            <div class="form-group">
                <label for="description" class="col-sm-2 control-label"><?=$this->lang->line('description');?></label>
                <div class="col-sm-8">
                    <textarea id="description" class="form-control1" name="description" cols="50" rows="8" placeholder="Enter Description" style="height:100px;"><?php echo set_value('description', $row['description']) ?></textarea>
                </div>
            </div><!-- /Form group-->
            <div class="form-group ">
                <label for="sort_order" class="col-sm-2 control-label"><?php echo $this->lang->line('sort_order') ?></label>
                <div class="col-sm-8">
                    <input class="form-control1" name="sort_order" id="sort_order" placeholder="Enter Sort Order" value="<?php echo set_value('sort_order', $row['sort_order']) ?>" type="text">
                </div>
            </div><!-- /Form group-->
            <div class="form-group">
                <label for="status" class="col-sm-2 control-label"><?php echo $this->lang->line('category_status') ?></label>
                <div class="col-sm-8">
                    <div class="radio-inline"><label><input type="radio" name="status" value="1" <?php echo set_radio('status', 1, $row['status'] == 1) ?>><?=$this->lang->line('status_1');?></label></div>
                    <div class="radio-inline"><label><input type="radio" name="status" value="0" <?php echo set_radio('status', 0, $row['status'] == 0) ?>><?=$this->lang->line('status_0');?></label></div>
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



