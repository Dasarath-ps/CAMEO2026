<?php
/**
 * Development router for PHP's built-in web server:
 * php -S localhost:8000 router.php
 */

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Clean trailing slashes for route checking
$trimmedUri = rtrim($uri, '/');

if ($trimmedUri === '/api/register') {
    require __DIR__ . '/api/register.php';
    return true;
}

if ($trimmedUri === '/api/registrations') {
    require __DIR__ . '/api/registrations.php';
    return true;
}

if ($uri === '/' || $uri === '/index.php') {
    if (file_exists(__DIR__ . '/index.html')) {
        header('Content-Type: text/html; charset=utf-8');
        readfile(__DIR__ . '/index.html');
        return true;
    }
}

// Serve existing static files as-is
$filePath = __DIR__ . $uri;
if ($uri !== '/' && file_exists($filePath) && !is_dir($filePath)) {
    return false;
}

// 404 for unknown routes
http_response_code(404);
header('Content-Type: application/json');
echo json_encode(['message' => 'Not Found']);
return true;
