<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CommunitiesOfPractice;
use App\Models\CommunityPosts;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class COPSController extends Controller
{
    function index()
    {
        $cops = CommunitiesOfPractice::with('author_lecture')->get();
        return view('landing_page.cops.cops', compact('cops'));
    }
    function copsDetail($id)
    {
        $cops_detail = $this->getCopWithId($id);
        $if_exist = $this->isJoin($id);
        return view('landing_page.cops.cops_detail', compact('cops_detail', 'if_exist'));
    }
    function copsGroup($id)
    {
        $cops_detail = $this->getCopWithId($id);
        $posts = CommunityPosts::where('communities_practice_id', $id)->paginate(2);
        $if_exist = $this->isJoin($id);
        if ($if_exist) {
            return view('landing_page.cops.cops_group', compact('cops_detail','posts'));
        }
        Alert::error('Failed', 'Anda belum join komunitas!');
        return redirect()->back();
    }
    function streamPdf($name)
    {
        $path = storage_path('app/public/' . $name);
        return response()->file($path);
    }
    function joinCommunity(Request $request)
    {
        $community_id = $request->community_id;
        $user = Auth::user();
        $community = CommunitiesOfPractice::find($community_id);
        $member = collect($community->member);
        // check if exist
        $if_exist = $this->isJoin($community_id);
        if ($if_exist) {
            Alert::error('Failed', 'Anda sudah join komunitas!');
            return redirect()->back();
        }
        $member->push($user);
        CommunitiesOfPractice::where('id', $community_id)->update([
            'member' => $member,
        ]);
        Alert::success('Success', 'Berhasil Join!');
        return redirect()->back();
    }
    function getCopWithId($id, $relation = ['author_lecture'])
    {
        return CommunitiesOfPractice::where('id', $id)
            ->with($relation)
            ->first();
    }
    function isJoin($community_id)
    {
        $member = collect(CommunitiesOfPractice::find($community_id)->member);
        $user = Auth::user();
        $if_exist = $member->contains(function ($value) use ($user) {
            return $user['id'] == $value['id'] ? true : false;
        });
        if ($if_exist) {
            return true;
        }
        return false;
    }
}
