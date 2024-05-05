<?php

namespace App\Services;

use App\Models\AboutInfo;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class AboutService
 * @package App\Services
 */
class AboutService
{
    /**
     * Retrieve all AboutInfo records with related aboutSubInfos.
     *
     * @return Collection|AboutInfo[]
     */
    public function getAll(): Collection
    {
        return AboutInfo::with('aboutSubInfos')->get();
    }
}
