<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievment extends Model
{
    use HasFactory;

    public function images()
    {
        return $this->hasMany(AchievmentImage::class, "achievment_id");
    }

    public function links()
    {
        return $this->hasMany(AchievmentLink::class, "achievment_id");
    }
}
