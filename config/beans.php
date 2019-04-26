<?php

return [
    'App\Contracts\AuthService' => [
        'class' => 'App\Services\AuthServiceImpl',
        'shared' => false,
        'singleton' => true,
    ],
    'App\Contracts\BaseService' => [
        'class' => 'App\Services\BaseServiceImpl',
        'shared' => false,
        'singleton' => true,
    ],
];
