<div class="col-md-4">
    <?php $this->load->view('backend/product_category/add');?>
</div>
<div class="col-md-8" style="padding-left: 0px;padding-right: 0px;">
    <div class="xs">
        <div class="bs-example4 form_content" data-example-id="simple-responsive-table">
            <div class="title_form">
                <p><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Danh mục sản phẩm</p>
            </div>
            <div class='wp_category' id="menu_wrapper">
               
                <?php
                    $this->product_category_model->showCategory_list($rows);
                ?>
            </div>
            
            <!-- phân trang -->
            <div class="text-center">
                <?php echo $this->pagination->create_links(); ?>
            </div>
        </div>
    </div>
</div>
<script language="javascript">
 $(document).ready(function(){

    $('#menu_wrapper ul li ul').hide();
    $('#menu_wrapper ul li:eq(0) ul').show();
    $('#menu_wrapper ul li div').click(function(){
        var tmp = $(this).next('ul');
        
        if ($(tmp).is(':visible')){
            $(tmp).hide();
        }
        else{
            $(tmp).show();
        }
        return false;
    }); 
 });
</script>