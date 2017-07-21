<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Article extends MY_Controller {
    function __construct() {
        parent::__construct();
        $this->data['per_page'] = 12;
        
    }
    function index() {
        //Get config for pagination
        $config = $this->pagination_mylib->bootstrap_configs();
        $config['base_url'] = base_url('acp/article/page');
        $config['reuse_query_string'] = TRUE;
        $config['total_rows'] = $this->article_model->get_total(array('where' => array('type' => $this->type)));
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
        $rows = $this->article_model->get_rows($condition);
        
        $this->data['rows'] = $rows;
        $this->data['tmp_man'] = 'backend/article/list';
        $this->data['tmp'] = 'backend/article/index';
        $this->load->view('backend/layout/index', $this->data);
    }
    
    function add() {
        $user_login = $this->session->userdata['user_login'];
        $this->data['title_action'] = "Thêm sản phẩm";
        $this->data['row'] = $this->article_model->defaut_value();
//        list
        $condition = array(
            'select' => "id,name,type,image,status, sort_order",
            'order_by' => 'id ASC',
            'where' => array('type' => $this->type, 'status'=>1),
        );
        $rows_list = $this->article_list_model->get_rows($condition);

        if($this->input->post('submit')) {
            $post = $this->input->post();
            if(!empty($post['cat_id'])) {
                $this->session->set_userdata('article_cat_id',$post['cat_id']);
            }

            // $this->form_validation->set_rules('list_id', $this->lang->line('left_category')." 1", 'required');
            // $this->form_validation->set_rules('cat_id', $this->lang->line('left_category')." 2", 'required');
            $this->form_validation->set_rules('name', $this->lang->line('title'), 'required|is_unique[lh_article.name]');
            if ($this->form_validation->run() === TRUE) {
                $success = TRUE;
                //UPLOAD
                if ($_FILES['image']['name']) {
                    $this->load->library('image_mylib');
                    $image = $this->image_mylib->upload_one('image', 'article', array('width' => $this->width_thumb, 'height' => $this->height_thumb));
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
                    $post['sort_order'] = $post['sort_order'] ? $post['sort_order'] : $this->article_model->next_id();
                    $post['created'] = time();
                    $post['user_id'] = $user_login['user_id']; 

                    $result = $this->article_model->insert($post);
                    if ($result) {
                        $id = $this->article_model->insert_id();

                        //update image kem theo
                        $image_post['table_id'] = $id;
                        $condition_image = array(
                            'table_name' =>'article', 'table_id' => 0,'type' => $this->type,
                        );
                        $this->image_model->update($image_post, $condition_image);
                         //update image post
                        $condition_image_post = array(
                            'table_name' =>'article', 'table_id' => 0,'type' => 'post',
                        );
                        $this->image_model->update($image_post, $condition_image_post);

                        $this->session->set_userdata('article_cat_id',"");
                        $this->session->set_flashdata('msg_success', $this->lang->line('article_has_been_created'));
                        redirect(base_url('acp/article?type='.$this->type));
                    }
                } 
            }
        }
        
        $this->data['rows_list'] = $rows_list;
        $this->data['tmp_man'] = 'backend/article/add';
        $this->data['tmp'] = "backend/article/index";
        $this->load->view('backend/layout/index', $this->data); 
    }
    
    function edit($id = 0) {
        $user_login = $this->session->userdata['user_login'];
        $this->data['title_action'] = "Cập nhật sản phẩm";
        $condition_article = array(
            'where' => array(
                'id' => $id,
                'type' => $this->type,
            ),
        );
        $row = $this->article_model->get_by($condition_article);
        // print_r($row);
        $this->session->set_userdata('article_cat_id',$row['cat_id']);
        //category_list
        $condition_list = array(
            'select' => "id,name,type,image,status, sort_order",
            'order_by' => 'id ASC',
            'where' => array('type' => $this->type, 'status'=>1),
        );
        $rows_list = $this->article_list_model->get_rows($condition_list);
        if($this->input->post('submit')) {
            $post = $this->input->post();          
            $this->session->set_userdata('cat_id',$post['cat_id']);
            echo $this->session->userdata('cat_id');
            // $this->form_validation->set_rules('list_id', $this->lang->line('left_category')." 1", 'required');
            // $this->form_validation->set_rules('cat_id', $this->lang->line('left_category')." 2", 'required');
            $this->form_validation->set_rules('name', $this->lang->line('category_name'), 'required');
            if($this->form_validation->run() === TRUE) {
                $success = TRUE;
                //UPLOAD
                if ($_FILES['image']['name']) {
                    $this->load->library('image_mylib');
                    $image = $this->image_mylib->upload_one('image', 'article', array('width' => $this->width_thumb, 'height' => $this->height_thumb));
                    if ($image['error']) {
                        $this->data['image_error'] = $image['error'];
                        $success = FALSE;
                    } else {
                        $post['image'] = $image['file_name'];
                        unlink(UPLOADPATH.'article/' . $row['image']);
                        unlink(UPLOADPATH.'article/thumbnail/' . $row['image']);
                    }
                }
                if ($success) {
                    $post['id'] = $id;
                    $post['type'] = $this->type;
                    $post['site_title'] = $this->text_lib->clean_url($post['name']);
                    $post['sort_order'] = $post['sort_order'];
                    $post['time_updates'] = time();
                    $post['user_id'] = $user_login['user_id']; 
                    $result = $this->article_model->update($post);
                    if ($result) {
                        $this->session->set_userdata('cat_id',"");
                        $this->session->set_flashdata('msg_success', $this->lang->line('article_has_been_updated'));
                        redirect(base_url('acp/article?type='.$this->type));
                    }
                } 
            }
        }
        
        $this->data['row'] = $this->article_model->convert_data($row);
        $this->data['rows_list'] = $rows_list;
        $this->data['tmp_man'] = 'backend/article/add';
        $this->data['tmp'] = "backend/article/index";
        $this->load->view('backend/layout/index', $this->data); 
    }
    
    function show($id = "") {
        $condition = array(
            'where' => array(
                'id' => $id,
                'type' => $this->type,
            ),
        );
        $article = $this->article_model->get_by($condition);
        if (!$article) {
            $this->session->set_flashdata("msg_error", $this->lang->line('article_not_exist'));
            redirect(base_url('acp/article?type='.$this->type));
        }

        $this->data['row'] = $this->article_model->convert_data($article);
        $this->data['tmp_man'] = 'backend/article/show';
        $this->data['tmp'] = 'backend/article/index';
        $this->load->view('backend/layout/index', $this->data);
    }
    
    function delete($id = "") {
        $condition = array(
            'where' => array(
                'id' => $id,
                'type' => $this->type,
            ),
        );
        $row = $this->article_model->get_by($condition);
        if (!$row) {
            $this->session->set_flashdata("msg_error", $this->lang->line('article_not_exist'));
            redirect(base_url('acp/article?type='.$this->type));
        }
        $result = $this->article_model->delete($id);
        if($result) {
            $condition = array(
                'where' => array('table_name' =>'article', 'table_id' =>$id),
            );
            $rows_img = $this->image_model->get_rows($condition);
            foreach($rows_img as $row_img) {
                $this->image_model->delete($row_img['id']);
                unlink(UPLOADPATH.$row_img['path_folder'].'/' . $row_img['file_name']);
                unlink(UPLOADPATH.$row_img['path_folder'].'/thumbnail/' . $row_img['file_name']);
            }
            
            unlink(UPLOADPATH.'article/' . $row['image']);
            unlink(UPLOADPATH.'article/thumbnail/' . $row['image']);
            
            $this->session->set_flashdata("msg_info", $this->lang->line('article_has_been_deleted'));
        }
        redirect(base_url('acp/article?type='.$this->type));
    }
    
    function ajax_load_cate() {
        $this->data['row'] = $this->article_model->defaut_value();
        if($this->input->post('list_id')){
            $list_id = $this->input->post('list_id');
            $condition = array(
                'select' => "id,name,type",
                'order_by' => 'id ASC',
                'where' => array('type' => $this->type, 'status'=>1,'list_id' => $list_id),
            );
            $rows_cat = $this->article_cat_model->get_rows($condition);
            $this->data['rows_cat'] = $rows_cat;
        }
         $this->load->view('backend/article/result_cat',$this->data);
    }
    
}