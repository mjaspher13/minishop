<?php
/**
 * Created by PhpStorm.
 * User: jaspherramile
 * Date: 02/26/19
 * Time: 11:44 AM
 */

namespace App\Contracts;

use Illuminate\Http\Request;

interface RoomTypeService
{
    /**
     * Store Room Type
     * @param Request $request
     * 
     * @return mix
     */
    public function store(Request $request);

    /**
     * Update Room Type
     * @param Request $request
     * 
     * @return mix
     */
    public function update(Request $request, $rid);
}