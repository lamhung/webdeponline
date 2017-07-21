<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    protected $data = array();
    function __construct() {
        parent::__construct();
        $this->lang->load('backend');
//        $this->load->library('form_validation');
    }

    function login() {
        //check exit login
        $user_login = $this->session->userdata('user_login');
        if ($user_login) {
            redirect(base_url('acp'));
        }
        $this->data['msg'] = '';
        //submit
        if ($this->input->post('submit')) {
            $post = $this->input->post();
            $this->form_validation->set_rules('username',$this->lang->line('user_username'),"required");
            $this->form_validation->set_rules('password',$this->lang->line('user_password'),"required");
            if($this->form_validation->run() === true) {
                $result = $this->user_model->backend_login($post);
                //print_r($result);exit;
                if ($result['success']) {
                    $curent_uri = $this->session->userdata('curent_uri');
                    $this->data['url'] = $curent_uri ? base_url($curent_uri) : base_url('acp');
                    $this->data['msg'] = $this->lang->line('auth_login_to_system');

                    $this->load->view('backend/auth/loading', $this->data);
                    return true;
                } else {
                    $this->data['msg'] = $result['msg'];
                }
            }
        }
        $this->load->view('backend/auth/login', $this->data);
    }

    public function logout() {
        $this->user_model->backend_logout();
        $this->load->view('backend/auth/loading', array('msg' => $this->lang->line('auth_logout_from_sytem'), 'url' => base_url('acp/login')));
    }

    function deny() {
        $this->load->view('backend/auth/deny');
    }

}
