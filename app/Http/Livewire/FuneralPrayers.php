<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FuneralPrayers extends Component
{
    public function render()
    {
        return view('livewire.funeral-prayers')->extends('layouts.guest-with-navigation');
    }
}
