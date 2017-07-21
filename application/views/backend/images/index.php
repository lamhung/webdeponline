<link href="<?=backend_url();?>css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="<?=backend_url();?>css/my_style.css" rel='stylesheet' type='text/css' />
<div id="image_up <?php if (isset($image_error)) echo 'has-error'; ?>" class="form-group">
    <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
        <div class="col-sm-4">
            <input class="form-control1" id="images" name= 'images[]' type="file" multiple>
        </div>
       
        <?php
        if (isset($image_error)) {
            echo "<small class='help-block'>" . $image_error . '</small>';
        }
        ?>
<!--        <input type="file" name="images[]" id="images"  />-->
        <input type="submit" name="submit" id="submit" value="Up Load" class="btn_submit" />
    </form>
</div>
<?php $this->load->view('backend/images/list');?>
