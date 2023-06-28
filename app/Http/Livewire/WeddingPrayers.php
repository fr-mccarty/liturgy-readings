<?php

namespace App\Http\Livewire;

use App\Helpers\LogPrintHelper;
use Livewire\Component;

class WeddingPrayers extends Component
{
    public $liturgy;

    protected $rules = [
        'liturgy.collectId' => 'string|exclude_if:liturgy.collectNoPrint,true|required',
        'liturgy.collectNoPrint' => 'boolean',
        'liturgy.offeringsId' => 'string|exclude_if:liturgy.offeringsNoPrint,true|required',
        'liturgy.offeringsNoPrint' => 'boolean',
        'liturgy.prefaceId' => 'string|exclude_if:liturgy.prefaceNoPrint,true|required',
        'liturgy.prefaceNoPrint' => 'boolean',
        'liturgy.nuptialBlessingId' => 'string|exclude_if:liturgy.nuptialBlessingNoPrint,true|required',
        'liturgy.nuptialBlessingNoPrint' => 'boolean',
        'liturgy.afterCommunionId' => 'string|exclude_if:liturgy.afterCommunionNoPrint,true|required',
        'liturgy.afterCommunionNoPrint' => 'boolean',
        'liturgy.solemnBlessingId' => 'string|exclude_if:liturgy.solemnBlessingNoPrint,true|required',
        'liturgy.solemnBlessingNoPrint' => 'boolean',
    ];

    protected $messages = [
        'liturgy.collectId' => 'The Collect Cannot be Empty.',
        'liturgy.offeringsId' => 'The Prayer over the Offerings Cannot be Empty.',
        'liturgy.prefaceId' => 'The Preface Cannot be Empty.',
        'liturgy.nuptialBlessingId' => 'The Nuptial Blessing Cannot be Empty.',
        'liturgy.afterCommunionId' => 'The Prayer After Communion cannot be Empty.',
        'liturgy.solemnBlessingId' => 'The Solemn Blessing Cannot be Empty.',
    ];

    public function print()
    {
        $this->validate();

        LogPrintHelper::logPrint($this->liturgy);

        session(['liturgy' => $this->liturgy]);

        return $this->dispatchBrowserEvent('open-link-in-new-window', ['link' => route('wedding-prayers-print')]);
    }

    public function render()
    {
        $prayers = \App\Helpers\PrayerHelper::getPrayers();
        return view('livewire.wedding-prayers', ['prayers' => $prayers])->extends('layouts.guest-with-navigation');
    }
}
