<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Reading extends Component
{
    public $liturgy;

    protected $rules = [
        'liturgy.1ReadingId' => 'string',
        'liturgy.1ReadingLector' => 'string',
        'liturgy.1ReadingNoPrint' => 'boolean',
    ];

    public function print()
    {
        session(['liturgy' => $this->liturgy]);

        return $this->dispatchBrowserEvent('open-link-in-new-window', ['link' => '/wedding/print/']);
    }



    public function render()
    {
        return view('livewire.reading', ['readings' => \App\Helpers\ReadingHelper::getReadings()]);
    }
}
