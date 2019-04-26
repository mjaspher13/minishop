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
    'App\Contracts\FeedbackService' => [
        'class' => 'App\Services\FeedbackServiceImpl',
        'shared' => false,
        'singleton' => true,
    ],
    'App\Contracts\CustomerService' => [
        'class' => 'App\Services\CustomerServiceImpl',
        'shared' => false,
        'singleton' => true,
    ],
    'App\Contracts\ProductService' => [
        'class' => 'App\Services\ProductServiceImpl',
        'shared' => false,
        'singleton' => true,
    ],
    'App\Contracts\ProductCategoryService' => [
        'class' => 'App\Services\ProductCategoryServiceImpl',
        'shared' => false,
        'singleton' => true,
    ],
];
