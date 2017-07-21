<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Article_cat extends MY_Controller {
    function __construct() {
        parent::__construct();
        $this->data['per_page'] = 12;
    }
    
    function index() {
        //Get config for pagination
        $config = $this->pagination_mylib->bootstrap_configs();
        $config['base_url'] = base_url('acp/article_cat/page');
        $config['reuse_query_string'] = TRUE;
        $config['total_rows'] = $this->article_cat_model->get_total(array('where' => array('type' => $this->type)));
        $config['per_page'] = $this->data['per_page'];
        $config['uri_segment'] = 4;
        $config['num_links'] = 1;
        $config['use_page_numbers'] = TRUE;
        $this->pagination->initialize($config);
        $condition = array(
            'select' => "id,name,list_id,type,image,status, sort_order",
            'order_by' => 'id ASC',
            'where' => array('type' => $this->type),
            'limit' => $config['per_page'],
            'offset' => $this->uri->segment(4) ? ($this->uri->segment(4) - 1) * $config['per_page'] : 0
        );
        $rows = $this->article_cat_model->get_rows($condition);
        
        $this->data['rows'] = $rows;
        $this->data['tmp_man'] = 'backend/article_cat/list';
        $this->data['tmp'] = 'backend/article_cat/index';
        $this->load->view('backend/layout/index', $this->data);
    }
    
    function add() {
        $this->data['title_action'] = "Thêm danh mục";
        $this->data['row'] = $this->article_cat_model->defaut_value();
        $condition = array(
            'select' => "id,name,type,image,status, sort_order",
            'order_by' => 'id ASC',
            'where' => array('type' => $this->type, 'status'=>1),
        );
        $rows_list = $this->article_list_model->get_rows($condition);
        
        if ($this->input->post('submit')) {
            $post = $this->input->post();
            $this->form_validation->set_rules('list_id', $this->lang->line('left_article'), 'required');
            $this->form_validation->set_rules('name', $this->lang->line('article_name'), 'required');
          
            if ($this->form_validation->run() === TRUE) {
                $success = TRUE;
                //UPLOAD
                if ($_FILES['image']['name']) {
                    $this->load->library('image_mylib');
                    $image = $this->image_mylib->upload_one('image', 'article', array('width' => 400, 'height' => 400));
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
                    $post['sort_order'] = $post['sort_order'] ? $post['sort_order'] : $this->article_cat_model->next_id();
                    $post['created'] = time();
                    $result = $this->article_cat_model->insert($post);
                    if ($result) {
                        $id = $this->article_cat_model->insert_id();
                        $this->session->set_flashdata('msg_success', $this->lang->line('article_has_been_created'));
                        redirect(base_url('acp/article_cat?type='.$this->type));
                    }
                }
            }
        }
        $this->data['rows_list'] = $rows_list;
        $this->data['tmp_man'] = 'backend/article_cat/add';
        $this->data['tmp'] = "backend/article_cat/index";
        $this->load->view('backend/layout/index', $this->data);
    }
    
    function edit($id = 0) {
        $this->data['title_action'] = "Cập nhật danh mục";
        $condition_list = array(
            'select' => "id,name,type,image,status, sort_order",
            'order_by' => 'id ASC',
            'where' => array('type' => $this->type, 'status'=>1),
        );
        $this->form_validation->set_rules('list_id', $this->lang->line('left_article'), 'required');
        $rows_list = $this->article_list_model->get_rows($condition_list);
        
        $condition = array(
            'where' => array(
                'id' => $id,
                'type' => $this->type,
            ),
        );
        $article_cat = $this->article_cat_model->get_by($condition);
//         print_r($article_cat);exit;
        if (!$article_cat) {
            $this->session->set_flashdata("msg_error", $this->lang->line('article_not_exist'));
            redirect(base_url('acp/article_cat?type='.$this->type));
        }
        if ($this->input->post('submit')) {
            $post = $this->input->post();
            $this->form_validation->set_rules('name', $this->lang->line('article_name'), 'required');
            //permission
            if ($this->form_validation->run() === TRUE) {
                $success = TRUE;
                //UPLOAD
                if ($_FILES['image']['name']) {
                    $this->load->library('image_mylib');
                    $image = $this->image_mylib->upload_one('image', 'article', array('width' => 400, 'height' => 400));
                    if(isset($image['error'])) {
                        $this->data['image_error'] = $image['error'];
                        $success = FALSE;
                    } else {
                        $post['image'] = $image['file_name'];
                        unlink(UPLOADPATH.'article/' . $article_cat['image']);
                        unlink(UPLOADPATH.'article/thumbnail/' . $article_cat['image']);
                    }
                }else {
                    $post['image'] = $article_cat['image'];
                }
                if ($success) {
                    $post['id'] = $id;
                    $post['site_title'] = $this->text_lib->clean_url($post['name']);
                    $post['sort_order'] = $post['sort_order'] ? $post['sort_order'] : $this->article_cat_model->next_id();
                    $post['time_updates'] = time();
                    $result = $this->article_cat_model->update($post);
                    if ($result) {
                        $this->session->set_flashdata('msg_success', $this->lang->line('article_has_been_updated'));
                        redirect(base_url('acp/article_cat?type='.$this->type));
                    }
                }
            }
        }
       
        $this->data['row'] = $this->article_cat_model->convert_data($article_cat);
        $this->data['rows_list'] = $rows_list;
        $this->data['tmp_man'] = 'backend/article_cat/add';
        $this->data['tmp'] = "backend/article_cat/index";
        $this->load->view('backend/layout/index', $this->data);
    }
    
    function show($id = "") {
        $condition = array(
            'where' => array(
                'id' => $id,
                'type' => $this->type,
            ),
        );
        $article_cat = $this->article_cat_model->get_by($condition);
        if (!$article_cat) {
            $this->session->set_flashdata("msg_error", $this->lang->line('article_not_exist'));
            redirect(base_url('acp/article_cat?type='.$this->type));
        }

        $this->data['row'] = $this->article_cat_model->convert_data($article_cat);
        $this->data['tmp_man'] = 'backend/article_cat/show';
        $this->data['tmp'] = 'backend/article_cat/index';
        $this->load->view('backend/layout/index', $this->data);
    }
    
    function delete($id = "") {
        $condition = array(
            'where' => array(
                'id' => $id,
                'type' => $this->type,
            ),
        );
        $cat = $this->article_cat_model->get_by($condition);
        if (!$cat) {
            $this->session->set_flashdata("msg_error", $this->lang->line('article_not_exist'));
            redirect(base_url('acp/article_cat?type='.$this->type));
        }
        $result = $this->article_cat_model->delete($id);
        $this->session->set_flashdata("msg_info", $this->lang->line('article_has_been_deleted'));
        redirect(base_url('acp/article_cat?type='.$this->type));
    }
}