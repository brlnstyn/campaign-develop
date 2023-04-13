<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $campaign =Campaign::all();
        return view('pages.dashboard.index',[
            'campaign'   =>$campaign
        ]);
    }
}
