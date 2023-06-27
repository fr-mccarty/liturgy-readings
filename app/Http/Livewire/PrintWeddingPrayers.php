<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PrintWeddingPrayers extends Component
{
    public function render()
    {
        return view('livewire.print-wedding-prayers')->extends('layouts.basic');
    }
}
