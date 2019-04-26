<?php
/**
 * Created by PhpStorm.
 * User: jaspherramile
 * Date: 02/26/19
 * Time: 11:44 AM
 */

namespace App\Contracts;

use Illuminate\Http\Request;

interface RoomService
{
    /**
     * Store Room
     * @param Request $request
     * 
     * @return mix
     */
    public function store(Request $request);

    /**
     * Update Room
     * @param Request $request
     * 
     * @return mix
     */
    public function update(Request $request, $rid);
}