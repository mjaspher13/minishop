<?php

namespace App\Http\Controllers;

use App\Contracts\BaseService;


class BaseController extends Controller
{
    /**
     * Model class name.
     *
     * @var string modelClass
     */
    protected $modelClass;

    /**
     * List userMessage
     * @var string
     */
    protected $listTitle;

    /**
     * BaseService instance.
     *
     * @var BaseService $service
     */
    private $service;


    /**
     * BaseController constructor.
     * @param BaseService $service
     */
    public function __construct(BaseService $service)
    {
        $this->service = $service;
    }
}
