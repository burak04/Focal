<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Host extends Model
{
    use HasFactory;
    public function prices()
    {
        return $this->hasMany(Pricing::class, "host_id");
    }

    public function points()
    {
        return $this->hasMany(Points::class, "host_id");
    }
}
