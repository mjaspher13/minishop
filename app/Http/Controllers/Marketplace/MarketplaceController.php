<?php

namespace App\Http\Controllers\Marketplace;

use App\Contracts\BaseService;
use App\Contracts\Constant;
use App\User;
use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Auth;


class MarketplaceController extends BaseController
{
    public function index()
    {
        if(User::where('id', Auth::User()->id)
                ->with('userType')
                ->first()
                ->user_type == Constant::USERTYPE_INTEGER_ADMIN)
        {
            return view('dashboard.index');
        }

        if(User::where('id', Auth::User()->id)
                ->with('userType')
                ->first()
                ->user_type == Constant::USERTYPE_INTEGER_CUSTOMER)
        {
            return view('dashboard.index');
        }
       
        return view('marketplace.marketplace');
    }

    public function dashboard()
    {
        return view('marketplace.dashboard');
    }

    
    /**
     * Remove state
     * @return \Illuminate\Http\RedirectResponse
     */
    public function removeState()
    {
        Auth::logout();
        return response()->redirectToRoute('login');
    }
}