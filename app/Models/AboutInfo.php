<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutInfo extends Model
{
    use HasFactory;

    public function aboutSubInfos()
    {
        return $this->hasMany(AboutSubInfo::class);
    }
}
