<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fixture;
use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        return Team::all();
    }

}
