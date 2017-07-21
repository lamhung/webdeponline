<?php 
    if($this->session->userdata('article_cat_id')){
       $cat_id =  $this->session->userdata('article_cat_id');

    }else {$cat_id="";}
    
?>
 <option value="">--Vui lòng chọn danh mục</option>
<?php
    foreach ($rows_cat as $row_cat) {
?>
    <option value="<?=$row_cat['id']?>" <?php echo  set_select('cat_id', $row_cat['id'], $row_cat['id'] == $cat_id);?>><?=$row_cat['name'];?></option>
<?php } ?>
