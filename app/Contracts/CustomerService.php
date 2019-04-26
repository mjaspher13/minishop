<?php
/**
 * Created by PhpStorm.
 * User: jaspherramile
 * Date: 02/22/19
 * Time: 11:17 AM
 */

namespace App\Contracts;

use Illuminate\Http\Request;

interface CustomerService
{
    /**
     * Get customer
     * @return json
     */
    public function listCustomers();

    /**
     * Store customer
     * @param Request $request
     * 
     * @return mix
     */
    public function store(Request $request);

    /**
     * Update customer
     * @param Request $request
     * 
     * @return mix
     */
    public function update(Request $request, $cid);
}