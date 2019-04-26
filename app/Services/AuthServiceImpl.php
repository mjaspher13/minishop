<?php

namespace App\Services;

use App\Contracts\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Models\Customer;

class AuthServiceImpl implements AuthService
{
    public function signup(Request $request)
    {
        return DB::transaction(function() use($request){

            $user = User::create([
                'name' => $request->get('firstName') . ' ' . $request->get('lastName'),
                'email' => $request->get('email'),
                'password' => Hash::make($request->get('password')),
                'mobile' => $request->get('mobile'),
                'user_type' => 2
            ]);
            
            return Customer::create([
                'user_id' => $user->id,
                'first_name' => $request->get('firstName'),
                'last_name' => $request->get('lastName'),
                'mobile' => $request->get('mobile'),
                'email' => $request->get('email')
            ]);

        });
    }

    /**
     * Update Customer information
     *
     * @param Request $request
     * @param $cid
     * @return \Illuminate\Http\RedirectResponse|mixed
     */
    public function update(Request $request, $id)
    {
        return DB::transaction(function() use($request, $id){

            $user = User::findOrFail($id);
            $user->name = $request->get('first_name') . ' ' . $request->get('last_name');
            $user->email = $request->get('email');
            $user->password = Hash::make($request->get('password'));
            $user->mobile = $request->get('mobile');
            $user->save();

            $customer = Customer::where('user_id', $id);
            $customer->first_name = $request->get('firstName');
            $customer->last_name = $request->get('lastName');
            $customer->mobile = $request->get('mobile');
            $customer->email = $request->get('email');
            $customer->save();
        });
    }
}
