<?php

namespace App\Http\Livewire;

use Livewire\Component;

class WeddingPrayers extends Component
{
    public function render()
    {
        return view('livewire.wedding-prayers')->extends('layouts.guest-with-navigation');
    }
}
