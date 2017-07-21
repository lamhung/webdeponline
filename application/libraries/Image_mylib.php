<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Image_mylib {

    protected $CI;

    public function __construct() {
        $this->CI = & get_instance();
        $this->CI->load->helper('directory');
    }

    function upload_one($input_name, $directory, $thumbnail = array()) {
        $result = array();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if ($_FILES[$input_name]['tmp_name'] != "") {
                if (!directory_exist($directory)) {
                    create_directory($directory);
                }
                $config = array(
                    'upload_path' => UPLOADPATH . $directory . "/",
                    'allowed_types' => 'jpg|png|gif|jpeg|JPG|PNG|GIF|JPEG',
//                    'max_width' => '1366',
//                    'max_height' => '1366',
//                    'max_size' => '5120',
                    'encrypt_name' => TRUE
                );
                $this->CI->load->library('upload', $config);
                if ($this->CI->upload->do_upload($input_name)) {
                    $result = $this->CI->upload->data();
                    if (count($thumbnail) > 0) {
                        $this->thumbnail($directory, $result, $thumbnail);
                    }
                } else {
                    $result['error'] = $this->CI->upload->display_errors();
                    $result['name'] = $_FILES[$input_name]['name'];
                }
            }
        }

        return $result;
    }
    function upload_one_file($input_name, $directory,$image_type) {
        $result = array();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if ($_FILES[$input_name]['tmp_name'] != "") {
                if (!directory_exist($directory)) {
                    create_directory($directory);
                }
                $config = array(
                    'upload_path' => UPLOADPATH . $directory . "/",
                    'allowed_types' => $image_type,
//                    'max_width' => '1366',
//                    'max_height' => '1366',
//                    'max_size' => '5120',
                    'encrypt_name' => TRUE
                );
                $this->CI->load->library('upload', $config);
                if ($this->CI->upload->do_upload($input_name)) {
                    $result = $this->CI->upload->data();
                } else {
                    $result['error'] = $this->CI->upload->display_errors();
                    $result['name'] = $_FILES[$input_name]['name'];
                }
            }
        }

        return $result;
    }

    /**
     * Upload nhiều hình
     * @param    input file, directory, array
     * @return	array
     */
    public function upload_multi($input_name, $directory, $thumbnail = array()) {
        $result = array();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $files = $_FILES;

            $cpt = count($_FILES[$input_name]['name']);
            for ($i = 0; $i < $cpt; $i++) {
                $_FILES[$input_name]['name'] = $files[$input_name]['name'][$i];
                $_FILES[$input_name]['type'] = $files[$input_name]['type'][$i];
                $_FILES[$input_name]['tmp_name'] = $files[$input_name]['tmp_name'][$i];
                $_FILES[$input_name]['error'] = $files[$input_name]['error'][$i];
                $_FILES[$input_name]['size'] = $files[$input_name]['size'][$i];

                $result[] = $this->upload_one($input_name, $directory, $thumbnail);
            }
        }
        return $result;
    }

    /**
     * Creat thumbnail
     * @param    input file, directory, array
     * @return	boolean
     */
    private function thumbnail($directory, $image, $thumbnail) {
        if (!directory_exist($directory . '/thumbnail')) {
            create_directory($directory . '/thumbnail');
        }
        $image_src = UPLOADPATH . $directory . '/' . $image['file_name'];
        $image_dest = UPLOADPATH . $directory . '/thumbnail/' . $image['file_name'];

        switch ($image['image_type']) {
            case 'jpg':
            case 'jpeg':
                $image_data = imagecreatefromjpeg($image_src);
                break;
            case 'png':
                $image_data = imagecreatefrompng($image_src);
                break;
            case 'gif':
                $image_data = imagecreatefromgif($image_src);
                break;
            default:
                return false;
                break;
        }
        if ($image_data == false)
            return false;

        $thumb_quality = isset($thumbnail['quality']) ? $thumbnail['quality'] : 90;
        $thumb_width = isset($thumbnail['width']) ? $thumbnail['width'] : 220;
        $thumb_height = isset($thumbnail['height']) ? $thumbnail['height'] : 180;
        $thumb_rate = $thumb_width / $thumb_height;
        $image_rate = $image['image_width'] / $image['image_height'];

        if ($image_rate >= $thumb_rate) {
            $square_size_y = $image['image_height'];
            $square_size_x = $square_size_y * $thumb_rate;
            $x = ($image['image_width'] - $square_size_x) / 2;
            $y = 0;
        } else {
            $square_size_x = $image['image_width'];
            $square_size_y = $square_size_x / $thumb_rate;
            $y = ($image['image_height'] - $square_size_y) / 2;
            $x = 0;
        }

        $canvas = imagecreatetruecolor($thumb_width, $thumb_height);

        if (imagecopyresampled($canvas, $image_data, 0, 0, $x, $y, $thumb_width, $thumb_height, $square_size_x, $square_size_y)) {
            switch ($image['image_type']) {
                case 'jpg':
                case 'jpeg':
                    return imagejpeg($canvas, $image_dest, $thumb_quality);
                    break;
                case 'png':
                    return imagepng($canvas, $image_dest);
                    break;
                case 'gif':
                    return imagegif($canvas, $image_dest);
                    break;
                default:
                    return false;
                    break;
            }
        } else {
            return false;
        }
        return true;
    }

}
