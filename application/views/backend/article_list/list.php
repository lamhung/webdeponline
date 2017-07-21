<div class="col-md-12" style="padding-left: 0px;padding-right: 0px;">
    <div class="xs">
        <div class="bs-example4" data-example-id="simple-responsive-table">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr class="success" align="center">
                           
                            <th><?php echo $this->lang->line('sort_order'); ?></th>
                            <th><?php echo $this->lang->line('title'); ?></th>
                            <?php 
                                if(isset($this->config_image) && $this->config_image == 'true') {
                            ?>
                            <th><?php echo $this->lang->line('image'); ?></th>
                            <?php } ?>
                            <th><?php echo $this->lang->line('status'); ?></th>
                            <th><?php echo $this->lang->line('action'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                        foreach ($rows as $row) {
                            $row = $this->article_list_model->convert_data($row);
                            ?>
                            <tr>
                                
                                <td>
                                    <input type="number" name="sort_order" class="sort_order" value="<?php echo $row['sort_order'] ?>" id="sort_order" style="width: 50px;" min="1" data-val0="<?=$row['id']?>" data-val1="product_article_list">
                                </td>
                                <td><?php echo $row['name'] ?></td>
                                <?php 
                                    if(isset($this->config_image) && $this->config_image == 'true') {
                                ?>
                                <td><img width="100" src="<?=$row['image_'];?>"/></td>
                                <?php }?>
                                <td>                           
                                    <label class="checkbox-inline">
                                        <input type="checkbox" class="btn btn-xs btn-info status" data-toggle="toggle" data-size="mini" name='' data-val0="<?=$row['id']?>" data-val1="product_article_list" data-val2="status"  value="" <?php if($row['status'] ==1)echo "checked = 'checked'";?> >
                                    </label>
                                </td>
                                <td align="center">
                                    
                                    <a href="<?php echo base_url('acp/article_list/edit/'. $row['id'].'?type='.$type); ?>"><i class="fa fa-pencil-square-o icon_ac action" aria-hidden="true" title="Sửa" style="color: #E6C31D"></i></a>
                                    <a href="<?php echo base_url('acp/article_list/delete/'.$row['id'].'?type='.$type); ?>" onClick="if (!confirm('Xác nhận xóa'))
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