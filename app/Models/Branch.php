<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $table = 'branches';
    protected $guarded = ['id'];

    public function outstanding()
    {
        return $this->hasMany(Outstanding::class);
    }
    public function repayment()
    {
        return $this->hasMany(Repayment::class);
    }
    public function par()
    {
        return $this->hasMany(Par::class);
    }
}
