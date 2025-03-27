<!-- chứa hằng số của project -->
<?php
    const _MODULE = "home";
    const _ACTION = "dashboard";
    const _CODE = true;


    // thiết lập host
    define('_WED_HOST', 'http://'.$_SERVER['HTTP_HOST'].'/project/manager_users/');
    define('_WED_HOST_TEMPLATE', _WED_HOST.'template/');


    // thiết lập path
    define('_WED_PATH', __DIR__);
    define('_WED_PATH_TEMPLATE', _WED_PATH.'/template');

    // thông tin kết nối database
    define('_DB_HOST', '127.0.0.1');
    define('_DB_USER', 'root');
    define('_DB_PASS', 'Thang1882@@6');
    define('_DB_NAME', 'sinhvien');
    
