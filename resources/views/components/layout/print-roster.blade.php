<x-layout.print>
    <x-slot name="style">
        @media print{@page {size: landscape}}
    </x-slot>
    <x-slot name="title">{{$title}}</x-slot>

    {{$slot}}

</x-layout.print>
