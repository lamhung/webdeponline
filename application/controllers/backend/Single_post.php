<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Single_post extends MY_Controller {
    function __construct() {
        parent::__construct();
        $this->data['per_page'] = 5;
    }

    function index() {
        //Get config for pagination
        $config = $this->pagination_mylib->bootstrap_configs();
        $config['base_url'] = base_url('acp/single_post/page');
        $config['total_rows'] = $this->single_post_model->get_total(array('where' => array('type' => $this->type)));
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
        $rows = $this->single_post_model->get_rows($condition);
        
        $this->data['rows'] = $rows;
        $this->data['tmp_man'] = 'backend/single_post/list';
        $this->data['tmp'] = 'backend/single_post/index';
        $this->load->view('backend/layout/index', $this->data);
    }
    function show($id = "") {
        $condition_single_post = array(
            'where' => array( 'id' => $id, 'type' => $this->type),
        );
        $result = $this->single_post_model->get_by($condition_single_post);
        if (!$result) {
            $this->session->set_flashdata("msg_error", $this->lang->line('product_not_exist'));
            redirect(base_url('acp/single_post?type='.$this->type));
        }

        $this->data['row'] = $this->single_post_model->convert_data($result);
        // print_r($result);
        $this->data['tmp_man'] = 'backend/single_post/show';
        $this->data['tmp'] = "backend/single_post/index";
        $this->load->view('backend/layout/index', $this->data); 
    }
    function edit() {
        $user_login = $this->session->userdata['user_login'];
        $this->data['title_action'] = "Cập nhật bài viết";
        $condition_single_post = array(
            'where' => array('type' => $this->type),
        );
        $row = $this->single_post_model->get_by($condition_single_post);
        if($row) {
        	$this->data['row'] = $this->single_post_model->convert_data($row);

        }else {
        	$this->data['row'] = $this->single_post_model->default_value();
        }
        if($this->input->post('submit')) {
            $post = $this->input->post();
            $this->form_validation->set_rules('name', $this->lang->line('title'), 'required');
            if($this->form_validation->run() === TRUE) {
                $success = TRUE;
                //UPLOAD
                if ($_FILES['image']['name']) {
                    $this->load->library('image_mylib');
                    $image = $this->image_mylib->upload_one('image', 'single_post', array('width' => $this->width_thumb, 'height' => $this->height_thumb));
                    if (isset($image['error'])) {
                        $this->data['image_error'] = $image['error'];
                        $success = FALSE;
                    } else {
                        $post['image'] = $image['file_name'];
                        if(file_exists(UPLOADPATH.'single_post/' . $row['image'])) {
	                    	unlink(UPLOADPATH.'single_post/' . $row['image']);
	                        unlink(UPLOADPATH.'single_post/thumbnail/' . $row['image']);
	                    }
                    }
                }
                if ($success) {
                   
                    $post['site_title'] = $this->text_lib->clean_url($post['name']);
                    $post['sort_order'] = $post['sort_order'];
                    
                    $post['user_id'] = $user_login['user_id'];
                    if($row) {
                    	$post['time_updates'] = time();
                    	$dk_up['type'] = $this->type;
	                    $result = $this->single_post_model->update($post,$dk_up);
	                    
	                }else {

	                	$post['type'] = $this->type;
	                	$post['created'] = time();
	                	$result = $this->single_post_model->insert($post);
	                }
                    if ($result) {
                        $this->session->set_userdata('cat_id',"");
                        $this->session->set_flashdata('msg_success', $this->lang->line('single_post_has_been_updated'));
                        redirect(base_url('acp/single_post/edit/?type='.$this->type));
                    }
                } 
            }
        }
        
        
        $this->data['tmp_man'] = 'backend/single_post/add';
        $this->data['tmp'] = "backend/single_post/index";
        $this->load->view('backend/layout/index', $this->data); 
    }
}