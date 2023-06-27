<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PrintFuneralPrayers extends Component
{
    public function render()
    {
        return view('livewire.print-funeral-prayers')->extends('layouts.basic');
    }
}
