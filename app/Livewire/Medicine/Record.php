<?php

namespace App\Livewire\Medicine;

use Livewire\Component;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Models\AnimalMedication;

class Record extends Component
{
    public $animal_id = '';
    public $type = '';
    public $comment = '';
    public $step = 1;
    public $error = '';

    public $types = ['fever', 'alergy', 'vaccine', 'birth issue', 'bacteria', 'virus'];

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
        if (empty($this->animal_id) || empty($this->type)) {
            $this->error = 'Please select all fields';
            return;
        }
        AnimalMedication::create([
            'animal_id' => $this->animal_id,
            'user_id' => Session::get('user_id'),
            'type' => $this->type,
            'comment' => $this->comment,
        ]);
        return Redirect::route('medicine.history');
    }

    public function logout()
    {
        \Session::flush();
        return \Redirect::route('login');
    }

    public function render()
    {
        return view('livewire.medicine.record');
    }
}
