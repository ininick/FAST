<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $team = DB::table('teams')->where('id', $user->team_id)->first();
        
        return view('dashboard', ['user' => $user, 'team' => $team]);
    }
    public function dashboard(Request $request)
    {
        $user = Auth::user();
        $team = DB::table('teams')->where('id', $user->team_id)->first();
        
        return view('dashboard', ['user' => $user, 'team' => $team]);
    }
}