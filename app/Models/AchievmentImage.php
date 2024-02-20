<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AchievmentImage extends Model
{
    use HasFactory;
    public function achievment()
    {
        return $this->belongsTo(Achievment::class, "achievment_id");
    }
}
