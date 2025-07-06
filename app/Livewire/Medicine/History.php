<?php

namespace App\Livewire\Medicine;

use Livewire\Component;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Models\AnimalMedication;
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
        $this->records = AnimalMedication::with(['animal', 'user'])
            ->orderByDesc('created_at')
            ->limit(50)
            ->get();
    }

    public function render()
    {
        return view('livewire.medicine.history');
    }
}
