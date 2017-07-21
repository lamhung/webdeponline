<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public $data = array();
    public $user_login = array();
    public $type = "";
    function __construct() {
        parent::__construct();

        $this->data['controller'] = $this->router->fetch_class();
        $this->data['action'] = $this->router->fetch_method();
        $this->controller = $this->data['controller']; 
        $this->action = $this->data['action']; 

        if ($this->uri->segment(1) == 'acp') {
            $this->lang->load('backend');
            $this->user_model->backend_is_login();
            $this->user_login = $this->session->userdata('user_login');
            $this->user_model->check_permission($this->router->fetch_class(), $this->router->fetch_method());
            // print_r($this->user_login['permission']);
            $this->data['user'] = $this->user_model->get_by($this->user_login['user_id']);
            
        }else {
            $this->lang->load('frontend');

            $this->data['row_setting'] = $this->config_model->get_by(1);
            $condition_logo = array('select' => 'name, link, image',
                            'where' => array('type' => 'logo'),
                        );
            $this->data['rows_logo'] = $this->photo_model->get_rows($condition_logo);
            $condition_slider = array('select' => 'name, link, image , description',
                            'where' => array('type' => 'slider' , 'status' => 1),
                        );
            $this->data['rows_slider'] = $this->photo_model->get_rows($condition_slider);

            $condition_doitac = array('select' => 'name, link, image , description',
                            'where' => array('type' => 'doitac', 'status' => 1),
                        );
            $this->data['rows_doitac'] = $this->photo_model->get_rows($condition_doitac);

            $condition_product_list = array('select' => 'name, site_title, id',
                            'where' => array('type' => 'article', 'status' => 1),
                            'order_by' => "sort_order,id ASC",
                        );
            $this->data['rows_product_list'] = $this->article_list_model->get_rows($condition_product_list);

            $condition_footer = array('select' => 'content, name',
                            'where' => array('type' => 'footer'),
                        );
            $this->data['rows_footer'] = $this->single_post_model->get_by($condition_footer);

            $condition_about = array(
                'select' => 'name, description, image',
                'where' => array('type' => 'about'),
            );
            $this->data['row_about'] = $this->single_post_model->get_by($condition_about);
        }

        // begin type
        if($this->input->get('type')) {
            $type = $this->input->get('type') ? $this->input->get('type') : '';
            $this->data['type'] = $type;
            $this->type = $type;
        
            switch ($type) {
                case 'product': 
                    switch ($this->controller) {
                        case 'category_list':
                                $this->title_index = "Danh mục cấp 1";
                                $this->width_thumb = '200';

                                $this->height_thumb = '400';
                            break;
                        case 'category_cat':
                                $this->title_index = "Danh mục cấp 1";
                                $this->width_thumb = '300';
                                $this->height_thumb = '400';
                            break;
                        default:
                                $this->title_index = "Sản phẩm";
                                $this->width_thumb = '520';
                                $this->height_thumb = '520';
                            break;
                    }
                break;
                case 'hosting': 
                    switch ($this->controller) {
                        case 'category_list':
                                $this->title_index = "Danh mục cấp 1";
                                $this->width_thumb = '200';

                                $this->height_thumb = '400';
                            break;
                        case 'category_cat':
                                $this->title_index = "Danh mục cấp 1";
                                $this->width_thumb = '300';
                                $this->height_thumb = '400';
                            break;
                        default:
                                $this->title_index = "Hosting";
                                $this->config_list = "false";
                                $this->config_cat = "false";
                                $this->config_hosting = "true";
                                $this->config_highlight = "true";
                                $this->config_highlight1 = "false";
                                $this->config_hosting = "true";
                                $this->width_thumb = '520';
                                $this->height_thumb = '520';
                            break;
                    }
                break;
                //************************* Article *********************************//
                case 'article': 
                    switch ($this->controller) {
                        case 'article_list':
                                $this->title_index = "Danh mục cấp 1";
                                $this->config_image = 'false';
                                $this->width_thumb = '200';

                                $this->height_thumb = '400';
                            break;
                        case 'article_cat':
                                $this->title_index = "Danh mục cấp 1";
                                $this->width_thumb = '300';
                                $this->height_thumb = '400';
                            break;
                        default:
                                $this->title_index = "Thiết kế web";
                                $this->config_list = "true";
                                $this->config_cat = "false";
                                $this->config_link = "true";
                                $this->width_thumb = '520';
                                $this->height_thumb = '520';
                            break;
                    }
                break;                   
                
                case 'ykien':
                    $this->title_index = "Ý kiến";
                    $this->config_list = "false";
                    $this->config_cat = "false";
                    $this->width_thumb = '300';
                    $this->height_thumb = '300';
                    break;
                 case 'news':
                    $this->title_index = "Tin tức";
                    $this->config_list = "false";
                    $this->config_cat = "false";
                    $this->width_thumb = '300';
                    $this->height_thumb = '300';
                    break;
                case 'banner':
                    $this->title_index = "Banner";
                    $this->width_thumb = '1349';
                    $this->height_thumb = '400';
                    break;
                case 'logo':
                    $this->title_index = "Logo";
                    $this->width_thumb = '380';
                    $this->height_thumb = '70';
                    break;
                case 'slider':
                    $this->title_index = "slider";
                    $this->width_thumb = '1349';
                    $this->height_thumb = '460';
                    break;
                case 'doitac':
                    $this->title_index = "Đối tác";
                    $this->width_thumb = '170';
                    $this->height_thumb = '100';
                    break;
                // Single_model
                case 'about':
                    $this->title_index = "Giới thiệu";
                    $this->config_img = 'true';
                    $this->config_desc = 'true';
                    $this->width_thumb = '300';
                    $this->height_thumb = '300';
                    break;
                case 'footer':
                    $this->title_index = "Giới thiệu";
                    $this->config_img = 'false';
                    $this->config_desc = 'false';
                    $this->width_thumb = '300';
                    $this->height_thumb = '300';
                    break;
                case 'contact':
                    $this->title_index = "Liên hệ";
                    $this->config_img = 'false';
                    $this->config_desc = 'false';
                    $this->width_thumb = '300';
                    $this->height_thumb = '300';
                    break;
                // Posts_model
                
            }
        }// end type

        


        
    }


}
