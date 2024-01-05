<?php

namespace App\Http\Controllers\Lecture;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\CommunitiesOfPractice;

class DashboardController extends Controller
{
    function index()
    {
        $count_cop = count($this->getCOPUser());
        // $count_cop = CommunitiesOfPractice::
        // $count_posts_cop = CommunitiesOfPractice::
        // return view('lecture.index', compact('count_cop'));
    }
    function getCOPUser() {
        return CommunitiesOfPractice::with('author_lecture')
        ->where('author', Auth::id())
        ->get();
    }
}
