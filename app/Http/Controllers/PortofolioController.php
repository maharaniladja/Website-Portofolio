<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Project;

class PortofolioController extends Controller
{
    public function home(){
        $profile = Profile::first();
        return view('home', compact('profile'));
    }

    public function project(){
        $projects = Project::all();
        return view('project', compact('projects'));
    }

    public function gallery(){
        $images = \File::files(public_path('images'));
        return view('gallery', compact('images'));
    }
}
