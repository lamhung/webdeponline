<?php defined('BASEPATH') OR exit('No direct script access allowed');
class User extends MY_Controller {
    function __construct() {
        parent::__construct();
        $this->data['per_page'] = 2;
        $this->permission = 'true';
    }
    function index() {

        //Get config for pagination
        $config = $this->pagination_mylib->bootstrap_configs();
        $config['base_url'] = base_url('acp/user/page');
        $config['total_rows'] = $this->user_model->get_total();
        $config['per_page'] = $this->data['per_page'];
        $config['uri_segment'] = 4;
        $config['use_page_numbers'] = TRUE;
        $this->pagination->initialize($config);
        $condition = array(
            'select' => "id,fullname,username,groups,gender,status",
            'order_by' => 'id ASC',
            'limit' => $config['per_page'],
            'offset' => $this->uri->segment(4) ? ($this->uri->segment(4) - 1) * $config['per_page'] : 0
        );
        $rows = $this->user_model->get_rows($condition);

        $this->data['rows'] = $rows;
        $this->data['tmp'] = 'backend/user/index';
        $this->data['tmp_user'] = 'backend/user/list';
        $this->load->view('backend/layout/index', $this->data);
    }
    function add() {
        $this->data['title_action'] = "Thêm mới user";
        $this->data['row'] = $this->user_model->defaut_value();
        //load ra permission trong config/my_config(load tự dong trong autoload)
        $permission = $this->config->item('permission');
        $this->data['permission_group'] = $permission[$this->data['row']['groups']];
        
        if($this->input->post('submit')) {
            $post = $this->input->post();
            $this->form_validation->set_rules('fullname',$this->lang->line('user_fullname'),'required');
            $this->form_validation->set_rules('username',$this->lang->line('user_username'),'required|is_unique[lh_users.username]');
            $this->form_validation->set_rules('password',$this->lang->line('user_password'),'required');
            $this->form_validation->set_rules('repass',$this->lang->line('user_re_password'), 'required|matches[password]');
            $this->form_validation->set_rules('email', $this->lang->line('user_email'), 'required|valid_email');
            //permission
            if ($post['permissions']) {
               
                $tmp = array();
                foreach ($post['permissions'] as $permission) {
                    $permission = explode('-', $permission);
                    if (isset($tmp[$permission[0]])) {
                        $tmp[$permission[0]] .= '|' . $permission[1];
                    } else {
                        $tmp[$permission[0]] = $permission[1];
                    }
                }
                //print_r($tmp);
                $post['permission'] = serialize($tmp);
                // print_r($post['permission']);exit;
            }
            if($this->form_validation->run() === TRUE) {
                $success = TRUE;
                //UPLOAD
                if($_FILES['image']['name']) {
                    $this->load->library('image_mylib');
                    $image = $this->image_mylib->upload_one('image','user',array('width'=> 300, 'height'=>300));
                    if($image['error']) {
                        $this->data['image_error'] = $image['error'];
                        $success = FALSE;
                    }else {
                        $post['image'] = $image['file_name'];
                        
                    }
                }
                if($success) {
                    $post['salt'] = rand(1000, 9999);
                    $post['password'] = md5(md5($post['password'] . $post['salt']));
                    $post['birthday'] = strtotime($post['birthday']);
                    $post['created'] = time();
                    $result = $this->user_model->insert($post);
                    if($result) {
                        $id = $this->user_model->insert_id();
                        $this->session->set_flashdata('msg_success', $this->lang->line('user_has_been_created'));
                        redirect(base_url('acp/user'));
                    }
                }
            }
        } 
        
        $this->data['tmp_user'] = 'backend/user/add';
        $this->data['tmp'] = "backend/user/index";
        $this->load->view('backend/layout/index',$this->data);
    }
    function edit($id = 0) {
        
        
        $this->data['title_action'] = "Cập nhật user";
        $user = $this->user_model->get_by($id);
        if (!$user) {
            $this->session->set_flashdata("msg_error", $this->lang->line('user_not_exist'));
            redirect(base_url('acp/user'));
        }

        $this->data['row'] = $this->user_model->convert_data($user);

        if ($this->input->post('submit')) {
            $post = $this->input->post();
            // print_r($post['permissions']);exit;
            //validate form
            $this->form_validation->set_rules('fullname', 'Họ tên', 'required');
            $required = $post['username'] != $user['username'] ? "required|is_unique[lh_users.username]" : "required";
            $this->form_validation->set_rules('username', 'Tên đăng nhập', $required);
            $this->form_validation->set_rules('password', 'Mật khẩu');
            $requi_repass = $post['password'] != "" ? 'matches[password]' : "";
            $this->form_validation->set_rules('repass', 'Nhập lại mật khẩu');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            //permission

            if (isset($post['permissions'])) {
                // print_r($post['permissions']);exit;
                $tmp = array();
                foreach ($post['permissions'] as $permission) {
                    $permission = explode('-', $permission);
                    if (isset($tmp[$permission[0]])) {
                        $tmp[$permission[0]] .= '|' . $permission[1];
                    } else {
                        $tmp[$permission[0]] = $permission[1];
                    }
                }
                //print_r($tmp);
                $post['permission'] = serialize($tmp);
            }

            if ($this->form_validation->run() === TRUE) {
                $success = TRUE;
                //upload
                if ($_FILES['image']['name']) {
                    $this->load->library('image_mylib');
                    $image = $this->image_mylib->upload_one('image', 'user', array('width' => 256, 'height' => 256));
                    if ($image['error']) {
                        $this->data['image_error'] = $image['error'];
                        $success = FALSE;
                    } else {
                        $post['image'] = $image['file_name'];
                        unlink(UPLOADPATH . 'user/' . $user['image']);
                        unlink(UPLOADPATH . 'user/thumbnail/' . $user['image']);
                    }
                }
                if ($success) {
                    if (isset($post['password']) && $post['password'] != "") {
                        $post['salt'] = rand(1000, 9999);
                        $post['password'] = md5(md5($post['password'] . $post['salt']));
                    } else {
                        $post['salt'] = $user['salt'];
                        $post['password'] = $user['password'];
                    }
                    $post['birthday'] = strtotime($post['birthday']);
                    $post['time_updates'] = time();
                    //echo $post['birthday'];exit;
                    $post['id'] = $id;
                    $result = $this->user_model->update($post);
                    if ($result) {
                        $this->session->set_flashdata("msg_success", $this->lang->line('user_has_been_updated'));
                        redirect(base_url('acp/user/edit/'.$id));
                    }
                }
            }
        }
        //Permission
        // echo $this->data['row']['permission'];exit;
        $this->data['permission_group'] = (isset($this->data['row']['permission'])) ? unserialize($this->data['row']['permission']) : array();
        $this->data['tmp_user'] = 'backend/user/add';
        $this->data['tmp'] = 'backend/user/index';
        $this->load->view('backend/layout/index', $this->data);
    }
    
    function show($id = "") {
        $user = $this->user_model->get_by($id);
        if (!$user) {
            $this->session->set_flashdata("msg_error", $this->lang->line('user_not_exist'));
            redirect(base_url('acp/user'));
        }

        $this->data['row'] = $this->user_model->convert_data($user);
        $this->data['tmp_user'] = 'backend/user/show';
        $this->data['tmp'] = 'backend/user/index';
        $this->load->view('backend/layout/index', $this->data);
    }
    
    function delete($id = "") {
        $user = $this->user_model->get_by($id);
        if (!$user) {
            $this->session->set_flashdata("msg_error", $this->lang->line('user_not_exist'));
            redirect(base_url('acp/user'));
        }
        $result = $this->user_model->delete($id);
        $this->session->set_flashdata("msg_info", $this->lang->line('user_has_been_deleted'));
        redirect(base_url('acp/user'));
    }
}

