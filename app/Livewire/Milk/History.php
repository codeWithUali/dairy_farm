<?php

namespace App\Livewire\Milk;

use Livewire\Component;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Models\MilkProduction;
use App\Models\User;
use App\Models\Animal;

class History extends Component
{
    public $records = [];

    public function mount()
    {
        if (!Session::get('user_id')) {
            Redirect::route('login')->send();
        }
        $this->records = MilkProduction::with(['animal', 'user'])
            ->orderByDesc('datetime')
            ->limit(50)
            ->get();
    }

    public function render()
    {
        return view('livewire.milk.history');
    }
}
