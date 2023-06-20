<x-modal.confirmation wire:model="confirmingUnsetRelatedPerson">
    <x-slot name="title">
        Remove {{ $selectedRelationshipDisplay }}
    </x-slot>
    <x-slot name="content">
        Are you sure you would like to remove this {{ $selectedRelationshipDisplay }}?
        <br>
        <div class="text-sm text-gray-500">Note: this will not delete the person from the database</div>
    </x-slot>
    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$toggle('confirmingUnsetRelatedPerson')" wire:loading.attr="disabled">
            Cancel
        </x-jet-secondary-button>

        <x-jet-danger-button class="ml-2" wire:click="unsetRelatedPerson('{{$selectedRelationship}}')" wire:loading.attr="disabled">
            Delete
        </x-jet-danger-button>
    </x-slot>
</x-modal.confirmation>


{{--
Example:
<x-button.indigo wire:click="confirmUnsetRelatedPerson('{{$relationship}}')">Remove {{$relationshipDisplay}}</x-button.indigo>


Add to livewire file:
    public $confirmingUnsetRelatedPerson = false;
    public $selectedRelationship = null;
    public $selectedRelationshipDisplay = null;

    public function confirmUnsetRelatedPerson($relationship)
    {
        $this->selectedRelationship = $relationship;
        $this->selectedRelationshipDisplay = ucwords(implode(' ', explode('_', \Str::snake($relationship))));
        $this->confirmingUnsetRelatedPerson = true;
    }

    public function unsetRelatedPerson()
    {
        $columnName = \Str::snake($this->selectedRelationship).'_id';
        $this->entity[$columnName] = null;
        $relationship = $this->selectedRelationship;
        $this->$relationship = null;
        $this->save();
        $this->confirmingUnsetRelatedPerson = false;
    }


--}}
