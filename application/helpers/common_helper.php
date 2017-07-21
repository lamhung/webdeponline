<?php
function backend_url() {
	return base_url('assets/backend/');
}
function frontend_url() {
	return base_url('assets/frontend/');
}
function vendor_url() {
	return base_url('vendor/');
}

if(!function_exists('timThumbUrl')) :
    function timThumbUrl($path, $width=50, $height=50, $zc = 1, $quality=100) {
        return base_url('tt/'.$width.'x'.$height.'-'.$zc.'-'.$quality.'/'.ltrim($path, '/'));
    }
endif;