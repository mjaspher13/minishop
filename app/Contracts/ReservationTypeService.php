<?php
/**
 * Created by PhpStorm.
 * User: jaspherramile
 * Date: 02/01/19
 * Time: 11:17 AM
 */

namespace App\Contracts;

use Illuminate\Http\Request;

interface ReservationTypeService
{
    /**
     * Store Reservation Type
     * @param Request $request
     * 
     * @return mix
     */
    public function store(Request $request);

    /**
     * Update Reservation Type
     * @param Request $request
     * 
     * @return mix
     */
    public function update(Request $request, $rid);
}