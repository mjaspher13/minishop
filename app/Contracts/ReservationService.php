<?php
/**
 * Created by PhpStorm.
 * User: jaspherramile
 * Date: 02/01/19
 * Time: 11:17 AM
 */

namespace App\Contracts;

use Illuminate\Http\Request;

interface ReservationService
{
    /**
     * Get reservations
     * @return json
     */
    public function listReservations();

    /**
     * Store Reservation
     * @param Request $request
     * 
     * @return mix
     */
    public function store(Request $request);

    /**
     * Update Reservation
     * @param Request $request
     * 
     * @return mix
     */
    public function update(Request $request, $rid);
}