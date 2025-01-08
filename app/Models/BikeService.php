<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BikeService extends Model
{
    protected $fillable = ['service_date', 'kms_at_service', 'service_remarks'];
}
