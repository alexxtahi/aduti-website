<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Launch Home View
    public function index()
    {
        // get datas
        $datas = [
            'projects' => Project::all(),
            'partners' => Partner::all(),
        ];
        // display view with datas
        return view('home', $datas);
    }
}
