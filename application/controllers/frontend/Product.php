<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Product extends MY_Controller {
    public function __construct() {
        parent::__construct();
        $this->data['per_page'] = 12;
        $this->com = $this->uri->segment(1);
        switch ($this->com) {
            case 'san-pham':
                    $this->type = 'product';
                    $this->tmp = 'index';
                    $this->title_detail = 'Sản phẩm';
                break;
             case 'hosting':
                    $this->type = 'hosting';
                    $this->tmp = 'index';
                    $this->title_detail = 'Hosting';
                break;
            
            default:
                    $this->type = 'product';
                    $tmp = 'index';
                break;
        }
    }
    public function index() {
        //Get config for pagination
        $config = $this->pagination_mylib->bootstrap_configs();
        $config['base_url'] = base_url($this->com.'/trang');
        // $config['reuse_query_string'] = TRUE;
        $config['total_rows'] = $this->product_model->get_total(array('where' => array('type' => $this->type,'status' => 1)));
        $config['per_page'] = $this->data['per_page'];
        $config['uri_segment'] = 3;
        $config['use_page_numbers'] = TRUE;
        $this->pagination->initialize($config);
        $condition = array(
            'order_by' => 'sort_order,id ASC',
            'where' => array('type' => $this->type,'status' => 1),
            'limit' => $config['per_page'],
            'offset' => $this->uri->segment(3) ? ($this->uri->segment(3) - 1) * $config['per_page'] : 0
        );
        $rows = $this->product_model->get_rows($condition);
        
        $this->data['rows'] = $rows;

        $this->data['tmp'] = 'frontend/product/'.$this->tmp;
        $this->load->view('frontend/layout/index',$this->data);
    }

    public function category_list($id) {
        // echo $id;
        //Get config for pagination
        $condition = array(
            'select' => "id,name,type,image,status, sort_order, site_title",
            'order_by' => 'id ASC',
            'where' => array('type' => $this->type, 'site_title' => $id),
        );
        $rows_list = $this->category_list_model->get_by($condition);
        // print_r($rows_list);exit();


        $config = $this->pagination_mylib->bootstrap_configs();
        $config['base_url'] = base_url($this->com.'/'.$id.'/trang');
        // $config['reuse_query_string'] = TRUE;
        $config['total_rows'] = $this->product_model->get_total(array('where' => array('type' => $this->type,'status' => 1, 'list_id' => $rows_list['id'])));
        $config['per_page'] = $this->data['per_page'];
        $config['uri_segment'] = 4;
        $config['use_page_numbers'] = TRUE;
        $this->pagination->initialize($config);
        $condition = array(
            'order_by' => 'sort_order,id ASC',
            'where' => array('type' => $this->type,'status' => 1, 'list_id' => $rows_list['id']),
            'limit' => $config['per_page'],
            'offset' => $this->uri->segment(4) ? ($this->uri->segment(4) - 1) * $config['per_page'] : 0
        );
        $rows = $this->product_model->get_rows($condition);
        
        $this->data['rows'] = $rows;

        $this->data['tmp'] = 'frontend/product/'.$this->tmp;
        $this->load->view('frontend/layout/index',$this->data);
    }
    public function search() {
        if($this->input->get('keywords')) {
            $keywords = $this->input->get('keywords');
            //$this->session->set_userdata('keywords',$keywords )
        }


        $config = $this->pagination_mylib->bootstrap_configs();
        $config['base_url'] = base_url('tim-kiem/trang');
        $config['reuse_query_string'] = TRUE;
        $config['total_rows'] = $this->product_model->get_total(array('where' => array('type' => 'product','status' => 1),'like' => array('name' => $keywords),'or_like' => array('site_title' => $keywords),));
        $config['per_page'] = $this->data['per_page'];
        $config['uri_segment'] = 3;
        $config['use_page_numbers'] = TRUE;
        $this->pagination->initialize($config);
        $condition = array(
            'order_by' => 'sort_order,id ASC',
            'where' => array('type' => 'product','status' => 1),
            'like' => array('name' => $keywords),
            'or_like' => array('site_title' => $keywords),
            'limit' => $config['per_page'],
            'offset' => $this->uri->segment(3) ? ($this->uri->segment(3) - 1) * $config['per_page'] : 0
        );
        $rows = $this->product_model->get_rows($condition);
        
        $this->data['rows'] = $rows;

        $this->data['tmp'] = 'frontend/product/index';
        $this->load->view('frontend/layout/index',$this->data);
    }
    public function category_cat($id) {
        // echo $id;
        //Get config for pagination
        $condition = array(
            'select' => "id,name,type,image,status, sort_order, site_title, list_id",
            'order_by' => 'id ASC',
            'where' => array('type' => $this->type, 'site_title' => $id),
        );
        $rows_cat = $this->category_cat_model->get_by($condition);

        $condition = array(
            'select' => "id,name,type,image,status, sort_order, site_title",
            'order_by' => 'id ASC',
            'where' => array('type' => $this->type, 'id' => $rows_cat['list_id']),
        );
        $rows_list = $this->category_list_model->get_by($condition);
        // print_r($rows_list);exit();


        $config = $this->pagination_mylib->bootstrap_configs();
        $config['base_url'] = base_url($this->com.'/'.$rows_list['site_title'].'/'.$id.'/trang');
        // $config['reuse_query_string'] = TRUE;
        $config['total_rows'] = $this->product_model->get_total(array('where' => array('type' => $this->type,'status' => 1, 'cat_id' => $rows_cat['id'])));
        $config['per_page'] = $this->data['per_page'];
        $config['uri_segment'] = 5;
        $config['use_page_numbers'] = TRUE;
        $this->pagination->initialize($config);
        $condition = array(
            'order_by' => 'sort_order,id ASC',
            'where' => array('type' => $this->type,'status' => 1, 'cat_id' => $rows_cat['id']),
            'limit' => $config['per_page'],
            'offset' => $this->uri->segment(5) ? ($this->uri->segment(5) - 1) * $config['per_page'] : 0
        );
        $rows = $this->product_model->get_rows($condition);
        
        $this->data['rows'] = $rows;

        $this->data['tmp'] = 'frontend/product/'.$this->tmp;
        $this->load->view('frontend/layout/index',$this->data);
    }
    public function detail($id) {
        $condition = array(
            'where' => array('type' => 'product', 'site_title' => $id),
        );
        $row = $this->product_model->get_by($condition);

        $condition_img = array(
            'where' => array('table_name' =>'product', 'table_id' =>$row['id'], 'type' => 'product'),
        );
        $rows_img = $this->image_model->get_rows($condition_img);

        $condition_other_product = array(
            'where' => array('type' => 'product', 'id !=' => $row['id'], 'list_id' => $row['list_id']),
            'limit' => 6,
        );
        $rows_other = $this->product_model->get_rows($condition_other_product);

        $this->data['row'] = $this->product_model->convert_data($row);
        $this->data['rows_img'] = $rows_img;
        $this->data['rows_other'] = $rows_other;

        $this->data['tmp'] = 'frontend/product/detail';
        $this->load->view('frontend/layout/index',$this->data);
    }
}