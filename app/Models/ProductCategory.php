<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    /**
     * Table
     * @var string
     */
    protected $table = "product_categories";

    /**
     * Guarded
     * @var array
     */
    protected $guarded = [];
}
