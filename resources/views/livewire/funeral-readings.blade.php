<x-layout.page>

    <div class="block md:flex md:justify-between mb-6">
        <x-index.heading>
            Funeral Readings
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
            @if(empty($liturgy['1ReadingNoPrint']))
            <div class="col-span-6 sm:col-span-4">
                <x-label>First Reading</x-label>
                <x-input.select class="mt-1" wire:model.lazy="liturgy.1ReadingId">
                    <option value="">Select a Reading</option>
                    @foreach($readings->where('category', 'funeral-1')->where('translation_id', '1') as $reading)
                        <option value="{{$reading['id']}}">{{$reading['pericope']}}</option>
                    @endforeach
                </x-input.select>
                @error('liturgy.1ReadingId')
                <x-input.error>{{ $message }}</x-input.error>
                @enderror
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-label>Lector's Name</x-label>
                <x-input wire:model.lazy="liturgy.1ReadingLector" type="text" class="mt-1 block w-full" />
            </div>
            @endif

            <div class="col-span-6 sm:col-span-4">
                <div class="flex space-x-2 items-center">
                    <x-label>Do not Print</x-label>
                    <x-input.checkbox wire:model="liturgy.1ReadingNoPrint"></x-input.checkbox>
                </div>
            </div>
        </x-slot>
    </x-form-section>

    <x-section-border/>

    <x-form-section submit="save">
        <x-slot name="title">
            Psalm
        </x-slot>

        <x-slot name="form">
            @if(empty($liturgy['PsalmReadingNoPrint']))
            <div class="col-span-6 sm:col-span-4">
                <x-label>Psalm</x-label>
                <x-input.select class="mt-1" wire:model.lazy="liturgy.PsalmReadingId">
                    <option value="">Select a Reading</option>
                    @foreach($readings->where('category', 'funeral-psalm')->where('translation_id', '1') as $reading)
                        <option value="{{$reading['id']}}">{{$reading['pericope']}}</option>
                    @endforeach
                </x-input.select>
                @error('liturgy.PsalmReadingId')
                <x-input.error>{{ $message }}</x-input.error>
                @enderror
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-label>Lector's Name</x-label>
                <x-input wire:model.lazy="liturgy.PsalmReadingLector" type="text" class="mt-1 block w-full" />
            </div>
            @endif

            <div class="col-span-6 sm:col-span-4">
                <div class="flex space-x-2 items-center">
                    <x-label>Do not Print</x-label>
                    <x-input.checkbox wire:model="liturgy.PsalmReadingNoPrint"></x-input.checkbox>
                </div>
            </div>
        </x-slot>
    </x-form-section>

    <x-section-border/>

    <x-form-section submit="save">
        <x-slot name="title">
            Second Reading
        </x-slot>

        <x-slot name="form">
            @if(empty($liturgy['2ReadingNoPrint']))
            <div class="col-span-6 sm:col-span-4">
                <x-label>Second Reading</x-label>
                <x-input.select class="mt-1" wire:model.lazy="liturgy.2ReadingId">
                    <option value="">Select a Reading</option>
                    @foreach($readings->where('category', 'funeral-2')->where('translation_id', '1') as $reading)
                        <option value="{{$reading['id']}}">{{$reading['pericope']}}</option>
                    @endforeach
                </x-input.select>
                @error('liturgy.2ReadingId')
                <x-input.error>{{ $message }}</x-input.error>
                @enderror
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-label>Lector's Name</x-label>
                <x-input wire:model.lazy="liturgy.2ReadingLector" type="text" class="mt-1 block w-full" />
            </div>
            @endif

            <div class="col-span-6 sm:col-span-4">
                <div class="flex space-x-2 items-center">
                    <x-label>Do not Print</x-label>
                    <x-input.checkbox wire:model="liturgy.2ReadingNoPrint"></x-input.checkbox>
                </div>
            </div>
        </x-slot>
    </x-form-section>

    <x-section-border/>

    <x-form-section submit="save">
        <x-slot name="title">
            Gospel
        </x-slot>

        <x-slot name="form">
            @if(empty($liturgy['GospelReadingNoPrint']))
            <div class="col-span-6 sm:col-span-4">
                <x-label>Gospel Reading</x-label>
                <x-input.select class="mt-1" wire:model.lazy="liturgy.GospelReadingId">
                    <option value="">Select a Reading</option>
                    @foreach($readings->where('category', 'funeral-gospel')->where('translation_id', '1') as $reading)
                        <option value="{{$reading['id']}}">{{$reading['pericope']}}</option>
                    @endforeach
                </x-input.select>
                @error('liturgy.GospelReadingId')
                <x-input.error>{{ $message }}</x-input.error>
                @enderror
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-label>Lector's Name</x-label>
                <x-input wire:model.lazy="liturgy.GospelReadingLector" type="text" class="mt-1 block w-full" />
            </div>
            @endif

            <div class="col-span-6 sm:col-span-4">
                <div class="flex space-x-2 items-center">
                    <x-label>Do not Print</x-label>
                    <x-input.checkbox wire:model="liturgy.GospelReadingNoPrint"></x-input.checkbox>
                </div>
            </div>
        </x-slot>
    </x-form-section>

    <x-section-border />

    <x-form-section submit="save">
        <x-slot name="title">
            Petitions
        </x-slot>

        <x-slot name="form">
            @if(empty($liturgy['PetitionsNoPrint']))
                <div class="col-span-6 sm:col-span-4">
                    <x-label>Name of Deceased</x-label>
                    <x-input wire:model.lazy="liturgy.nameOfDeceased" type="text" class="mt-1 block w-full" />
                    @error('liturgy.nameOfDeceased')
                    <x-input.error>{{ $message }}</x-input.error>
                    @enderror
                </div>

                <div class="col-span-6 sm:col-span-4">
                    <x-label>Sex of Deceased</x-label>
                    <x-input.select class="mt-1" wire:model.lazy="liturgy.sexOfDeceased">
                        <option value="">Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </x-input.select>
                    @error('liturgy.sexOfDeceased')
                    <x-input.error>{{ $message }}</x-input.error>
                    @enderror
                </div>

                <div class="col-span-6 sm:col-span-4">
                    <x-label>Lector's Name</x-label>
                    <x-input wire:model.lazy="liturgy.PetitionsLector" type="text" class="mt-1 block w-full" />
                </div>
            @endif

            <div class="col-span-6 sm:col-span-4">
                <div class="flex space-x-2 items-center">
                    <x-label>Do not Print</x-label>
                    <x-input.checkbox wire:model="liturgy.PetitionsNoPrint"></x-input.checkbox>
                </div>
            </div>
        </x-slot>
    </x-form-section>

</x-layout.page>
