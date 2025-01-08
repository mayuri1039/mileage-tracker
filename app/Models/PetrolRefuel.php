<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PetrolRefuel extends Model
{
    protected $fillable = ['refuel_date', 'kms_at_refuel', 'petrol_litres', 'petrol_price'];
}