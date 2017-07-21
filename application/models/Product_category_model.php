<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_category_model extends MY_Model {
    function __construct() {
        parent::__construct('product_category');
    }
    function defaut_value() {
        return $data = array(
            'id' => "",
            'name' => "",
            'site_title' => "",
            'image_' => backend_url() . "images/clipping_pictures.png",
            'sort_order' => "",
            'parent_id' => "",
            'status' => 1,
        );
        
    }
    function convert_data($data = array()) {
        if (!empty($data['image'])) {
            $data['image_'] = base_url() . "upload/category/thumbnail/" . $data['image'];
        } else {
            $data['image_'] = backend_url() . "images/clipping_pictures.png";
        }
        $data['status_'] = $this->lang->line('category_status_' . $data['status']);
        if (isset($data['created'])) {
            $data['created_'] = date('d/m/Y', $data['created']);
        }
        return $data;
    }

    function showCategory($categories = array(),$row_prid,$row_id ,$parent_id = 0, $char='',$stt = 0) {
        $cate_child = array();
        // echo $row_id;exit;
        // print_r($categories );
       

        foreach($categories as $key => $row){
            if($row['parent_id']  == $parent_id) {
                $cate_child[]  = $row;

                unset($categories[$key]);
            }
               
        }
       
        // print_r( $cate_child);
        if($cate_child) {
            $class_option = '';
            $selected = '';
            $disabled ='';
            if($stt ==0) {
                $class_option = 'category_cap1';
            }else {
                
            }

            foreach ($cate_child as $key => $row) {
               // echo $row_id;
                
                if( $row_id ==  $row['id']) { 
                    $disabled = 'disabled'; 
                    
                }
                if($row['parent_id'] == $row_id ) { 
                    $disabled = 'disabled'; 
                }

                $selected = set_select('parent_id', $row['id'], $row['id'] == $row_prid);
               echo "<option value=".$row['id']." ". $selected." class='".$class_option."' $disabled>";
                    echo $char.$row['name']; 
               echo "</option>";
               $this->showCategory($categories, $row_prid, $row_id, $row['id'],$char.'|--&nbsp;',++$stt );
            }
        }
    }
    function showCategory_list($categories = array(), $parent_id = 0, $char='',$stt = 0) {
        $cate_child = array();
        
        foreach($categories as $key => $row){
            if($row['parent_id']  == $parent_id) {
                $cate_child[]  = $row;
                unset($categories[$key]);
            }
        }

        if($cate_child) {
            $cate = '';
            $cate_ul = '';
            $caret_right = '';
            if($stt ==0) {
                $cate = ' ';
                $cate_ul = '';
                $cate_data = "";
            }else {
                

            }
            echo "<ul class='".$cate_ul." ' >";
            foreach ($cate_child as $key => $row) {
               
                   echo "<li class='".$cate."'>";
                        echo "<div><a href='#' class='dropdown_a'>".$char.$row['name']."<i class='caret pull-right'></i></a>";
                        echo "</div>";

                        $this->showCategory_list($categories, $row['id'],$char,++$stt);
                        echo '<p><a class="btn btn-warning btn-xs" href='.base_url("acp/product_category/edit/" . $row['id']."?type=" . $row['type']).'><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;Sửa</a>';
                        echo '<a class="btn btn-danger btn-xs" href='.base_url("acp/product_category/delete/" . $row['id']).'><i class="fa fa-times" aria-hidden="true"></i>&nbsp;Xóa</a></p>';

                   echo "</li>";
                
                
            }
            echo "</ul>";
             
        }
    }
    
}