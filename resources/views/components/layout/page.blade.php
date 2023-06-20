@if(isset($styles))
    @push('styles')
        {{$styles}}
    @endpush
@endif

@if (isset($header))
    <x-slot name="header">
        {{ $header }}
    </x-slot>
@endif

<div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
    {{$slot}}
</div>


@if(isset($scripts))
    @push('scripts')
        {{$scripts}}
    @endpush
@endif
