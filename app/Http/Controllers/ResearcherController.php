<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ResearcherController extends Controller
{
    function index()
    {
        $researchers = User::role('lecture')->get();
        return view('landing_page.research.researchers', compact('researchers'));
    }
    function detailResearcher($id)
    {
        $researcher = User::where('id', $id)
            ->with('curriculum_vitae')
            ->first();
        return view('landing_page.research.detail_researcher', compact('researcher'));
    }
}
