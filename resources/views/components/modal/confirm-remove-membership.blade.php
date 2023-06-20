<x-modal.confirmation wire:model="confirmingRemoveMembership">
    <x-slot name="title">
        Remove Membership
    </x-slot>
    <x-slot name="content">
        Are you sure you would like to remove this Membership?
        <br>
        <div class="text-sm text-gray-500">Note: this will not delete the person from the database</div>
    </x-slot>
    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$toggle('confirmingRemoveMembership')" wire:loading.attr="disabled">
            Cancel
        </x-jet-secondary-button>

        <x-jet-danger-button class="ml-2" wire:click="removeMembership" wire:loading.attr="disabled">
            Delete
        </x-jet-danger-button>
    </x-slot>
</x-modal.confirmation>


{{--

Usage in Blade File:
    Button:
    <x-button.delete wire:click="confirmRemoveMembership({{$entity->id}})">Remove</x-button.delete>

    Modal:
    @include('components.modal.confirm-remove-membership')


Add to livewire file:
    public $confirmingRemoveMembership = false;
    public $selectedMemberId = null;

    public function confirmRemoveMembership($id)
    {
        $this->selectedMemberId = $id;
        $this->confirmingRemoveMembership = true;
    }

    public function removeMembership()
    {
        $person = \App\Models\Person::find($this->selectedMemberId);
        $columnName = $belongs_to . '_id';
        $person->$columnName = null;
        $person->save();
        $this->emit('refresh');
        $this->selectedMemberId = null;
        $this->confirmingRemoveMembership = false;
    }


--}}
