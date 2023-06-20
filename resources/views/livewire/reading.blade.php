<x-layout.page>

    <div class="block md:flex md:justify-between mb-6">
        <x-index.heading>
            Wedding Readings
        </x-index.heading>

        <div class="space-x-2 flex items-center">
            <x-button.white wire:click="print">Print</x-button.white>
        </div>
    </div>


    <x-form-section submit="save">
        <x-slot name="title">
            First Reading
        </x-slot>

        <x-slot name="form">
            <div class="col-span-6 sm:col-span-4">
                <x-label>First Reading</x-label>
                <x-input.select class="mt-1" wire:model.lazy="liturgy.1ReadingId">
                    <option value="">Select a Value</option>
                    @foreach($readings->where('category', 'marriage-1')->where('translation_id', '1') as $reading)
                    <option value="{{$reading['id']}}">{{$reading['pericope']}}</option>
                    @endforeach
                </x-input.select>
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-label>Lector's Name</x-label>
                <x-input wire:model.lazy="liturgy.1ReadingLector" type="text" class="mt-1 block w-full" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-label>Do not Print</x-label>
                <x-input.checkbox wire:model="liturgy.1ReadingNoPrint" class="mt-1"></x-input.checkbox>
            </div>
        </x-slot>

    </x-form-section>

    <x-section-border/>



</x-layout.page>
