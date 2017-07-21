<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {
	public function index()
	{
		$condition_new = array('select' => 'id, name, price, site_title, image, product_new, status',
    			'where' => array('status' => 1, 'type' => 'product', 'product_new' => 1),
    		);
    	$rows_new = $this->product_model->get_rows($condition_new);

        $condition_product_hl = array('select' => 'id, name, price, site_title, image, product_new, status',
                'where' => array('status' => 1, 'type' => 'product', 'product_hl' => 1),
                'order_by' => 'id,sort_order desc',
            );
        $rows_hl = $this->product_model->get_rows($condition_product_hl);


    	$this->data['rows_new'] = $rows_new;
        $this->data['rows_hl'] = $rows_hl;
		$this->data['tmp'] = 'frontend/home/index';
        $this->load->view('frontend/layout/index',$this->data);
	}
}
