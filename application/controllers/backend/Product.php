<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Product extends MY_Controller {
    function __construct() {
        parent::__construct();
        $this->data['per_page'] = 12;
        
    }
    function index() {
        //Get config for pagination
        $config = $this->pagination_mylib->bootstrap_configs();
        $config['base_url'] = base_url('acp/product/page');
        $config['reuse_query_string'] = TRUE;
        $config['total_rows'] = $this->product_model->get_total(array('where' => array('type' => $this->type)));
        $config['per_page'] = $this->data['per_page'];
        $config['uri_segment'] = 4;
        $config['use_page_numbers'] = TRUE;
        $this->pagination->initialize($config);
        $condition = array(
            'order_by' => 'id DESC',
            'where' => array('type' => $this->type),
            'limit' => $config['per_page'],
            'offset' => $this->uri->segment(4) ? ($this->uri->segment(4) - 1) * $config['per_page'] : 0
        );
        $rows = $this->product_model->get_rows($condition);
        
        $this->data['rows'] = $rows;
        $this->data['tmp_man'] = 'backend/product/list';
        $this->data['tmp'] = 'backend/product/index';
        $this->load->view('backend/layout/index', $this->data);
    }
    
    function add() {
        $user_login = $this->session->userdata['user_login'];
        $this->data['title_action'] = "Thêm sản phẩm";
        $this->data['row'] = $this->product_model->defaut_value();
        // print_r($this->data['row']);exit;
//        list
        $condition = array(
            'select' => "id,name,type,image,status, sort_order",
            'order_by' => 'id ASC',
            'where' => array('type' => $this->type, 'status'=>1),
        );
        $rows_list = $this->category_list_model->get_rows($condition);
        if($this->input->post('submit')) {
            $post = $this->input->post();
            if(!empty($post['cat_id'])) {
                $this->session->set_userdata('cat_id',$post['cat_id']);
            }

            // $this->form_validation->set_rules('list_id', $this->lang->line('left_category')." 1", 'required');
            // $this->form_validation->set_rules('cat_id', $this->lang->line('left_category')." 2", 'required');
            $this->form_validation->set_rules('name', $this->lang->line('category_name'), 'required');
            if ($this->form_validation->run() === TRUE) {
                $success = TRUE;
                //UPLOAD
                if ($_FILES['image']['name']) {
                    $this->load->library('image_mylib');
                    $image = $this->image_mylib->upload_one('image', 'product', array('width' => $this->width_thumb, 'height' => $this->height_thumb));
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
                    $post['sort_order'] = $post['sort_order'] ? $post['sort_order'] : $this->product_model->next_id();
                    $post['created'] = time();
                    $post['user_id'] = $user_login['user_id']; 

                    $result = $this->product_model->insert($post);
                    if ($result) {
                        $id = $this->product_model->insert_id();

                        //update image kem theo
                        $image_post['table_id'] = $id;
                        $condition_image = array(
                            'table_name' =>'product', 'table_id' => 0,'type' => $this->type,
                        );
                        $this->image_model->update($image_post, $condition_image);
                         //update image post
                        $condition_image_post = array(
                            'table_name' =>'product', 'table_id' => 0,'type' => 'post',
                        );
                        $this->image_model->update($image_post, $condition_image_post);

                        $this->session->set_userdata('cat_id',"");
                        $this->session->set_flashdata('msg_success', $this->lang->line('product_has_been_created'));
                        redirect(base_url('acp/product?type='.$this->type));
                    }
                } 
            }
        }
        
        $this->data['rows_list'] = $rows_list;
        $this->data['tmp_man'] = 'backend/product/add';
        $this->data['tmp'] = "backend/product/index";
        $this->load->view('backend/layout/index', $this->data); 
    }
    
    function edit($id = 0) {
        $user_login = $this->session->userdata['user_login'];
        $this->data['title_action'] = "Cập nhật sản phẩm";
        $condition_product = array(
            'where' => array(
                'id' => $id,
                'type' => $this->type,
            ),
        );
        $row = $this->product_model->get_by($condition_product);
        $this->session->set_userdata('cat_id',$row['cat_id']);
        //category_list
        $condition_list = array(
            'select' => "id,name,type,image,status, sort_order",
            'order_by' => 'id ASC',
            'where' => array('type' => $this->type, 'status'=>1),
        );
        $rows_list = $this->category_list_model->get_rows($condition_list);
        if($this->input->post('submit')) {
            $post = $this->input->post();          
            $this->session->set_userdata('cat_id',$post['cat_id']);
            // $this->form_validation->set_rules('list_id', $this->lang->line('left_category')." 1", 'required');
            // $this->form_validation->set_rules('cat_id', $this->lang->line('left_category')." 2", 'required');
            $this->form_validation->set_rules('name', $this->lang->line('category_name'), 'required');
            if($this->form_validation->run() === TRUE) {
                $success = TRUE;
                //UPLOAD
                if ($_FILES['image']['name']) {
                    $this->load->library('image_mylib');
                    $image = $this->image_mylib->upload_one('image', 'product', array('width' => $this->width_thumb, 'height' => $this->height_thumb));
                    if ($image['error']) {
                        $this->data['image_error'] = $image['error'];
                        $success = FALSE;
                    } else {
                        $post['image'] = $image['file_name'];
                        unlink(UPLOADPATH.'product/' . $row['image']);
                        unlink(UPLOADPATH.'product/thumbnail/' . $row['image']);
                    }
                }
                if ($success) {
                    $post['id'] = $id;
                    $post['type'] = $this->type;
                    $post['site_title'] = $this->text_lib->clean_url($post['name']);
                    $post['sort_order'] = $post['sort_order'];
                    $post['time_updates'] = time();
                    $post['user_id'] = $user_login['user_id']; 
                    $result = $this->product_model->update($post);
                    if ($result) {
                        $this->session->set_userdata('cat_id',"");
                        $this->session->set_flashdata('msg_success', $this->lang->line('product_has_been_updated'));
                        redirect(base_url('acp/product?type='.$this->type));
                    }
                } 
            }
        }
        
        $this->data['row'] = $this->product_model->convert_data($row);
        $this->data['rows_list'] = $rows_list;
        $this->data['tmp_man'] = 'backend/product/add';
        $this->data['tmp'] = "backend/product/index";
        $this->load->view('backend/layout/index', $this->data); 
    }
    
    function show($id = "") {
        $condition = array(
            'where' => array(
                'id' => $id,
                'type' => $this->type,
            ),
        );
        $product = $this->product_model->get_by($condition);
        if (!$product) {
            $this->session->set_flashdata("msg_error", $this->lang->line('product_not_exist'));
            redirect(base_url('acp/product?type='.$this->type));
        }

        $this->data['row'] = $this->product_model->convert_data($product);
        $this->data['tmp_man'] = 'backend/product/show';
        $this->data['tmp'] = 'backend/product/index';
        $this->load->view('backend/layout/index', $this->data);
    }
    
    function delete($id = "") {
        $condition = array(
            'where' => array(
                'id' => $id,
                'type' => $this->type,
            ),
        );
        $row = $this->product_model->get_by($condition);
        if (!$row) {
            $this->session->set_flashdata("msg_error", $this->lang->line('product_not_exist'));
            redirect(base_url('acp/product?type='.$this->type));
        }
        $result = $this->product_model->delete($id);
        if($result) {
            $condition = array(
                'where' => array('table_name' =>'product', 'table_id' =>$id),
            );
            $rows_img = $this->image_model->get_rows($condition);
            foreach($rows_img as $row_img) {
                $this->image_model->delete($row_img['id']);
                unlink(UPLOADPATH.$row_img['path_folder'].'/' . $row_img['file_name']);
                unlink(UPLOADPATH.$row_img['path_folder'].'/thumbnail/' . $row_img['file_name']);
            }
            
            unlink(UPLOADPATH.'product/' . $row['image']);
            unlink(UPLOADPATH.'product/thumbnail/' . $row['image']);
            
            $this->session->set_flashdata("msg_info", $this->lang->line('product_has_been_deleted'));
        }
        redirect(base_url('acp/product?type='.$this->type));
    }
    
    function ajax_load_cate() {
        $this->data['row'] = $this->product_model->defaut_value();
        if($this->input->post('list_id')){
            $list_id = $this->input->post('list_id');
            $condition = array(
                'select' => "id,name,type",
                'order_by' => 'id ASC',
                'where' => array('type' => $this->type, 'status'=>1,'list_id' => $list_id),
            );
            $rows_cat = $this->category_cat_model->get_rows($condition);
            $this->data['rows_cat'] = $rows_cat;
        }
         $this->load->view('backend/product/result_cat',$this->data);
    }
    
}