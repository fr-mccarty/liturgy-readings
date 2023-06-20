@props([
    'moduleName' => null,
])

<x-jet-dialog-modal wire:model="confirmingBaseEntityDeletion">
    <x-slot name="title">
        Delete {{$moduleName}}
    </x-slot>

    <x-slot name="content">

        Are you sure you want to delete this {{$moduleName}}? After deleting, the record cannot be recovered.

    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$toggle('confirmingBaseEntityDeletion')" wire:loading.attr="disabled">
            Cancel
        </x-jet-secondary-button>

        <x-jet-danger-button class="ml-3" wire:click="deleteBaseEntity" wire:loading.attr="disabled">
            Delete {{$moduleName}}
        </x-jet-danger-button>
    </x-slot>
</x-jet-dialog-modal>
