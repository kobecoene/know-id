<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('dashboard.index')->with('user', $user);
    }

    public function projects() {

        return view('dashboard.projects');
    }

    public function badges() {

        return view('dashboard.badges');
    }

    public function projectsOverview() {

        return view('dashboard.projectsOverview');
    }
}
