<?php

namespace App\Livewire\Milk;

use Livewire\Component;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Models\MilkProduction;

class Record extends Component
{
    public $animal_id = '';
    public $milk = 3;
    public $step = 1;
    public $error = '';

    public function mount()
    {
        if (!Session::get('user_id')) {
            Redirect::route('login')->send();
        }
    }

    public function nextStep()
    {
        if (empty($this->animal_id)) {
            $this->error = 'Please enter Animal ID';
            return;
        }
        $this->step = 2;
        $this->error = '';
    }

    public function save()
    {
        if (empty($this->animal_id) || $this->milk < 0) {
            $this->error = 'Invalid input';
            return;
        }
        MilkProduction::create([
            'animal_id' => $this->animal_id,
            'milk' => $this->milk,
            'datetime' => now(),
            'user_id' => Session::get('user_id'),
        ]);
        return Redirect::route('milk.history');
    }

    public function logout()
    {
        \Session::flush();
        return \Redirect::route('login');
    }

    public function render()
    {
        return view('livewire.milk.record');
    }
}
