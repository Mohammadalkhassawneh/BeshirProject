<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'driver_name',
        'from',
        'to',
        'Date',
        'capacity',
        'price',
        'car_model',

    ];
}