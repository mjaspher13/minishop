<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    /**
     * Table
     * @var string
     */
    protected $table = "user_types";

    /**
     * Guarded
     * @var array
     */
    protected $guarded = [];
}
