<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\CommunityPosts;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\CommunitiesOfPractice;

class DashboardController extends Controller
{
    function index()
    {
        $count_user = $this->getUsers();
        $count_community_practices = $this->getCommunityPractices();
        $count_project = $this->getProjects();
        $count_community_post = $this->getCommunityPosts();
        $user = Auth::user();
        return view('admin.index', compact('count_user', 'count_community_practices', 'count_project', 'count_community_post','user'));
    }
    function getUsers()
    {
        return User::all()->count();
    }
    function getCommunityPractices()
    {
        return CommunitiesOfPractice::all()->count();
    }
    function getProjects()
    {
        return Project::all()->count();
    }
    function getCommunityPosts()
    {
        return CommunityPosts::all()->count();
    }
}
