<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Single_post_model extends MY_Model {

    function __construct() {
        parent::__construct('single_post');
    }

    function default_value() {
        return $data = array(
            'id' => $this->next_id(),
            'name' => "",
            'site_title' => "",
            'image_' => backend_url() . "images/clipping_pictures.png",
            'sort_order' => "",
            'status' => 1,
            'description' => "",
            'content' => "",
            'highlight' => 0,
            'new' => 0,
            
        );
    }

     function convert_data($data = array()) {
        if (!empty($data['image'])) {
            $data['image_'] = base_url() . "upload/single_post/thumbnail/" . $data['image'];
        } else {
            $data['image_'] = backend_url() . "images/clipping_pictures.png";
        }
        
        if (isset($data['created'])) {
            $data['created_'] = date('d/m/Y', $data['created']);
        }
        $data['status_'] = $this->lang->line('status_' . $data['status']);

        return $data;
    }
}