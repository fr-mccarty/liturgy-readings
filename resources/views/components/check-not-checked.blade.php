@props([
    'completed' => false
])

<div class="flex justify-center">

    @if($completed)
    <x-icon.circle-check text-color="text-green-500 mr-1"/>
    @else
    <x-icon.circle-x text-color="text-gray-700 mr-1"/>
    @endif

</div>
