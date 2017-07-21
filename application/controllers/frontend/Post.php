<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Post extends MY_Controller {
    function __construct() {
        parent::__construct();
        $this->data['per_page'] = 12;
    }


    public function index() {
        //Get config for pagination
        $config = $this->pagination_mylib->bootstrap_configs();
        $config['base_url'] = base_url('tin-tuc/trang');
        // $config['reuse_query_string'] = TRUE;
        $config['total_rows'] = $this->post_model->get_total(array('where' => array('type' => 'news','status' => 1)));
        $config['per_page'] = $this->data['per_page'];
        $config['uri_segment'] = 3;
        $config['use_page_numbers'] = TRUE;
        $this->pagination->initialize($config);
        $condition = array(
            'order_by' => 'sort_order,id ASC',
            'where' => array('type' => 'news','status' => 1),
            'limit' => $config['per_page'],
            'offset' => $this->uri->segment(3) ? ($this->uri->segment(3) - 1) * $config['per_page'] : 0
        );
        $rows = $this->post_model->get_rows($condition);
        
        $this->data['rows'] = $rows;

        $this->data['tmp'] = 'frontend/post/index';
        $this->load->view('frontend/layout/index',$this->data);
    }

    public function detail($id) {
        $condition = array(
            'where' => array('type' => 'news', 'site_title' => $id),
        );
        $row_detail = $this->post_model->get_by($condition);

        $condition_other_post = array(
            'where' => array('type' => 'news', 'id !=' => $row_detail['id']),
            'limit' => 6,
        );
        $rows_other = $this->post_model->get_rows($condition_other_post);


        $this->data['row_detail'] = $this->post_model->convert_data($row_detail);
    
        $this->data['rows_other'] = $rows_other;

        $this->data['tmp'] = 'frontend/post/detail';
        $this->load->view('frontend/layout/index',$this->data);
    }
}