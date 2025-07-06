<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class Login extends Component
{
    public $user_code = '';
    public $error = '';

    public function render()
    {
        return view('livewire.auth.login');
    }

    public function login()
    {
        $this->error = '';
        $user = User::where('user_code', $this->user_code)->first();
        if ($user) {
            Session::put('user_id', $user->id);
            Session::put('user_name', $user->name);
            return Redirect::route('dashboard');
        } else {
            $this->error = 'Invalid User Code';
        }
    }
}
