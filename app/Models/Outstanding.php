<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outstanding extends Model
{
    use HasFactory;

    protected $table='outstandings';
    protected $guarded=['id'];
}
