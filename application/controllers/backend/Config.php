<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Config extends MY_Controller {
    function __construct() {
        parent::__construct();
        $this->data['per_page'] = 5;
        $this->load->model('config_model');
    }

    function edit() {
        $user_login = $this->session->userdata['user_login'];
        $this->data['title_action'] =  $this->lang->line('config');
        $row = $this->config_model->get_by(1);
        
        if($row) {
        	$this->data['row'] = $row;

        }else {
        	$this->data['row'] = $this->config_model->default_value();
        }
        if($this->input->post('submit')) {
            $post = $this->input->post();
            $this->form_validation->set_rules('name', $this->lang->line('title'), 'required');
            if($this->form_validation->run() === TRUE) {
                $success = TRUE;
                if ($success) {
                    $post['user_id'] = $user_login['user_id'];
                    $post['time_updates'] = time();
                    if($row) {
                    	$post['id'] = 1;
	                    $result = $this->config_model->update($post);
	                    
	                }else {
	                	$result = $this->config_model->insert($post);
	                }
                    if ($result) {
                        $this->session->set_flashdata('msg_success', $this->lang->line('config_has_been_updated'));
                        
                        redirect(base_url('acp/config/edit'));
                    }
                } 
            }
        }
        $this->data['tmp_man'] = 'backend/config/add';
        $this->data['tmp'] = "backend/config/index";
        $this->load->view('backend/layout/index', $this->data); 
    }
}