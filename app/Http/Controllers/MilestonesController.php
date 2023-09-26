<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MilestonesController extends Controller
{
    public function index(){
        return view('milestones.index');
    }
}
