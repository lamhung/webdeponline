<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends MY_Model {

    function __construct() {
        parent::__construct('users');
    }

    function defaut_value() {
        return $data = array(
            'fullname' => "",
            'username' => "",
            'password' => "",
            'groups' => 'admin',
            'gender' => 1,
            'image_' => backend_url() . "images/no_avatar_256x256.png",
            'phone' => "",
            'email' => "",
            'address' => "",
            'birthday_' => "",
            'status' => 1
        );
    }

    function convert_data($data = array()) {
        if (!empty($data['image'])) {
            $data['image_'] = base_url() . "upload/user/thumbnail/" . $data['image'];
        } else {
            $data['image_'] = backend_url() . "images/no_avatar_256x256.png";
        }
        $data['gender_'] = $this->lang->line('user_gender_' . $data['gender']);
        $data['status_'] = $this->lang->line('user_status_' . $data['status']);
        if (isset($data['created'])) {
            $data['created_'] = date('d/m/Y', $data['created']);
        }

        $data['birthday_'] = isset($data['birthday']) && $data['birthday'] != 0 ? date('d/m/Y', $data['birthday']) : "";

        return $data;
    }

    function convert_permission($string = "") {
        if ($string == 'index') {
            $string = 'Danh Sách';
        }
        if ($string == 'add') {
            $string = 'Thêm';
        }
        if ($string == 'edit') {
            $string = 'Sửa';
        }
        if ($string == 'show') {
            $string = 'Chi tiết';
        }
        if ($string == 'delete') {
            $string = 'Xóa';
        }

        if ($string == 'user') {
            $string = 'User';
        }
        if ($string == 'category') {
            $string = 'Danh Mục';
        }
        if ($string == 'post') {
            $string = 'Bài Viết';
        }
        return $string;
    }
    function check_permission($controller, $action) {
        $permission_list = $this->config->item('permission');
        
        if(!in_array($controller, array_keys($permission_list['list']))) {
            return TRUE;
        }else if(!in_array($action,array('index','add', 'edit', 'delete', 'show'))) {
            return TRUE;
        }
       
        $user_login = $this->session->userdata('user_login');
        $permission = $user_login['permission'];

        $allow = FALSE;
        if(isset($permission[$controller])) {
            if (in_array($action, $permission[$controller])) {
                $allow = TRUE;
            }
        }

        if (!$allow) {
            redirect(base_url('acp/deny'));
        }
        return TRUE;
    }
    
    function backend_is_login() {
        $user_login = $this->session->userdata('user_login');
        $this->uri->uri_string();
        $this->session->set_userdata('curent_uri', 'acp');
        if (!isset($user_login['user_id'])) {
            redirect(base_url('acp/login'));
        } else if ($user_login['groups'] != 'admin') {
            redirect(base_url('acp/deny'));
        } else {
            $this->session->set_userdata('curent_uri', "");
        }

        return true;
    }
    function backend_login($input = array()) {
        $result = array('success' => FALSE, 'msg' => "");
        if (isset($input['username'])) {
            $condition = array(
                'where' => array('username' => $input['username'])
            );
            $user = $this->get_by($condition);
            if (!$user) {
                $result['msg'] = $this->lang->line('user_not_exist');
            } else {
                if ($user['groups'] != 'admin') {
                    $result['msg'] = $this->lang->line('user_has_been_deny');
                } else if ($user['status'] == 0) {
                    $result['msg'] = $this->lang->line('user_has_been_locked');
                } else if ($user['password'] != md5(md5($input['password'] . $user['salt']))) {
                    $result['msg'] = $this->lang->line('auth_password_not_available');
                } else {
                    $permission = $user['permission'] != NULL ? unserialize($user['permission']) : array();
                    $tmp = array();
                    foreach ($permission as $k => $v) {
                        $tmp[$k] = explode('|', $v);
                    }
                    $session = array(
                        'user_id' => $user['id'],
                        'username' => $user['username'],
                        'fullname' => $user['fullname'],
                        'groups' => $user['groups'],
                        'permission' => $tmp
                    );
                    $this->session->set_userdata('user_login', $session);
                    $result['success'] = TRUE;
                }
            }
        }

        return $result;
    }
    
    function backend_logout() {
        $this->session->unset_userdata('user_login');
    }
    
}
