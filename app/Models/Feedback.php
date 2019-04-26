<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    /**
     * Table
     * @var string
     */
    protected $table = "feedback";

    /**
     * Guarded
     * @var array
     */
    protected $guarded = [];
}
