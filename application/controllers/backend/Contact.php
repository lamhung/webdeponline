<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Contact extends MY_Controller {
    function __construct() {
        parent::__construct();
        $this->data['per_page'] = 5;
        $this->row_setting = $this->config_model->get_by(1);
    }

    function index() {
        //Get config for pagination
        $config = $this->pagination_mylib->bootstrap_configs();
        $config['base_url'] = base_url('acp/contact/page');
        $config['reuse_query_string'] = TRUE;
        $config['total_rows'] = $this->contact_model->get_total();
        $config['per_page'] = $this->data['per_page'];
        $config['uri_segment'] = 4;
        $config['use_page_numbers'] = TRUE;
        $this->pagination->initialize($config);
        $condition = array(
            'order_by' => 'id ASC',
            'limit' => $config['per_page'],
            'offset' => $this->uri->segment(4) ? ($this->uri->segment(4) - 1) * $config['per_page'] : 0
        );
        $rows = $this->contact_model->get_rows($condition);
        
        $this->data['rows'] = $rows;
        $this->data['tmp_man'] = 'backend/contact/list';
        $this->data['tmp'] = 'backend/contact/index';
        $this->load->view('backend/layout/index', $this->data);
    }

    function edit($id) {
    	$user_login = $this->session->userdata['user_login'];
        $this->data['title_action'] = "Chỉnh sửa liên hệ";
        $condition_contact = array(
            'where' => array(
                'id' => $id,
            ),
        );
        $row = $this->contact_model->get_by($condition_contact);

    	if($this->input->post('submit')) {
    		$post = $this->input->post();
    		$this->form_validation->set_rules('name','Vui lòng nhập tên','required');
            $this->form_validation->set_rules('email','Vui lòng nhập email','required|valid_email');
    		// $this->form_validation->set_rules('phone','Vui lòng nhập Số điện thoại','required|min_length[10]');
    		if ($this->form_validation->run() === TRUE) {
    			$success = TRUE;
               
    			if($success){
                    $post['id'] = $id;
                    $post['user_id'] = $user_login['id'];
    				$post['time_update'] = time();
    				$result = $this->contact_model->update($post);
                    if ($result) {
                        $this->session->set_flashdata('msg_success', $this->lang->line('product_has_been_updated'));
                        redirect(base_url('acp/contact'));
                    }
    			}
    		}
    	}      

        $this->data['row'] = $row;  
        $this->data['tmp'] = "backend/contact/add";
        $this->load->view('backend/layout/index', $this->data); 
    }
    function delete($id = "") {
        $condition_contact = array(
            'where' => array(
                'id' => $id,
            ),
        );
        $row = $this->contact_model->get_by($condition_contact);
        if (!$row) {
            $this->session->set_flashdata("msg_error", $this->lang->line('product_not_exist'));
            redirect(base_url('acp/contact'));
        }
        $result = $this->contact_model->delete($id);
        if($result) {
           
            $this->session->set_flashdata("msg_info", $this->lang->line('product_has_been_deleted'));
        }
        redirect(base_url('acp/contact'));
    }
}
?>