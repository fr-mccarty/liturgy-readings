<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FuneralPrayers extends Component
{
    public $liturgy;

    protected $rules = [
        'liturgy.collectId' => 'string|exclude_if:liturgy.collectNoPrint,true|required',
        'liturgy.collectNoPrint' => 'boolean',
        'liturgy.offeringsId' => 'string|exclude_if:liturgy.offeringsNoPrint,true|required',
        'liturgy.offeringsNoPrint' => 'boolean',
        'liturgy.prefaceId' => 'string|exclude_if:liturgy.prefaceNoPrint,true|required',
        'liturgy.prefaceNoPrint' => 'boolean',
        'liturgy.afterCommunionId' => 'string|exclude_if:liturgy.afterCommunionNoPrint,true|required',
        'liturgy.afterCommunionNoPrint' => 'boolean',
        'liturgy.invitationToPrayerId' => 'string|exclude_if:liturgy.invitationToPrayerNoPrint,true|required',
        'liturgy.invitationToPrayerNoPrint' => 'boolean',
        'liturgy.finalCommendationId' => 'string|exclude_if:liturgy.finalCommendationNoPrint,true|required',
        'liturgy.finalCommendationNoPrint' => 'boolean',
    ];

    protected $messages = [
        'liturgy.collectId' => 'The Collect Cannot be Empty.',
        'liturgy.offeringsId' => 'The Prayer over the Offerings Cannot be Empty.',
        'liturgy.prefaceId' => 'The Preface Cannot be Empty.',
        'liturgy.afterCommunionId' => 'The Prayer After Communion cannot be Empty.',
        'liturgy.invitationToPrayerId' => 'The Invitation to Prayer cannot be Empty.',
        'liturgy.finalCommendationId' => 'The Final Commendation cannot be Empty.',
    ];

    public function print()
    {
        $this->validate();

        session(['liturgy' => $this->liturgy]);

        return $this->dispatchBrowserEvent('open-link-in-new-window', ['link' => route('funeral-prayers-print')]);
    }

    public function render()
    {
        $prayers = \App\Helpers\PrayerHelper::getPrayers();
        return view('livewire.funeral-prayers', ['prayers' => $prayers])->extends('layouts.guest-with-navigation');
    }

}
