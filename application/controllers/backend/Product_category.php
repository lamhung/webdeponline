<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Product_category extends MY_Controller {
    function __construct() {
        parent::__construct();
        $this->data['per_page'] = 12;
        

    }
    
    function index() {
        //Get config for pagination
        $this->data['row'] = $this->product_category_model->defaut_value();
        $this->add();
        $config = $this->pagination_mylib->bootstrap_configs();
        $config['base_url'] = base_url('acp/product_category/page');
        $config['reuse_query_string'] = TRUE;
        $config['total_rows'] = $this->product_category_model->get_total(array('where' => array('type' => $this->type)));
        $config['per_page'] = $this->data['per_page'];
        $config['uri_segment'] = 4;
        $config['num_links'] = 1;
        $config['use_page_numbers'] = TRUE;
        $this->pagination->initialize($config);
        $condition = array(
            'select' => "id,name,type,image,status, sort_order,parent_id",
            'order_by' => 'id ASC',
            'where' => array('type' => $this->type),
            'limit' => $config['per_page'],
            'offset' => $this->uri->segment(4) ? ($this->uri->segment(4) - 1) * $config['per_page'] : 0
        );
        $rows = $this->product_category_model->get_rows($condition);

        $this->data['rows'] = $rows;
        $this->data['tmp_man'] = 'backend/product_category/list';
        $this->data['tmp'] = 'backend/product_category/index';
        $this->load->view('backend/layout/index', $this->data);
    }
    
    function add() {
        if ($this->input->post('submit')) {
            $post = $this->input->post();
            $this->form_validation->set_rules('name', $this->lang->line('title'), 'required|is_unique[lh_product_category.name]');
          
            if ($this->form_validation->run() === TRUE) {
                $success = TRUE;
                //UPLOAD
                if ($_FILES['image']['name']) {
                    $this->load->library('image_mylib');
                    $image = $this->image_mylib->upload_one('image', 'category', array('width' => 400, 'height' => 400));
                    if ($image['error']) {
                        $this->data['image_error'] = $image['error'];
                        $success = FALSE;
                    } else {
                        $post['image'] = $image['file_name'];
                    }
                }
                if ($success) {
                    $post['type'] = $this->type;
                    $post['site_title'] = $this->text_lib->clean_url($post['name']);
                    $post['sort_order'] = $post['sort_order'] ? $post['sort_order'] : $this->product_category_model->next_id();
                    $post['created'] = time();
                    $result = $this->product_category_model->insert($post);
                    if ($result) {
                        $id = $this->product_category_model->insert_id();
                        $this->session->set_flashdata('msg_success', $this->lang->line('category_has_been_created'));
                        redirect(base_url('acp/product_category?type='.$this->type));
                    }
                }
            }
        }
        
    }
    


    function edit($id = 0) {
        $this->data['title_action'] = "Cập nhật danh mục";
        $condition_list = array(
            'select' => "id,name,type,image,status, sort_order,parent_id",
            'order_by' => 'id ASC',
            'where' => array('type' => $this->type),
        );
       
        $rows_list = $this->product_category_model->get_rows($condition_list);
        // print_r($rows_list);
        
        $condition = array(
            'where' => array(
                'id' => $id,
                'type' => $this->type,
            ),
        );
        $product_category = $this->product_category_model->get_by($condition);
//         print_r($product_category);exit;
        if (!$product_category) {
            $this->session->set_flashdata("msg_error", $this->lang->line('category_not_exist'));
            redirect(base_url('acp/product_category?type='.$this->type));
        }
        if ($this->input->post('submit')) {
            $post = $this->input->post();
            // print_r($post);exit;
            $this->form_validation->set_rules('name', $this->lang->line('category_name'), 'required');
            //permission
            if ($this->form_validation->run() === TRUE) {
                $success = TRUE;
                //UPLOAD
                if ($_FILES['image']['name']) {
                    $this->load->library('image_mylib');
                    $image = $this->image_mylib->upload_one('image', 'category', array('width' => 400, 'height' => 400));
                    if(isset($image['error'])) {
                        $this->data['image_error'] = $image['error'];
                        $success = FALSE;
                    } else {
                        $post['image'] = $image['file_name'];
                        unlink(UPLOADPATH.'category/' . $product_category['image']);
                        unlink(UPLOADPATH.'category/thumbnail/' . $product_category['image']);
                    }
                }else {
                    $post['image'] = $product_category['image'];
                }
                if ($success) {

                    $post['id'] = $id;
                    $post['site_title'] = $this->text_lib->clean_url($post['name']);
                    $post['sort_order'] = $post['sort_order'] ? $post['sort_order'] : $this->product_category_model->next_id();
                    $post['time_updates'] = time();
                    $result = $this->product_category_model->update($post);
                    if ($result) {
                        $this->session->set_flashdata('msg_success', $this->lang->line('category_has_been_updated'));
                        redirect(base_url('acp/product_category?type='.$this->type));
                    }
                }
            }
        }
       
        $this->data['row'] = $this->product_category_model->convert_data($product_category);
        $this->data['rows'] = $rows_list;

        $this->data['tmp_man'] = 'backend/product_category/add';
        $this->data['tmp'] = "backend/product_category/index";
        $this->load->view('backend/layout/index', $this->data);
    }
    
    function show($id = "") {
        $condition = array(
            'where' => array(
                'id' => $id,
                'type' => $this->type,
            ),
        );
        $product_category = $this->product_category_model->get_by($condition);
        if (!$product_category) {
            $this->session->set_flashdata("msg_error", $this->lang->line('category_not_exist'));
            redirect(base_url('acp/product_category?type='.$this->type));
        }

        $this->data['row'] = $this->product_category_model->convert_data($product_category);
        $this->data['tmp_man'] = 'backend/product_category/show';
        $this->data['tmp'] = 'backend/product_category/index';
        $this->load->view('backend/layout/index', $this->data);
    }
    
    function delete($id = "") {
        $condition = array(
            'where' => array(
                'id' => $id,
                'type' => $this->type,
            ),
        );
        $cat = $this->product_category_model->get_by($condition);
        if (!$cat) {
            $this->session->set_flashdata("msg_error", $this->lang->line('category_not_exist'));
            redirect(base_url('acp/product_category?type='.$this->type));
        }
        $result = $this->product_category_model->delete($id);
        $this->session->set_flashdata("msg_info", $this->lang->line('category_has_been_deleted'));
        redirect(base_url('acp/product_category?type='.$this->type));
    }
}