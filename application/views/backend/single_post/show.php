<div class="tab-content form_content">
    <div class="title_form">
        <p><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Chi tiết Bài viết</p>
    </div>
    <div id="horizontal-form" class="tab-pane active">
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <tbody>
                    <tr class="active">
                        <td class="col-md-1 text-right"><?php echo $this->lang->line('image'); ?> :</td>
                        <td class="col-md-11"><img width="200" src="<?php echo $row['image_'];?>" /></td>
                    </tr>
                    <tr class="active">
                        <td class="col-md-1 text-right"><?php echo $this->lang->line('title'); ?> :</td>
                        <td class="col-md-11"><?php echo $row['name']; ?></td>
                    </tr>
                    <tr class="active">
                        <td class="col-md-1 text-right"><?php echo $this->lang->line('description'); ?> :</td>
                        <td class="col-md-11"><?php echo $row['description']; ?></td>
                    </tr>
                    <tr class="active">
                        <td class="col-md-1 text-right"><?php echo $this->lang->line('content'); ?> :</td>
                        <td class="col-md-11"><?php echo $row['content']; ?></td>
                    </tr>
                    <tr class="active">
                        <td class="col-md-1 text-right"><?php echo $this->lang->line('user_status'); ?> :</td>
                        <td class="col-md-11"><?php echo $row['status_']; ?></td>
                    </tr>
                    <tr class="active">
                        <td class="col-md-1 text-right"><?php echo $this->lang->line('user_create_at'); ?> :</td>
                        <td class="col-md-11"><?php echo $row['created_']; ?></td>
                    </tr>        
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-md-offset-5">
                
                <a href="<?php echo base_url('acp/single_post/edit?type='.$type); ?>" class="btn btn-warning btn-md"><?php echo $this->lang->line('btn_edit') ?></a>
                
            </div>
        </div>
    </div>
</div>