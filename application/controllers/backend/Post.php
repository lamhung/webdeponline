<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Post extends MY_Controller {
    function __construct() {
        parent::__construct();
        $this->data['per_page'] = 5;
        
    }

    function index() {
        //Get config for pagination
        $config = $this->pagination_mylib->bootstrap_configs();
        $config['base_url'] = base_url('acp/post/page');
        $config['reuse_query_string'] = TRUE;
        $config['total_rows'] = $this->post_model->get_total(array('where' => array('type' => $this->type)));
        $config['per_page'] = $this->data['per_page'];
        $config['uri_segment'] = 4;
        $config['use_page_numbers'] = TRUE;
        $this->pagination->initialize($config);
        $condition = array(
            'order_by' => 'sort_order,id ASC',
            'where' => array('type' => $this->type),
            'limit' => $config['per_page'],
            'offset' => $this->uri->segment(4) ? ($this->uri->segment(4) - 1) * $config['per_page'] : 0
        );
        $rows = $this->post_model->get_rows($condition);
        
        $this->data['rows'] = $rows;
        $this->data['tmp_man'] = 'backend/post/list';
        $this->data['tmp'] = 'backend/post/index';
        $this->load->view('backend/layout/index', $this->data);
    }
    function add() {
        $user_login = $this->session->userdata['user_login'];
        $this->data['title_action'] = "Thêm Bai viết";
        $this->data['row'] = $this->post_model->default_value();
        
       
        if($this->input->post('submit')) {
            $post = $this->input->post();

            $this->form_validation->set_rules('name', $this->lang->line('title'), 'required');
            if ($this->form_validation->run() === TRUE) {
                $success = TRUE;
                //UPLOAD
                if ($_FILES['image']['name']) {
                    $this->load->library('image_mylib');
                    $image = $this->image_mylib->upload_one('image', 'post', array('width' => $this->width_thumb, 'height' => $this->height_thumb));
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
                    $post['sort_order'] = $post['sort_order'] ? $post['sort_order'] : $this->post_model->next_id();
                    $post['created'] = time();
                    $post['user_id'] = $user_login['user_id']; 
                    $result = $this->post_model->insert($post);
                    if ($result) {
                        $id = $this->post_model->insert_id();
                        
                        $this->session->set_flashdata('msg_success', $this->lang->line('single_post_has_been_updated'));
                        redirect(base_url('acp/post?type='.$this->type));
                    }
                } 
            }
        }
        
        $this->data['tmp_man'] = 'backend/post/add';
        $this->data['tmp'] = "backend/post/index";
        $this->load->view('backend/layout/index', $this->data); 
    }

    function edit($id = 0) {
        $user_login = $this->session->userdata['user_login'];
        $this->data['title_action'] = "Cập nhật sản phẩm";
        $condition_post = array(
            'where' => array(
                'id' => $id,
                'type' => $this->type,
            ),
        );
        $row = $this->post_model->get_by($condition_post);
        if($this->input->post('submit')) {
            $post = $this->input->post();          
        
            $this->form_validation->set_rules('name', $this->lang->line('title'), 'required');
            if($this->form_validation->run() === TRUE) {
                $success = TRUE;
                //UPLOAD
                if ($_FILES['image']['name']) {
                    $this->load->library('image_mylib');
                    $image = $this->image_mylib->upload_one('image', 'post', array('width' => $this->width_thumb, 'height' => $this->height_thumb));
                    if ($image['error']) {
                        $this->data['image_error'] = $image['error'];
                        $success = FALSE;
                    } else {
                        $post['image'] = $image['file_name'];
                        unlink(UPLOADPATH.'post/' . $row['image']);
                        unlink(UPLOADPATH.'post/thumbnail/' . $row['image']);
                    }
                }
                if ($success) {
                    $post['id'] = $id;
                    $post['type'] = $this->type;
                    $post['site_title'] = $this->text_lib->clean_url($post['name']);
                    $post['sort_order'] = $post['sort_order'];
                    $post['time_updates'] = time();
                    $post['user_id'] = $user_login['user_id']; 
                    $result = $this->post_model->update($post);
                    if ($result) {
                        $this->session->set_flashdata('msg_success', $this->lang->line('single_post_has_been_updated'));
                        redirect(base_url('acp/post?type='.$this->type));
                    }
                } 
            }
        }
        
        $this->data['row'] = $this->post_model->convert_data($row);
        $this->data['tmp_man'] = 'backend/post/add';
        $this->data['tmp'] = "backend/post/index";
        $this->load->view('backend/layout/index', $this->data); 
    }

    function delete($id = "") {
        $condition = array(
            'where' => array(
                'id' => $id,
                'type' => $this->type,
            ),
        );
        $row = $this->post_model->get_by($condition);
        if (!$row) {
            $this->session->set_flashdata("msg_error", $this->lang->line('post_not_exist'));
            redirect(base_url('acp/post?type='.$this->type));
        }
        $result = $this->post_model->delete($id);
        if($result) {
            $condition = array(
                'where' => array('table_name' =>'post', 'table_id' =>$id),
            );
            $rows_img = $this->image_model->get_rows($condition);
            foreach($rows_img as $row_img) {
                $this->image_model->delete($row_img['id']);
                unlink(UPLOADPATH.$row_img['path_folder'].'/' . $row_img['file_name']);
                unlink(UPLOADPATH.$row_img['path_folder'].'/thumbnail/' . $row_img['file_name']);
            }
            
            unlink(UPLOADPATH.'post/' . $row['image']);
            unlink(UPLOADPATH.'post/thumbnail/' . $row['image']);
            
            $this->session->set_flashdata("msg_info", $this->lang->line('post_has_been_deleted'));
        }
        redirect(base_url('acp/post?type='.$this->type));
    }
}
?>