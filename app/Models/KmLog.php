<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KmLog extends Model
{
    protected $fillable = ['date', 'start_kms', 'end_kms'];
}