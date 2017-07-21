<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax_change_status_model extends CI_Model {
    function __construct() {
        parent::__construct();
       $this->load->database();
    }
    
    function update_status($id, $table,$column) {
        $post = array();
        if($id != ""){
            $this->db->select($column,'id');
            $this->db->where('id', $id);
            $query = $this->db->get($table);
            $row = $query->row_array();
            $status = $row[$column];
            if($status == 1) {
                $post[$column] = 0;  
            }else{
                $post[$column] = 1;  
            }
            $this->db->where('id', $id);
            $this->db->update($table, $post);
            // echo $this->db->last_query();
        }
    }
    function update_sort_order($id, $table, $value) {
        $data = array();
        if($id != ""){
            $data['sort_order'] = $value;
            $this->db->where('id', $id);
            $this->db->update($table, $data); 
            // $this->db->last_query();exit;
        }
    }
}