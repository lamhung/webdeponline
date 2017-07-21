<!--<script src="<?php echo base_url('vendor/ckeditor/ckeditor.js') ?>"></script>-->

<script type="text/javascript" src="<?php echo vendor_url().'jquery_form/jquery.form.js';?>"></script>


<form class="form-horizontal" enctype="multipart/form-data" method="post" autocomplete="on">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 grid_box1">
            <?php 
                if(isset($this->config_list) && $this->config_list == 'true') {
            ?>
            <div class="form-group <?php if (form_error('list_id')) echo 'has-error'; ?>"">
                <label for="list_id" class="col-sm-1 control-label"><?=$this->lang->line('category'); ?> 1</label>
                <div class="col-sm-8">
                    <select name="list_id" id="list_id" class="form-control1 list_id">
                        <option value="">--Vui lòng chọn danh mục</option>
                        <?php
                        foreach ($rows_list as $row_list) {
                            ?>
                            <option value="<?= $row_list['id'] ?>" <?php echo set_select('list_id', $row_list['id'], $row_list['id'] == $row['list_id']); ?>><?= $row_list['name']; ?></option>
                        <?php } ?>
                    </select>
                    <?php echo form_error('list_id', "<small class='help-block'>", '</small>'); ?>
                </div>
            </div><!-- /Form group-->
            <?php } ?>
            <?php 
                if(isset($this->config_cat) && $this->config_cat == 'true') {
            ?>
            <div class="form-group <?php if (form_error('cat_id')) echo 'has-error'; ?>"">
                <label for="cat_id" class="col-sm-1 control-label"><?=$this->lang->line('category'); ?> 2</label>
                <div class="col-sm-8">
                    <select name="cat_id" id="cat_id" class="form-control1">
                        <option value="">--Vui lòng chọn danh mục</option>
                        
                    </select>
                    <?php echo form_error('cat_id', "<small class='help-block'>", '</small>'); ?>
                </div>
            </div><!-- /Form group-->
            <?php } ?>
            <!-- Form group-->
            <div class="form-group <?php if (form_error('name')) echo 'has-error'; ?>">
                <label for="name" class="col-sm-1 control-label "><?=$this->lang->line('title'); ?></label>
                <div class="col-sm-8">
                    <input class="form-control1" name="name" id="name" placeholder="Enter Name" type="text" value="<?php echo set_value('name', $row['name']) ?>">
                    <?php echo form_error('name', "<small class='help-block'>", '</small>'); ?>
                </div>
            </div><!-- /Form group-->
            <div class="form-group <?php if (isset($image_error)) echo 'has-error'; ?>">
                <label for="focusedinput" class="col-sm-1 control-label"><?=$this->lang->line('image');?></label>
                <div class="col-sm-2">
                    <img src="<?php echo $row['image_']; ?>" width = "150"/>
                </div>
                <div class="col-sm-6">
                    <input class="form-control1" id="image" name= 'image' type="file">(Width: <?=!empty($this->width_thumb) ? $this->width_thumb : 0;?>* Height :<?=!empty($this->height_thumb) ? $this->height_thumb : 0;?>)
                    <?php
                    if (isset($image_error)) {
                        echo "<small class='help-block'>" . $image_error . '</small>';
                    }
                    ?>
                </div>
            </div><!-- /Form group-->
            <?php /*
            <div class="form-group">
                <label for="content" class="col-sm-1 control-label"><?=$this->lang->line('image_attach');?></label>
                <div class="col-sm-10">
                    <fieldset style="border:1px solid #CCC;" dir="rtl" >
                        <legend style="font-size:14px;  padding:0 10px 0 10px;"> Chỉ tải lên các hình có định dạng là <strong>jpg | png | gif</strong> và không vượt quá 5MB</legend>
                        <iframe name="image_iframe" id="image_iframe" width="100%" scrolling="yes" frameborder="0" style="min-height:200px" src="<?php echo base_url('acp/image?table_name=article&table_id='.$row['id'].'&type=article');?>"></iframe>
                     </fieldset>
                </div>
            </div><!-- /Form group-->
            
            <div class="form-group <?php if (form_error('price')) echo 'has-error'; ?>">
                <label for="price" class="col-sm-1 control-label "><?php echo $this->lang->line('product_price') ?></label>
                <div class="col-sm-8">
                    <input class="form-control1" name="price" id="price" placeholder="Enter Price" type="text" value="<?php echo set_value('price', $row['price']) ?>">
                    <?php echo form_error('price', "<small class='help-block'>", '</small>'); ?>
                </div>
            </div><!-- /Form group-->
            <div class="form-group <?php if (form_error('old_price')) echo 'has-error'; ?>">
                <label for="old_price" class="col-sm-1 control-label "><?php echo $this->lang->line('product_old_price') ?></label>
                <div class="col-sm-8">
                    <input class="form-control1" name="old_price" id="old_price" placeholder="Enter Old Price" type="text" value="<?php echo set_value('old_price', $row['old_price']) ?>">
                    <?php echo form_error('old_price', "<small class='help-block'>", '</small>'); ?>
                </div>
            </div><!-- /Form group-->
            */?>
            <?php if(!empty($this->config_link) && $this->config_link == 'true') {?>
            <div class="form-group <?php if (form_error('link')) echo 'has-error'; ?>">
                <label for="link" class="col-sm-1 control-label ">Link</label>
                <div class="col-sm-8">
                    <input class="form-control1" name="link" id="link" placeholder="Enter link" type="text" value="<?php echo set_value('link', $row['link']) ?>">
                    <?php echo form_error('link', "<small class='help-block'>", '</small>'); ?>
                </div>
            </div><!-- /Form group-->
            <?php } ?>
            <div class="form-group">
                <label for="description" class="col-sm-1 control-label"><?=$this->lang->line('description');?></label>
                <div class="col-sm-8">
                    <textarea id="description" class="form-control1" name="description" cols="50" rows="8" placeholder="Enter Description" style="height:100px;"><?php echo set_value('description', $row['description']) ?></textarea>
                </div>
            </div><!-- /Form group-->
            <div class="form-group">
                <label for="content" class="col-sm-1 control-label"><?=$this->lang->line('content');?></label>
                <div class="col-sm-11">
                    <textarea name="content" id="textarea_ckeditor" cols="90" rows="10" class="form-control1 ckeditor">
                        <?php echo set_value('content', $row['content']) ?>
                    </textarea>
                    <fieldset style="border:1px solid #CCC;" dir="rtl" >
                        <legend style="font-size:14px;  padding:0 10px 0 10px;"> Chỉ tải lên các hình có định dạng là <strong>jpg | png | gif</strong> và không vượt quá 5MB</legend>
                        <iframe name="image_iframe" id="image_iframe" width="100%" scrolling="yes" frameborder="0" style="min-height:200px" src="<?php echo base_url('acp/image?table_name=article&table_id='.$row['id'].'&type=post');?>"></iframe>
                     </fieldset>
                </div>
            </div><!-- /Form group-->
            <div class="form-group ">
                <label for="sort_order" class="col-sm-1 control-label"><?php echo $this->lang->line('sort_order') ?></label>
                <div class="col-sm-8">
                    <input class="form-control1" name="sort_order" id="sort_order" placeholder="Enter Sort Order" value="<?php echo set_value('sort_order', $row['sort_order']) ?>" type="text">
                </div>
            </div><!-- /Form group-->
            <div class="form-group">
                <label for="status" class="col-sm-1 control-label"><?php echo $this->lang->line('category_status') ?></label>
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
<script type="text/javascript">

    $(document).ready(function () {
        var list_id = $("#list_id").val();
//        var cat_id = $("#cat_id").val();
        if(list_id != ""){
            load_cat(list_id);
        }
        $("#list_id").change(function () {
            var list_id = $(this).val();
            
                load_cat(list_id);
            
        })

    });
    function load_cat(list_id) {
        // alert('adasd');
        $.ajax({
            type: "POST",
            url: "<?= base_url('acp/article/ajax_load_cate?type=' . $type); ?>",
            data: {list_id: list_id},
            success: function (result) {
                $("#cat_id").html(result);
            }
        });
    }
    
    
</script>


