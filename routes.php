<?php
$url = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/VVF_Test/' => 'controllers/home.php',
    '/VVF_Test/products' => 'controllers/product.php',
    '/VVF_Test/contact' => 'controllers/contact.php',
    '/VVF_Test/about' => 'controllers/about.php',
];

function routerControllers($url, $routes)
{
    if (array_key_exists($url, $routes)) {
        require $routes[$url];
    } else {
        abort();
    }
}

function abort($code = 404)
{
    http_response_code($code);
    echo "Not Found 404";
    die();
}

routerControllers($url, $routes);
