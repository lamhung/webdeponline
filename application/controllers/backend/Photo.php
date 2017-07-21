<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Photo extends MY_Controller {
    function __construct() {
        parent::__construct();
        $this->data['per_page'] = 15;
        
    }
    function index() {
        //Get config for pagination
        $config = $this->pagination_mylib->bootstrap_configs();
        $config['base_url'] = base_url('acp/photo/page');
        $config['total_rows'] = $this->photo_model->get_total(array('where' => array('type' => $this->type)));
        $config['per_page'] = $this->data['per_page'];
        $config['uri_segment'] = 4;
        $config['reuse_query_string'] = TRUE;
        $config['use_page_numbers'] = TRUE;
        $this->pagination->initialize($config);
        $condition = array(
            'select' => "id,name,type,image,status, sort_order",
            'order_by' => 'id ASC',
            'where' => array('type' => $this->type),
            'limit' => $config['per_page'],
            'offset' => $this->uri->segment(4) ? ($this->uri->segment(4) - 1) * $config['per_page'] : 0
        );
        $rows = $this->photo_model->get_rows($condition);
        
        $this->data['rows'] = $rows;
        $this->data['tmp_man'] = 'backend/photo/list';
        $this->data['tmp'] = 'backend/photo/index';
        $this->load->view('backend/layout/index', $this->data);
    }
    function add() {
        $this->data['title_action'] = "Thêm hình ảnh";
        $this->data['row'] = $this->photo_model->defaut_value();

        if ($this->input->post('submit')) {
            $post = $this->input->post();
            $this->form_validation->set_rules('name', $this->lang->line('category_name'), 'required');
            //permission
            if ($this->form_validation->run() === TRUE) {
                $success = TRUE;
                //UPLOAD
                if ($_FILES['image']['name']) {
                    $this->load->library('image_mylib');
                    $image = $this->image_mylib->upload_one('image', 'photo', array('width' => $this->width_thumb, 'height' => $this->height_thumb));
                    if ($image['error']) {
                        $this->data['image_error'] = $image['error'];
                        $success = FALSE;
                    } else {
                        $post['image'] = $image['file_name'];
                    }
                }else {
                   $this->data['image_error'] = $this->lang->line('photo_please_select_image');
                   $success = FALSE;
                }
                if ($success) {
                    $post['type'] = $this->type;
                    $post['site_title'] = $this->text_lib->clean_url($post['name']);
                    $post['sort_order'] = $post['sort_order'] ? $post['sort_order'] : $this->photo_model->next_id();
                    $post['created'] = time();
                    $post['user_id'] = $this->user_login['user_id'];
                    $result = $this->photo_model->insert($post);
                    if ($result) {
                        $id = $this->photo_model->insert_id();
                        $this->session->set_flashdata('msg_success', $this->lang->line('photo_has_been_created'));
                        redirect(base_url('acp/photo?type='.$this->type));
                    }
                }
            }
        }

        $this->data['tmp_man'] = 'backend/photo/add';
        $this->data['tmp'] = "backend/photo/index";
        $this->load->view('backend/layout/index', $this->data);
    }
    
    function edit($id = 0) {
        $this->data['title_action'] = "Cập nhật hình ảnh";
        $condition = array(
            'where' => array(
                'id' => $id,
                'type' => $this->type,
            ),
        );
        $photo = $this->photo_model->get_by($condition);
//         print_r($category_list);exit;
        if (!$photo) {
            $this->session->set_flashdata("msg_error", $this->lang->line('photo_not_exist'));
            redirect(base_url('acp/photo?type='.$this->type));
        }
        if ($this->input->post('submit')) {
            $post = $this->input->post();
            $this->form_validation->set_rules('name', $this->lang->line('category_name'), 'required');
            //permission
            if ($this->form_validation->run() === TRUE) {
                $success = TRUE;
                //UPLOAD
                if ($_FILES['image']['name']) {
                    $this->load->library('image_mylib');
                    $image = $this->image_mylib->upload_one('image', 'photo', array('width' => $this->width_thumb, 'height' => $this->height_thumb));
                    if(isset($image['error'])) {
                        $this->data['image_error'] = $image['error'];
                        $success = FALSE;
                    } else {
                        $post['image'] = $image['file_name'];
                        unlink(UPLOADPATH.'photo/' . $photo['image']);
                        unlink(UPLOADPATH.'photo/thumbnail/' . $photo['image']);
                    }
                }else {
                    $post['image'] = $photo['image'];
                }
                if ($success) {
                    $post['id'] = $id;
                    $post['site_title'] = $this->text_lib->clean_url($post['name']);
                    $post['sort_order'] = $post['sort_order'] ? $post['sort_order'] : $this->photo_model->next_id();
                    $post['time_updates'] = time();
                    $post['user_id'] = $this->user_login['user_id'];
                    $result = $this->photo_model->update($post);
                    if ($result) {
                        $this->session->set_flashdata('msg_success', $this->lang->line('photo_has_been_updated'));
                        redirect(base_url('acp/photo?type='.$this->type));
                    }
                }
            }
        }
       
        $this->data['row'] = $this->photo_model->convert_data($photo);
        
        $this->data['tmp_man'] = 'backend/photo/add';
        $this->data['tmp'] = "backend/photo/index";
        $this->load->view('backend/layout/index', $this->data);
    }
    function delete($id = "") {
        $condition = array(
            'where' => array(
                'id' => $id,
                'type' => $this->type,
            ),
        );
        $photo = $this->photo_model->get_by($condition);
        if (!$photo) {
            $this->session->set_flashdata("msg_error", $this->lang->line('photo_not_exist'));
            redirect(base_url('acp/photo?type='.$this->type));
        }
        $result = $this->photo_model->delete($id);
        if($result) {
            unlink(UPLOADPATH.'photo/' . $photo['image']);
            unlink(UPLOADPATH.'photo/thumbnail/' . $photo['image']);
        }
        $this->session->set_flashdata("msg_info", $this->lang->line('photo_has_been_deleted'));
        redirect(base_url('acp/photo?type='.$this->type));
    }
    
    function ajax_change_event() {
        if($this->input->post('id')){
            $id = $this->input->post('id');
            $row = $this->product_model->get_by($id);
            $status = $row['status'];
            if($status == 1) {
                $post['status'] = 0;  
            }else{
                $post['status'] = 1;  
            }
            $post['id'] = $id;
            $this->product_model->update($post);
        }
    }
}