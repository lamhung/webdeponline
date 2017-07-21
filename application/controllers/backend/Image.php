<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Image extends MY_Controller {

    function __construct() {
        parent::__construct();
//        $this->load->model('image_model');
       
    }

    function index() {
        $table_name = $this->input->get('table_name') ? $this->input->get('table_name') : "";
        $table_id = $this->input->get('table_id') ? $this->input->get('table_id') : "";
        $type = $this->input->get('type') ? $this->input->get('type') : "";
        if ($this->input->post('submit')) {
            if ($_FILES['images']['name'] != "") {
                $post = $this->input->post();
                $this->load->library('image_mylib');
                $directory = date('Y/m', time());
                $images = $this->image_mylib->upload_multi('images', $directory, array('width' => 400, 'height' => 400));
//                echo "<pre>";
//                print_r($images);
//                echo "</pre>";
                foreach ($images as $image) {
                    $rows = count($image);
                    if ($rows > 0) {
                        if (isset($image['error'])) {
                            $this->data['image_error'] = $image['name'].' '.$image['error'];
                            continue;
                        } else {
                            $post['file_name'] = $image['file_name'];
                            $post['orig_name'] = $image['orig_name'];
                            $post['path_folder'] = date('Y/m', time());
                            $post['user_id'] = $this->user_login['user_id'];
                            $post['table_name'] = $table_name;
                            $post['table_id'] = $table_id;
                            $post['type'] = $type;
                            $this->image_model->insert($post);
                        }
                    }
                }
            }
        }
        $condition = array(
            'where' => array('table_name' =>$table_name, 'table_id' => $table_id,'type' => $type),
        );
        $this->data['images'] = $this->image_model->get_rows($condition);
        // print_r($this->data['images']);
        $this->load->view('backend/images/index', $this->data);
    }
    
    function detete() {
        if($this->input->post('id')) {
            $id = $this->input->post('id');
            $row = $this->image_model->get_by($id);
            if($row) {
                $this->image_model->delete($id);
                unlink(UPLOADPATH.$row['path_folder'].'/' . $row['file_name']);
                unlink(UPLOADPATH.$row['path_folder'].'/thumbnail/' . $row['file_name']);
                
                $condition = array(
                    'where' => array('table_name' =>$row['table_name'], 'table_id' =>$row['table_id'], 'type' => $row['type']),
                );
                $this->data['images'] = $this->image_model->get_rows($condition);
            }
            
            $this->load->view('backend/images/list', $this->data);
        }
       
    }

}
