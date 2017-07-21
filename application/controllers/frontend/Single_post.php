<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Single_post extends MY_Controller {
    function __construct() {
        parent::__construct();
        $this->data['per_page'] = 5;

        $com = $this->uri->segment(1);
        switch ($com) {
            case 'gioi-thieu':
                    $this->type = 'about';
                    $this->tmp = 'index';
                    $this->title_detail = 'Giới thiệu';
                break;
            case 'domain':
                    $this->type = 'domain';
                    $this->tmp = 'index';
                    $this->title_detail = 'Domain';
                break;
            default:
                    $this->type = 'about';
                    $this->tmp = 'index';
                    $this->title_detail = 'Giới thiệu';
                break;
        }

    }


    function index() {



        $condition = array(
            'where' => array('type' => $this->type),
        );
        $row = $this->single_post_model->get_by($condition);

        $this->data['row'] = $row;
        $this->data['title_detail'] = $this->title_detail;
        $this->data['tmp'] = 'frontend/single_post/'.$this->tmp;
        $this->load->view('frontend/layout/index',$this->data);
    }

    
}