<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PrintWedding extends Component
{
    public $liturgy = null;

    public function mount()
    {
        $this->liturgy = session('liturgy');
    }

    public function render()
    {
        return view('livewire.print-wedding', ['readings' => \App\Helpers\ReadingHelper::getReadings()])->extends('layouts.basic');
    }
}
