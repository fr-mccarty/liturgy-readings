<x-jet-dialog-modal wire:model="confirmingBaseEntityDeletion">
    <x-slot name="title">
        Delete {{$entity->moduleName}}
    </x-slot>

    <x-slot name="content">

        Are you want to delete this {{$entity->moduleName}}? After deleting the record cannot be recovered.

    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$toggle('confirmingBaseEntityDeletion')" wire:loading.attr="disabled">
            Cancel
        </x-jet-secondary-button>

        <x-jet-danger-button class="ml-3" wire:click="confirmSave" wire:loading.attr="disabled">
            Update Enrollments
        </x-jet-danger-button>
    </x-slot>
</x-jet-dialog-modal>
