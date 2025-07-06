<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class Dashboard extends Component
{
    public function mount()
    {
        if (!Session::get('user_id')) {
            Redirect::route('login')->send();
        }
    }

    public function render()
    {
        return view('livewire.dashboard');
    }

    public function logout()
    {
        \Session::flush();
        return \Redirect::route('login');
    }
}
