<?php

require 'vendor/autoload.php';
require_once 'vendor/codefii/core/src/Network/Debugger/Error.php';
        \php_error\reportErrors();
require_once 'App/routes/Routes.php';
$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);
if ($uri !== '/' && file_exists(__DIR__.'/web'.$uri)) {
    return false;
}else{
    $router->dispatch($uri);

}

// equire 'vendor/autoload.php';
// require_once 'vendor/codefii/framework/src/Network/Debugger/Error.php';
//         \php_error\reportErrors();
// require_once 'App/routes/Routes.php';
// // header('Content-Type: application/json');
// // var_dump(dirname(dirname(__FILE_'_)));
// $uri = urldecode(
//     parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
// );
// if ($uri !== '/' && file_exists(__DIR__.'/web'.$uri)) {
//     return false;
// }else{
//     $router->dispatch($uri);

// }
