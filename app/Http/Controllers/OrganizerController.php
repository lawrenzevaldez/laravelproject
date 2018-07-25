<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrganizerController extends Controller
{
    public function index()
    {
        return view('organizer.index');
    }

    public function home()
    {
        return view('organizer.home');
    }
}
