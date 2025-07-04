<?php

function base_url($path = "") {
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== "off" ? 'https://' : 'http://';
    $host = $_SERVER['HTTP_HOST'];
    $baseUrl = $protocol . $host . '/' . PROJECT_DIR;
    return $baseUrl . '/' . ltrim($path, '/');
}

function base_path($path = "") {
    $rootPath = dirname(__DIR__) . DIRECTORY_SEPARATOR . PROJECT_DIR;
    return $rootPath . DIRECTORY_SEPARATOR . ltrim($path, DIRECTORY_SEPARATOR);
}

function uploads_path($filename = '') {
    return base_path('uploads' . DIRECTORY_SEPARATOR . $filename);
}

function uploads_url($filename = '') {
    return base_path('uploads' . ltrim($filename, '/'));
}

function asset_url($path = "") {
    return base_url('assets/') . ltrim($path, '/');
}

function redirect($url) {
    header('Location: ' . base_url($url));
    exit;
}

function isPostRequest() {
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}

function getPostData($fields, $default = null) {
    return isset($_POST[$fields]) ? trim($_POST[$fields]) : $default;
}
