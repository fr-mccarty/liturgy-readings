<?php

namespace App\Http\Livewire;

use Livewire\Component;

class WeddingReadings extends Component
{
    public $liturgy;

    protected $rules = [
        'liturgy.1ReadingId' => 'string|exclude_if:liturgy.1ReadingNoPrint,true|required',
        'liturgy.1ReadingLector' => 'string',
        'liturgy.1ReadingNoPrint' => 'boolean',
        'liturgy.PsalmReadingId' => 'string|exclude_if:liturgy.PsalmReadingNoPrint,true|required',
        'liturgy.PsalmReadingLector' => 'string',
        'liturgy.PsalmReadingNoPrint' => 'boolean',
        'liturgy.2ReadingId' => 'string|exclude_if:liturgy.2ReadingNoPrint,true|required',
        'liturgy.2ReadingLector' => 'string',
        'liturgy.2ReadingNoPrint' => 'boolean',
        'liturgy.GospelReadingId' => 'string|exclude_if:liturgy.GospelReadingNoPrint,true|required',
        'liturgy.GospelReadingLector' => 'string',
        'liturgy.GospelReadingNoPrint' => 'boolean',
        'liturgy.nameOfSpouse1' => 'string|exclude_if:liturgy.PetitionsNoPrint,true|required',
        'liturgy.nameOfSpouse2' => 'string|exclude_if:liturgy.PetitionsNoPrint,true|required',
        'liturgy.PetitionsLector' => 'string',
        'liturgy.PetitionsNoPrint' => 'boolean',
    ];

    protected $messages = [
        'liturgy.1ReadingId' => 'The First Reading Cannot be Empty.',
        'liturgy.PsalmReadingId' => 'The Psalm Cannot be Empty.',
        'liturgy.2ReadingId' => 'The Second Reading Cannot be Empty.',
        'liturgy.GospelReadingId' => 'The Gospel Reading Cannot be Empty.',
        'liturgy.nameOfSpouse1' => 'The Name of Spouse 1 Cannot be Empty.',
        'liturgy.nameOfSpouse2' => 'The Name of Spouse 2 Cannot be Empty.',
    ];

    public function print()
    {
        $this->validate();

        session(['liturgy' => $this->liturgy]);

        return $this->dispatchBrowserEvent('open-link-in-new-window', ['link' => '/wedding/print/']);
    }

    public function render()
    {
        return view('livewire.wedding-readings', ['readings' => \App\Helpers\ReadingHelper::getReadings()])->extends('layouts.guest-with-navigation');
    }

}
