<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Category_cat_model extends MY_Model {
    function __construct() {
        parent::__construct('product_category_cat');
    }
    function defaut_value() {
        return $data = array(
            'name' => "",
            'site_title' => "",
            'image_' => backend_url() . "images/clipping_pictures.png",
            'sort_order' => "",
            'status' => 1,
            'list_id' => 0,
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
        if(isset($data['list_id'])) {
            $category_list = $this->category_list_model->get_by($data['list_id']);
            $data['category_list_'] = $category_list['name'];
        }
        return $data;
    }
    
}