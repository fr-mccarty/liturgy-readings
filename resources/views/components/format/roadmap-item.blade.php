@props([
    'isComplete' => false
])

@if($isComplete)
<div class="mt-1 flex">
    <div class="flex-none">
        <x-icon.circle-check text-color="text-green-500 mr-1"/>
    </div>
    <span>{{$slot}}</span>
</div>
@else
<div class="mt-1 flex">
    <div class="flex-none">
        <x-icon.circle-x text-color="text-gray-700 mr-1"/>
    </div>
    <span>{{$slot}}</span>
</div>
@endif
