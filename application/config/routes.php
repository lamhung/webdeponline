<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'frontend/home';

$route['acp'] = 'backend/home';

//ajax_change_status
$route['acp/change_status'] = 'backend/ajax_status/change_status';
$route['acp/change_sort_order'] = 'backend/ajax_status/change_sort_order';
//Auth
$route['acp/login'] = 'backend/auth/login';
$route['acp/logout'] = 'backend/auth/logout';
$route['acp/deny'] = 'backend/auth/deny';
//User
$route['acp/user'] = 'backend/user';
$route['acp/user/page'] = 'backend/user';
$route['acp/user/page/(:num)'] = 'backend/user';
$route['acp/user/add'] = 'backend/user/add';
$route['acp/user/show/(:num)'] = 'backend/user/show/$1';
$route['acp/user/edit/(:num)'] = 'backend/user/edit/$1';
$route['acp/user/delete/(:num)'] = 'backend/user/delete/$1';
//category_list
$route['acp/category_list'] = 'backend/category_list';
$route['acp/category_list/page'] = 'backend/category_list';
$route['acp/category_list/page/(:num)'] = 'backend/category_list';
$route['acp/category_list/add'] = 'backend/category_list/add';
$route['acp/category_list/show/(:num)'] = 'backend/category_list/show/$1';
$route['acp/category_list/edit/(:num)'] = 'backend/category_list/edit/$1';
$route['acp/category_list/delete/(:num)'] = 'backend/category_list/delete/$1';
//category_cat
$route['acp/category_cat'] = 'backend/category_cat';
$route['acp/category_cat/page'] = 'backend/category_cat';
$route['acp/category_cat/page/(:num)'] = 'backend/category_cat';
$route['acp/category_cat/add'] = 'backend/category_cat/add';
$route['acp/category_cat/show/(:num)'] = 'backend/category_cat/show/$1';
$route['acp/category_cat/edit/(:num)'] = 'backend/category_cat/edit/$1';
$route['acp/category_cat/delete/(:num)'] = 'backend/category_cat/delete/$1';
//product category
$route['acp/product_category'] = 'backend/product_category';
$route['acp/product_category/add'] = 'backend/product_category/add';
$route['acp/product_category/edit/(:num)'] = 'backend/product_category/edit/$1';
//product
$route['acp/product'] = 'backend/product';
$route['acp/product/page'] = 'backend/product';
$route['acp/product/page/(:num)'] = 'backend/product';
$route['acp/product/add'] = 'backend/product/add';
$route['acp/product/show/(:num)'] = 'backend/product/show/$1';
$route['acp/product/edit/(:num)'] = 'backend/product/edit/$1';
$route['acp/product/delete/(:num)'] = 'backend/product/delete/$1';
$route['acp/product/ajax_load_cate'] = 'backend/product/ajax_load_cate';
$route['acp/product/ajax_change_status'] = 'backend/product/ajax_change_status';
$route['acp/product/change_sort_order'] = 'backend/product/change_sort_order';
//Article
$route['acp/article_list'] = 'backend/article_list';
$route['acp/article_list/page'] = 'backend/article_list';
$route['acp/article_list/page/(:num)'] = 'backend/article_list';
$route['acp/article_list/add'] = 'backend/article_list/add';
$route['acp/article_list/show/(:num)'] = 'backend/article_list/show/$1';
$route['acp/article_list/edit/(:num)'] = 'backend/article_list/edit/$1';
$route['acp/article_list/delete/(:num)'] = 'backend/article_list/delete/$1';

$route['acp/article_cat'] = 'backend/article_cat';
$route['acp/article_cat/page'] = 'backend/article_cat';
$route['acp/article_cat/page/(:num)'] = 'backend/article_cat';
$route['acp/article_cat/add'] = 'backend/article_cat/add';
$route['acp/article_cat/show/(:num)'] = 'backend/article_cat/show/$1';
$route['acp/article_cat/edit/(:num)'] = 'backend/article_cat/edit/$1';
$route['acp/article_cat/delete/(:num)'] = 'backend/article_cat/delete/$1';

$route['acp/article'] = 'backend/article';
$route['acp/article/page'] = 'backend/article';
$route['acp/article/page/(:num)'] = 'backend/article';
$route['acp/article/add'] = 'backend/article/add';
$route['acp/article/show/(:num)'] = 'backend/article/show/$1';
$route['acp/article/edit/(:num)'] = 'backend/article/edit/$1';
$route['acp/article/delete/(:num)'] = 'backend/article/delete/$1';
$route['acp/article/ajax_load_cate'] = 'backend/article/ajax_load_cate';
$route['acp/article/ajax_change_status'] = 'backend/article/ajax_change_status';
$route['acp/article/change_sort_order'] = 'backend/article/change_sort_order';
//Contact
$route['acp/contact'] = 'backend/contact';
$route['acp/contact/page'] = 'backend/contact';
$route['acp/contact/page/(:num)'] = 'backend/contact';
$route['acp/contact/show/(:num)'] = 'backend/contact/show/$1';
$route['acp/contact/edit/(:num)'] = 'backend/contact/edit/$1';
$route['acp/contact/delete/(:num)'] = 'backend/contact/delete/$1';
//news
$route['acp/post'] = 'backend/post';
$route['acp/post/page'] = 'backend/post';
$route['acp/post/page/(:num)'] = 'backend/post';
$route['acp/post/add'] = 'backend/post/add';
$route['acp/post/show/(:num)'] = 'backend/post/show/$1';
$route['acp/post/edit/(:num)'] = 'backend/post/edit/$1';
$route['acp/post/delete/(:num)'] = 'backend/post/delete/$1';
$route['acp/post/ajax_change_status'] = 'backend/post/ajax_change_status';
$route['acp/post/change_sort_order'] = 'backend/post/change_sort_order';
//photo
$route['acp/photo'] = 'backend/photo';
$route['acp/photo/page'] = 'backend/photo';
$route['acp/photo/page/(:num)'] = 'backend/photo';
$route['acp/photo/add'] = 'backend/photo/add';
$route['acp/photo/show/(:num)'] = 'backend/photo/show/$1';
$route['acp/photo/edit/(:num)'] = 'backend/photo/edit/$1';
$route['acp/photo/delete/(:num)'] = 'backend/photo/delete/$1';
$route['acp/photo/ajax_load_cate'] = 'backend/photo/ajax_load_cate';
//Single_post
$route['acp/single_post'] = 'backend/single_post';
$route['acp/single_post/show/(:num)'] = 'backend/single_post/show/$1';
$route['acp/single_post/edit'] = 'backend/single_post/edit';
//config
$route['acp/config/edit'] = 'backend/config/edit';
//Images
$route['acp/image'] = 'backend/image';
$route['acp/image/detete'] = 'backend/image/detete';

// Xoa cache
$route['acp/cache/detete'] = 'backend/cache/delete';

// ============================FRONEND=======================================//

$route['index'] = 'frontend/home';

// ------------------product-----------------------//

$route['san-pham'] = 'frontend/product';
$route['san-pham/trang'] = 'frontend/product';
$route['san-pham/trang/(:num)'] = 'frontend/product';

$route['hosting'] = 'frontend/product';
$route['hosting/trang'] = 'frontend/product';
$route['hosting/trang/(:num)'] = 'frontend/product';
//category_list
$route['san-pham/(:any)'] = 'frontend/product/category_list/$1';
$route['san-pham/(:any)/trang'] = 'frontend/product/category_list/$1';
$route['san-pham/(:any)/trang/(:num)'] = 'frontend/product/category_list/$1';
//category_cat
$route['san-pham/(:any)/(:any)'] = 'frontend/product/category_cat/$2';
$route['san-pham/(:any)/(:any)/trang'] = 'frontend/product/category_cat/$2';
$route['san-pham/(:any)/(:any)/trang/(:num)'] = 'frontend/product/category_cat/$2';

//product_detail
$route['chi-tiet-san-pham/(:any)'] = 'frontend/product/detail/$1';

// ------------------Single post-----------------------//
$route['gioi-thieu'] = 'frontend/single_post';
$route['domain'] = 'frontend/single_post';

// ------------------Article-----------------------//
$route['thiet-ke-web'] = 'frontend/article';
$route['thiet-ke-web/trang'] = 'frontend/article';
$route['thiet-ke-web/trang/(:num)'] = 'frontend/article';
$route['chi-tiet-thiet-ke-web/(:any)'] = 'frontend/article/detail/$1';
//category_list
$route['thiet-ke-web/(:any)'] = 'frontend/article/category_list/$1';
$route['thiet-ke-web/(:any)/trang'] = 'frontend/article/category_list/$1';
$route['thiet-ke-web/(:any)/trang/(:num)'] = 'frontend/article/category_list/$1';
//category_cat
$route['thiet-ke-web/(:any)/(:any)'] = 'frontend/article/category_cat/$2';
$route['thiet-ke-web/(:any)/(:any)/trang'] = 'frontend/article/category_cat/$2';
$route['thiet-ke-web/(:any)/(:any)/trang/(:num)'] = 'frontend/article/category_cat/$2';


// ------------------Post-----------------------//
$route['tin-tuc'] = 'frontend/article';
$route['tin-tuc/trang'] = 'frontend/article';
$route['tin-tuc/trang/(:num)'] = 'frontend/article';
$route['chi-tiet-tin-tuc/(:any)'] = 'frontend/article/detail/$1';
// ------------------Contact-----------------------//
$route['lien-he'] = 'frontend/contact/add';
$route['dat-hang'] = 'frontend/contact/add_contact';
//Search
$route['tim-kiem'] = 'frontend/product/search';
$route['tim-kiem/trang'] = 'frontend/product/search';
$route['tim-kiem/trang/(:num)'] = 'frontend/product/search';

$route['timthumb/(:num)x(:num)-(:num)-(:num)'] = 'frontend/timthumb/tim_thumb/$1/$2/$3/$4';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
