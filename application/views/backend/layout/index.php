<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view('backend/layout/head'); ?>
    </head>
    <body class="sticky-header <?php//left-side-collapsed?>">
        <section>
            <?php $this->load->view('backend/layout/left');?>
            <!-- left side start-->
            <div class="main-content main-content1">
                <?php $this->load->view('backend/layout/header');?>
                <div id="page-wrapper">
                    <?php 
                        $this->load->view($tmp);
                    ?>
                </div>
            </div>
            <footer>
                <?php $this->load->view('backend/layout/footer');?>
            </footer>
        </section>
    
        <script src="<?=backend_url();?>js/jquery.nicescroll.js"></script>
        <script src="<?=backend_url();?>js/scripts.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="<?=backend_url();?>js/bootstrap.min.js"></script>
        <script src="<?=vendor_url();?>bootstrap_datepicker/js/bootstrap-datepicker.min.js"></script>
        

        <div id="ascrail2000" class="nicescroll-rails" style="width: 5px; z-index: 1000; background: rgb(66, 79, 99) none repeat scroll 0% 0%; cursor: default; position: fixed; top: 0px; height: 100%; right: 0px; opacity: 0;">
        <div id="ascrail2000-hr" class="nicescroll-rails" style="height: 5px; z-index: 1000; background: rgb(66, 79, 99) none repeat scroll 0% 0%; position: fixed; left: 0px; width: 100%; bottom: 0px; cursor: default; display: none; opacity: 0;">
        <div id="ascrail2001" class="nicescroll-rails" style="width: 3px; z-index: 100; background: rgb(66, 79, 99) none repeat scroll 0% 0%; cursor: default; position: fixed; top: 0px; left: 49px; height: 275px; display: none; opacity: 0;">
        <div id="ascrail2001-hr" class="nicescroll-rails" style="height: 3px; z-index: 100; background: rgb(66, 79, 99) none repeat scroll 0% 0%; top: 272px; left: 0px; position: fixed; cursor: default; display: none; opacity: 0; width: 49px;">
        <script>
        $(document).ready(function(){
            $(".status").change(function(){
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('acp/change_status');?>",
                    data:{
                        id: $(this).attr("data-val0"),
                        table: $(this).attr("data-val1"),
                        column: $(this).attr("data-val2"),
                    },
                    success: function (result) {
                        // alert(result);
                    }
                });
            });

            $(".sort_order").change(function(){
                val = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "<?=base_url('acp/change_sort_order');?>",
                    data:{
                        id: $(this).attr("data-val0"),
                        table: $(this).attr("data-val1"),
                        value : val,
                    },
                    success: function (result) {
                        alert("Đã cập nhật thứ tự");
                    }
                });
            });
        });
        
    </script>
    </body>
</html>

