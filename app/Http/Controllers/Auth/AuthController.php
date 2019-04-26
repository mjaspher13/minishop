<?php

namespace App\Http\Controllers\Auth;

use App\Contracts\Constant;
use App\Contracts\BaseService;
use App\Contracts\AuthService;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;    
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\User;

class AuthController extends BaseController
{
    /**
     * @var authService
     */
    private $authService;

    /**
     * @param authService $authProductService
     * @param BaseService $baseService
     */
    public function __construct(
        AuthService $authService,
        BaseService $baseService
    )
    {
        parent::__construct($baseService);
        $this->authService = $authService;
    }

    public function showsignup()
    {
        return view('signup.index');
    }

    public function signup(Request $request)
    {
        $user = $this->authService->signup($request);
        if($request->ajax()){
            return response()->json($user);
        }
        return response()->redirectToRoute('marketplace.marketplace');
    }
}
