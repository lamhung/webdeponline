<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Timthumb extends MY_Controller {

    public function __construct() {
        parent::__construct();  
        $this->load->library('ci_timthumb');

    }
    public function tim_thumb($w='100', $h='100',$zc='1',$q='90') {
         // echo 'ádasd';die();
        $params['w'] = $w;
        $params['h'] = $h;
        $params['zc'] = $zc;
        $params['q'] = $q;
        $src = $this->input->get('src');
        // echo $src;die();
        return $this->ci_timthumb->load($src, $params); 
       
    }

}