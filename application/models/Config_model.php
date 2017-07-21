<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Config_model extends MY_Model {

    function __construct() {
        parent::__construct('config');
    }

    function default_value() {
        return $data = array(
            'id' => '',
            'name' => "",
            'email' =>"",
            'slogan' => "",
            'phone' => "",
            'address' => "",
            'hotline' => "",
            'map' => "",
            'website' => '',
            'facebook' => '',
            
        );
    }

    function convert_data($data = array()) {
        // if (!empty($data['image'])) {
        //     $data['image_'] = base_url() . "upload/single_post/thumbnail/" . $data['image'];
        // } else {
        //     $data['image_'] = backend_url() . "images/clipping_pictures.png";
        // }
        
        // if (isset($data['created'])) {
        //     $data['created_'] = date('d/m/Y', $data['created']);
        // }
        // $data['status_'] = $this->lang->line('category_status_' . $data['status']);
        // return $data;
    }
}
