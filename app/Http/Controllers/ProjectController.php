<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    function index()
    {
        $projects = collect(Project::with('user')->get())->reject(function ($value) {
            return $value->status == 2;
        });
        return view('landing_page.projects.projects', compact('projects'));
    }
    function projectDetail($id)
    {
        $detailProject = Project::find($id);
        // return response()->json($detailProject);
        return view('landing_page.projects.detail_project', compact('detailProject'));
    }
}
