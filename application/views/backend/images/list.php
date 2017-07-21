<div id="list_images">
    <?php
    foreach ($images as $image) {
        ?>
        <div class="wrapper_image">
            <div class="img"><img src="<?php echo base_url('upload/' . $image['path_folder'] . '/thumbnail/' . $image['file_name']); ?>" width="100"> </div>
            <div class="ac_img">
                <p>
                    <?php 
                      if($image['type'] == 'post') {  
                    ?>
                    <span class="button"><a href="javascript:parent.insertImage('<?php echo base_url('upload/' . $image['path_folder'] . '/' . $image['file_name']); ?>')" class="insert_image">IMG</a></span>
                      <?php }?>
                    <span class="button"><a href="javascript:parent.deleteImage('<?php echo base_url('upload/' . $image['path_folder'] . '/' . $image['file_name']); ?>')" onclick="return ajax_delete_image(<?=$image['id'];?>)" class="delete_image">Xóa</a></span>
                </p>
            </div>
        </div>
        <?php
    }
    ?>
</div> 
<script src="<?=backend_url();?>js/jquery-1.10.2.min.js"></script>

<script>
    
    function ajax_delete_image(id) {
        $.ajax({
            type: "POST",
            url: "<?= base_url('acp/image/detete'); ?>",
            data: {id: id},
            success: function (result) {
                $("#list_images").html(result);
            }
        });
    }
    
</script>