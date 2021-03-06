<form class="form-horizontal" enctype="multipart/form-data" method="post" autocomplete="on">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 grid_box1">
            <div class="form-group ">
                <label for="name" class="col-sm-3 control-label ">Danh mục cha</label>
                
                <div class="col-sm-9">
                    <select name="parent_id" id="parent_id" class="form-control1">
                        <option value="0">None</option>
                        <?php $this->product_category_model->showCategory($rows,$row['parent_id'],$row['id']);?>
                    </select>
                    
                </div>
            </div><!-- end Form group-->
            <!-- Form group-->
            <div class="form-group <?php if (form_error('name')) echo 'has-error'; ?>">
                <label for="name" class="col-sm-3 control-label "><?php echo $this->lang->line('title') ?></label>
                <div class="col-sm-9">
                    <input class="form-control1" name="name" id="name" placeholder="Enter Name" type="text" value="<?php echo set_value('name', $row['name']) ?>">
                    <?php echo form_error('name', "<small class='help-block'>", '</small>'); ?>
                </div>
            </div><!-- /Form group-->
            <div class="form-group <?php if (isset($image_error)) echo 'has-error'; ?>">
                <label for="focusedinput" class="col-sm-3 control-label"><?php echo $this->lang->line('user_image') ?></label>
                <div class="col-sm-9">
                    <input class="form-control1" id="image" name= 'image' type="file">(Width: <?=!empty($this->width_thumb) ? $this->width_thumb : 0;?>* Height :<?=!empty($this->height_thumb) ? $this->height_thumb : 0;?>)
                    <?php
                    if (isset($image_error)) {
                        echo "<small class='help-block'>" . $image_error . '</small>';
                    }
                    ?>
                </div>
                <div class="col-md-offset-3 col-sm-9">
                    <img src="<?php echo $row['image_']; ?>" width = "150"/>
                </div>
                
            </div><!-- /Form group-->
            <div class="form-group ">
                <label for="sort_order" class="col-sm-3 control-label"><?php echo $this->lang->line('sort_order') ?></label>
                <div class="col-sm-9">
                    <input class="form-control1" name="sort_order" id="sort_order" placeholder="Enter Sort Order" value="<?php echo set_value('sort_order', $row['sort_order']) ?>" type="text">
                </div>
            </div><!-- /Form group-->
            <div class="form-group">
                <label for="status" class="col-sm-2 control-label"><?php echo $this->lang->line('category_status') ?></label>
                <div class="col-sm-9">
                    <div class="radio-inline"><label><input type="radio" name="status" value="1" <?php echo set_radio('status', 1, $row['status'] == 1) ?>> Hoạt động</label></div>
                    <div class="radio-inline"><label><input type="radio" name="status" value="0" <?php echo set_radio('status', 0, $row['status'] == 0) ?>>Bị khóa</label></div>
                </div>
            </div><!-- /Form group-->
            <div class="row">
                <div class="col-sm-9 col-sm-offset-2">
                    <button class="btn btn_5  btn-danger" type="submit" name="submit" value="submit"><?php echo $this->lang->line('btn_add') ?></button>
                    <button class="btn btn_5  btn-default" type="reset">Reset</button>
                </div>
            </div>
        </div>
    </div>
</form>
