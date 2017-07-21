<div class="row title_content">
    <div class="col-md-4 ">
        <h4><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;Bài viết</h4>
        <p>Quản lí bài viết</p>

    </div>
    <div class="col-md-8 text-right">
        <a class="btn btn_5 btn-lg btn-warning" href="<?php echo base_url('acp/post/add?type='.$type);?>"><i class="fa fa-plus-square-o" aria-hidden="true"></i>&nbsp;<?=$this->lang->line('btn_add_new')?></a>&nbsp;
        <a class="btn btn_5 btn-lg btn-success" href="<?php echo base_url('acp/post?type='.$type);?>"><i class="fa fa-list" aria-hidden="true"></i>
          &nbsp;<?=$this->lang->line('btn_list')?>
        </a>
    </div>
</div><!--/title_content-->
<div class="row_ngang"></div>

<?php 
    $this->load->view('backend/layout/flash');
    if(isset($tmp_man)) {
        $this->load->view($tmp_man);
    }
?>

