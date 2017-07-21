<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Cache extends MY_Controller {
    function __construct() {
        parent::__construct();    
    }

    function delete() {
        if(delete_files(FCPATH.'cache/', TRUE)){
            echo "<script>alert('Xoa cache thanh cong')</script>";
             redirect(base_url('acp'));
        }
       
    }
    
    
}