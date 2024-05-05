<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSubInfo extends Model
{
    use HasFactory;

    public function aboutInfo()
    {
        return $this->belongsTo(AboutInfo::class);
    }
}
