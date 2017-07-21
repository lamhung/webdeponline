<div class="col-md-12" style="padding-left: 0px;padding-right: 0px;">
    <div class="xs">
        <div class="bs-example4" data-example-id="simple-responsive-table">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr class="success" align="center">

                            <th><?php echo $this->lang->line('sort_order'); ?></th>
                            <?php 
                                if(isset($this->config_list) && $this->config_list == 'true') {
                            ?>
                            <th><?php echo $this->lang->line('category'); ?> 1</th>
                            <?php }?>
                            <?php 
                                if(isset($this->config_cat) && $this->config_cat == 'true') {
                            ?>
                            <th><?php echo $this->lang->line('category'); ?> 2</th>
                            <?php }?>
                            <th><?php echo $this->lang->line('title'); ?></th>
                            
                            <th><?php echo $this->lang->line('image'); ?></th>
                            <th>SP Nổi bật</th>
                            <th>Mới</th>
                            <th><?php echo $this->lang->line('status'); ?></th>
                            <th>Hành Động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($rows as $row) {
                            $row = $this->article_model->convert_data($row);
                            ?>
                            <tr>

                                <td>
                                    <input type="number" name="sort_order" class="sort_order" value="<?php echo $row['sort_order'] ?>" id="sort_order" style="width: 50px;" min="1" data-val0="<?=$row['id']?>" data-val1="article">
                                   
                                </td>
                                <?php 
                                    if(isset($this->config_list) && $this->config_list == 'true') {
                                ?>
                                <td><?php echo $row['category_list_']; ?></td>
                                 <?php }?>
                                <?php 
                                    if(isset($this->config_cat) && $this->config_cat == 'true') {
                                ?>
                                <td><?php echo $row['category_cat_']; ?></td>
                                <?php }?>
                                <td><?php echo $row['name'] ?></td>
                                <td><img width="40" src="<?= $row['image_']; ?>"/></td>
                                <td>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" class="btn btn-xs btn-info status" data-toggle="toggle" data-size="mini" name='' data-val0="<?=$row['id']?>" data-val1="article" data-val2="highlight"  value="" <?php if($row['highlight'] ==1)echo "checked = 'checked'";?> >
                                    </label>
                                </td>
                                <td>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" class="btn btn-xs btn-info status" data-toggle="toggle" data-size="mini" name='' data-val0="<?=$row['id']?>" data-val1="article" data-val2="highlight1"  value="" <?php if($row['highlight1'] ==1)echo "checked = 'checked'";?> >
                                    </label>
                                </td>
                                
                                <td>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" class="btn btn-xs btn-info status" data-toggle="toggle" data-size="mini" name='' data-val0="<?=$row['id']?>" data-val1="article" data-val2="status"  value="" <?php if($row['status'] ==1)echo "checked = 'checked'";?> >
                                    </label>
                                </td>
                                <td align="center">
                                    <!--<a href="<?php //echo base_url('acp/product/show/' . $row['id'] . '?type=' . $type); ?>"><i class="fa fa-indent icon_ac action" aria-hidden="true" title="Xem" style="color: #246AA5"></i></a>-->
                                    <a href="<?php echo base_url('acp/article/edit/' . $row['id'] . '?type=' . $type); ?>"><i class="fa fa-pencil-square-o icon_ac action" aria-hidden="true" title="Xem" style="color: #E6C31D"></i></a>
                                    <a href="<?php echo base_url('acp/article/delete/' . $row['id'] . '?type=' . $type); ?>" onClick="if (!confirm('Xác nhận xóa'))
                                                    return false;"><i class="fa fa-trash-o icon_ac action" aria-hidden="true" title="Xóa" style="color: #C31818"></i></a>

                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div><!-- /.table-responsive -->
            <!-- phân trang -->
            <div class="text-center">
                <?php echo $this->pagination->create_links(); ?>
            </div>
        </div>
    </div>
</div>
<!-- <script>
    $(document).ready(function(){
     
    });
    function change_status(id) {
        $.ajax({
            type: "POST",
            url: "<?= base_url('acp/product/ajax_change_status');?>",
            data: {id: id},
            success: function (result) {
//                alert('cập nhật thành công');
            }
        });
    }
    function change_sort_order(id,value) {
        $.ajax({
            type: "POST",
            url: "<?= base_url('acp/product/change_sort_order');?>",
            data: {id: id, sort_order:value},
            success: function (result) {
//                alert('cập nhật thành công');
            }
        });
    }
</script> -->