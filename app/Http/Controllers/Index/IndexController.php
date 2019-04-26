<?php

namespace App\Http\Controllers\Index;

use App\Contracts\Constant;
use App\Contracts\BaseService;
use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Auth; 


class IndexController extends BaseController
{
    public function index()
    {   
        Auth::logout();
        return view('marketplace.marketplace');
    }
 
    public function contact()
    {
        Auth::logout();
        return view('marketplace.contact');
    }

    public function about()
    {
        Auth::logout();
        return view('marketplace.about');
    }
}
