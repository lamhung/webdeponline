<div class="tab-content form_content">
    <div class="title_form">
        <p><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Chi tiết Danh mục</p>
    </div>
    <div id="horizontal-form" class="tab-pane active">
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <tbody>
                    <tr class="active">
                        <td class="col-md-2 text-right"><?php echo $this->lang->line('category_name'); ?> :</td>
                        <td class="col-md-10"><?php echo $row['name']; ?></td>
                    </tr>
                    <tr class="active">
                        <td class="col-md-2 text-right"><?php echo $this->lang->line('category_image'); ?> :</td>
                        <td class="col-md-10"><img width="200" src="<?php echo $row['image_'];?>" /></td>
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
                <a href="<?php echo base_url('acp/category_list?type='.$type); ?>" class="btn btn-info active"><?php echo $this->lang->line('btn_back') ?></a>
                <a href="<?php echo base_url('acp/category_list/edit/'.$row['id'].'?type='.$type); ?>" class="btn btn-warning btn-md"><?php echo $this->lang->line('btn_edit') ?></a>
                <a href="<?php echo base_url('acp/category_list/delete/' . $row['id'].'?type='.$type); ?>" class="btn btn-danger btn-md" onclick="return confirm('Are you sure?');"><?php echo $this->lang->line('btn_delete') ?></a>
            </div>
        </div>
    </div>
</div>