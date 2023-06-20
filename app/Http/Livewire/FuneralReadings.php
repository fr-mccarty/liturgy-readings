<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FuneralReadings extends Component
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
        'liturgy.nameOfDeceased' => 'string|exclude_if:liturgy.PetitionsNoPrint,true|required',
        'liturgy.sexOfDeceased' => 'string|exclude_if:liturgy.PetitionsNoPrint,true|required',
        'liturgy.PetitionsLector' => 'string',
        'liturgy.PetitionsNoPrint' => 'boolean',
    ];

    protected $messages = [
        'liturgy.1ReadingId' => 'The First Reading Cannot be Empty.',
        'liturgy.PsalmReadingId' => 'The Psalm Cannot be Empty.',
        'liturgy.2ReadingId' => 'The Second Reading Cannot be Empty.',
        'liturgy.nameOfDeceased' => 'The Name of the Deceased Cannot be Empty.',
        'liturgy.sexOfDeceased' => 'The Sex of the Deceased Cannot be Empty.',
    ];

    public function print()
    {
        $this->validate();

        session(['liturgy' => $this->liturgy]);

        return $this->dispatchBrowserEvent('open-link-in-new-window', ['link' => '/funeral/print/']);
    }

    public function render()
    {
        return view('livewire.funeral-readings', ['readings' => \App\Helpers\ReadingHelper::getReadings()])->extends('layouts.guest-with-navigation');
    }

}
