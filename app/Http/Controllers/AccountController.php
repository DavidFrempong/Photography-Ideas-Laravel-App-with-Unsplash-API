<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class AccountController extends Controller
{
    // A person can access this page only if they are logged in

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $projectsTotal = Project::all()->count();
        return view ('account/dashboard', compact('projectsTotal'));
    }
}
