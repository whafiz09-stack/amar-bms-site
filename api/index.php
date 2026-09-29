<?php

// Load Vendor Autoload
require __DIR__ . '/../vendor/autoload.php';

// Bootstrap Laravel App
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Set Public Path for Vercel Serverless
$app->usePublicPath(__DIR__ . '/../public');

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
