<?php

/*-------- START LARAVEL OUTSIDE ---------*/

/*
    Extract Laravel core for use outside the framework
    If you whant to use all Laravel resources without then
*/

/*
    To use Laravel core without then
    If you whant to use core by CLI without artisan
*/
// Full path to 'vendor/autoload.php' and 'bootstrap/app.php' of Laravel project
// maybe you need to change
require __DIR__ . '/../../vendor/autoload.php';
$app = require_once __DIR__ . '/../../bootstrap/app.php';

$app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();
