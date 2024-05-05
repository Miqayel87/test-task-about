<?php

namespace App\Http\Controllers;

use App\Services\AboutService;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->aboutService = new AboutService;
    }

    public function get()
    {
        $data = $this->aboutService->getAll();

        return response()->json(['data' => $data]);
    }
}
