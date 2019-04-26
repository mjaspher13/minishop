<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * Table
     * @var string
     */
    protected $table = "customers";

    /**
     * Guarded
     * @var array
     */
    protected $guarded = [];
}
