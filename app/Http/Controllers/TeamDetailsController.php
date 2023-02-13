<?php

namespace App\Http\Controllers;

use App\Models\OurChef;
use App\Models\OurchefPercentage;
use Illuminate\Http\Request;

class TeamDetailsController extends Controller
{
    function team_details($slug_id)
    {
        $all_team = OurChef::where('slug', $slug_id)->get();
        $team_percentage = OurchefPercentage::all();
        return view('frontend.team.team_details', [
            'all_team' => $all_team,
            'team_percentage' => $team_percentage,
        ]);
    }

    function all_team()
    {
        $all_team = OurChef::all();
        return view('frontend.team.all_team', [
            'all_team' => $all_team,
        ]);
    }
}