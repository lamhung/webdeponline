

<script type="text/javascript" src="<?php echo vendor_url().'jquery_form/jquery.form.js';?>"></script>


<form class="form-horizontal" enctype="multipart/form-data" method="post" autocomplete="on">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 grid_box1">
            <!-- Form group-->
            <div class="form-group <?php if (form_error('name')) echo 'has-error'; ?>">
                <label for="name" class="col-sm-2 control-label "><?=$this->lang->line('title'); ?></label>
                <div class="col-sm-8">
                    <input class="form-control1" name="name" id="name" placeholder="Enter Name" type="text" value="<?php echo set_value('name', $row['name']) ?>">
                    <?php echo form_error('name', "<small class='help-block'>", '</small>'); ?>
                </div>
            </div><!-- /Form group-->
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label ">Email</label>
                <div class="col-sm-8">
                    <input class="form-control1" name="email" id="email" placeholder="Enter Email" type="text" value="<?php echo set_value('email', $row['email']) ?>">
                </div>
            </div><!-- /Form group-->
            <div class="form-group">
                <label for="hotline" class="col-sm-2 control-label ">Hotline</label>
                <div class="col-sm-8">
                    <input class="form-control1" name="hotline" id="hotline" placeholder="Enter Hotline" type="text" value="<?php echo set_value('hotline', $row['hotline']) ?>">
                </div>
            </div><!-- /Form group-->
            <div class="form-group">
                <label for="phone" class="col-sm-2 control-label "><?=$this->lang->line('config_phone'); ?></label>
                <div class="col-sm-8">
                    <input class="form-control1" name="phone" id="phone" placeholder="Enter Phone" type="text" value="<?php echo set_value('phone', $row['phone']) ?>">
                </div>
            </div><!-- /Form group-->
            <div class="form-group">
                <label for="address" class="col-sm-2 control-label"><?=$this->lang->line('config_address');?></label>
                <div class="col-sm-8">
                    <textarea id="address" class="form-control1" name="address" cols="50" rows="8" placeholder="Enter Address" style="height:100px;"><?php echo set_value('address', $row['address']) ?></textarea>
                </div>
            </div><!-- /Form group-->
            <div class="form-group">
                <label for="slogan" class="col-sm-2 control-label">Slogan</label>
                <div class="col-sm-8">
                    <textarea id="slogan" class="form-control1" name="slogan" cols="50" rows="8" placeholder="Enter Slogan" style="height:100px;"><?php echo set_value('slogan', $row['slogan']) ?></textarea>
                </div>
            </div><!-- /Form group-->
            <div class="form-group">
                <label for="map" class="col-sm-2 control-label ">Tọa độ</label>
                <div class="col-sm-8">
                    <input class="form-control1" name="map" id="map" placeholder="Enter map" type="text" value="<?php echo set_value('map', $row['map']) ?>">
                </div>
            </div><!-- /Form group-->
            <div class="form-group">
                <label for="facebook" class="col-sm-2 control-label ">Facebook</label>
                <div class="col-sm-8">
                    <input class="form-control1" name="facebook" id="facebook" placeholder="Enter Facebook" type="text" value="<?php echo set_value('facebook', $row['facebook']) ?>">
                </div>
            </div><!-- /Form group-->
            <div class="form-group">
                <label for="website" class="col-sm-2 control-label ">Website</label>
                <div class="col-sm-8">
                    <input class="form-control1" name="website" id="website" placeholder="Enter website" type="text" value="<?php echo set_value('website', $row['website']) ?>">
                </div>
            </div><!-- /Form group-->
            <!-- begin seo-->
            <div class="wp_seo">
                <div class="title_form"><p><i class="fa fa-eercast" aria-hidden="true"></i>&nbsp;Nội dung seo</p></div>
                
                <div class="form-group">
                    <label for="website" class="col-sm-2 control-label ">Title</label>
                    <div class="col-sm-8">
                        <input class="form-control1" name="title_meta" id="title_meta" placeholder="Enter Title" type="text" value="<?php echo set_value('title_meta', $row['title_meta']) ?>">
                    </div>
                </div><!-- /Form group-->
                <div class="form-group">
                    <label for="website" class="col-sm-2 control-label ">Keywords</label>
                    <div class="col-sm-8">
                        <input class="form-control1" name="keywords_meta" id="keywords_meta" placeholder="Enter keywords" type="text" value="<?php echo set_value('keywords_meta', $row['keywords_meta']) ?>">
                    </div>
                </div><!-- /Form group-->
                <div class="form-group">
                    <label for="website" class="col-sm-2 control-label ">Description</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" name="description_meta" id="description_meta" cols="50" rows="3" placeholder="Enter Description"  ><?php echo set_value('description_meta', $row['description_meta']) ?></textarea>
                    </div>
                </div><!-- /Form group-->
            </div>
               <!-- end seo-->
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <button class="btn btn_5  btn-danger" type="submit" name="submit" value="submit"><?php echo $this->lang->line('btn_add') ?></button>
                    <button class="btn btn_5  btn-default" type="reset">Reset</button>
                </div>
            </div>
        </div>
    </div>
</form>



