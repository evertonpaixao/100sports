<?php
declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');

$contentPath = __DIR__ . '/../data/benefits.json';

if (!is_readable($contentPath)) {
    http_response_code(404);
    echo json_encode(['error' => 'Content file not found'], JSON_UNESCAPED_UNICODE);
    exit;
}

readfile($contentPath);
