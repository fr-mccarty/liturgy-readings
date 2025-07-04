@props([
    'id' => null,
    'maxWidth' => null,
    'formAction' => null,
    ])

<x-jet-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    @if(!empty($formAction))
    <form wire:submit.prevent="{{$formAction}}">
    @endif
        <div class="px-6 py-4">
            <div class="text-lg font-semibold">
                {{ $title }}
            </div>

            <div class="mt-4">
                {{ $content }}
            </div>
        </div>

        <div class="px-6 py-4 bg-gray-100 text-right">
            {{ $footer }}
        </div>
    @if(!empty($formAction))
    </form>
    @endif
</x-jet-modal>
