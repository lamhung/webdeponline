<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Article_model extends MY_Model {

    function __construct() {
        parent::__construct('article');
    }

    function defaut_value() {
        return $data = array(
            'id' => $this->next_id(),
            'name' => "",
            'site_title' => "",
            'image_' => backend_url() . "images/clipping_pictures.png",
            'sort_order' => "",
            'status' => 1,
            'list_id' => 0,
            'cat_id' => 0,
            'description' => "",
            'content' => "",
            'link' => "",
            'highlight' => 0,
            'highlight1' => 0,
            'price' => 0,
            'old_price' => 0,
        );
    }
    function convert_data($data = array()) {
        // if (!empty($data['image'])) {
        //     $data['image_'] = thumb.php?src=
        // } else {
        //     $data['image_'] = backend_url() . "images/clipping_pictures.png";
        // }

        if (!empty($data['image'])) {
            $data['image_'] = base_url() . "upload/article/thumbnail/" . $data['image'];
        } else {
            $data['image_'] = backend_url() . "images/clipping_pictures.png";
        }
        if(isset($data['list_id'])) {
            $category_list = $this->article_list_model->get_by($data['list_id']);
            $data['category_list_'] = $category_list['name'];
        }
        if(isset($data['cat_id'])) {
            $category_cat = $this->article_cat_model->get_by($data['cat_id']);
            $data['category_cat_'] = $category_cat['name'];
        }
        if (isset($data['created'])) {
            $data['created_'] = date('d/m/Y', $data['created']);
        }
        $data['status_'] = $this->lang->line('category_status_' . $data['status']);
        return $data;
    }
}
