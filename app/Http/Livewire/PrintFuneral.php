<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PrintFuneral extends Component
{
    public $liturgy = null;

    public function mount()
    {
        $this->liturgy = session('liturgy');
    }

    public function render()
    {
        return view('livewire.print-funeral', ['readings' => \App\Helpers\ReadingHelper::getReadings()])->extends('layouts.basic');
    }

}
