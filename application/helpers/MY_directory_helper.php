<?php defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('directory_exists')){
/*
* Kiểm tra xem đã tồn tại đường dẫn đến thư mục hình ảnh hay chưa.
*tham sô truyền vào tên thư mục
*Nếu tồn tại thì trả về đường dẫn thư mục
*/
	function directory_exist($directory = '')
    {
        return is_dir(UPLOADPATH . $directory);
    }
}

if(!function_exists('create_directory')){

/*
* Kiểm tra xem đã tồn tại đường dẫn đến thư mục hình ảnh hay chưa.
*tham sô truyền vào tên thư mục
*Nếu tồn tại thì trả về đường dẫn thư mục
*/
	function create_directory($directory = '')
    {
       $path_array = explode("/", $directory);
       $path = substr(UPLOADPATH, 0, -1);
       
       for($i = 0; $i < count($path_array); $i++)
       {
           if($path_array[$i] != "")
           {
               $path .= "/".$path_array[$i];
               if(!is_dir($path))
               {
                   @mkdir($path, 0777);
               }
           }
           
       }
       
       return $path;
    }
}