<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_model extends MY_Model {

    function __construct() {
        parent::__construct('contact');
    }

    function defaut_value() {
        return $data = array(
            'id' => "",
            'name' => "",
            'email' => "",
            'status' => 0,
            'content' => "",
            'phone' => "",
            'title' => "",
            'content' => "",
        );
    }
    function convert_data($data = array()) {
        if (!empty($data['image'])) {
            $data['image_'] = base_url() . "upload/product/thumbnail/" . $data['image'];
        } else {
            $data['image_'] = backend_url() . "images/clipping_pictures.png";
        }
        if(isset($data['list_id'])) {
            $category_list = $this->category_list_model->get_by($data['list_id']);
            $data['category_list_'] = $category_list['name'];
        }
        if(isset($data['cat_id'])) {
            $category_cat = $this->category_cat_model->get_by($data['cat_id']);
            $data['category_cat_'] = $category_cat['name'];
        }
        if (isset($data['created'])) {
            $data['created_'] = date('d/m/Y', $data['created']);
        }
        $data['status_'] = $this->lang->line('category_status_' . $data['status']);
        return $data;
    }
}
