<?php

use App\Providers\AppServiceProvider;
use App\Providers\VoltServiceProvider;
use Spatie\Permission\PermissionServiceProvider;

return [
    AppServiceProvider::class,
    VoltServiceProvider::class,
    PermissionServiceProvider::class,
];
