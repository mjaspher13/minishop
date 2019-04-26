<?php

namespace App\Contracts;

use Illuminate\Http\Request;

interface DashboardService
{
    public function listRooms($id);
}
