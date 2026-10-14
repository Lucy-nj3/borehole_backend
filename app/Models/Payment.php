<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'record_date',
        'meter_reading',
        'units_used',
        'amount',
        'plot_id',
    ];
}

