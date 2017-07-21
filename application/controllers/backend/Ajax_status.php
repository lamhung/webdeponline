<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Ajax_status extends MY_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('ajax_change_status_model');
    }
    function change_status() {
        if($this->input->post('id') && $this->input->post('table') && $this->input->post('column')) {
            $id = $this->input->post('id');
            $table = $this->input->post('table');
            $column = $this->input->post('column');
            $this->ajax_change_status_model->update_status($id, $table , $column);
        }
    }
    function change_sort_order() {
         if($this->input->post('id') && $this->input->post('table') && $this->input->post('value')) {
            $id = $this->input->post('id');
            $table = $this->input->post('table');
            $value = $this->input->post('value');
            $this->ajax_change_status_model->update_sort_order($id, $table , $value);
        }
    }
}