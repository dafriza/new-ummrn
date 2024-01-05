<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Alert;

class UserController extends Controller
{
    function index()
    {
        $users = User::all();
        $headNavbar = 'User Management';
        return view('admin.user.index', compact('users', 'headNavbar'));
    }
    function edit($id)
    {
        $user = User::find($id);
        $headNavbar = 'Edit User';
        return view('admin.user.edit', compact('user', 'headNavbar'));
    }
    function update(Request $request)
    {
        User::where('id', $request->id)->update($request->except('_method', '_token'));
        Alert::success('Sukses', 'Sukses Update!');
        return redirect()->back();
        // ->with('success', 'Update sukes!');
    }
}
