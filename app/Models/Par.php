<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Par extends Model
{
    use HasFactory;

    protected $table = 'pars';
    protected $guarded = ['id'];
}
