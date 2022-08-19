<?php 
require_once __DIR__ . '/../vendor/autoload.php';

require_once __DIR__ . '/../config/config.php';

// Routes
require_once __DIR__ . '/../routes/web.php';
require_once __DIR__ . '/../app/Router.php';
// phpinfo();

// ON LOCAL / IS NOT INDEX
putenv("ROUTER_INDEX=/simple_php_mvc_framework/");

$request = $_SERVER['REQUEST_URI'];

echo getenv('ROUTER_INDEX');
echo $request;

switch ($request) {
    case getenv('ROUTER_INDEX') :
        require __DIR__ . '/../views/index.php';
        break;
    case '' :
        require __DIR__ . '/../views/index.php';
        break;
    case getenv('ROUTER_INDEX') . 'about' :
        require __DIR__ . '/../views/about.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/../views/404.php';
        break;
}
?>