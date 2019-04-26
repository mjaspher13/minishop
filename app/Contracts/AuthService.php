<?php

namespace App\Contracts;

use Illuminate\Http\Request;

interface AuthService
{

     /**
     * Store user
     * @param Request $request
     * 
     * @return mix
     */
    public function signup(Request $request);

    /**
     * Updayte user
     * @param Request $request
     * 
     * @return mix
     */
    public function update(Request $request, $id);

}