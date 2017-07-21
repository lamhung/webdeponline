<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends MY_Controller {
    public function __construct() {
        parent::__construct();

        
    }
    public function index() {
    	$condition_hosting = array('select' => 'id, name, price, site_title, status,dungluong,bangthong',
    			'where' => array('status' => 1, 'type' => 'hosting', 'highlight' => 1),
                'limit' => 12,
    		);
        $rows_hosting = $this->product_model->get_rows($condition_hosting);
    	$this->data['rows_hosting'] = $rows_hosting;

        $condition_article_hl = array(
                'select' => 'id, name, site_title, image, status,link',
                'where' => array('status' => 1, 'type' => 'article', 'highlight' => 1),
                'order_by' => 'id,sort_order desc',
                'limit' => 16,
            );
        $rows_hl = $this->article_model->get_rows($condition_article_hl);
        $this->data['rows_hl'] = $rows_hl;

        $condition_article_ykien = array(
                'select' => 'id, name,  site_title, image, status, description',
                'where' => array('status' => 1, 'type' => 'ykien', 'highlight' => 1),
                'order_by' => 'id,sort_order desc',
                'limit' => 8,
            );
        $rows_ykien = $this->article_model->get_rows($condition_article_ykien);
        $this->data['rows_ykien'] = $rows_ykien;
        
        

        $this->data['tmp'] = 'frontend/home/index';
        $this->load->view('frontend/layout/index',$this->data);
    }
    
}