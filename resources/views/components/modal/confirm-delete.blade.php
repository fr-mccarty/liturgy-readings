@props([
    'entity' => 'Person',
    'question' => 'Are you want to delete this person?'
])

<x-jet-dialog-modal wire:model="confirming{{$entity}}Deletion">
    <x-slot name="title">
        Delete {{$entity}}
    </x-slot>

    <x-slot name="content">

        {{$question}}

    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$toggle('confirming{{$entity}}Deletion')" wire:loading.attr="disabled">
            Cancel
        </x-jet-secondary-button>

        <x-jet-danger-button class="ml-3" wire:click="delete{{$entity}}" wire:loading.attr="disabled">
            Delete {{$entity}}
        </x-jet-danger-button>
    </x-slot>
</x-jet-dialog-modal>
