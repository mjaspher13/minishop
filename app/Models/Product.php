<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * Table
     * @var string
     */
    protected $table = "products";

    /**
     * Guarded
     * @var array
     */
    protected $guarded = [];
}
