<?php

namespace App\Http\Livewire\Auth;

use Auth;
use Alert;
use App\Models\User;
use Livewire\Component;

class Login extends Component
{
    public $username, $password;
    protected $rules = [
        'username' => 'required|min:3',
        'password' => 'required',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function auth()
    {
        $validatedData = $this->validate();
        $auth = Auth::attempt($validatedData);
        if ($auth) {
            Alert::success('Success', 'Success Login!');
            $role = User::where('username', $validatedData['username'])
                ->first()
                ->getRoleNames()
                ->first();
            if ($role == 'student') {
                return redirect()->to(route('/'));
            } elseif ($role == 'lecture') {
                return redirect()->to('lecture/dashboard');
            } else {
                return redirect()->to('admin/dashboard');
            }
        }
        $this->reset();
    }
    public function render()
    {
        return view('livewire.auth.login')
            ->extends('masterLayout')
            ->section('content');
    }
}
