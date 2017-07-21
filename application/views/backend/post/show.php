<div class="tab-content form_content">
    <div class="title_form">
        <p><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Chi tiết sản phẩm</p>
    </div>
    <div id="horizontal-form" class="tab-pane active">
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <tbody>
                    <tr class="active">
                        <td class="col-md-2 text-right"><?php echo $this->lang->line('left_category');?> 1 :</td>
                        <td class="col-md-10"><?php echo $row['category_list_'];?></td>
                    </tr>
                    <tr class="active">
                        <td class="col-md-2 text-right"><?php echo $this->lang->line('left_category');?> 2 :</td>
                        <td class="col-md-10"><?php echo $row['category_cat_'];?></td>
                    </tr>
                    <tr class="active">
                        <td class="col-md-2 text-right"><?php echo $this->lang->line('category_image'); ?> :</td>
                        <td class="col-md-10"><img width="200" src="<?php echo $row['image_'];?>" /></td>
                    </tr>
                    <tr class="active">
                        <td class="col-md-2 text-right"><?php echo $this->lang->line('category_name'); ?> :</td>
                        <td class="col-md-10"><?php echo $row['name']; ?></td>
                    </tr>
                    <tr class="active">
                        <td class="col-md-2 text-right"><?php echo $this->lang->line('product_price'); ?> :</td>
                        <td class="col-md-10"><?php echo number_format($row['price'],0); ?> VNĐ</td>
                    </tr>
                    <tr class="active">
                        <td class="col-md-2 text-right"><?php echo $this->lang->line('product_old_price'); ?> :</td>
                        <td class="col-md-10"><?php echo number_format($row['old_price'],0); ?> VNĐ</td>
                    </tr>
                    <tr class="active">
                        <td class="col-md-2 text-right"><?php echo $this->lang->line('category_sort_order'); ?> :</td>
                        <td class="col-md-10"><?php echo $row['sort_order']; ?></td>
                    </tr>
                    <tr class="active">
                        <td class="col-md-2 text-right"><?php echo $this->lang->line('user_status'); ?> :</td>
                        <td class="col-md-10"><?php echo $row['status_']; ?></td>
                    </tr>
                    <tr class="active">
                        <td class="col-md-2 text-right"><?php echo $this->lang->line('user_create_at'); ?> :</td>
                        <td class="col-md-10"><?php echo $row['created_']; ?></td>
                    </tr>        
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-md-offset-5">
                <a href="<?php echo base_url('acp/category_cat?type='.$type); ?>" class="btn btn-info active"><?php echo $this->lang->line('btn_back') ?></a>
                <a href="<?php echo base_url('acp/category_cat/edit/'.$row['id'].'?type='.$type); ?>" class="btn btn-warning btn-md"><?php echo $this->lang->line('btn_edit') ?></a>
                <a href="<?php echo base_url('acp/category_cat/delete/' . $row['id'].'?type='.$type); ?>" class="btn btn-danger btn-md" onclick="return confirm('Are you sure?');"><?php echo $this->lang->line('btn_delete') ?></a>
            </div>
        </div>
    </div>
</div>