<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PrintFuneralPrayers extends Component
{
    public $liturgy = null;

    public function mount()
    {
        $this->liturgy = session('liturgy');
    }

    public function render()
    {
        return view('livewire.print-funeral-prayers', ['prayers' => \App\Helpers\PrayerHelper::getPrayers()])->extends('layouts.basic');
    }

}
